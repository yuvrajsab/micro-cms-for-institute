<?php

namespace Tests\Unit;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_belongs_to_a_user()
    {
        $user = factory(User::class)->create();

        $post = factory(Post::class)->create([
            'author_id' => $user->id,
        ]);

        $this->assertInstanceOf(User::class, $post->author);
    }

    /** @test */
    public function a_post_belongs_to_a_category()
    {
        $category = factory(Category::class)->create();

        $post = factory(Post::class)->create([
            'category_id' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $post->category);
    }

    /** @test */
    public function a_post_can_be_published()
    {
        $post = factory(Post::class)->create([
            'published_at' => null,
        ]);

        $post->publish();

        $this->assertEqualsWithDelta(now(), $post->fresh()->published_at, 2);
    }
}
