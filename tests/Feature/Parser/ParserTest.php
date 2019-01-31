<?php

namespace Tests\Feature\Parser;

use App\Helpers\ParserStackOverflow;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ParserTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $tag = 'Laravel';
        $content = new ParserStackOverflow();
        $records = $content->index($tag);
        $result = count($records);
        $this->assertEquals($result, 75);

    }
}
