<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ProductPromotion;
use App\Product;
use App\Promotion;
use Faker\Generator as Faker;

$factory->define(ProductPromotion::class, function (Faker $faker) {
    $productID = Product::all()->pluck('id');
    $promotionID = Promotion::all()->pluck('id');
    return [
        'product_id' => $faker->randomElement($productID),
        'promotion_id' => $faker->randomElement($promotionID),
    ];
});
