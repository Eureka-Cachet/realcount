<?php

namespace Clocking\Repositories\Interfaces;

use App\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IUserRepo
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator;

    /**
     * @param array $inputs
     * @return User
     */
    public function create(array $inputs): User;

    /**
     * @param string $uuid
     * @return User | null
     */
    public function single(string $uuid);

    /**
     * @param string $uuid
     * @param array $inputs
     * @return bool
     */
    public function update(string $uuid, array $inputs): bool;

    /**
     * @param string $uuid
     * @return bool
     */
    public function delete(string $uuid): bool;
}