<?php

use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    return [
        //
        'school_name_kana' => $faker->company,
        'school_name' => $faker->company,
        'school_email' => $faker->unique()->safeEmail,
        'school_hp' => $faker->url,
        'school_tel' => $faker->phoneNumber,
        'school_zip_code1'=>$faker->regexify('[1-9]{3}'),
        'school_zip_code2'=>$faker->regexify('[0-9]{4}'),
        'school_state' => $faker->prefecture,
        'school_city' => $faker->ward,
        'school_addres1' => $faker->streetAddress,
        'school_addres2' => $faker->streetAddress,
        'school_detail' => $faker->text(400),
        'school_bank_acount' => $faker->creditCardNumber,
        'school_bank_name' => $faker->text(10),
        'school_bank_branch_code' => $faker->numberBetween(0, 9),
        'school_bank_account_number' => $faker->numberBetween(10, 50),
        'school_bank_accuont_type' => $faker->numberBetween(0, 1),
        'school_bank_beneficiary_name' => $faker->kanaName
    ];
});
