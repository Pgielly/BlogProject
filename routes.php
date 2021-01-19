<?php

use App\Core\Router\Route;

// GET, POST, PATCH, DELETE

Route::get('/', 'PageController@homepage');

// ---- Eliot
// Route::get('/recipes', 'RecipesController@index');
// Route::get('/recipes/create', 'RecipesController@create');
// Route::post('/recipes', 'RecipesController@store');
// Route::get('/recipes/{id}', 'RecipesController@show');

// ---- Moi 
Route::get('/connexion-page', 'PageController@connection');
// Route::post('/connexion', 'RecipesController@connection');
Route::get('/posts', 'PostsController@index');

// Route::post()
// Route::patch()
// Route::delete()
