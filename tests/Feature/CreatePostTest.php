<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_post()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $post = factory(Post::class)->make();
        $this->post(route('posts'), $post->toArray())
            ->assertRedirect(route('posts'));

        $this->assertDatabaseHas('posts', $post->toArray());
    }

    /** @test */
    public function guests_cannot_create_post()
    {
        $this->post(route('posts'), [])
            ->assertRedirect(route('login'));
    }
}
