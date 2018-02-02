<?php

use App\Action;
use App\Entity;
use Faker\Generator as Faker;

$factory->define(Action::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->word,
        'entity_id' => function(){
            return factory(Entity::class)->create()->id;
        }
    ];
});
