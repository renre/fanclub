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

 Route::get('picture', 'FriendsController@picture')->name('friends.picture');
Route::resource('friends', 'FriendsController');



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
