<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->words(3, true);

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph(),
        'creator_id' => factory(User::class),
    ];
});
