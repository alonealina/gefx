<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\GefxController@index')->name('index');
Route::get('new_acount', 'App\Http\Controllers\GefxController@new_acount')->name('new_acount');
Route::get('demo_acount', 'App\Http\Controllers\GefxController@demo_acount')->name('demo_acount');
Route::get('login', 'App\Http\Controllers\GefxController@login')->name('login');
Route::get('news', 'App\Http\Controllers\GefxController@news')->name('news');
Route::get('news_detail', 'App\Http\Controllers\GefxController@news_detail')->name('news_detail');
Route::get('games', 'App\Http\Controllers\GefxController@games')->name('games');
Route::get('technology', 'App\Http\Controllers\GefxController@technology')->name('technology');
Route::get('partner', 'App\Http\Controllers\GefxController@partner')->name('partner');
Route::get('contact', 'App\Http\Controllers\GefxController@contact')->name('contact');
Route::get('company', 'App\Http\Controllers\GefxController@company')->name('company');
