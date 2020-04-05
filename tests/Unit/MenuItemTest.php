<?php

namespace Tests\Unit;

use App\MenuGroup;
use App\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MenuItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function menu_item_can_belongs_to_a_menu_group()
    {
        $menuGroup = factory(MenuGroup::class)->create();

        $menuItem = factory(MenuItem::class)->create([
            'group_id' => $menuGroup->id,
        ]);

        $this->assertInstanceOf(MenuGroup::class, $menuItem->group);
    }
}
