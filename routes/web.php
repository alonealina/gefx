<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CasterController@index')->name('index');
Route::get('about', 'App\Http\Controllers\CasterController@about')->name('about');
Route::get('news', 'App\Http\Controllers\CasterController@news')->name('news');
Route::get('news_detail', 'App\Http\Controllers\CasterController@news_detail')->name('news_detail');
Route::get('games', 'App\Http\Controllers\CasterController@games')->name('games');
Route::get('technology', 'App\Http\Controllers\CasterController@technology')->name('technology');
Route::get('partner', 'App\Http\Controllers\CasterController@partner')->name('partner');
Route::get('contact', 'App\Http\Controllers\CasterController@contact')->name('contact');
