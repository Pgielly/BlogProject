<?php

use App\Controllers\RecipesController;
use App\Core\Router\Route;
use App\Models\Recipe;

// GET, POST, PATCH, DELETE

Route::get('/', 'PageController@homepage');
Route::get('/connexion-page', 'PageController@connection');
Route::get('/register', 'PageController@register');
Route::post('/registration-in-progress', 'ConnexionController@registration');

Route::get('/recipes', 'RecipesController@index');
Route::get('/recipes/create', 'RecipesController@create');
Route::post('/recipes', 'RecipesController@store');
Route::get('/recipes/{id}', 'RecipesController@show');

// Route::post()
// Route::patch()
// Route::delete()
