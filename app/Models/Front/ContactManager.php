<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class ContactManager extends Manager{

    public function ajoutMessage($data){
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $email = $data['email'];
        $tel = $data['tel'];
        $adresse = $data['address'];
        $message = $data['message'];

        $bdd = $this->dbConnect();
        //$sql = "INSERT INTO message (nom, prenom, email, phone , adresse, message) VALUES ('$nom', '$prenom', '$email', '$tel', '$adresse', '$message')";
        $req = $bdd->prepare("INSERT INTO message (nom, prenom, email, phone , adresse, message) VALUES (:nom,:prenom,:email,:phone,:adresse,:message)");
        $req->execute(array(
            'nom' => $nom, 
            'prenom' => $prenom, 
            'email' => $email, 
            'phone' => $tel, 
            'adresse' => $adresse, 
            'message' => $message));
        return $req;
    }
}