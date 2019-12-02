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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/cart/product/add/{product_id}', 'CartController@addProduct')->name('cart.product.add');
Route::get('/cart/product/remove/{row_id}', 'CartController@removeProduct')->name('cart.product.remove');

Route::get('/cart/product/increaseQty/{row_id}', 'CartController@increaseQty')->name('cart.product.increaseQty');
Route::get('/cart/product/decreaseQty/{row_id}', 'CartController@decreaseQty')->name('cart.product.decreaseQty');

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::get('/payments/checkout', 'PaymentController@checkout')->name('payments.checkout');




Route::resource('carts', 'CartController');

Route::group(['middleware'=> ['auth'] ], function()
{
    Route::resource('products', 'ProductController');
    Route::resource('productCategories', 'ProductCategoryController');
    Route::resource('orders', 'OrderController');
    Route::resource('payments', 'PaymentController');
});



