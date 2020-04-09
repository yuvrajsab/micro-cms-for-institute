<?php

use App\MenuGroup;
use App\MenuItem;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        factory(MenuGroup::class, 5)->create()->each(function ($group) {
            $group->items()->createMany(factory(MenuItem::class, 2)->make()->toArray());
        });

        factory(MenuItem::class, 5)->create();

        $this->call(PostsTableSeeder::class);
    }
}
