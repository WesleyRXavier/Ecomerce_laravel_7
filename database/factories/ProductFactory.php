<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\models\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>$faker->randomFloat(2,10),
        'body'=>$faker->paragraph(5, true),
        'slug'=>$faker->slug,
        'description'=>$faker->sentence,
    ];
});
