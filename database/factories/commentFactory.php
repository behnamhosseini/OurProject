<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand('1','33'),
        'body' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'post_id' => rand('166','200'),
        'updated_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 days', $timezone = null),
        'created_at' => $faker->dateTimeBetween($startDate = '-9 months', $endDate = 'now', $timezone = null),
    ];
});


