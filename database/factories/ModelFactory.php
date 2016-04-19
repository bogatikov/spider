<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\News::class, function(Faker\Generator $faker) {
    return [
        'slug' => str_slug($faker->sentence(3)),
        'title' => $faker->sentence(),
        'image' => 'http://fakeimg.pl/500x189/?font=lobster&text=' . $faker->sentence(1),
        'news' => $faker->text(300),
        'published' => $faker->boolean(80),
        'user_id' => 1
    ];
});