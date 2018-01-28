<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidSet extends Model
{
    protected $fillable = ['name', 'uuid', 'user_id', 'branch_id', 'module_id', 'rank_id', 'amount'];

    public function codes()
    {
        return $this->hasMany(Bid::class, 'set_id');
    }

    public function generator()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
}
