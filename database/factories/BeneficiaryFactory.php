<?php

use App\Bid;
use App\Branch;
use App\Module;
use App\Rank;
use Clocking\Helpers\Constants;
use Faker\Generator as Faker;
use App\Beneficiary;

$factory->define(Beneficiary::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'full_name' => $faker->name,
        'gender' => Constants::MALE,
        'branch_id' => function(){
            return factory(Branch::class)->create()->id;
        },
        'bid_id' => function(){
            return factory(Bid::class)->create()->id;
        },
        'rank_id' => function(){
            return factory(Rank::class)->create()->id;
        },
        'module_id' => function(){
            return factory(Module::class)->create()->id;
        },
        'date_of_birth' => now()
    ];
});
