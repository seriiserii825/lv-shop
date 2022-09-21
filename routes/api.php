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

/* Route::middleware('auth:api')->get('/user', function (Request $request) { */
/*   return $request->user(); */
/* }); */

Route::group([
  'middleware' => ['auth:api'],
  'prefix' => 'auth'
], function ($router) {
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::get('me', 'AuthController@me');
});

Route::group([
  'middleware' => ['auth:api', 'status'],
  'prefix' => 'auth'
], function ($router) {
  Route::apiResources([
    'media' => 'Admin\MediaController',
    'order' => 'Admin\OrderController',
    'product' => 'Admin\ProductController',
    'user' => 'Admin\UserController',
    'category' => 'Admin\CategoryController',
    'attribute' => 'Admin\AttributeController',
    'attribute-value' => 'Admin\AttributeValueController',
  ]);
  Route::get('admin', 'Admin\AdminController@index');
  Route::get('user-get-all', 'Admin\UserController@getAll');
  Route::get('product-search', 'Admin\ProductController@search');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::get('attribute', 'Front\AttributeFrontController@index');
Route::get('category', 'Front\CategoryFrontController@index');
Route::get('last-products', 'Front\ProductFrontController@lastProducts');
Route::post('filter-products', 'Front\ProductFrontController@index');
Route::post('related-products', 'Front\ProductFrontController@relatedProducts');
Route::get('single-product/{id}', 'Front\ProductFrontController@show');
Route::post('create-order', 'Front\OrderFrontController@store');
Route::get('get-order/{id}', 'Front\OrderFrontController@getOrder');


