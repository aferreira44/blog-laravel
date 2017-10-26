<?php

// Auth

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Tasks

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

// Posts 

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');