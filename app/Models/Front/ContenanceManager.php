<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class ContenanceManager extends Manager{

    public function getContenanceById($id){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM contenance WHERE id = '$id'" );
        $req = $bdd->prepare("SELECT* FROM contenance WHERE id = ?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        if(!empty($req)){
            return $req[0];
        }else{
            return false;
        }
        
    }
}