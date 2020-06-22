<?php

namespace Projet\Controllers\Front;

class ControllerAuth
{
    function loginFront()
    {
        if(isset($_POST['connecter'])){
            //var_dump($_POST);
            $email = $_POST['nom-utilisateur'];
            $password =  $_POST['password'];
            $loginManager = new \Projet\Models\Front\LoginManager();
            $auth = $loginManager->auth($email, $password);
            if($auth){
                header('Location:index.php?action=admin'); 
                exit;
            }
            $errorMessage = "Votre identifiant ou mot de passe est incorrect !";
        }
        require 'app/views/auth/index.php';
    }

    // function register()
    // {

    // }
}