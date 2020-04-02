<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function ($category) {
            $category->posts()->save(factory(Post::class)->make(['category_id' => $category->id]));
        });
    }
}
