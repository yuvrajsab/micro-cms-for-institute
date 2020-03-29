<?php

namespace Tests\Feature\Admin;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_post()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->signIn($user);

        $category = factory(Category::class)->create();

        $post = factory(Post::class)->make([
            'author_id' => $user->id,
            'category_id' => $category->id,
            'published_at' => null, // published at will always be null on creation
        ]);

        $this->post(route('admin.posts.store'), $post->toArray())
            ->assertRedirect(route('admin.posts.index'));

        $this->assertDatabaseHas('posts', $post->toArray());
    }

    /** @test */
    public function authorized_user_can_publish_a_post()
    {
        $this->signIn();

        $post = factory(Post::class)->create([
            'published_at' => null,
        ]);

        $this->post(route('admin.posts.publish', $post))
            ->assertRedirect(route('admin.posts.index'));
    }

    /** @test */
    public function unauthorized_user_may_not_create_post()
    {
        $this->post(route('admin.posts.store'), [])
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_user_may_not_publish_post()
    {
        $post = factory(Post::class)->create();

        $this->post(route('admin.posts.publish', $post))
            ->assertRedirect(route('login'));
    }
}
