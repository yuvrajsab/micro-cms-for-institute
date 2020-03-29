<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence();

    return [
        'title' => $title,
        'slug' => now()->toDateString().'-'.Str::slug($title),
        'author_id' => function () {
            return factory(User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
        'body' => $faker->paragraph(),
        'published_at' => $faker->randomElement([null, $faker->dateTime]),
    ];
});
