<?php
/**
 * Created by PhpStorm.
 * User: guru
 * Date: 1/27/18
 * Time: 9:15 AM
 */

namespace Clocking\Repositories\Interfaces;


interface IGate
{
    /**
     * @return string
     */
    public function getName(): string;
}