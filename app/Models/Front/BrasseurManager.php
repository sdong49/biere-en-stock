<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class BrasseurManager extends Manager{

    public function getBrasseurById($id){
        $bdd = $this->dbConnect();
        //$sql = "SELECT* FROM brasseur WHERE id = '$id'";
        $req = $bdd->prepare("SELECT* FROM brasseur WHERE id=?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        if(!empty($req)){
            return $req[0];
        }else{
            return false;
        }
        
    }

    public function getBrasseurPays($id){
        $bdd = $this->dbConnect();
        //$sql = "SELECT nom, nom_pays FROM brasseur INNER JOIN pays ON brasseur.pays_id = pays.id WHERE brasseur.id = '$id'";
        $req = $bdd->prepare("SELECT nom, nom_pays FROM brasseur INNER JOIN pays ON brasseur.pays_id = pays.id WHERE brasseur.id =?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        if(!empty($req)){
            return $req[0];
        }else{
            return false;
        }
    }
}