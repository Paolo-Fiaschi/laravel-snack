<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'autore' => $faker -> name(),
        'description' => $faker -> sentence(),
        'ora' => $faker -> time()
    ];
});
