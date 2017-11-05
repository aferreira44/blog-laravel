<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->text(15),
        'body' => $faker->text(1000),
        'created_at' => $faker->date,
        'updated_at' => $faker->date
    ];
});
