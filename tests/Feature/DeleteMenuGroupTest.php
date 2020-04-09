<?php

namespace Tests\Feature;

use App\MenuGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteMenuGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_delete_menu_group()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $group = factory(MenuGroup::class)->create();

        $this->delete(route('admin.menu-groups.destroy', $group))
            ->assertRedirect(route('admin.menu-groups.index'));

        $this->assertDatabaseMissing('menu_groups', $group->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_delete_menu_group()
    {
        $this->delete(route('admin.menu-groups.destroy', 1))
            ->assertRedirect(route('login'));
    }
}
