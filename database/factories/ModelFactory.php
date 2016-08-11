<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => ucwords($faker->name),
        'short_description' => $faker->paragraph,
        'long_description' => $faker->paragraphs(3, true),
        'price' => $faker->randomFloat(2, 1, 500000),
        'discount' => $faker->numberBetween(1, 100),
        'discounted_price' => $faker->randomFloat(2, 1, 500000),
    ];
});