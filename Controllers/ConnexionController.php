<?php 
namespace App\Controllers;

use App\Core\Database\Model;
use App\Core\View;
use App\Models\Registration;
use App\Core\Router\Request;

class ConnexionController{
    public function registration(Request $request)
    {
        $registration = new Registration();
        $registration->name = $request->getBody()['name'];
        $registration->mdp = $request->getBody()['mdp'];
        $registration->email = $request->getBody()['email'];
        var_dump($registration); 
        die;
        if ($registration->save()) {
            header('Location: /register');
        }
    }

}