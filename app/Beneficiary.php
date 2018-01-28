<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = ['uuid', 'bid', 'full_name', 'branch_id', 'date_of_birth', 'status'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function picture()
    {
        return $this->hasOne(Picture::class);
    }

    public function fingerprints()
    {
        return $this->hasMany(Fingerprint::class);
    }
}
