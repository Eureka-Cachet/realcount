<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = ['uuid', 'full_name', 'bid_id', 'gender', 'rank_id', 'module_id', 'branch_id', 'date_of_birth', 'status'];

    public function bid()
    {
        return $this->belongsTo(Bid::class);
    }

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

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
