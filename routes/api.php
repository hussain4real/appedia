<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::post('/register', 'Api\AuthController@register');
    Route::post('/login', 'Api\AuthController@login');
    Route::post('/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'Api\ResetPasswordController@reset');
    Route::group(['middleware' => 'auth:api'], function(){
    Route::post('getUser', 'Api\AuthController@getUser');
    Route::get('users', 'UsersController@index');
    // Route::get('users/{id}', 'UsersController@show');
    });

    //routes for all users
    // Route::resource('/users', 'UsersController');


    //routes for all products
    Route::get('/products', 'ProductController@index');

    // product details
    Route::get('/products/{id}', 'ProductController@show');

    //routes for all search queries
    Route::get('/search', 'ProductController@search');

    //route for viewing shops
    Route::resource('/shops', 'ShopController');

    //route for viewing malls
    Route::resource('/malls', 'MallController');
});

