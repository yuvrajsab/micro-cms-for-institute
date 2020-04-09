<?php

namespace Tests\Feature\Admin;

use App\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditMenuItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_edit_menu_item()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $item = factory(MenuItem::class)->create();
        $item->name = 'Changed name';

        $this->patch(route('admin.menu-items.update', $item), $item->toArray())
            ->assertRedirect(route('admin.menu-items.index'));

        $this->assertDatabaseHas('menu_items', $item->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_edit_menu_item()
    {
        $this->patch(route('admin.menu-items.update', 1), [])
            ->assertRedirect(route('login'));
    }
}
