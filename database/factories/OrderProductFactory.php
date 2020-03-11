<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\OrderProduct;
use App\Product;
use App\Order;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    $productID = Product::all()->pluck('id');
    $orderID = Order::all()->pluck('id');
    return [
        'quantity' => $faker->numberBetween($min = 10, $max = 200),
        'selected' => $faker->text,
        'purchase_price' => $faker->randomNumber,
        'product_id' => $faker->randomElement($productID),
        'order_id' => $faker->randomElement($orderID),
    ];
});
