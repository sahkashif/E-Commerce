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
//Route::post('/','MailController@mailVerification');
Route::get('/subscribed/{email}','SubscriptionController@saveEmail');


Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@index')->name('shop.index');
    Route::get('/category/{id}', 'ShopController@category')->name('shop.category');
    Route::get('/subcategory/{id}', 'ShopController@subcategory')->name('shop.subcategory');
    Route::get('/product/{id}', 'ShopController@show')->name('shop.product');
});

Route::prefix('cart')->group(function(){
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::post('/{product}', 'CartController@store')->name('cart.add');
    Route::delete('/{product}', 'CartController@destroy')->name('cart.delete');
    Route::post('/update/{product}', 'CartController@update')->name('cart.update');
    Route::delete('/', 'CartController@clearCart')->name('cart.clear');
    Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
});
Auth::routes();



Route::group(['prefix' => 'checkout',  'middleware' => 'cart'], function(){
    Route::get('/', 'CheckoutController@index')->name('checkout.index');
    Route::post('/shipping', 'CheckoutController@shipping')->name('checkout.shipping');
    Route::get('/payment-details', 'CheckoutController@create')->name('checkout.payment_details');
    Route::post('/', 'CheckoutController@shipping')->name('checkout.shipping');
});
Route::group(['prefix' => 'payment'], function () {
    Route::group(['prefix' => 'via', 'middleware' => ['cart','shipping']], function () {
        Route::post('/{slug}', 'PaymentController@cod')->name('payment.via.cod');
    });
});


Route::group(['prefix' => 'wishlist', 'middleware' => 'auth'], function () {
    Route::get('/', 'WishListController@index')->name('wishlist.index');
    Route::get('/{product}', 'WishListController@store')->name('wishlist.store');
    Route::delete('/{product}', 'WishListController@destroy')->name('wishlist.delete');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/orders', 'HomeController@orders')->name('user.orders');
    Route::get('/order/{id}', 'HomeController@order')->name('user.order');
    
    //Route::get('/order/{id}', 'HomeController@order')->name('user.order');
    
});
Route::get('print/order/{id}', 'OrderController@print')->name('order.print');
/*************** ADMIN (UPLOADER) ****************/
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin','auth']], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('category', 'CategoryController'); 
    Route::resource('subcategory', 'SubcategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('order', 'OrderController'); 
});



Route::get('/test', 'TestController@index');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services','PagesController@services')->name('services');
Route::get('/courses','PagesController@courses')->name('courses');
Route::get('/studios', 'PagesController@studios')->name('studios');
Route::get('/aboutUs', 'PagesController@aboutUs')->name('aboutUs');
