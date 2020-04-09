<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\MenuGroup;
use Faker\Generator as Faker;

$factory->define(MenuGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'type' => $faker->randomElement(['primary', 'secondary']),
    ];
});
