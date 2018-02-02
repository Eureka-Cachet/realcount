<?php

namespace App\Http\Controllers;

use Clocking\Repositories\Interfaces\IEntity;
use Illuminate\Http\Request;

class ActionApiController extends Controller implements IEntity
{
    //
    /**
     * @return string
     */
    public function getName(): string
    {
        return "actions";
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
