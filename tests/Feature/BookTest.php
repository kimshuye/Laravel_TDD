<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    public function test_books_can_be_created()
    {
        // $user = ;
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
