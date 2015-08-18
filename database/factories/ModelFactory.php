<?php

$factory->define(App\Product::class, function ($faker) {
    return [
        'name' => $faker->sentence($nbWords = 6),
        'description' => implode($faker->paragraphs(8), '<br>'),
        'price' => $faker->randomFloat($decimals = 2, $min = 3, $max = 4),
        'published_at' => $faker->dateTime('now'),
    ];
});

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});
