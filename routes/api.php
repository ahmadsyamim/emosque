<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1'], function () {
    Route::resource('mosques', 'MosqueAPIController');
    Route::resource('blog_posts', 'BlogPostAPIController');
    Route::resource('blogPosts', 'BlogPostAPIController');
});


Route::resource('mosques', 'MosqueAPIController');
Route::resource('blog_posts', 'BlogPostAPIController');
Route::resource('blogPosts', 'BlogPostAPIController');