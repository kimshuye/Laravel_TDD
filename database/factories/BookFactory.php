<?php

use Faker\Generator as Faker;

use App\User;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->price,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
        
    ];
});
