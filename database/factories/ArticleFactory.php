<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'title' => $faker->sentence,
        'status' => rand(0, 1),
        'description' => $faker->text,
    ];
});
