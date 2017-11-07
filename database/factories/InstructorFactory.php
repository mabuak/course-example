<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Instructor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gender' => $faker->randomElement($array = array ('male', 'female')),
    ];
});
