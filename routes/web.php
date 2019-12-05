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
    Route::get('/category/{id}', 'ShopController@category')->name('shop.category');
    Route::get('/subcategory/{id}', 'ShopController@subcategory')->name('shop.subcategory');
    Route::get('/product/{id}', 'ShopController@show')->name('shop.product');
});

Route::prefix('cart')->group(function(){
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::post('/add/{product}', 'CartController@store')->name('cart.add');
    Route::delete('/delete/{product}', 'CartController@destroy')->name('cart.delete');
    Route::post('/{product}/update', 'CartController@update')->name('cart.update');
    Route::delete('/', 'CartController@clearCart')->name('cart.clear');
    Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
});
Auth::routes();


Route::group(['prefix' => 'checkout',  'middleware' => 'cart'], function(){
    Route::post('/', 'CheckoutController@index')->name('checkout.index');
    //Route::put('/scheduler', 'CheckoutController@update')->name('admin.scheduler.update');
});

Route::get('/home', 'HomeController@index')->name('home');
