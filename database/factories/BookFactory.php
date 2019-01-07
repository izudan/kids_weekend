<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        //
        'user_parent_id' => $faker->numberBetween(0, 15),
        'event_id' => $faker->numberBetween(0, 15),
        'child_id' => $faker->numberBetween(0, 15),
        'family_id' => $faker->numberBetween(0, 15),
        'book_price' => $faker->numberBetween(1000, 2000)
    ];
});
