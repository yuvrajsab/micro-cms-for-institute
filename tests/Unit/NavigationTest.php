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
        factory(MenuItem::class, 2)->create([
            'type' => 'primary',
            'group_id' => null,
        ]);

        factory(MenuItem::class, 3)->create([
            'type' => 'secondary',
            'group_id' => null,
        ]);

        $this->assertCount(2, Navigation::getPrimaryMenu());
        $this->assertCount(3, Navigation::getSecondaryMenu());
    }

    /** @test */
    public function navigation_get_cached_after_calling_get_function()
    {
        factory(MenuItem::class)->create([
            'type' => 'primary',
        ]);

        Navigation::getPrimaryMenu();

        $this->assertTrue(Navigation::isPrimaryMenuCached());
    }

    /** @test */
    public function cached_navigation_gets_cleared_when_menu_item_create_or_update_or_delete()
    {
        factory(MenuItem::class)->create([
            'type' => 'secondary',
        ]);

        Navigation::getSecondaryMenu();

        $this->assertTrue(Navigation::isSecondaryMenuCached());

        factory(MenuItem::class)->create([
            'type' => 'secondary',
        ]);

        $this->assertFalse(Navigation::isSecondaryMenuCached());
    }
}
