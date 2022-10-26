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


Route::group(['prefix' => 'admin'], function() {
    Route::get('sns/index', 'Admin\SnsController@add')->middleware('auth');
    Route::post('sns/index', 'Admin\SnsController@index')->middleware('auth');
    Route::get('sns/index', 'Admin\SnsController@list')->middleware('auth');
    Route::get('sns/delete', 'Admin\SnsController@delete')->middleware('auth');

});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
