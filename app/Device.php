<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['uuid', 'code', 'status', 'name', 'branch_id'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
