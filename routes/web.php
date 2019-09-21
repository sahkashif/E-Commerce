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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/','MailController@mailVerification');
Route::get('/subscribed/{email}','SubscriptionController@saveEmail');


Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@index')->name('shop.index');
    Route::post('/', 'ShopController@filter')->name('shop.filter');
});
