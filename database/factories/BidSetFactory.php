<?php

use App\BidSet;
use App\Branch;
use App\Module;
use App\Rank;
use App\User;
use Faker\Generator as Faker;

$factory->define(BidSet::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->unique()->word,
        'amount' => 1,
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
        'branch_id' => function(){
            return factory(Branch::class)->create()->id;
        },
        'module_id' => function(){
            return factory(Module::class)->create()->id;
        },
        'rank_id' => function(){
            return factory(Rank::class)->create()->id;
        }
    ];
});
