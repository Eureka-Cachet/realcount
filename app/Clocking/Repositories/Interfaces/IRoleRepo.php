<?php

namespace Clocking\Repositories\Interfaces;

use App\Role;

interface IRoleRepo
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param array $queryParams
     * @return array
     */
    public function list(array $queryParams): array;

    /**
     * @param array $inputs
     * @return Role
     */
    public function create(array $inputs): Role;

    /**
     * @param string $uuid
     * @return Role | null
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