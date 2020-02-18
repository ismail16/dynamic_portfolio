<?php


Route::get('/', 'frontend\PagesController@index')->name('index');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('education', 'EducationController');
    Route::resource('portfolio', 'PortfolioController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
