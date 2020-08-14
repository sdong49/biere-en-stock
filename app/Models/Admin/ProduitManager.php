<?php

namespace Projet\Models\Admin;
use Projet\Models\Manager;

class ProduitManager extends Manager{

    public function liste($params=null){
        $bdd = $this->dbConnect();
        //var_dump($params);
        if(!is_null($params)){
            if(array_key_exists('id',$params)){
                $produit_id = $params['id'];
                $req = $bdd->prepare("SELECT* FROM articles WHERE id=?" );
                $req->execute(array($produit_id));
            }
            if(array_key_exists('cat',$params)){
                $categorie = $params['cat'];
                $req = $bdd->prepare("SELECT* FROM articles WHERE categorie=?" );
                $req->execute(array($categorie));
            }
        }else{
            $req = $bdd->prepare("SELECT* FROM articles" );
            $req->execute();
        }
        $req=$req->fetchAll();
       
        return $req;
    }

    public function edite($produit){
        $id = (int)$produit['id_produit'];
        $title = $produit['title'];
        $description = $produit['description'];
        $image = $produit['image'];
        $categorie = (int)$produit['categorie'];
        $brasseur = (int)$produit['brasseur'];
        $contenance = (int)$produit['contenance'];
        $degre = $produit['degre'];

        $bdd = $this->dbConnect();
        $sql = "UPDATE articles SET nom=:title, description=:description, image=:image, categorie_id=:categorie, brasseur_id=:brasseur, contenance_id=:contenance, degre=:degre WHERE id=:id";
        $req = $bdd->prepare($sql);
        $req->execute(array(
            'title' => $title,
            'description' => $description,
            'image' => $image,
            'categorie' => $categorie,
            'brasseur' => $brasseur,
            'contenance' => $contenance,
            'degre' => $degre,
            'id' => $id
        ));
    }

    public function ajout($produit){
        $title = $produit['title'];
        $description = $produit['description'];
        $image = $produit['image'];
        $categorie = (int)$produit['categorie'];
        $brasseur = (int)$produit['brasseur'];
        $contenance = (int)$produit['contenance'];
        $degre = $produit['degre'];

        $bdd = $this->dbConnect();

        $req = $bdd->prepare("INSERT INTO articles (nom, image, degre, description , categorie_id, brasseur_id, contenance_id) VALUES (:title,:image,:degre,:description,:categorie,:brasseur,:contenance)");
        $req->execute(array(
            'title' => $title, 
            'image' => $image, 
            'degre' => $degre, 
            'description' => $description, 
            'categorie' => $categorie, 
            'brasseur' => $brasseur,
            'contenance' => $contenance
        ));
    }

    public function supprimer($produit_id){
        $bdd = $this->dbConnect();
        //$sql = "DELETE FROM articles WHERE id=$produit_id";
        $req = $bdd->prepare("DELETE FROM articles WHERE id=?");
        $req->execute(array($produit_id));
        //var_dump($req);
        header('Location:index.php?action=admin'); 
    }
}