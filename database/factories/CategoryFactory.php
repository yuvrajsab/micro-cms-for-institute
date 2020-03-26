<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = implode(' ', $faker->words());

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph(),
        'created_by' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
