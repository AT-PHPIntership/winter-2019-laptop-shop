<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Promotion;
use Faker\Generator as Faker;

$factory->define(Promotion::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'discount' => $faker->randomNumber,
        'time_start' => $faker->dateTime,
        'time_end' => $faker->dateTime,
    ];
});
