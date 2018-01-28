<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['beneficiary_id', 'date', 'time', 'device_id', 'io'];

    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }

    public function device(){
        return $this->belongsTo(Device::class, 'device_id');
    }
}
