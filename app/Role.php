<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'uuid', 'description', 'level_type', 'level_id'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function policies()
    {
        return $this->belongsToMany(Policy::class, 'policies_roles');
    }

    public function gates()
    {
        return $this->belongsToMany(Gate::class, 'gates_roles');
    }
}
