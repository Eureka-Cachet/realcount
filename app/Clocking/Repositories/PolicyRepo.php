<?php

namespace Clocking\Repositories;

use App\Policy;
use Clocking\Repositories\Interfaces\IPolicyRepo;
use Illuminate\Database\Eloquent\Builder;

class PolicyRepo implements IPolicyRepo
{
    /**
     * @var Policy
     */
    private $policy;

    /**
     * PolicyRepo constructor.
     * @param Policy $policy
     */
    public function __construct(Policy $policy)
    {
        $this->policy = $policy;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->policy->all()->toArray();
    }

    /**
     * @param array $queryParams
     * @return array
     */
    public function list(array $queryParams): array
    {
        //e|id -> entity
        //g|id -> gate
        $query = $this->policy;
        $filter = $queryParams["f"];
        list($column, $value) = explode("|", $filter);

        if($column == "e") $query = $query->where('entity_id', $value);
        if($column == "g") $query = $query->whereHas('entity.gate', function(Builder $q) use ($value) {
            $q->where('id', $value);
        });

        return $query->get()->toArray();
    }

    /**
     * @param array $inputs
     * @return Policy
     */
    public function create(array $inputs): Policy
    {
        return $this->policy->create($inputs);
    }

    /**
     * @param string $uuid
     * @return Policy
     */
    public function single(string $uuid): Policy
    {
        return $this->policy->where('uuid', $uuid)->first();
    }

    /**
     * @param string $uuid
     * @param array $inputs
     * @return bool
     */
    public function update(string $uuid, array $inputs): bool
    {
        $policy = $this->single($uuid);
        if(is_null($policy)) return false;

        return $policy->update($inputs);
    }

    /**
     * @param string $uuid
     * @return bool
     */
    public function delete(string $uuid): bool
    {
        $policy = $this->single($uuid);
        if(is_null($policy)) return false;

        return $policy->delete();
    }
}