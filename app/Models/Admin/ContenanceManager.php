<?php

namespace Projet\Models\Admin;
use Projet\Models\Manager;

class ContenanceManager extends Manager{

    // public function getContenance($nom){
    //     $bdd = $this->dbConnect();
    //     $req = $bdd->query("SELECT* FROM contenance WHERE nom = '$nom'" );
    //     $req=$req->fetchAll();
    //     return $req;
    // }

    public function getTousContenances(){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM contenance" );
        $req = $bdd->prepare("SELECT* FROM contenance");
        $req->execute();
        $req=$req->fetchAll();
        return $req;
    }
}