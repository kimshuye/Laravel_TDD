<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(false);
    }
    
    public function testUrl()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }
}
