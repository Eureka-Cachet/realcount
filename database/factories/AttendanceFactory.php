<?php

use App\Attendance;
use App\Beneficiary;
use App\Device;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Attendance::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'date' => 1515369600,
        'time' => Carbon::createFromTimestamp(1515369600)
            ->addHours(5)
            ->addMinutes(2)
            ->addSeconds(20)
            ->timestamp,
        'device_id' => function(){
            return factory(Device::class)->create()->id;
        },
        'beneficiary_id' => function(){
            return factory(Beneficiary::class)->create()->id;
        }
    ];
});
