<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {

    return [
        'author_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'seo_title' => $faker->word,
        'excerpt' => $faker->text,
        'body' => $faker->text,
        'image' => $faker->word,
        'slug' => $faker->word,
        'meta_description' => $faker->text,
        'status' => $faker->word,
        'featured' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'tags' => $faker->text,
        'published_date' => $faker->date('Y-m-d H:i:s')
    ];
});
