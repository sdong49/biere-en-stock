<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class CategorieManager extends Manager{

    public function getCategorieById($id){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM categorie WHERE id = '$id'" );
        $req = $bdd->prepare("SELECT* FROM categorie WHERE id=?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        return $req[0];
    }
}