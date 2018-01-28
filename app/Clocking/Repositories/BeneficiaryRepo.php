<?php

namespace Clocking\Repositories;

use App\Beneficiary;
use App\Bid;
use Carbon\Carbon;
use Clocking\Helpers\Constants;
use Clocking\Repositories\Interfaces\IBeneficiaryRepo;
use Clocking\Repositories\Interfaces\IFingerprintRepo;
use Clocking\Repositories\Interfaces\IPictureRepo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class BeneficiaryRepo implements IBeneficiaryRepo
{
    /**
     * @var Beneficiary
     */
    private $beneficiary;
    /**
     * @var IPictureRepo
     */
    private $pictureRepo;
    /**
     * @var IFingerprintRepo
     */
    private $fingerprintRepo;
    /**
     * @var Bid
     */
    private $bid;

    /**
     * BeneficiaryRepo constructor.
     * @param Beneficiary $beneficiary
     * @param Bid $bid
     * @param IFingerprintRepo $fingerprintRepo
     * @param IPictureRepo $pictureRepo
     */
    public function __construct(Beneficiary $beneficiary,
                                Bid $bid,
                                IFingerprintRepo $fingerprintRepo,
                                IPictureRepo $pictureRepo)
    {
        $this->beneficiary = $beneficiary;
        $this->fingerprintRepo = $fingerprintRepo;
        $this->pictureRepo = $pictureRepo;
        $this->bid = $bid;
    }

    /**
     * @param array $inputs
     * @return Beneficiary | null
     */
    public function create(array $inputs)
    {
        $b = null;

        DB::transaction(function() use($inputs, &$b){
            $data = $this->prepareData($inputs);

            $data = array_merge($data, ['uuid' => Uuid::uuid4()->toString()]);

            $beneficiary = $this->beneficiary->create($data);

            $bio = collect($inputs)->get('bio');
            if($bio) $this->addBio($beneficiary, $bio);

            $this->updateBid($beneficiary, $inputs['bid']);

            $b = $beneficiary;
        });

        return $b;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->beneficiary
            ->all()
            ->toArray();
    }

    /**
     * @param string $beneficiaryId
     * @param string|null $column
     * @return Beneficiary | null
     */
    public function single(string $beneficiaryId, string $column = null)
    {
        $column = $column ? $column : 'uuid';
        return $this->beneficiary
            ->where($column, $beneficiaryId)
            ->first();
    }

    /**
     * @param string $beneficiaryId
     * @param array $inputs
     * @return bool
     */
    public function update(string $beneficiaryId, array $inputs = []): bool
    {
        $beneficiary = $this->single($beneficiaryId);
        $data = $this->prepareData($inputs);
        $bio = collect($inputs)->get('bio');
        if(!is_null($bio)) $this->updateBio($beneficiary, $bio);
        return $beneficiary->update($data);
    }

    /**
     * @param string $beneficiaryId
     * @return bool
     */
    public function delete(string $beneficiaryId): bool
    {
        $beneficiary = $this->single($beneficiaryId);
        if(!is_null($beneficiary)) return false;

        return $this->pictureRepo->deleteFor($beneficiary)
            && $this->fingerprintRepo->deleteFor($beneficiary)
            && $beneficiary->delete();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $query = $this->beneficiary->orderBy('full_name', 'asc');

        $opts = collect($queryParams);

        // sort
        $sort = $opts->get('s');
        $query = $sort
            ? $this->performSort($query, $sort)
            : $query;

        // filter
        $filter = $opts->get('f');
        $query = $filter
            ? $this->performFilter($query, $filter)
            : $query;

        // search query
        if ($opts->has('q')) {
            $searchQuery = $opts->get('q');
            $query->where(function($q) use($searchQuery) {
                $value = "%{$searchQuery}%";
                $q->where('full_name', 'like', $value)
                    ->orWhere('bid', 'like', $value);
            });
        }

        // per page
        $perPage = $opts->get('pp') ?: 10;

        //current page
        $currentPage = $opts->get('p') ?: 1;

        return $query->paginate($perPage, ['*'], 'page', $currentPage);
    }

    /**
     * @param array $inputs
     * @return array
     */
    private function prepareData(array $inputs)
    {
        $inputs = collect($inputs);
        $data = collect([]);

        $gender = $inputs->get('gender');
        if(!is_null($gender)){
            $data->put('gender',
                $this->getGender($gender));
        }

        $surname = $inputs->get('surname');
        $forenames = $inputs->get('forenames');
        if(!is_null($surname) && !!is_null($forenames)){
            $data->put('full_name',
                $this->getFullName($surname, $forenames));
        }

        $dateOfBirth = $inputs->get('date_of_birth');
        if(!is_null($dateOfBirth)){
            $data->put('date_of_birth',
                $this->getDateOfBirth($dateOfBirth));
        }

        return $data->all();
    }

    /**
     * @param $gender
     * @return int
     */
    private function getGender($gender)
    {
        return $gender == "male"
            ? 1
            : 0;
    }

    /**
     * @param $surname
     * @param $forenames
     * @return string
     */
    private function getFullName($surname, $forenames)
    {
        return $surname . " " . $forenames;
    }

    /**
     * @param $dateOfBirth
     * @return Carbon
     */
    private function getDateOfBirth($dateOfBirth)
    {
        return Carbon::createFromTimestamp($dateOfBirth);
    }


    /**
     * @param $key
     * @return bool
     */
    private function filterKeyIsValid($key)
    {
        $keys = ['country', 'region', 'district', 'branch'];
        return collect($keys)->has($key);
    }

    /**
     * @param $key
     * @return string
     */
    private function getFilterKeyColumn($key)
    {
        if($key == 'c') return 'branch.district.region.country';
        if($key == 'r') return 'branch.district.region';
        if($key == 'd') return 'branch.district';
        if($key == 'b') return 'branch_id';

        return $key;
    }

    private function getSortKeyColumn($key)
    {
        if($key == 'b') return 'branch';
        if($key == 'c') return 'branch.district.region.country';
        if($key == 'r') return 'branch.district.region';
        if($key == 'd') return 'branch.district';
        if($key == 'fn') return 'full_name';

        return $key;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     * @return bool
     */
    private function updateBio(Beneficiary $beneficiary, array $bioInputs)
    {
        return $this->updateBeneficiaryFingerPrints($beneficiary, $bioInputs)
            && $this->updateBeneficiaryPicture($beneficiary, $bioInputs);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     * @return bool
     */
    private function updateBeneficiaryFingerPrints(Beneficiary $beneficiary, array $bioInputs)
    {
        $data = $this->prepareFingerPrintsData($bioInputs);
        $updated = $this->fingerprintRepo->updateFor($beneficiary, $data);
        return $updated;
    }

    /**
     * @param $beneficiary
     * @param array $bioInputs
     * @return bool
     */
    private function updateBeneficiaryPicture($beneficiary, array $bioInputs)
    {
        $data = $this->preparePictureData($bioInputs);
        return $this->pictureRepo->updateFor($beneficiary, $data);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     */
    private function addFingerPrints(Beneficiary $beneficiary, array $bioInputs)
    {
        $fingerPrints = $this->prepareFingerPrintsData($bioInputs);
        $this->fingerprintRepo->addFor($beneficiary, $fingerPrints);
    }

    /**
     * @param array $bioInputs
     * @return array
     */
    private function prepareFingerPrintsData(array $bioInputs)
    {
        $data = [];
        array_push($data, [
            "finger" => Constants::THUMB_RIGHT,
            "encoded" => $bioInputs["thumb_right_image"],
            "fmd" => $bioInputs["thumb_right_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::THUMB_LEFT,
            "encoded" => $bioInputs["thumb_left_image"],
            "fmd" => $bioInputs["thumb_left_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::INDEX_RIGHT,
            "encoded" => $bioInputs["index_right_image"],
            "fmd" => $bioInputs["index_right_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::INDEX_LEFT,
            "encoded" => $bioInputs["index_left_image"],
            "fmd" => $bioInputs["index_left_fmd"]
        ]);
        return $data;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     */
    private function addPicture(Beneficiary $beneficiary, array $bioInputs)
    {
        $pictureData = $this->preparePictureData($bioInputs);
        $this->pictureRepo->addFor($beneficiary, $pictureData);
    }

    /**
     * @param array $bioInputs
     * @return array
     */
    private function preparePictureData(array $bioInputs)
    {
        return [
            "encoded" => $bioInputs["picture"]
        ];
    }

    /**
     * @param Builder $query
     * @param string $sort
     * @return Builder
     */
    private function performSort(Builder $query, string $sort): Builder
    {
        // fn|order
        // bid|order
        list($sortCol, $sortDir) = explode('|', $sort);
        $sortCol = $this->getFilterKeyColumn($sortCol);
        return starts_with($sortCol, 'branch.')
            ? $query->whereHas($sortCol, function(Builder $query) use ($sortDir, $sortCol) {
                $query->orderBy($sortCol, $sortDir);
            })
            : $query->orderBy($sortCol, $sortDir);
    }

    /**
     * @param Builder $query
     * @param string $filter
     * @return Builder
     */
    private function performFilter(Builder $query, string $filter)
    {
        list($filterKey, $filterValue) = explode('|', $filter);
        $column = $this->getFilterKeyColumn($filterKey);
        $query = $query->where($column, $filterValue);
        return starts_with($column, 'branch.')
            ? $query->whereHas($column, function(Builder $query) use ($filterValue, $column) {
                $query->where($column, $filterValue);
            })
            : $query->where($column, $filterValue);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     */
    private function addBio(Beneficiary $beneficiary, array $bioInputs)
    {
        if(array_has($bioInputs, 'thumb_right_fmd'))
            $this->addFingerPrints($beneficiary, $bioInputs);

        if(array_has($bioInputs, 'picture'))
            $this->addPicture($beneficiary, $bioInputs);
    }

    /**
     * @param string $bid
     * @param Beneficiary $beneficiary
     */
    private function updateBid(Beneficiary $beneficiary, string $bid)
    {
        $this->bid->where('code', $bid)
            ->whereNull('beneficiary_id')
            ->first()->update(['beneficiary_id' => $beneficiary->id]);
    }
}