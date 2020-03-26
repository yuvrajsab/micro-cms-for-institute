<?php

/**
 * Admin routes
 */
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/publish', 'PostController@publish')->name('posts.publish');

Route::resource('categories', 'CategoryController');
