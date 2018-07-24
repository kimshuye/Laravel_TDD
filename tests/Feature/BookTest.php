<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Book;
use App\User;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    public function test_Books_Can_Be_Deleted()
    {
        $user = factory(User::class, 1)
           ->create()
           ->each(function ($u) {
                $u->books()->create([
                    'name'=>'The Hobbit',
                    'price'=>10,
                ]);
            });

        $book = Book::find(1);

        $book->delete();

        $this->assertDatabaseMissing('books',['id'=> (1),'name'=>'The Hobbit','price'=>10]);
    }

    public function test_Books_Can_Be_Created()
    {
        // $user = factory(User::class)->create();

        // $book = $user->books()->create([
        //     'name'=>'The Hobbit',
        //     'price'=>10,
        // ]);

        $user = factory(User::class, 1)
           ->create()
           ->each(function ($u) {
                $u->books()->create([
                    'name'=>'The Hobbit',
                    'price'=>10,
                ]);
            });
            
        $found_book = Book::find(1);

        // $this->assertSame($found_book->name,'Lord of the Rings');
        $this->assertSame($found_book->name,'The Hobbit');

        $this->assertSame($found_book->price,10);

        $this->assertDatabaseHas('books',['id'=> (1),'name'=>'The Hobbit','price'=>10]);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
