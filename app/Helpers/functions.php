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
        return Faker\Factory::create()->userName;
    }
}

if (!function_exists('random_words')) {
    function random_words($length = 6)
    {
        return Faker\Factory::create()->sentence($length);
    }
}

if (!function_exists('random_avatar')) {
    function random_avatar(int $size = 50, $id = null): string
    {
        try {
            if ($id) {

                return sprintf('https://i.pravatar.cc/%d?u=%s', $size, $id);
            }

            return sprintf('https://i.pravatar.cc/%d?u=%d', $size, random_int(1000, 90000));

        } catch (Exception $e) {

            return sprintf('https://i.pravatar.cc/%d?u=%s', $size, uniqid('', true));
        }
    }
}


if (!function_exists('random_location')) {
    function random_location(): string
    {
        $locations = [
            'United States',
            'Dominican Republic',
            'Santo Domingo',
            'Dubai',
            'Santiago',
            'Los Angeles, CA',
            'Venezuela',
            'Colombia',
            'New York',
            'Colorado',
            'Bonao',
            'North Carolina',
            'Russia',
            'Dublin',
            'The moon',
            'Canada',
            'Ontario',
            'Toronto',
            'Omaha',
            'The Sun',
        ];


        try {
            $random = random_int(0, count($locations) - 1);

            return $locations[$random];
        } catch (Exception $e) {
        }
    }
}