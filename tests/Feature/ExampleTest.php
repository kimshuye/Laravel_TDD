<?php

namespace Tests\Feature;

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
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testOlaMundo()
    {
        $response = $this->get('/ola');

        $response->assertStatus(200);
    }

    public function testPostRoute()
    {
        $response = $this->post('post',[
            'name'=>'Suntisuk',
            'email'=>'suntisuk.dev@gmail.com'
        ]);

        $response->assertStatus(200)->assertJson([
            'name'=>'Suntisuk',
            'email'=>'suntisuk.dev@gmail.com'
        ]);
    }

}
