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


//use Illuminate\Routing\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

Route::resource('users','UserController');

Route::get('/', function () {
    return redirect('/home');
});

Route::get('empty',function(){
    Cart::destroy();
});

Auth::routes();

Route::get('/home', 'LandingPageController@index')->name('home');
Route::get('/home/{product}', 'LandingPageController@show')->name('detail');
Route::get('/filter/{cislo}', 'detailController@index')->name('filter');
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('destroy');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::post('/placeOrder', 'CheckoutController@placeOrder')->name('placeOrder');
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::get('/users/list/', 'UserController@list');
Route::patch('/cart/{product}', 'CartController@update')->name('update');
Route::get('products/list/{page}', 'ProductController@list');
Route::delete('products/{product}', 'ProductController@destroy');
Route::post('products/', 'ProductController@store');
Route::get('products/{product}/edit', 'ProductController@edit');
Route::put('products/{product}', 'ProductController@update');

