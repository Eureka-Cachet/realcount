<?php

namespace Clocking\Repositories;

use App\Branch;
use Clocking\Repositories\Interfaces\IBranchRepo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class BranchRepo implements IBranchRepo
{
    /**
     * @var Branch
     */
    private $branch;

    /**
     * BranchRepo constructor.
     * @param Branch $branch
     */
    public function __construct(Branch $branch)
    {
        $this->branch = $branch;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        $this->branch->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $opts = collect($queryParams);
        $query = $this->branch;

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
        $search = $opts->get('q');
        $query = $search
            ? $query->where(function(Builder $query) use($search){
                $value = "%{$search}%";
                $query->where('name', 'like', $value);
            })
            : $query;

        // per page
        $perPage = $opts->get('pp') ?: 10;

        //current page
        $currentPage = $opts->get('p') ?: 1;

        return $query->paginate($perPage, ['*'], 'page', $currentPage);
    }

    /**
     * @param array $inputs
     * @return Branch
     */
    public function add(array $inputs): Branch
    {
        return $this->branch->create($inputs);
    }

    /**
     * @param string $uuid
     * @param array $inputs
     * @return bool
     */
    public function update(string $uuid, array $inputs): bool
    {
        $branch = $this->single($uuid);
        if(is_null($branch)) return false;

        return $branch->update($inputs);
    }

    /**
     * @param string $uuid
     * @return Branch | null
     */
    public function single(string $uuid)
    {
        return $this->branch->where('uuid', $uuid)->first();
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function remove(string $uuid): bool
    {
        $branch = $this->single($uuid);
        if(is_null($branch)) return false;

        return $branch->delete();
    }

    /**
     * @param Builder | Branch $query
     * @param $sort
     * @return Builder
     */
    private function performSort($query, $sort)
    {
        // n|[asc|desc] -> name
        // d|[asc|desc] -> created_at
        // b|[asc|desc] -> beneficiaries count
        list($column, $direction) = explode('|', $sort);

        if($column == 'n') return $query->orderBy('name', $direction);

        if($column == 'd') return $query->orderBy('created_at', $direction);

        if($column == 'b') return $query->withCount('beneficiaries as workers')
            ->orderBy('workers', $direction);

        return $query;
    }

    /**
     * @param Builder | Branch $query
     * @param $filter
     * @return Builder
     */
    private function performFilter($query, $filter)
    {
        // a|r:id -> region
        // a|d:id -> district
        // a|l:id -> location

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

        return $query;
    }

    /**
     * @param $column
     * @return string
     */
    private function formatColumn($column)
    {
        if($column == 'l') return 'location';
        if($column == 'd') return 'location.district';
        if($column == 'r') return 'location.district.region';
        return $column;
    }

    /**
     * @param Builder | Branch $query
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
}