<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Core\Models\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'remember_token' => str_random(10),
        'is_verify' => true,
        'is_active' => true,
    ];
});

$factory->define(App\Core\Models\Customer::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'remember_token' => str_random(10),
        'is_verify' => true,
        'is_active' => true,
    ];
});

$factory->define(App\Core\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(5),
        'is_active' => true,
    ];
});

$factory->define(App\Core\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(5),
        'price' => $faker->numberBetween(100000, 500000),
        'description' => $faker->sentence(5),
        'is_active' => true,
    ];
});
