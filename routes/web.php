<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\GefxController@index')->name('index');
Route::get('new_acount', 'App\Http\Controllers\GefxController@new_acount')->name('new_acount');
Route::get('demo_acount', 'App\Http\Controllers\GefxController@demo_acount')->name('demo_acount');
Route::get('login', 'App\Http\Controllers\GefxController@login')->name('login');
Route::get('contact', 'App\Http\Controllers\GefxController@contact')->name('contact');
Route::get('company', 'App\Http\Controllers\GefxController@company')->name('company');
Route::get('faq', 'App\Http\Controllers\GefxController@faq')->name('faq');

Route::get('summary', 'App\Http\Controllers\GefxController@summary')->name('summary');
Route::get('history', 'App\Http\Controllers\GefxController@history')->name('history');
Route::get('deposit', 'App\Http\Controllers\GefxController@deposit')->name('deposit');
Route::get('transfer', 'App\Http\Controllers\GefxController@transfer')->name('transfer');
