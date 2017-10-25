<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'body' => $faker->text(1000),
        'created_at' => $faker->date,
        'updated_at' => $faker->date
    ];
});
