<?php

use App\Beneficiary;
use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(),
        'beneficiary_id' => function(){
            return factory(Beneficiary::class)->create()->id;
        }
    ];
});
