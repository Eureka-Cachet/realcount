<?php

use App\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->unique()->city,
        'location_id' => 373
    ];
});
