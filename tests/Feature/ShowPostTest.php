<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowPostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_see_all_posts()
    {
        $this->withoutExceptionHandling();

        $post = factory(Post::class)->create();

        $this->get(route('posts'))
            ->assertSee($post->title)
            ->assertSee($post->body);
    }

    /** @test */
    public function users_can_see_recent_posts()
    {
        $this->withoutExceptionHandling();

        $post = factory(Post::class)->create();

        $this->get('/')
            ->assertSee($post->title);
    }
}
