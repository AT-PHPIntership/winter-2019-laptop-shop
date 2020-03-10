<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Image;
use App\User;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $userID = User::all()->pluck('id');
    $productID = Product::all()->pluck('id');
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'imageable_id' => $faker->randomElement($productID),
        'imageable_type' => $faker->randomElement(['product', 'user']),
        'user_id' => $faker->randomElement($userID),
    ];
});
