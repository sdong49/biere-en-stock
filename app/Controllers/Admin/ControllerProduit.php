<?php

namespace Projet\Controllers\Admin;
use Projet\Models\Admin\ProduitManager;
use Projet\Models\Admin\CategorieManager;
use Projet\Models\Admin\BrasseurManager;
use Projet\Models\Admin\ContenanceManager;

class ControllerProduit
{
    private $produitManager;
    private $categorieManager;
    private $brasseurManager;
    private $contenanceManager;

    public function __construct(){
        $this->produitManager = new ProduitManager();
        $this->categorieManager = new CategorieManager();
        $this->brasseurManager = new BrasseurManager();
        $this->contenanceManager = new ContenanceManager();
    }
    public function admin()
    {
        //show tous les produits
        $produits = $this->produitManager->liste();
        require 'app/views/admin/adminArticles.php';
    }

    function edition($produit_id)
    {
        $produits = $this->produitManager->liste(array('id'=> $produit_id));
        $produit = $produits[0];

        $liste_categories =  $this->categorieManager->getToutesCategories();

        $liste_brasseurs = $this->brasseurManager->getTousBrasseurs();

        $liste_contenances = $this->contenanceManager->getTousContenances();

        if(isset($_POST['id_produit'])){
            $this->produitManager->edite($_POST);
            header('Location:index.php?action=admin'); 
            exit;
        }
        require 'app/views/admin/editionArticle.php';
    }
    
    function ajout()
    {
        $liste_categories =  $this->categorieManager->getToutesCategories();

        $liste_brasseurs = $this->brasseurManager->getTousBrasseurs();

        $liste_contenances = $this->contenanceManager->getTousContenances();

        if(isset($_POST['ajout_produit'])){
            //var_dump($_POST);
            $this->produitManager->ajout($_POST);
            header('Location:index.php?action=admin'); 
            exit;
        }
        require 'app/views/admin/ajoutArticle.php';
    }

    function supprimer($produit_id){
        $this->produitManager->supprimer($produit_id);
    }
}