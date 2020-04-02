<?php

namespace Tests\Feature\Admin;

use App\Page;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_page()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->signIn($user);

        $page = factory(Page::class)->make([
            'creator_id' => $user->id,
        ]);

        $this->post(route('admin.pages.store'), $page->toArray())
            ->assertRedirect(route('admin.pages.index'));

        $this->assertDatabaseHas('pages', ['slug' => $page->slug]);
    }

    /** @test */
    public function unauthorized_user_cannot_create_a_page()
    {
        $this->post(route('admin.pages.store'), [])
            ->assertRedirect(route('login'));
    }
}
