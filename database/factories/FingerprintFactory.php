<?php

use App\Fingerprint;
use Faker\Generator as Faker;

$factory->defineAs(Fingerprint::class, 'thumb_right', function (Faker $faker) {
    return [
//        "path" => $faker->imageUrl(),
        "finger" => "thumb_right",
        "fmd" => base64_encode("thumb_right_fmd"),
    ];
});

$factory->defineAs(Fingerprint::class, 'thumb_left', function (Faker $faker) {
    return [
//        "path" => $faker->imageUrl(),
        "finger" => "thumb_left",
        "fmd" => base64_encode("thumb_left_fmd"),
    ];
});

$factory->defineAs(Fingerprint::class, 'index_left', function (Faker $faker) {
    return [
//        "path" => $faker->imageUrl(),
        "finger" => "index_left",
        "fmd" => base64_encode("index_left_fmd"),
    ];
});

$factory->defineAs(Fingerprint::class, 'index_right', function (Faker $faker) {
    return [
//        "path" => $faker->imageUrl(),
        "finger" => "index_right",
        "fmd" => base64_encode("index_right_fmd")
    ];
});
