<?php

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::resource('mosques', 'MosqueController');
Route::resource('events', 'EventController');

Route::get('/lang/{key}', function($key)
{
    if (!empty($key) && in_array($key, ['en','ja'])) {
        Session::put('locale', $key);
    }
    return Redirect::back();
});