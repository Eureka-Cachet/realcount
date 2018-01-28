<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    protected $fillable = ['uuid', 'name'];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
