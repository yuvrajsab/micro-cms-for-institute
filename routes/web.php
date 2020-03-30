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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

/** Home */
Route::get('/', 'WelcomeController@index')->name('home');

/** Posts */
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
