<?php

namespace Tests\Unit;

use App\MenuGroup;
use App\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MenuGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function menu_group_can_have_multiple_menu_items()
    {
        $menuGroup = factory(MenuGroup::class)->create();

        factory(MenuItem::class)->create([
            'group_id' => $menuGroup->id,
        ]);

        $this->assertCount(1, $menuGroup->items);
        $this->assertInstanceOf(MenuItem::class, $menuGroup->items[0]);
    }
}
