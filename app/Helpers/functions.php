<?php

use Illuminate\Support\Str;

if(!function_exists('random_string')){
    function random_string(int $length = 16){
        return Str::random($length);
    }
}

if(!function_exists('random_name')){
    function random_name(){

        $faker =  Faker\Factory::create();

        return $faker->userName;
    }
}