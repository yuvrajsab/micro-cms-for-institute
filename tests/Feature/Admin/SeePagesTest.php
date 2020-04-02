<?php

namespace Tests\Feature\Admin;

use App\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeePagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_see_pages_list()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $page = factory(Page::class)->create();

        $this->get(route('admin.pages.index'))
            ->assertSee($page->title);
    }

    /** @test */
    public function unauthorized_user_cannot_see_pages_list()
    {
        $this->get(route('admin.pages.index'))
        ->assertRedirect(route('login'));
    }

    /** @test */
    public function guests_can_view_page()
    {
        $this->withoutExceptionHandling();

        $page = factory(Page::class)->create();

        $this->get(route('pages.show', $page))
            ->assertSee($page->content);
    }
}
