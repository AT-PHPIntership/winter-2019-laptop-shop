<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Image;

$factory->define(Image::class, function (Faker $faker) {
    $imageable_type = $faker->randomElement([App\Product::class, App\User::class]);
    $id = $imageable_type::all()->pluck('id');

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'imageable_type' => $imageable_type,
        'imageable_id' => $faker->randomElement($id),
    ];
});
