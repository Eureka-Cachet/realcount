<?php

use App\Entity;
use App\Gate;
use Faker\Generator as Faker;

$factory->define(Entity::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->word,
        'gate_id' => function(){
            return factory(Gate::class)->create()->id;
        }
    ];
});
