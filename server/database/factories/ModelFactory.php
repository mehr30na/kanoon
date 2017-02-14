<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'father_name' => $faker->numberBetween(4000000,5000000),
        'gender' => $faker->randomElement($array = array ('m','f')),
        'birth_date' => $faker->date($format = 'Y-m-d', $max = '-20 years'),
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'student_number' => $faker->numberBetween(4000000,5000000),
        'certificate' => $faker->numberBetween(0,3),
        'subject' => $faker->name,
        'skill' => $faker->name,
        'section' => $faker->name,
        'address' => $faker->address,
    ];
});