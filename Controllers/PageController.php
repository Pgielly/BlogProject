<?php

namespace App\Controllers;

use App\Core\View;

class PageController
{
    public function homepage()
    {
        new View('homepage');
    }
    public function deconnection()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }
}