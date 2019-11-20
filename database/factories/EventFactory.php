<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->word,
        'date_from' => $faker->date('Y-m-d H:i:s'),
        'date_to' => $faker->date('Y-m-d H:i:s'),
        'user_id' => $faker->randomDigitNotNull,
        'mosque_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
