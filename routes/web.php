<?php


Route::get('/', 'frontend\PagesController@index')->name('index');
Route::post('/contact-post', 'frontend\PagesController@contact_post')->name('contact.post');
Route::get('/documentation', 'frontend\PagesController@documentation')->name('documentation');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('education', 'EducationController');
    Route::resource('category', 'CategoryController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('setting', 'SettingController');
    Route::resource('setting-social-media', 'SocialMediaController');
    Route::resource('setting-profile', 'ProfileController');
    Route::resource('scholarship-or-award', 'ScholarshipController');
    Route::resource('skill', 'SkillController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('contact', 'ContactController');
    Route::resource('testimonial', 'TestimonialController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
