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

Route::group( ['prefix' => 'v1'], function(){
    Route::post('/register', 'Api\AuthController@register');
    Route::post('/login', 'Api\AuthController@login');

    Route::post('/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'Api\ResetPasswordController@reset');

    Route::get('/email/reseend', 'Api\VerificationController@resend')->name('verification.resend');
    Route::get('/email/verify/{id}/{hash}', 'Api\VerificationController@verify')->name('verification.verify');

    Route::group(['middleware' => 'auth:api'], function(){
    Route::get('getUser', 'Api\AuthController@getUser');

    });

    //routes for all users
    // Route::resource('/users', 'UsersController');

    // Route::get('users', 'UsersController@index');
    // Route::get('users/{id}', 'UsersController@show');

    //routes for all products
    Route::resource('/products', 'Api\ProductController');



    //routes for all search queries
    Route::get('/search', 'ProductController@search');

    //route for viewing shops
    Route::apiResource('/shops', 'Api\ShopController');

    //route for viewing malls
    Route::apiResource('/malls', 'Api\MallController');
});

