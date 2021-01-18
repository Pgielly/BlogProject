<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Recipe;

class PageController
{
    public function homepage()
    {
        new View('homepage');
    }
    public function connection()
    {
        new View('connection');
    }
}
