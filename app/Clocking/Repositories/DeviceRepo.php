<?php

namespace Clocking\Repositories;

use App\Branch;
use App\Device;
use Clocking\Repositories\Interfaces\IDeviceRepo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class DeviceRepo implements IDeviceRepo
{
    /**
     * @var Device
     */
    private $device;

    /**
     * DeviceRepo constructor.
     * @param Device $device
     */
    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->device->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $opts = collect($queryParams);
        $query = $this->device;

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
     * @param string $Id
     * @param null $column
     * @return Device | null
     */
    public function single(string $Id, $column = null)
    {
        $column = $column ?: "uuid";
        return $this->device->where($column, $Id);
    }

    /**
     * @param array $inputs
     * @return Device
     */
    public function add(array $inputs): Device
    {
        return $this->device->create($inputs);
    }

    /**
     * @param Device $device
     * @param Branch $branch
     * @return bool
     */
    public function map(Device $device, Branch $branch): bool
    {
        if($this->sameBranch($device, $branch)){
            return true;
        }

        if($this->hasBranch($device)){
            $this->unMap($device, $device->branch()->first());
        }

        return $device->update(['status' => true, 'branch_id' => $branch->id]);
    }

    /**
     * @param Device $device
     * @param Branch $branch
     * @return bool
     */
    public function unMap(Device $device, Branch $branch): bool
    {
        return $device->update(['status' => false, 'branch_id' => null]);
    }

    /**
     * @param string $deviceId
     * @return bool
     */
    public function delete(string $deviceId): bool
    {
        $device = $this->single($deviceId);
        if(is_null($device)) return false;

        return $device->delete();
    }

    /**
     * @param string $deviceId
     * @param array $inputs
     * @return bool
     */
    public function update(string $deviceId, array $inputs): bool
    {
        $device = $this->single($deviceId);
        if(is_null($device)) return false;

        return $device->update($inputs);
    }

    /**
     * @param Device $device
     * @param Branch $branch
     * @return bool
     */
    private function sameBranch(Device $device, Branch $branch): bool
    {
        $deviceBranch = $device->branch()->exists();
        if(!$deviceBranch || !$branch->devices()->exists()) return false;
        return $branch->devices()->where('id', $device->id)->exists();
    }

    /**
     * @param Device $device
     * @return bool
     */
    private function hasBranch($device): bool
    {
        return $device->branch()->exists();
    }

    /**
     * @param Builder | Device $query
     * @param $sort
     * @return Builder
     */
    private function performSort($query, $sort)
    {
        // n|[asc|desc] -> name
        // d|[asc|desc] -> created_at
        list($column, $direction) = explode('|', $sort);

        if($column == 'n') return $query->orderBy('name', $direction);

        if($column == 'd') return $query->orderBy('created_at', $direction);

        return $query;
    }

    /**
     * @param Builder | Device $query
     * @param $filter
     * @return Builder
     */
    private function performFilter($query, $filter)
    {
        // a|r:id -> region
        // a|d:id -> district
        // a|l:id -> location
        // a|b:id -> branch
        // s|v -> status

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

        $status = $filters->get('status');
        $query = !is_null($status)
            ? $query->where('status', $status)
            : $query;

        return $query;
    }

    /**
     * @param $column
     * @return string
     */
    private function formatColumn($column)
    {
        if($column == 's') return 'status';
        if($column == 'b') return 'branch';
        if($column == 'l') return 'branch.location';
        if($column == 'd') return 'branch.location.district';
        if($column == 'r') return 'branch.location.district.region';
        return $column;
    }

    /**
     * @param Builder | Device $query
     * @param $area
     * @return Builder
     */
    private function performAreaFilter($query, $area): Builder
    {
        list($areaColumn, $areaId) = $area;
        $areaColumn = $this->formatColumn($areaColumn);
        return $query->whereHas($areaColumn, function(Builder $query) use($areaId){
            $query->where('id', $areaId);
        });
    }

    /**
     * @param Builder | Device $query
     * @param $search
     * @return Builder
     */
    private function performSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}