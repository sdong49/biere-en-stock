<?php

namespace Projet\Models\Admin;
use Projet\Models\Manager;

class CategorieManager extends Manager{

    public function getCategorie($nom){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM categorie WHERE nom = '$nom'" );
        $req = $bdd->prepare("SELECT* FROM categorie WHERE nom = ?");
        $req->execute(array($nom));
        $req=$req->fetchAll();
        return $req;
    }

    public function getToutesCategories(){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM categorie" );
        $req = $bdd->prepare("SELECT* FROM categorie");
        $req->execute();
        $req=$req->fetchAll();
        return $req;
    }

    public function getCategorieById($id){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM categorie WHERE id = '$id'" );
        $req = $bdd->prepare("SELECT* FROM categorie WHERE id = ?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        return $req[0];
    }
}