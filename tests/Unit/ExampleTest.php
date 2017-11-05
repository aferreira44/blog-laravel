<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()
        ]);
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = Post::archives();

        $this->assertEquals([
            [
                "year" => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "published" => 1
            ],

            [
                "year" => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "published" => 1
            ],
        ], $posts);
    }
}
