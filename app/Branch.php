<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['uuid', 'name', 'location_id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function beneficiaries()
    {
        return $this->hasMany(Beneficiary::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
