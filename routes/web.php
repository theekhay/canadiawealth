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

Route::get("/", function () {
    return view('welcome');
});

Auth::routes();

Route::get('lang/{locale}', 'HomeController@lang');

Route::get('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/admin', 'Auth\RegisterController@storeAdmin')->name('store.admin');


Route::get('/home/{locale?}', 'HomeController@index')->name('home.index');

Route::group(['prefix' => 'en' ], function()
{
    Route::get('/user/profile', 'HomeController@profile')->name('user.profile');
    Route::get('/cart/product/add/{product_id}', 'CartController@addProduct')->name('cart.product.add');
    Route::get('/cart/product/remove/{row_id}', 'CartController@removeProduct')->name('cart.product.remove');
    Route::get('/order/showCart/{order_id}', 'OrderController@showCart')->name('order.showCart');

    Route::get('/cart/product/increaseQty/{row_id}', 'CartController@increaseQty')->name('cart.product.increaseQty');
    Route::get('/cart/product/decreaseQty/{row_id}', 'CartController@decreaseQty')->name('cart.product.decreaseQty');

    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
});


Route::resource('carts', 'CartController');

Route::group(['middleware'=> ['auth'], 'prefix' => 'en' ], function()
{
    Route::patch('/user/update/{id}', 'HomeController@updateProfile')->name('user.update');
    Route::get('/payments/checkout', 'PaymentController@checkout')->name('payments.checkout');

    Route::resource('products', 'ProductController');
    Route::resource('productCategories', 'ProductCategoryController');
    Route::resource('orders', 'OrderController');
    Route::resource('payments', 'PaymentController');
});



