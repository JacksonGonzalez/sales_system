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
Route::group([// 'middleware' => 'api', // 'prefix' => 'auth',
    'namespace' => 'api'], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('register', 'AuthController@register');
    // Route::post('refresh', 'AuthController@refresh');
    Route::post('checkToken', 'AuthController@checkToken');
    // Route::post('admin', 'AdminController@index');
    // Route::post('users', 'UserController@store');

    Route::resource('roles', 'RolController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
    Route::resource('suppliers', 'SupplierController');
    Route::get('lastOrders', 'DashboardController@lastOrders');
    Route::get('countCharts', 'DashboardController@countCharts');
    Route::post('activateCategory/{id}','CategoryController@activate');
    Route::post('disableCategory/{id}','CategoryController@disable');
    Route::post('activateProduct/{id}','ProductController@activate');
    Route::post('disableProduct/{id}','ProductController@disable');
});


Route::group([// 
    'middleware' => 'auth:api', // 
    'prefix' => 'admin',
    'namespace' => 'api'], function () {

    Route::resource('categories', 'CategoryController');

});