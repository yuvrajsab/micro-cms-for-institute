<?php

namespace Tests\Feature\Admin;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditPostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_edit_post()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $post = factory(Post::class)->create();

        $post->title = 'changed title';

        $this->patch(route('admin.posts.update', $post), $post->toArray())
            ->assertRedirect(route('admin.posts.index'));

        $this->assertDatabaseHas('posts', $post->fresh()->withoutRelations()->toArray());
    }

    /** @test */
    public function guests_cannot_edit_post()
    {
        $post = factory(Post::class)->create();
        $post->title = 'changed title';

        $this->patch(route('admin.posts.update', $post), $post->toArray())
            ->assertRedirect(route('login'));
    }
}
