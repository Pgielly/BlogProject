<?php

use App\Controllers\ActionController ;
use App\Core\Router\Route;

Route::post('/connexion', 'ActionController@connection');