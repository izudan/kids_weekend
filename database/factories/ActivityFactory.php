<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        //
        'school_id' => $faker->unique(true)->numberBetween(1, 15),
        'category_id' => $faker->unique(true)->numberBetween(1, 15),
        'activity_pub_status' => $faker->boolean($chanceOfGettingTrue = 20),
        'activity_name' => $faker->text(20),
        'activity_detail' => $faker->text(400),
        'file_name' => $faker->text(30),
    ];
});
