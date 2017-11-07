<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'name' => 'course',
        'description' => $faker->text
    ];
});
