<?php

namespace Tests\Feature\Admin;

use App\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeletePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_delete_a_page()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $page = factory(Page::class)->create();

        $this->delete(route('admin.pages.destroy', $page))
            ->assertRedirect(route('admin.pages.index'));

        $this->assertDatabaseMissing('pages', $page->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_delete_page()
    {
        $this->delete(
            route('admin.pages.destroy', factory(Page::class)->create())
        )->assertRedirect(route('login'));
    }
}
