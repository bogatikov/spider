<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
    Route::get('/blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
    Route::get('/blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogController@show'])->where(['slug' => '[A-Za-z0-9\-]+']);


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
