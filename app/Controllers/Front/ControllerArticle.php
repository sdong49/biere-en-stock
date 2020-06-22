<?php

namespace Projet\Controllers\Front;
use Projet\Models\Front\ArticleManager;
use Projet\Models\Front\CategorieManager;

class ControllerArticle
{ 
    private $produitManager;
    private $categorieManager;

    public function __construct(){
        $this->produitManager = new ArticleManager();
        $this->categorieManager = new CategorieManager();
    }

    public function produitFront($params=null)
    {        
        if(is_null($params)){ 
            $produits = $this->produitManager->getTousProduits();
            require_once 'app/views/produits.php';
        }else{
            //show un seul article
            if(array_key_exists('id',$params)){
                $produit = $this->produitManager->getProduitById($params['id']);
                //get info categorie
                $cat = $this->categorieManager->getCategorieById($produit['categorie_id']);

                //get info brasseur
                $brasseurManager = new \Projet\Models\Front\BrasseurManager();
                $brasseur = $brasseurManager->getBrasseurById($produit['brasseur_id']);
                $brasseur_pays = $brasseurManager->getBrasseurPays($produit['brasseur_id']);

                //get info contenance
                $contenanceManager = new \Projet\Models\Front\ContenanceManager();
                $contenance = $contenanceManager->getContenanceById($produit['contenance_id']);

                require_once 'app/views/article.php';
            }
            // show articles by categorie
            if(array_key_exists('categorie',$params)){
                $cat = $this->categorieManager->getCategorieById($params['categorie']);
                //var_dump($cat);
                $produits = $this->produitManager->getTousProduitsByCategorie($params['categorie']);
                require_once 'app/views/produits.php';
            }
        }
    }
}