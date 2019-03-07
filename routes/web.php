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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/posts/category', 'HomeController@indexByCategory')->name('home.indexByCategory');
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
Route::get('/categorie/{slug}/posts', 'CategoryController@getPosts')->name('categories.posts');

Route::get('ajax/posts', 'PostController@getAllInAjax');

Auth::routes();

Route::middleware('auth')->prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::resource('posts', 'PostController');
});
