<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'image' => 'img/img1.jpg',
        'drink' => $faker->firstNameMale,
        'desc' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'price' => $faker->numberBetween(100000, 1000000)      
    ];
});
