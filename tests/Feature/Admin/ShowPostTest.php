<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowPostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_see_unpublished_posts()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $post = factory(Post::class)->create(['published_at' => null]);

        $this->get(route('admin.posts.show', $post))
            ->assertSee($post->title)
            ->assertSee($post->body);
    }

    /** @test */
    public function unauthorized_user_cannot_see_unpublished_posts()
    {
        $post = factory(Post::class)->create(['published_at' => null]);

        $this->get(route('admin.posts.show', $post))
            ->assertRedirect(route('login'));
    }
}
