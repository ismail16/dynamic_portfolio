<?php


Route::get('/', 'frontend\PagesController@index')->name('index');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('education', 'EducationController');
    Route::resource('category', 'CategoryController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('setting', 'SettingController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
