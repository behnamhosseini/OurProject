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

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement($array = \App\User::get()->pluck('id'), $count = 1),
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'imageUrl' => $faker->imageUrl($width = 400, $height = 400), // 'http://lorempixel.com/640/480/,
        'mood' => $faker->randomElement($array = array ('amo','molesto', 'asusta', 'divierte', 'gusta', 'triste', 'asombro', 'alegre'), $count = 1),
        'likeCount' => $faker->numberBetween($min = 10, $max = 9000),
        'commentCount' => $faker->numberBetween($min = 10, $max = 9000),
        'shareCount' => $faker->numberBetween($min = 10, $max = 9000),
        'postType' => $faker->randomElement($array = array ('post','vip'), $count = 1),
        'location' => $faker->city,
        'expires_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 days', $timezone = null),
        'created_at' => $faker->dateTimeBetween($startDate = '-9 months', $endDate = 'now', $timezone = null),
    ];
});


