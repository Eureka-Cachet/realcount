<?php

namespace Clocking\Repositories\Interfaces;


use App\Beneficiary;
use App\Picture;

interface IPictureRepo
{
    /**
     * @param Beneficiary $beneficiary
     * @return Picture | null
     */
    public function getFor(Beneficiary $beneficiary);

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return boolean
     */
    public function addFor(Beneficiary $beneficiary, array $inputs);

    /**
     * @param Beneficiary $beneficiary
     * @return boolean
     */
    public function deleteFor(Beneficiary $beneficiary);

    /**
     * @param Beneficiary $beneficiary
     * @param array $inputs
     * @return bool
     */
    public function updateFor(Beneficiary $beneficiary, array $inputs);
}