<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->defineAs(User::class, 'user', function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'name' => $faker->firstName,
        'status' => rand(0, 1),
        'role' => 'user',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->defineAs(User::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'admin',
        'status' => 1,
        'role' => 'admin',
        'email' => 'admin@admin.ua',
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'remember_token' => Str::random(10),
    ];
});
