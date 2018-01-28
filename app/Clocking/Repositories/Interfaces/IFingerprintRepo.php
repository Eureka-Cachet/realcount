<?php

namespace Clocking\Repositories\Interfaces;


use App\Beneficiary;

interface IFingerprintRepo
{
    /**
     * @param Beneficiary $beneficiary
     * @return array
     */
    public function getFor(Beneficiary $beneficiary);

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return array
     */
    public function addFor(Beneficiary $beneficiary, array $inputs);

    /**
     * @param Beneficiary $beneficiary
     * @return bool
     */
    public function deleteFor(Beneficiary $beneficiary);

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return bool
     */
    public function updateFor(Beneficiary $beneficiary, array $inputs);
}