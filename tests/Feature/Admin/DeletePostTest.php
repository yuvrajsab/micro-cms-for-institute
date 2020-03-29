<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeletePostTest extends TestCase
{
    use RefreshDatabase;

    protected $post;

    protected function setUp(): void
    {
        parent::setUp();

        $this->post = factory(Post::class)->create();
    }

    /** @test */
    public function authorized_user_can_delete_post()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $this->delete(route('admin.posts.delete', $this->post))
            ->assertRedirect(route('posts'));

        $this->assertDatabaseMissing('posts', $this->post->toArray());
    }

    /** @test */
    public function guests_cannot_delete_post()
    {
        $this->delete(route('admin.posts.delete', $this->post))
            ->assertRedirect(route('login'));
    }
}
