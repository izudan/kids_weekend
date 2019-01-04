<?php

use Faker\Generator as Faker;

$factory->define(App\UserChild::class, function (Faker $faker) {
    return [
        //
        'family_id' => $faker->numberBetween(1000, 2000),
        'child_last_name' => $faker->lastName,
        'child_first_name' => $faker->firstName,
        'child_last_kana' => $faker->lastKanaName,
        'child_first_kana' => $faker->firstKanaName,
        'chilld_sex' => $faker->numberBetween(0,2),
        'child_birth_day' => $faker->dateTimeBetween('-10 years', '-0years')->format('Y-m-d')
    ];
});
