<?php

namespace Tests\Unit;

use App\MenuItem;
use App\Navigation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function navigation_has_menu_items()
    {
        factory(MenuItem::class, 5)->create([
            'group_id' => null,
        ]);

        $this->assertCount(5, Navigation::get());
    }

    /** @test */
    public function navigation_get_cached_after_calling_get_function()
    {
        factory(MenuItem::class)->create();

        Navigation::get();

        $this->assertTrue(Navigation::isCached());
    }

    /** @test */
    public function cached_navigation_gets_cleared_when_menu_item_create_or_update_or_delete()
    {
        $menuItem = factory(MenuItem::class)->create();

        $this->assertFalse(Navigation::isCached());

        $menuItem->update(['name' => 'changed']);

        $this->assertFalse(Navigation::isCached());

        $menuItem->delete();

        $this->assertFalse(Navigation::isCached());
    }
}
