<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'id' => $faker->shuffle('12345678'),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'name' => $faker->name,
        'academic_year' => $faker->randomElement(['B1','B2','B3','B4','M1','M2']),
        'age' => $faker->numberBetween(18,24),
        'gender' => $faker->randomElement([1,2]),
        'faculty' => '',
        'department' => '',
        'club' => '1',
        'remember_token' => Str::random(10),
    ];
});
