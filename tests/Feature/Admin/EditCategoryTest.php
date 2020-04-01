<?php

namespace Tests\Feature\Admin;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_edit_category()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $category = factory(Category::class)->create();

        $category->name = "you've been changed fool";
        $category->description = 'changed description';

        $this->patch(route('admin.categories.update', $category), $category->toArray())
            ->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseHas('categories', $category->fresh()->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_edit_category()
    {
        $this->patch(route('admin.categories.update', 1), [])
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function authorized_user_can_restore_deleted_category()
    {
        $this->withoutExceptionHandling();
        $this->signIn();

        $category = factory(Category::class)->create();

        $category->delete();

        $this->post(route('admin.categories.restore', $category));

        $this->assertNull($category->fresh()->deleted_at);
        $this->assertCount(1, Category::all());
    }
}
