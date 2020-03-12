<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $catID = Category::all()->pluck('id');
    return [
        'name' => $faker->name,
        'quantity' => $faker->numberBetween($min = 10, $max = 200),
        'description' => $faker->text,
        'price' => $faker->randomNumber,
        'category_id' => $faker->randomElement($catID),
    ];
});
