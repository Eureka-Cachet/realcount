<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = ['uuid', 'name', 'gate_id'];

    public function gate()
    {
        return $this->belongsTo(Gate::class);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
