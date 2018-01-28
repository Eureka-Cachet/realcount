<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    protected $fillable = ['path', 'finger', 'fmd', 'beneficiary_id'];

    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}
