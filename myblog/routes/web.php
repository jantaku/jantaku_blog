<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    // return view('welcome');
    // return view('posts.index');
    Route::get('/', 'PostsController@index');
    Route::get('/posts/create', 'PostsController@create');
    Route::get('/posts/{id}', 'PostsController@show');
    Route::get('/posts/{id}/edit', 'PostsController@edit');
    Route::post('/posts', 'PostsController@store');
    Route::patch('/posts/{id}', 'PostsController@update');
    Route::delete('/posts/{id}', 'PostsController@destroy');

    Route::post('/posts/{post}/comments', 'CommentsController@store');
    Route::delete('/posts/{post}/comments/{comment}', 'CommentsController@destroy');
});
