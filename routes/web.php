<?php

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
Route::get('/', 'FriendsController@index');


 Route::get('rental', 'FriendsController@rental')->name('friends.rental');
 Route::get('jump', 'FriendsController@jump')->name('friends.jump');

Route::resource('friends', 'FriendsController');