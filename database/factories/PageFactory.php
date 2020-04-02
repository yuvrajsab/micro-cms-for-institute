<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Page;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Page::class, function (Faker $faker) {
    $name = $faker->words(3, true);

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'content' => $faker->randomHtml(),
        'creator_id' => factory(User::class),
    ];
});
