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

Route::get('/', 'frontend\PagesController@index')->name('index');
// Route::get('/', 'backend\AuthController@authorregister')->name('authorregister');
// Route::get('/', 'backend\AuthController@authorlogin')->name('authorlogin');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
