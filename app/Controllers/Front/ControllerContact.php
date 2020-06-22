<?php

namespace Projet\Controllers\Front;

class ControllerContact
{
    public function contact()
    {
        if(isset($_POST["envoiContact"])){
            $contactManager =  new \Projet\Models\Front\ContactManager();
            $ajout = $contactManager->ajoutMessage($_POST);
            if($ajout){
                $message =["ok"=>"Votre message a été envoyé avec succèss !"];
            }else{
                $message = ["nok"=> "Votre message n'a été envoyé, ressayer plus tard !"];
            }
        }
        require 'app/views/contact.php';
    }
}