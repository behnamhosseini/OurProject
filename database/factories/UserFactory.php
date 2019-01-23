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

$factory->define(App\User::class, function (Faker $faker) {
    $pic = json_decode('{"header":null,"everyOne":null,"friends":null,"family":null,"relatives":null,"defaultProfile":"\/img\/defaultMaleAvatar.png","defaultHeader":"\/img\/defaultHeaderImage.jpg"}',true);
    return [
        'email' => $faker->unique()->safeEmail,
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'userName' => $faker->unique()->userName,
        'city' => $faker->city,
        'province' => $faker->state,
        'bio' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'job' => $faker->jobTitle,
        'school' => $faker->company,
        'sex' => $faker->randomElement($array = array ('زن','مرد'), $count = 1),
        'university' => $faker->catchPhrase,
        'fieldOfStudy' => $faker->bs,
        'phoneNumber' => $faker->e164PhoneNumber ,
        'maritalStatus' => $faker->randomElement($array = array ('مجرد','متاهل','در رابطه'), $count = 1),
        'profilePictures' => $pic,
        'degree' => $faker->randomElement($array = array ('دیپلم','فوق دیپلم','لیسانس', 'فوق لیسانس', 'دکتری'), $count = 1),
        'dateOfBirth' => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-12 years', $timezone = null),
        'accountType' => $faker->randomElement($array = array ('public','private'), $count = 1),
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'lastActivity' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now', $timezone = null),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//        'remember_token' => str_random(10),
    ];
});


