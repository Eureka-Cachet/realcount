<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['code', 'set_id'];

    public function beneficiary()
    {
        return $this->hasOne(Beneficiary::class);
    }
}
