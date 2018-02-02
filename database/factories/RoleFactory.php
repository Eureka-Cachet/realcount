<?php

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'uuid' => $faker->uuid,
        'level_type' => 'country',
        'level_id' => 1
    ];
});
