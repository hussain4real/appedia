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

Route::redirect('/', '/main');


Auth::routes();

Route::get('/main', 'HomeController@index')->name('main');

//product details page
// Route::get('/products/{id}', 'ProductController@detail')->name('product.detail');

//routes for all search queries
Route::get('/products/search', 'ProductController@search')->name('products.search');

//routes for all products
Route::resource('products', 'ProductController');

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


//route for creating a shop
Route::resource('shops', 'ShopController')->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
