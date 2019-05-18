<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->word,
        'category' => $faker->word,
        'details' => $faker->paragraph(random_int(1, 10)),
        'image' => $faker->word,
    ];
});

