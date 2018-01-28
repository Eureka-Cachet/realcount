<?php

namespace Clocking\Repositories\Interfaces;

use App\Attendance;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IAttendanceRepo
{
    /**
     * @return array
     */
    public function all(): array ;

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator;

    /**
     * @param array $inputs
     * @return Attendance | null
     */
    public function add(array $inputs);

    /**
     * @param string $id
     * @param array $inputs
     * @return bool
     */
    public function update(string $id, array $inputs): bool;

    /**
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool;

    /**
     * @param string $beneficiaryId
     * @param array $queryParams | null
     * @return array
     */
    public function for(string $beneficiaryId, array $queryParams = null): array;
}