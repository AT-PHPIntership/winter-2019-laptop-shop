<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Comment;
use App\User;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $userID = User::all()->pluck('id');
    $productID = Product::all()->pluck('id');
    return [
        'product_id' => $faker->randomElement($productID),
        'content' => $faker->text,
        'rating' => $faker->randomDigit,
        'user_id' => $faker->randomElement($userID),
    ];
});
