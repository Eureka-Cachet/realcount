<?php

use App\Role;
use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'full_name' => $faker->unique()->name,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'status' => true,
        'username' => $faker->unique()->userName,
        'password_updated' => true,
        'role_id' => function(){
            return factory(Role::class)->create()->id;
        }
    ];
});
