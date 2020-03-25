<?php

/**
 * Admin routes
 */
use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');
