<?php

namespace Tests\Feature\Admin;

use App\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteMenuItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_delete_menu_item()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $item = factory(MenuItem::class)->create();

        $this->delete(route('admin.menu-items.destroy', $item))
            ->assertRedirect(route('admin.menu-items.index'));

        $this->assertDatabaseMissing('menu_items', $item->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_edit_menu_item()
    {
        $this->delete(route('admin.menu-items.destroy', 1))
            ->assertRedirect(route('login'));
    }
}
