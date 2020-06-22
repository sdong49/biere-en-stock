<?php

namespace Projet\Models\Front;
use Projet\Models\Manager;

class ArticleManager extends Manager{

    public function getTousProduits(){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM articles" );
        $req = $bdd->prepare("SELECT* FROM articles");
        $req->execute();
        $req=$req->fetchAll();
        return $req;
    }

    public function getProduitById($id){
        $bdd = $this->dbConnect();
        //$req = $bdd->query("SELECT* FROM articles WHERE id='$id'" );
        $req = $bdd->prepare("SELECT* FROM articles WHERE id=?");
        $req->execute(array($id));
        $req=$req->fetchAll();
        return $req[0];
    }

    public function getTousProduitsByCategorie($categorie_id){
        $bdd = $this->dbConnect();
        //$sql = "SELECT* FROM articles WHERE categorie_id='$categorie_id'";
        $req = $bdd->prepare("SELECT* FROM articles WHERE categorie_id=?");
        $req->execute(array($categorie_id));
        $req=$req->fetchAll();
        return $req;
    }
    
}