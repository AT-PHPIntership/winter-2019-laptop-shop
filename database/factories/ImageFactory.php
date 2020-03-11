<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Image;
use App\User;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $imageable_type = $faker->randomElement(['user','product']);
    $imageable_id = '';

    if ($imageable_type == 'user') 
    {
        $imageable_id = User::all()->pluck('id');
    } elseif ($imageable_type == 'product')
    {
        $imageable_id = Product::all()->pluck('id');
    }

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'imageable_id' => $faker->randomElement($imageable_id),
        'imageable_type' => $imageable_type,
    ];
});
