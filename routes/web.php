<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', static function () {
    return redirect('tweets');
});


Route::middleware('auth')->group(static function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('tweet', 'TweetController@store')->name('tweet.store');
});


Route::get('instagram', static function(){
    return view('instagram.index');
});

Auth::routes();
