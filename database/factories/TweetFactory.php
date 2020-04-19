<?php

/** @var Factory $factory */

use App\Tweet;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Tweet::class, static function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'body' => $faker->sentence(random_int(15, 50))
    ];
});
