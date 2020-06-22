<?php

namespace Projet\Models\Admin;
use Projet\Models\Manager;

class MessageManager extends Manager{
    private $bdd;
    
    public function __construct(){
        $this->bdd = $this->dbConnect();
    }

    public function getTousMessages(){
        //$req = $this->bdd->query("SELECT* FROM message" );
        $req = $this->bdd->prepare("SELECT* FROM message");
        $req->execute();
        $req = $req->fetchAll();
        //var_dump($req);
        return $req;
    }

    public function getTousMessagesAsc(){
        //$req = $this->bdd->query("SELECT* FROM message ORDER BY nom ASC" );
        $req = $this->bdd->prepare("SELECT* FROM message ORDER BY nom ASC" );
        $req->execute();
        $req = $req->fetchAll();
        //var_dump($req);
        return $req;
    }

    public function getTousMessagesDesc(){
        $req = $this->bdd->prepare("SELECT* FROM message ORDER BY nom DESC" );
        $req->execute();
        $req = $req->fetchAll();
        //var_dump($req);
        return $req;
    }

    public function ajax($messages){
        $html = "";
        foreach($messages as $message){
            $nom = $message['nom'];
            $prenom = $message['prenom'];
            $email = $message['email'];
            $phone = $message['phone'];
            $adresse = $message['adresse'];
            $message_user = $message['message']; 

            $html.= "<tr>".
            "<td>" . $nom . "</td>".
            "<td>" . $prenom . "</td>" .
            "<td>" . $email . "</td>" .
            "<td>" . $phone . "</td>" .
            "<td>" . $adresse . "</td>" .
            "<td>" . $message_user . "</td>" .
            "</tr>"; 
        }
        return $html;
    }
}