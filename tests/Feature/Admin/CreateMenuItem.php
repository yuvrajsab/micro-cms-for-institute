<?php

namespace Tests\Feature\Admin;

use App\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateMenuItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_menu_item()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $menuItem = factory(MenuItem::class)->make();

        $this->post(route('admin.menu-items.store'), $menuItem->toArray())
            ->assertRedirect(route('admin.menu-items.index'));

        $this->assertDatabaseHas('menu_items', $menuItem->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_create_menu_item()
    {
        $this->post(route('admin.menu-items.store'), [])
            ->assertRedirect(route('login'));
    }
}
