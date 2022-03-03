<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'Post'], function () {
    Route::get('/', 'PostController@index')->name('home');
    Route::get('/post/{slug}', 'PostController@show')->name('posts.single');
    Route::group(['namespace' => 'Comment', 'prefix' => '/post/{slug}'], function () {
        Route::resource('/comments', 'CommentController');
    });
    Route::group(['namespace' => 'Like', 'prefix' => '/post/{slug}'], function () {
        Route::resource('/likes', 'LikeController');
    });
});


Route::get('/category/{slug}', 'CategoryController@index')->name('categories.single');
Route::get('/tag/{slug}', 'TagController@index')->name('tags.single');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('/photography', 'PhotographyController@index')->name('foto');
Route::match(['get', 'post'], '/contact', 'ContactController@send')->name('contact');
Route::get('/about', function () {
    return view('about.about');
})->name('about');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');





