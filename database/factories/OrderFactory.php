<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $userID = User::all()->pluck('id');
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'confirm_address' => $faker->address,
        'confirm_phonenumber' => $faker->phoneNumber,
        'status' => $faker->randomElement(['0', '1']),
        'etd' => $faker->dateTime,
        'total' => $faker->randomNumber,
        'user_id' => $faker->randomElement($userID),
    ];
});
