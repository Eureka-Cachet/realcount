<?php

use App\Gate;
use Faker\Generator as Faker;

$factory->define(Gate::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->word
    ];
});
