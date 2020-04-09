<?php

namespace Tests\Feature\Admin;

use App\MenuGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditMenuGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_edit_menu_group()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $group = factory(MenuGroup::class)->create();
        $group->name = 'Changed name';

        $this->patch(route('admin.menu-groups.update', $group), $group->toArray())
            ->assertRedirect(route('admin.menu-groups.index'));

        $this->assertDatabaseHas('menu_groups', $group->fresh()->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_edit_menu_group()
    {
        $this->patch(route('admin.menu-groups.update', 1), [])
            ->assertRedirect(route('login'));
    }
}
