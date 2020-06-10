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
Route::resource('invoices', 'InvoiceController');
Route::get('creditCards', 'CreditCardController@index');
Route::get('creditCards/export', 'CreditCardController@export');
Route::post('creditCards/import', 'CreditCardController@import');
Route::post('virtualAccounts/normal', 'VirtualAccountController@normal');
Route::get('virtualAccounts', 'VirtualAccountController@index');

Route::get('/', function () {
    return view('welcome');
});
