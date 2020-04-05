<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\MenuGroup;
use App\MenuItem;
use Faker\Generator as Faker;

$factory->define(MenuItem::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'url' => $faker->url,
        'location' => $faker->randomElement(['top', 'main']),
        'group_id' => $faker->randomElement([null, function () {
            return factory(MenuGroup::class)->create()->id;
        }]),
    ];
});
