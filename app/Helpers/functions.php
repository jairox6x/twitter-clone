<?php

use Illuminate\Support\Str;

if (!function_exists('random_string')) {
    function random_string(int $length = 16)
    {
        return Str::random($length);
    }
}

if (!function_exists('random_name')) {
    function random_name()
    {
        $faker = Faker\Factory::create();

        return $faker->userName;
    }
}

if (!function_exists('random_avatar')) {
    function random_avatar(int $size = 50): string
    {
        try {
            return sprintf('https://i.pravatar.cc/%d?u=%d', $size, random_int(1000, 90000));
        } catch (Exception $e) {
            return sprintf('https://i.pravatar.cc/%d?u=%s', $size, uniqid('', true));
        }
    }
}