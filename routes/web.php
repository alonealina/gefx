<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v2\V2IndexController;
use App\Http\Controllers\v2\V2NewAcountController;
use App\Http\Controllers\v2\V2DemoAcountController;
use App\Http\Controllers\v2\V2LoginController;
use App\Http\Controllers\v2\V2ContactController;
use App\Http\Controllers\v2\V2CompanyController;
use App\Http\Controllers\v2\V2FaqController;
use App\Http\Controllers\v2\V2UserController;
use App\Http\Controllers\v2\V2TransferController;
use App\Http\Controllers\v2\V2AddAcountController;
use App\Http\Controllers\v2\V2DepositController;


Route::get('v2/', [V2IndexController::class, 'index'])->name('v2_index');

Route::get('v2/new_acount', [V2NewAcountController::class, 'new_acount'])->name('v2_new_acount');
Route::post('v2/indi_confirm', [V2NewAcountController::class, 'indi_confirm'])->name('v2_indi_confirm');
Route::post('v2/corp_confirm', [V2NewAcountController::class, 'corp_confirm'])->name('v2_corp_confirm');
Route::get('v2/new_acount_complete', [V2NewAcountController::class, 'new_acount_complete'])->name('v2_new_acount_complete');

Route::get('v2/demo_acount', [V2DemoAcountController::class, 'demo_acount'])->name('v2_demo_acount');
Route::post('v2/demo_confirm', [V2DemoAcountController::class, 'demo_confirm'])->name('v2_demo_confirm');
Route::get('v2/demo_acount_complete', [V2DemoAcountController::class, 'demo_acount_complete'])->name('v2_demo_acount_complete');

Route::get('v2/login', [V2LoginController::class, 'login'])->name('v2_login');
Route::post('v2/login_function', [V2LoginController::class, 'login_function'])->name('v2_login_function');
Route::get('v2/login2', [V2LoginController::class, 'login2'])->name('v2_login2');
Route::get('v2/logout', [V2LoginController::class, 'logout'])->name('v2_logout');

Route::get('v2/contact', [V2ContactController::class, 'contact'])->name('v2_contact');
Route::post('v2/contact_confirm', [V2ContactController::class, 'contact_confirm'])->name('v2_contact_confirm');
Route::get('v2/contact_complete', [V2ContactController::class, 'contact_complete'])->name('v2_contact_complete');

Route::get('v2/company', [V2CompanyController::class, 'company'])->name('v2_company');
Route::get('v2/faq', [V2FaqController::class, 'faq'])->name('v2_faq');


// 以下ユーザーページ
Route::get('v2/summary', [V2UserController::class, 'summary'])->name('v2_summary');
Route::get('v2/history', [V2UserController::class, 'history'])->name('v2_history');

Route::get('v2/deposit', [V2DepositController::class, 'deposit'])->name('v2_deposit');
Route::get('v2/crypto_payment', [V2DepositController::class, 'crypto_payment'])->name('v2_crypto_payment');
Route::post('v2/crypto_payment_confirm', [V2DepositController::class, 'crypto_payment_confirm'])->name('v2_crypto_payment_confirm');
Route::get('v2/txid', [V2DepositController::class, 'txid'])->name('v2_txid');
Route::post('v2/txid_confirm', [V2DepositController::class, 'txid_confirm'])->name('v2_txid_confirm');
Route::get('v2/payment_complete', [V2DepositController::class, 'payment_complete'])->name('v2_payment_complete');
Route::get('v2/withdraw', [V2DepositController::class, 'withdraw'])->name('v2_withdraw');
Route::post('v2/bank_withdraw_confirm', [V2DepositController::class, 'bank_withdraw_confirm'])->name('v2_bank_withdraw_confirm');
Route::post('v2/crypto_withdraw_confirm', [V2DepositController::class, 'crypto_withdraw_confirm'])->name('v2_crypto_withdraw_confirm');
Route::get('v2/withdraw_complete', [V2DepositController::class, 'withdraw_complete'])->name('v2_withdraw_complete');


Route::get('v2/transfer', [V2TransferController::class, 'transfer'])->name('v2_transfer');
Route::post('v2/transfer_confirm', [V2TransferController::class, 'transfer_confirm'])->name('v2_transfer_confirm');
Route::get('v2/transfer_complete', [V2TransferController::class, 'transfer_complete'])->name('v2_transfer_complete');

Route::get('v2/add_acount', [V2AddAcountController::class, 'add_acount'])->name('v2_add_acount');
Route::post('v2/add_confirm', [V2AddAcountController::class, 'add_confirm'])->name('v2_add_confirm');
Route::get('v2/add_acount_complete', [V2AddAcountController::class, 'add_acount_complete'])->name('v2_add_acount_complete');

Route::get('v2/setting', [V2UserController::class, 'setting'])->name('v2_setting');
Route::get('v2/setting2', [V2UserController::class, 'setting2'])->name('v2_setting2');
