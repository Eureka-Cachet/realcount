<?php

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'code' => $faker->unique()->randomNumber(5)
            .$faker->unique()->randomNumber(5)
            .$faker->unique()->randomNumber(5),
        'name' => $faker->unique()->city
    ];
});
