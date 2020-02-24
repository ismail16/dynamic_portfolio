<?php


Route::get('/', 'frontend\PagesController@index')->name('index');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('education', 'EducationController');
    Route::resource('category', 'CategoryController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('setting', 'SettingController');

    Route::get('setting/{id}/social-media', 'SocialMediaController@social_media_setting')->name('social_media_setting');


    Route::get('setting/{id}/profile', 'ProfileController@profile')->name('profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
