<?php

use Faker\Generator as Faker;

$factory->define(App\UserParent::class, function (Faker $faker) {
    return [
        //
        'user_last_name' => $faker->lastName,
        'user_first_name' => $faker->firstName,
        'user_last_kana' => $faker->lastKanaName,
        'user_first_kana' => $faker->firstKanaName,
        'email' => $faker->unique()->safeEmail,
        'tel' => $faker->phoneNumber,
        'sex' => $faker->numberBetween(0,2),
        'u_zip_code1'=>$faker->regexify('[1-9]{3}'),
        'u_zip_code2'=>$faker->regexify('[0-9]{4}'),
        'u_state' => $faker->prefecture,
        'u_city' => $faker->ward,
        'u_address1' => $faker->streetAddress,
        'u_address2' => $faker->streetAddress,
    ];
});