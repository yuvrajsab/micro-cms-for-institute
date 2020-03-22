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

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main')->withPosts(Post::latest()->take(10)->get());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::patch('/posts/{post}/update', 'PostController@update')->name('posts.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.delete');
