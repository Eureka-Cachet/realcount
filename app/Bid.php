<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['code', 'beneficiary_id', 'set_id'];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
