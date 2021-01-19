<?php

use App\Controllers\RecipesController;
use App\Core\Router\Route;
use App\Models\Recipe;

// GET, POST, PATCH, DELETE

Route::get('/', 'PageController@homepage');
Route::get('/connexion-page', 'PageController@connection');
// Route::post('/connexion', 'RecipesController@connection');
Route::get('/posts', 'PostsController@index');

// Route::post()
// Route::patch()
// Route::delete()
