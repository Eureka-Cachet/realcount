<?php

namespace Clocking\Repositories\Interfaces;


use App\BidSet;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IBidSetRepo
{
    /**
     * @param array $inputs
     * @return array
     */
    public function create(array $inputs);

    /**
     * @param string $setId
     * @return BidSet | null
     */
    public function single(string $setId);

    /**
     * @param string $setId
     * @return array | null
     */
    public function recreate(string $setId);

    /**
     * @param string $setId
     * @return bool | array
     */
    public function remove(string $setId);

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator;
}