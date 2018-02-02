<?php

namespace Clocking\Repositories;

use App\User;
use Clocking\Repositories\Interfaces\IUserRepo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class UserRepo implements IUserRepo
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserRepo constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->user->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator
    {
        $opts = collect($queryParams);
        $query = $this->user;

        // sort -> name, date, role
        $sort = $opts->get('s');
        $query = $sort
            ? $this->performSort($query, $sort)
            : $query;

        // filter -> area (region|district|location|branch), role, status
        $filter = $opts->get('f');
        $query = $filter
            ? $this->performFilter($query, $filter)
            : $query;

        // search query
        $search = $opts->get('q');
        $query = $search
            ? $this->performSearch($query, $search)
            : $query;

        // per page
        $perPage = $opts->get('pp') ?: 10;

        //current page
        $currentPage = $opts->get('p') ?: 1;

        return $query->paginate($perPage, ['*'], 'page', $currentPage);
    }

    /**
     * @param array $inputs
     * @return User
     */
    public function create(array $inputs): User
    {
        return $this->user->create($inputs);
    }

    /**
     * @param string $uuid
     * @return User | null
     */
    public function single(string $uuid)
    {
        return $this->user->where('uuid', $uuid)->first();
    }

    /**
     * @param string $uuid
     * @param array $inputs
     * @return bool
     */
    public function update(string $uuid, array $inputs): bool
    {
        $user = $this->single($uuid);
        if(is_null($user)) return false;

        return $user->update($inputs);
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function delete(string $uuid): bool
    {
        $user = $this->single($uuid);
        if(is_null($user)) return false;

        return $user->delete();
    }

    /**
     * @param Builder | User $query
     * @param $sort
     * @return Builder
     */
    private function performSort($query, $sort)
    {
        // n|[asc|desc] -> full_name
        // d|[asc|desc] -> created_at
        // r|[asc|desc] -> role.name
        list($column, $direction) = explode('|', $sort);

        if($column == 'n') return $query->orderBy('full_name', $direction);

        if($column == 'd') return $query->orderBy('created_at', $direction);

        if($column == 'r') return $query->whereHas('role', function(Builder $query){
            $query->orderBy('name');
        });

        return $query;
    }

    /**
     * @param Builder | User $query
     * @param $filter
     * @return Builder
     */
    private function performFilter($query, $filter)
    {
        // a|r:id -> region
        // a|d:id -> district
        // a|l:id -> location
        // a|b:id -> branch
        // ro|id -> role
        // s|[0,1] -> status

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

        $role = $filters->get('role');
        $query = $role
            ? $query->whereHas('role', function(Builder $query) use ($role) {
                $query->where('uuid', $role);
            })
            : $query;

        $status = $filters->get('status');
        $query = !is_null($status)
            ? $this->performStatusFilter($query, $status)
            : $query;

        return $query;
    }

    /**
     * @param $column
     * @return string
     */
    private function formatColumn($column)
    {
        if($column == 'ro') return 'role';
        if($column == 's') return 'status';
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
    private function performAreaFilter(Builder $query, $area): Builder
    {
        list($areaColumn, $areaId) = $area;
        $areaColumn = $this->formatColumn($areaColumn);
        return $query->whereHas($areaColumn, function(Builder $q) use($areaId){
            $q->where('id', $areaId);
        });
    }

    /**
     * @param Builder | User $query
     * @param $search
     * @return Builder
     */
    private function performSearch($query, $search)
    {
        return $query->where(function (Builder $query) use ($search) {
            $value = "%{$search}%";
            $query->where('full_name', 'like', $value)
                ->orWhere('username', 'like', $value);
        });
    }

    /**
     * @param $query
     * @param $status
     * @return mixed
     */
    private function performStatusFilter($query, $status)
    {
        return $query->where(function (Builder $query) use ($status) {
            $query->where('status', $status);
        });
    }
}