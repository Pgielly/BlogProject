<?php

namespace App\Controllers;

use App\Core\View;

class PageController
{
    public function homepage()
    {
        new View('homepage');
    }
    public function connection()
    {
        new View('/recipes/connection');
    }
    public function register()
    {
        new View('/recipes/register');
    }
}