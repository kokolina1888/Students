<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
       'name' => $faker->sentence(5),
       // 'description' => 'description',
       'description' => $faker->paragraph(3),
    ];
});
