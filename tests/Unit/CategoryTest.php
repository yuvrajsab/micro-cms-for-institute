<?php

namespace Tests\Unit;

use App\Category;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_category_belongs_to_a_user()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();
        $category = factory(Category::class)->create([
            'creator_id' => $user->id,
        ]);

        $this->assertInstanceOf(User::class, $category->creator);
    }
}
