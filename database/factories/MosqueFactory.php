<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mosque;
use Faker\Generator as Faker;

$factory->define(Mosque::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'image' => $faker->word,
        'description' => $faker->text,
        'address' => $faker->text,
        'website' => $faker->word,
        'prefectures' => $faker->word,
        'city' => $faker->word,
        'status' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
