<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        //
        'activity_id' => $faker->unique(true)->numberBetween(1,15),
        'event_date' => '2019-01-08 08:37:17',
        'event_start_time' => '2019-01-08 06:23:17',
        'event_end_time' => '2019-01-08 18:00:00',
        'event_capacity_members' => $faker->numberBetween(3, 15),
        'event_target_min_age' => $faker->numberBetween(0, 5),
        'event_target_max_age' => $faker->numberBetween(6, 10),
        'event_parent_attendant' => $faker->numberBetween(0, 3),
        'event_price' => $faker->numberBetween(500, 1500),
        'event_cancelation_policy' => $faker->numberBetween(1, 14),
        'event_pub_status' => $faker->boolean($chanceOfGettingTrue = 20),
        'event_arival_time' => $faker->numberBetween(5, 15),
        'event_state' => '東京都',
        'event_city' => '中央区月島',
        'event_addres1'=>$faker->regexify('[1-9]{3}'),
        'event_addres2'=>$faker->regexify('[0-9]{4}')
    ];
});
