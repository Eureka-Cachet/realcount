<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = ["name", "uuid", "description", "entity_id"];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'policies_roles');
    }
}
