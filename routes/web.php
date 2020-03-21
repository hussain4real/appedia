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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// add item to cart route
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

// cart view route
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

//remove item from cart route
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

//update item in cart route
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');

//checkout route
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// routes for all orders
Route::resource('orders', 'OrderController')->middleware('auth');
