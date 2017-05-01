<?php
use App\Post;
use App\User;
use App\Comment;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker)
{
    return [
        'name' => $faker->firstName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('thomas'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {


    return [
        'user_id' => rand(1,2),
        'body' => $faker->sentence(rand(6,10),true),
        'private' => rand(0,1),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {


    return [
        'user_id' => rand(1,2),
        'post_id' => rand(1,10),
        'body' => $faker->sentence(rand(6,10),true),

    ];
});
