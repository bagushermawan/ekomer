<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->cityPrefix,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 1000, $max = 9000),
        'image' => $faker->imageUrl ,
        // 'stock' => $faker->numberBetween($min =5, $max =20),

    ];
});
