<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function districts()
    {
        return $this->hasManyThrough(District::class, Region::class);
    }
}
