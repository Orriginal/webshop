<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'productnaam' => $faker->name,
        'prijs' => $faker->randomNumber(2),
    ];
});
