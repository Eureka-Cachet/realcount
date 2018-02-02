<?php

namespace App\Http\Controllers;

use Clocking\Repositories\Interfaces\IEntity;
use Illuminate\Http\Request;

class EntityApiController extends Controller implements IEntity
{
    //
    /**
     * @return string
     */
    public function getName(): string
    {
        return "entities";
    }

    /**
     * @return array
     */
    public function getActions(): array
    {
        return [
            "list"
        ];
    }

    /**
     * @return string
     */
    public function getGateName(): string
    {
        return "roles";
    }
}
