<?php

use App\Entity;
use App\Policy;
use Faker\Generator as Faker;

$factory->define(Policy::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->word,
        'entity_id' => function(){
            return factory(Entity::class)->create()->id;
        }
    ];
});
