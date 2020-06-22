<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class LoginManager extends Manager{

    public function auth($email,$password){
        $bdd = $this->dbConnect();
        //$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $req = $bdd->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $req->execute(array($email,$password));
        $req = $req->fetchAll();
        return $req;
    }
}