<?php

namespace Tests\Feature\Admin;

use App\MenuGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateMenuGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authorized_user_can_create_menu_group()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $menu = factory(MenuGroup::class)->make();

        $this->post(route('admin.menu-groups.store'), $menu->toArray())
            ->assertRedirect(route('admin.menu-groups.index'));

        $this->assertDatabaseHas('menu_groups', $menu->toArray());
    }

    /** @test */
    public function unauthorized_user_cannot_create_menu_group()
    {
        $this->post(route('admin.menu-groups.store'), [])
            ->assertRedirect(route('login'));
    }
}
