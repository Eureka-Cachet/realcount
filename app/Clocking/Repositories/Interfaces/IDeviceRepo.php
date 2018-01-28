<?php

namespace Clocking\Repositories\Interfaces;

use App\Branch;
use App\Device;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IDeviceRepo
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
     * @param string $Id
     * @param null $column
     * @return Device | null
     */
    public function single(string $Id, $column = null);

    /**
     * @param array $inputs
     * @return Device
     */
    public function add(array $inputs): Device;

    /**
     * @param Device $device
     * @param Branch $branch
     * @return bool
     */
    public function map(Device $device, Branch $branch): bool;

    /**
     * @param Device $device
     * @param Branch $branch
     * @return bool
     */
    public function unMap(Device $device, Branch $branch): bool;

    /**
     * @param string $deviceId
     * @return bool
     */
    public function delete(string $deviceId): bool;

    /**
     * @param string $deviceId
     * @param array $inputs
     * @return bool
     */
    public function update(string $deviceId, array $inputs): bool;
}