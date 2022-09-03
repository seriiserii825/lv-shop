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
  Route::get('user', 'AuthController@user');
});

Route::group([
  'middleware' => ['auth:api', 'status'],
  'prefix' => 'auth'
], function ($router) {
  Route::apiResources([
    'media' => 'Admin\MediaController',
    'order' => 'Admin\OrderController',
  ]);
  Route::get('admin', 'Admin\AdminController@index');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
