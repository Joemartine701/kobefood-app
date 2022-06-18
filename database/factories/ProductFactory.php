<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->randomNumber(),
        'color' => $faker->colorName,
        'description' => $faker->word,
        'price' => $faker->numberBetween(20000,40000),
        'image' => $faker->image,
    ];
});
