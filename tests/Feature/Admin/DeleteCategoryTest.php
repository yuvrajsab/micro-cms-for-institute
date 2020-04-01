<?php

namespace Tests\Feature\Admin;

use App\Category;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_force_delete_a_category_if_it_has_no_post_associated()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $category = factory(Category::class)->create();

        $this->delete(route('admin.categories.destroy', $category))
            ->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseMissing('categories', $category->toArray());
    }

    /** @test */
    public function authenticated_user_can_soft_delete_a_category_if_it_has_post_associated()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $category = factory(Category::class)->create();

        factory(Post::class)->create([
            'category_id' => $category->id,
        ]);

        $this->delete(route('admin.categories.destroy', $category))
            ->assertRedirect(route('admin.categories.index'));

        $this->assertEqualsWithDelta(now(), $category->fresh()->deleted_at, 2);
    }

    /** @test */
    public function unauthenticated_user_cannot_delete_category()
    {
        $this->delete(route('admin.categories.destroy', 1))
            ->assertRedirect(route('login'));
    }
}
