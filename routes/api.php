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

Route::apiResource('categorias','categoriesController');
Route::get('categoryPost/{id}','categoriesController@CategoryPost');
Route::get('category/{id}','categoriesController@category');
Route::get('posts','categoriesController@posts');
Route::get('post/{id}','categoriesController@postsBody');

//categorias y posts
Route::get('postandcategories','categoriesController@postandcategories');