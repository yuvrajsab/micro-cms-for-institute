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

    /** @test */
    public function a_post_requires_a_title_of_minimum_3_character()
    {
        $this->publishPost(['title' => null])
            ->assertSessionHasErrors('title');

        $this->publishPost(['title' => 'ab'])
            ->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_post_requires_a_body()
    {
        $this->publishPost(['body' => null])
            ->assertSessionHasErrors('body');
    }

    protected function publishPost(array $overrides)
    {
        $this->signIn();

        $post = factory(Post::class)->make($overrides);

        return $this->post(route('posts'), $post->toArray());
    }
}
