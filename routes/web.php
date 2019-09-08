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

Route::get('/', 'ArticleController@index')->name('home');
Route::resource('/articles', 'ArticleController')->names('articles');

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'role']], function () {
    Route::resource('users', 'UserController')->names('admin.users');
    Route::resource('articles', 'ArticleController')->names('admin.articles');
});
