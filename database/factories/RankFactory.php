<?php

use App\Rank;
use Faker\Generator as Faker;

$factory->define(Rank::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word
    ];
});
