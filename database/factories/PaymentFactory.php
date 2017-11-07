<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Payment::class, function (Faker $faker) {
    return [
        'course_id' => 1,
        'student_id' => 1,
        'amount' => rand(1000, 9999),
        'date' => new \DateTime(),
        'status' => rand(0, 1)
    ];
});
