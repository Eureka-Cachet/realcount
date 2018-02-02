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

            $data = array_merge($data, ['uuid' =>
                Uuid::uuid4()->toString()]);

            $data = array_merge($data, ['bid_id' =>
                $this->bid->where('code', $inputs['bid'])->first()->id]);

            $beneficiary = $this->beneficiary->create($data);

            $bio = collect($inputs)->get('bio');
            if($bio) $this->addBio($beneficiary, $bio);

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
        if($column == 'bid')
            return $this->beneficiary
                ->whereHas($column, function($q) use($beneficiaryId){
                    $q->where('code', $beneficiaryId);
                })->first();
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
        if(is_null($beneficiary)) return false;

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
        $data = $inputs->all();

        $gender = $inputs->get('gender');
        if(!is_null($gender)){
            $data = array_add($data, 'gender', $gender);
        }

        $surname = $inputs->get('surname');
        $forenames = $inputs->get('forenames');
        if(!is_null($surname) && !is_null($forenames)){
            $data = array_add($data, 'full_name',
                $this->getFullName($surname, $forenames));
        }

        $dateOfBirth = $inputs->get('date_of_birth');
        if(!is_null($dateOfBirth)){
            $data = array_add($data, 'date_of_birth',
                $this->getDateOfBirth($dateOfBirth));
        }

        return $data;
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
        if($key == 'c') return 'branch.location.district.region.country';
        if($key == 'r') return 'branch.location.district.region';
        if($key == 'd') return 'branch.location.district';
        if($key == 'b') return 'branch';
        if($key == 'm') return 'module';
        if($key == 'r') return 'rank';

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
        $bioInputs = collect($bioInputs);
        $updated = false;

        $fingers = $bioInputs->get('fingers');
        if(!is_null($fingers))
            $updated = $this->updateBeneficiaryFingerPrints($beneficiary, $fingers);

        $picture = $bioInputs->get('picture');
        if(!is_null($picture))
            $updated = $this->updateBeneficiaryPicture($beneficiary, $picture);

        return $updated;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $fingerprintInputs
     * @return bool
     */
    private function updateBeneficiaryFingerPrints(Beneficiary $beneficiary, array $fingerprintInputs)
    {
        $data = $this->prepareFingerPrintsData($fingerprintInputs);
        $updated = $this->fingerprintRepo->updateFor($beneficiary, $data);
        return $updated;
    }

    /**
     * @param $beneficiary
     * @param $picture
     * @return bool
     */
    private function updateBeneficiaryPicture($beneficiary, $picture)
    {
        $data = $this->preparePictureData($picture);
        return $this->pictureRepo->updateFor($beneficiary, $data);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $fingerprintInputs
     */
    private function addFingerPrints(Beneficiary $beneficiary, array $fingerprintInputs)
    {
        $fingerPrints = $this->prepareFingerPrintsData($fingerprintInputs);
        $this->fingerprintRepo->addFor($beneficiary, $fingerPrints);
    }

    /**
     * @param array $fingerprintInputs
     * @return array
     */
    private function prepareFingerPrintsData(array $fingerprintInputs)
    {
        $data = [];
        array_push($data, [
            "finger" => Constants::THUMB_RIGHT,
            "encoded" => $fingerprintInputs["thumb_right_image"],
            "fmd" => $fingerprintInputs["thumb_right_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::THUMB_LEFT,
            "encoded" => $fingerprintInputs["thumb_left_image"],
            "fmd" => $fingerprintInputs["thumb_left_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::INDEX_RIGHT,
            "encoded" => $fingerprintInputs["index_right_image"],
            "fmd" => $fingerprintInputs["index_right_fmd"]
        ]);
        array_push($data, [
            "finger" => Constants::INDEX_LEFT,
            "encoded" => $fingerprintInputs["index_left_image"],
            "fmd" => $fingerprintInputs["index_left_fmd"]
        ]);
        return $data;
    }

    /**
     * @param Beneficiary $beneficiary
     * @param $picture
     */
    private function addPicture(Beneficiary $beneficiary, $picture)
    {
        $pictureData = $this->preparePictureData($picture);
        $this->pictureRepo->addFor($beneficiary, $pictureData);
    }

    /**
     * @param $picture
     * @return array
     */
    private function preparePictureData($picture)
    {
        return [
            "encoded" => $picture
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
        $sortCol = $this->getSortKeyColumn($sortCol);
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
        //r|id -> rank
        //m|id -> module
        //a|b:id -> branch
        //a|r:id -> region
        //a|d:id -> district
        //a|l:id -> location
//        list($filterKey, $filterValue) = explode('|', $filter);
        $filters = collect(explode(",", $filter))
            ->map(function($el){
                list($column, $value) = explode("|", $el);
                return [
                    'column' => $column,
                    'value' => $value
                ];
            })->flatMap(function($el){
                $column = $this->getFilterKeyColumn($el['column']);
                if($column == 'a') return [ $column => explode(":", $el['value'])];
                return [$column => $el['value']];
            });

        $area = $filters->get('a');
        $query = $area
            ? $this->performAreaFilter($query, $area)
            : $query;

        $rank = $filters->get('rank');
        $query = $rank
            ? $this->performRankFilter($query, $rank)
            : $query;

        $module = $filters->get('module');
        $query = $module
            ? $this->performModuleFilter($query, $module)
            : $query;

        return $query;
    }

    /**
     * @param Builder $query
     * @param $area
     * @return Builder
     */
    private function performAreaFilter($query, $area): Builder
    {
        list($areaColumn, $areaId) = $area;
        $areaColumn = $this->getFilterKeyColumn($areaColumn);
        return $query->whereHas($areaColumn, function(Builder $q) use($areaId){
            $q->where('id', $areaId);
        });
    }

    /**
     * @param Builder $query
     * @param $rankId
     * @return Builder
     */
    private function performRankFilter($query, $rankId): Builder
    {
        return $query->where('rank_id', $rankId);
    }

    /**
     * @param Builder $query
     * @param $moduleId
     * @return Builder
     */
    private function performModuleFilter($query, $moduleId): Builder
    {
        return $query->where('module_id', $moduleId);
    }

    /**
     * @param Beneficiary $beneficiary
     * @param array $bioInputs
     */
    private function addBio(Beneficiary $beneficiary, array $bioInputs)
    {
        $bioInputs = collect($bioInputs);

        $fingers = $bioInputs->get('fingers');
        if(!is_null($fingers))
            $this->addFingerPrints($beneficiary, $fingers);

        $picture = $bioInputs->get('picture');
        if(!is_null($picture))
            $this->addPicture($beneficiary, $picture);
    }
}