<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\models\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'slug'=>$faker->slug,
        'description'=>$faker->sentence,
    ];
});
