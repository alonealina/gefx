<?php

use Illuminate\Support\Facades\Route;

Route::get('v2/', 'App\Http\Controllers\V2IndexController@index')->name('v2_index');
Route::get('v2/new_acount', 'App\Http\Controllers\V2NewAcountController@new_acount')->name('v2_new_acount');
Route::get('v2/demo_acount', 'App\Http\Controllers\V2DemoAcountController@demo_acount')->name('v2_demo_acount');
Route::get('v2/login', 'App\Http\Controllers\V2LoginController@login')->name('v2_login');
Route::get('v2/contact', 'App\Http\Controllers\V2ContactController@contact')->name('v2_contact');
Route::get('v2/company', 'App\Http\Controllers\V2CompanyController@company')->name('v2_company');
Route::get('v2/faq', 'App\Http\Controllers\V2FaqController@faq')->name('v2_faq');

Route::get('v2/summary', 'App\Http\Controllers\V2UserController@summary')->name('v2_summary');
Route::get('v2/history', 'App\Http\Controllers\V2UserController@history')->name('v2_history');
Route::get('v2/deposit', 'App\Http\Controllers\V2UserController@deposit')->name('v2_deposit');
Route::get('v2/transfer', 'App\Http\Controllers\V2UserController@transfer')->name('v2_transfer');
Route::get('v2/add_acount', 'App\Http\Controllers\V2UserController@add_acount')->name('v2_add_acount');
Route::get('v2/setting', 'App\Http\Controllers\V2UserController@setting')->name('v2_setting');
Route::get('v2/setting2', 'App\Http\Controllers\V2UserController@setting2')->name('v2_setting2');
