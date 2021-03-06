<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactUs;
use Faker\Generator as Faker;

$factory->define(ContactUs::class, function (Faker $faker) {
    return [
        'FName' => $faker->firstName,
        'LName' => $faker->lastName,
        'Email' => $faker->email,
        'Phone' => $faker->phoneNumber,
        'description' => $faker->word,
    ];
});
