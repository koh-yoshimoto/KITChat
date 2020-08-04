<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/profile', 'Auth\ProfileController@ShowProfile');


# Auth Middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/friend', 'FriendController@index');
    Route::post('/friend/add', 'FriendController@store');
    Route::post('/friend/type', 'FriendController@type');
    
    Route::get('/profile', 'Auth\ProfileController@ShowProfile')->name('profile');
    
    Route::get('/message', 'MessageController@index')->name('message.index');
    Route::post('/message', 'MessageController@store')->name('message.store');
    Route::post('/message', 'MessageController@postTweet');
});
