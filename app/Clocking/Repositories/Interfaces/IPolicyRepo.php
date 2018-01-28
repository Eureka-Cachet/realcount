<?php

namespace Clocking\Repositories\Interfaces;

use App\Policy;

interface IPolicyRepo
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
     * @return Policy
     */
    public function create(array $inputs): Policy;

    /**
     * @param string $uuid
     * @return Policy
     */
    public function single(string $uuid): Policy;

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