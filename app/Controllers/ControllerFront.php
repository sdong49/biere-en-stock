<?php

namespace Projet\Controllers;

class ControllerFront{
    function accueil()
    {   
        require 'app/views/accueil.php';
    }

    function registerFront()
    {
        require 'app/views/inscription.php';
    }

}