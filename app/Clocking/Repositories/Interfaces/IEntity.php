<?php
/**
 * Created by PhpStorm.
 * User: guru
 * Date: 1/27/18
 * Time: 9:14 AM
 */

namespace Clocking\Repositories\Interfaces;


interface IEntity
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function getActions(): array;

    /**
     * @return string
     */
    public function getGateName(): string;
}