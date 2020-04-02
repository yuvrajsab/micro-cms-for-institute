<?php

namespace Tests\Feature\Admin;

use App\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_edit_the_page()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $page = factory(Page::class)->create();

        $this->patch(route('admin.pages.update', $page), $page->toArray())
            ->assertRedirect(route('admin.pages.index'));

        $this->assertDatabaseHas('pages', $page->fresh()->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_edit_the_page()
    {
        $this->patch(route('admin.pages.update', 1), [])
            ->assertRedirect(route('login'));
    }
}
