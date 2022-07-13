<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v2\V2IndexController;
use App\Http\Controllers\v2\V2NewAcountController;
use App\Http\Controllers\v2\V2DemoAcountController;
use App\Http\Controllers\v2\V2LoginController;
use App\Http\Controllers\v2\V2ContactController;
use App\Http\Controllers\v2\V2FaqController;
use App\Http\Controllers\v2\V2UserController;


Route::get('v2/', [V2IndexController::class, 'index'])->name('v2_index');

Route::get('v2/new_acount', [V2NewAcountController::class, 'new_acount'])->name('v2_new_acount');
Route::post('v2/indi_confirm', [V2NewAcountController::class, 'indi_confirm'])->name('v2_indi_confirm');
Route::post('v2/corp_confirm', [V2NewAcountController::class, 'corp_confirm'])->name('v2_corp_confirm');
Route::get('v2/new_acount_complete', [V2NewAcountController::class, 'new_acount_complete'])->name('v2_new_acount_complete');

Route::get('v2/demo_acount', [V2DemoAcountController::class, 'demo_acount'])->name('v2_demo_acount');
Route::post('v2/demo_confirm', [V2DemoAcountController::class, 'demo_confirm'])->name('v2_demo_confirm');
Route::get('v2/demo_acount_complete', [V2DemoAcountController::class, 'demo_acount_complete'])->name('v2_demo_acount_complete');


Route::get('v2/login', [V2LoginController::class, 'login'])->name('v2_login');
Route::get('v2/login2', [V2LoginController::class, 'login2'])->name('v2_login2');
Route::get('v2/contact', [V2ContactController::class, 'contact'])->name('v2_contact');
Route::get('v2/company', [V2CompanyController::class, 'company'])->name('v2_company');
Route::get('v2/faq', [V2FaqController::class, 'faq'])->name('v2_faq');

Route::get('v2/summary', [V2UserController::class, 'summary'])->name('v2_summary');
Route::get('v2/history', [V2UserController::class, 'history'])->name('v2_history');
Route::get('v2/deposit', [V2UserController::class, 'deposit'])->name('v2_deposit');
Route::get('v2/transfer', [V2UserController::class, 'transfer'])->name('v2_transfer');
Route::get('v2/add_acount', [V2UserController::class, 'add_acount'])->name('v2_add_acount');
Route::get('v2/setting', [V2UserController::class, 'setting'])->name('v2_setting');
Route::get('v2/setting2', [V2UserController::class, 'setting2'])->name('v2_setting2');
