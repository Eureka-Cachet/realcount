<?php

namespace Clocking\Repositories\Interfaces;

use App\Beneficiary;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IBeneficiaryRepo
{
    /**
     * @param array $inputs
     * @return Beneficiary |null
     */
    public function create(array $inputs);

    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param string $beneficiaryId
     * @param string|null $column
     * @return Beneficiary | null
     */
    public function single(string $beneficiaryId, string $column = null);

    /**
     * @param string $beneficiaryId
     * @param array $inputs
     * @return bool
     */
    public function update(string $beneficiaryId, array $inputs = []): bool;

    /**
     * @param string $beneficiaryId
     * @return bool
     */
    public function delete(string $beneficiaryId): bool;

    /**
     * @param array $queryParams
     * @return LengthAwarePaginator
     */
    public function list(array $queryParams): LengthAwarePaginator;
}