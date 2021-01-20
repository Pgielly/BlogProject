<?php

use App\Core\Router\Route;

// GET, POST, PATCH, DELETE

Route::get('/', 'PageController@homepage');


Route::get('/connection', 'ConnectionsController@connection');
Route::get('/register', 'ConnectionsController@create');
Route::post('/connection', 'ConnectionsController@verify');
Route::post('/register', 'ConnectionsController@store');

Route::get('/admin', 'ConnectionsController@admin');


Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{id}', 'PostsController@show');

// Route::post()
// Route::patch()
// Route::delete()
