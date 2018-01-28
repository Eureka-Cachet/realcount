<?php

namespace Clocking\Repositories\Interfaces;

interface IReportRepo
{
    /**
     * @param array $inputs
     * @return array
     */
    public function generate(array $inputs): array;
}