<?php

use Faker\Generator as Faker;

$factory->define(App\Lecture::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'number_of_hours' => $faker->numberBetween(10, 50),
        // 'course_id' => factory('App\Course')->create(),
        'course_id' => $faker->numberBetween(10, 46),

    ];
});
