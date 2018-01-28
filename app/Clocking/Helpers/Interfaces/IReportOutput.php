<?php

namespace Clocking\Helpers\Interfaces;


interface IReportOutput
{
    /**
     * @param array $data
     * @return string $path | null
     */
    public function output(array $data);
}