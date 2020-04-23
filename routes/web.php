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

Route::redirect('/', '/landing-page');

\Mpociot\ApiDoc\ApiDoc::routes("/apidoc");
Auth::routes();

Route::get('/landing-page', 'HomeController@index')->name('landing-page');

//product details page
// Route::get('/products/{id}', 'ProductController@detail')->name('product.detail');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');

//routes for all search queries
Route::get('/search', 'ProductController@search')->name('search');

//routes for all products
// Route::resource('products', 'ProductController');
Route::get('/products', 'ProductController@index')->name('products.index');

// add item to cart route
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');

// add item to saveForLater
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@store')->name('cart.store');

// cart view route
Route::get('/cart', 'CartController@index')->name('cart.index');

// add item to cart route
Route::post('/cart', 'CartController@store')->name('cart.store');

//remove item from cart route
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');

//update item in cart route
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');

//checkout route
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// guest checkout route
Route::get('/cart/guestCheckout', 'CartController@checkout')->name('guestCheckout.checkout');


//thank you page route
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

// routes for all orders
Route::resource('orders', 'OrderController')->middleware('auth');


//route for creating a shop
Route::resource('shops', 'ShopController')->middleware('auth');


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::middleware('auth')->group(function () {

    //user profile page routes
    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');

    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrderController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrderController@show')->name('orders.show');
    Route::resource('review','ProductReviewController');
});

Route::resource('/wishlist', 'WishlistController' );
