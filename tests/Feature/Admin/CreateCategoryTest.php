<?php

namespace Tests\Feature\Admin;

use App\Category;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_category()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->signIn($user);

        $category = factory(Category::class)->make([
            'creator_id' => $user,
        ]);

        $this->post(route('admin.categories.store'), $category->toArray())
            ->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseHas('categories', $category->toArray());
    }

    /** @test */
    public function unauthorized_user_may_not_create_category()
    {
        $this->post(route('admin.categories.store'), [])
            ->assertRedirect(route('login'));
    }
}
