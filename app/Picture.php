<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['path', 'beneficiary_id'];

    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}
