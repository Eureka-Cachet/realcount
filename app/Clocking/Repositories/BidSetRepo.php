<?php

namespace Clocking\Repositories;


use App\Bid;
use App\BidSet;
use Clocking\Helpers\Interfaces\IBidCode;
use Clocking\Repositories\Interfaces\IBidSetRepo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Ramsey\Uuid\Uuid;

class BidSetRepo implements IBidSetRepo
{
    /**
     * @var BidSet
     */
    private $bidSet;
    /**
     * @var Bid
     */
    private $bid;
    /**
     * @var IBidCode
     */
    private $bidCode;

    /**
     * BidSetRepo constructor.
     * @param BidSet $bidSet
     * @param Bid $bid
     * @param IBidCode $bidCode
     */
    public function __construct(BidSet $bidSet, Bid $bid, IBidCode $bidCode)
    {
        $this->bidSet = $bidSet;
        $this->bid = $bid;
        $this->bidCode = $bidCode;
    }

    /**
     * @param array $inputs
     * @return BidSet
     */
    public function create(array $inputs)
    {
        $inputs = array_merge($inputs, [
            'uuid' => Uuid::uuid4()->toString()
        ]);
        $set = $this->bidSet->create($inputs);

        for($i = 0; $i < $inputs['amount']; $i++){
            $this->bid->create([
                'code' => $this->bidCode->generate(),
                'set_id' => $set->id
            ]);
        }

        return $set;
    }

    /**
     * @param string $setId
     * @return BidSet | null
     */
    public function single(string $setId)
    {
        return $this->bidSet->where('uuid', $setId)->first();
    }

    /**
     * @param string $setId
     * @return array | null
     */
    public function recreate(string $setId)
    {
        $set = $this->single($setId);
        if(is_null($set)) return null;

        $codes = $set->codes()->whereDoesntHave('beneficiary')->get();
        return $codes->toArray();
    }

    /**
     * @param string $setId
     * @return bool | array
     */
    public function remove(string $setId)
    {
        $set = $this->single($setId);
        if(is_null($set)) return false;

        if($set->codes()->exists()) return [false, 'not empty'];

        return $set->delete();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $opts = collect($queryParams);
        $query = $this->bidSet;

        //q
        $search = $opts->get('q');
        $query = $search
            ? $this->performSearch($query, $search)
            : $query;

        //s
        $sort = $opts->get('s');
        $query = $sort
            ? $this->performSort($query, $sort)
            : $query;

        // f
        $filter = $opts->get('f');
        $query = $filter
            ? $this->performFilter($query, $filter)
            : $query;

        // per page
        $perPage = $opts->get('pp') ?: 10;

        //current page
        $currentPage = $opts->get('p') ?: 1;

        return $query->paginate($perPage, ['*'], 'page', $currentPage);
    }

    /**
     * @param Builder | BidSet $query
     * @param $sort
     * @return Builder
     */
    private function performSort($query, $sort)
    {
        // c|[asc|desc] -> codes count
        // uc|[asc|desc] -> used codes count
        // pc|[asc|desc] -> pending codes count
        // d|[asc|desc] -> created date
        list($column, $direction) = explode('|', $sort);
        $column = $this->formatColumn($column);

        return $column == 'date'
            ? $query->orderBy('created_at', $direction)
            : $this->performCodesCountSort($query, $sort);
    }

    /**
     * @param Builder | BidSet $query
     * @param $filter
     * @return Builder
     */
    private function performFilter($query, $filter)
    {
        // a|r:id -> region
        // a|d:id -> district
        // a|l:id -> location
        // a|b:id -> branch
        // m|id -> module
        // ra|id -> rank
        // g|id -> generator

        $filters = collect(explode(",", $filter))
            ->map(function($el){
                list($column, $value) = explode("|", $el);
                return [
                    'column' => $column,
                    'value' => $value
                ];
            })->flatMap(function($el){
                $column = $this->formatColumn($el['column']);
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

        $code = $filters->get('g');
        $query = $code
            ? $this->performGeneratorFilter($query, $code)
            : $query;

        return $query;
    }

    /**
     * @param $column
     * @return string
     */
    private function formatColumn($column)
    {
        if($column == 'd') return 'date';
        if($column == 'c') return 'codes';
        if($column == 'ra') return 'rank';
        if($column == 'm') return 'module';
        if($column == 'b') return 'branch';
        if($column == 'l') return 'branch.location';
        if($column == 'd') return 'branch.location.district';
        if($column == 'r') return 'branch.location.district.region';
        return $column;
    }

    /**
     * @param Builder $query
     * @param $area
     * @return Builder
     */
    private function performAreaFilter($query, $area): Builder
    {
        list($areaColumn, $areaId) = $area;
        $areaColumn = $this->formatColumn($areaColumn);
        return $query->whereHas($areaColumn, function(Builder $q) use($areaId){
            $q->where('id', $areaId);
        });
    }

    /**
     * @param Builder $query
     * @param $uuid
     * @return Builder
     */
    private function performGeneratorFilter($query, $uuid): Builder
    {
        return $query->whereHas('generator', function (Builder $q) use ($uuid) {
            $q->where('uuid', $uuid);
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
     * @param Builder $query
     * @param $sort
     * @return Builder
     */
    private function performCodesCountSort($query, $sort): Builder
    {
        $used = null;
        list($column, $direction) = $sort;
        $column = $this->formatColumn($column);
        if($column == 'uc') $used = true;
        if($column == 'pc') $used = false;

        if(is_null($used)) return $query->withCount('codes')
            ->orderBy('codes_count', $direction);

        return $query->withCount(['codes' => function(Builder $q) use ($used) {
            if($used){$q->whereNotNull('beneficiary_id');}
            else{$q->whereNull('beneficiary_id');}
        }])->orderBy('codes_count', $direction);
    }

    /**
     * @param Builder | BidSet $query
     * @param $search
     * @return Builder
     */
    private function performSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}