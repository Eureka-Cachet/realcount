<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = ['uuid', 'name', 'entity_id'];

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
