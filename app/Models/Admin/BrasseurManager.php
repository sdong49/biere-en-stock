<?php

namespace Projet\Models\Admin;
use Projet\Models\Manager;

class BrasseurManager extends Manager{

    // public function getBrasseur($nom){
    //     $bdd = $this->dbConnect();
    //     $req = $bdd->query("SELECT* FROM brasseur WHERE nom = '$nom'" );
    //     $req=$req->fetchAll();
    //     return $req;
    // }

    public function getTousBrasseurs(){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM brasseur" );
        $req = $bdd->prepare("SELECT* FROM brasseur");
        $req->execute();
        $req=$req->fetchAll();
        return $req;
    }
}