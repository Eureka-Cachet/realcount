<?php

namespace Clocking\Repositories;

use App\Role;
use Clocking\Repositories\Interfaces\IRoleRepo;
use Illuminate\Database\Eloquent\Builder;
use Ramsey\Uuid\Uuid;

class RoleRepo implements IRoleRepo {
    /**
     * @var Role
     */
    private $role;

    /**
     * RoleRepo constructor.
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->role->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return array
     */
    public function list(array $queryParams): array
    {
        // a|r:id -> region
        // a|d:id -> district
        // a|r:id -> location
        $q = $this->role;
        $filter = collect($queryParams)->get('f');

        $q = $filter
            ? $this->performFilter($q, $filter)
            : $q;

        return $q->get()->toArray();
    }

    /**
     * @param array $inputs
     * @return Role
     */
    public function create(array $inputs): Role
    {
        $inputs = array_add($inputs, 'uuid', Uuid::uuid4()->toString());
        $role = $this->role->create($inputs);

        $policies = collect($inputs)->get('policies');
        $gates = collect($inputs)->get('gates');
        if($policies) $role->policies()->attach($policies);
        if($gates) $role->gates()->attach($gates);

        return $role;
    }

    /**
     * @param string $uuid
     * @return Role | null
     */
    public function single(string $uuid)
    {
        return $this->role->where('uuid', $uuid)->first();
    }

    /**
     * @param string $uuid
     * @param array $inputs
     * @return bool
     */
    public function update(string $uuid, array $inputs): bool
    {
        $role = $this->single($uuid);
        if(is_null($role)) return false;

        $policies = collect($inputs)->get('policies');
        $gates = collect($inputs)->get('gates');
        if($policies) $role->policies()->sync($policies);
        if($gates) $role->gates()->sync($gates);

        return $role->update($inputs);
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function delete(string $uuid): bool
    {
        $role = $this->single($uuid);
        if(is_null($role)) return false;

        return $role->delete();
    }

    /**
     * @param Builder $q
     * @param string $v
     * @return Builder
     */
    private function performAreaFilter(Builder $q, string $v): Builder
    {
        list($column, $value) = explode(':', $v);
        $column = $this->formatColumn($column);
        return $q->where(['level_type' => $column, 'level_id' => $value]);
    }

    /**
     * @param $v
     * @return string
     */
    private function formatColumn(string $v)
    {
        if($v = 'r') return 'region';
        if($v = 'd') return 'district';
        if($v = 'l') return 'location';
        return 'location';
    }

    /**
     * @param Builder $q
     * @param string $filter
     * @return Builder
     */
    private function performFilter(Builder $q, string $filter): Builder
    {
        list($c, $v) = explode("|", $filter);
        return $c == 'a'
            ? $this->performAreaFilter($q, $v) :
            $q;
    }
}