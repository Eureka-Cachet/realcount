<?php

use App\Bid;
use App\BidSet;
use Faker\Generator as Faker;

$factory->define(Bid::class, function (Faker $faker) {
    return [
        'code' => "COM".$faker->randomNumber(7),
        'set_id' => function(){
            return factory(BidSet::class)->create()->id;
        },
    ];
});
