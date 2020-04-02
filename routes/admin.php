<?php

/**
 * Admin routes
 */
use Illuminate\Support\Facades\Route;

/**
 * File manager routes
 */
Route::group(['middleware' => 'auth', 'prefix' => 'filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::as('admin.')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('posts', 'PostController');
    Route::post('/posts/{post}/publish', 'PostController@publish')->name('posts.publish');

    Route::resource('categories', 'CategoryController');
    Route::post('/categories/{id}/restore', 'CategoryController@restore')->name('categories.restore');

    Route::resource('pages', 'PageController')->except('show');
});
