<?php

namespace Tests\Unit;

use App\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_page_has_a_url_attribute()
    {
        $page = factory(Page::class)->create();

        $this->assertEquals(url('pages/'.$page->slug), $page->url);
    }
}
