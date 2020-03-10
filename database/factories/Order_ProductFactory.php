<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order_Product;
use App\Product;
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order_Product::class, function (Faker $faker) {
    $productID = Product::all()->pluck('id');
    $orderID = Order::all()->pluck('id');
    return [
        'quantity' => $faker->numberBetween($min = 10, $max = 200),
        'notional_price' => $faker->randomNumber,
        'selected' => $faker->text,
        'product_id' => $faker->randomElement($productID),
        'order_id' => $faker->randomElement($orderID),
    ];
});
