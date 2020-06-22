<?php
//important pour la sécurité de vos scropts: les sessions
//Démarrer une session
session_start();

//autoload.php genere avec composer
require_once __DIR__.'/vendor/autoload.php';
try{
    //front
    $controllerfront = new \Projet\Controllers\ControllerFront();
    $controllerAuth = new \Projet\Controllers\Front\ControllerAuth();
    $controllerContact = new \Projet\Controllers\Front\ControllerContact();
    $controllerArticle = new \Projet\Controllers\Front\ControllerArticle();

    //admin
    $controllerMessage = new \Projet\Controllers\Admin\ControllerMessage();
    $controllerProduit = new \Projet\Controllers\Admin\ControllerProduit();

    if(isset($_GET['action'])){
        if($_GET['action'] == 'contact'){
            $controllerContact->contact();
            
        }elseif($_GET['action'] == 'service'){
            $controllerfront->serviceFront();

        }elseif($_GET['action'] == 'accueil'){
            $controllerfront->accueil();

        }elseif($_GET['action'] == 'produit'){
            if(isset($_GET['categorie'])){
                //var_dump($_GET['categorie']);
                $controllerArticle->produitFront(array('categorie' => $_GET['categorie']));
                
            }elseif(isset($_GET['id'])){
                $controllerArticle->produitFront(array('id' => $_GET['id']));

            }else{
                $controllerArticle->produitFront();
            }
        }elseif($_GET['action'] == 'inscription'){
            $controllerfront->registerFront();

        }elseif($_GET['action'] == 'admin'){
            $controllerProduit->admin();
            //$controllerAuth->login();

        }elseif($_GET['action'] == 'admin_edition'){
            $produit_id = ($_GET['id']);
            $controllerProduit->edition($produit_id);

        }elseif($_GET['action'] == 'admin_ajout'){
            $controllerProduit->ajout();
        }elseif($_GET['action'] == 'admin_supprimer'){
            $produit_id = ($_GET['id']);
            $controllerProduit->supprimer($produit_id);
        }elseif($_GET['action'] == 'auth'){
            $controllerAuth->loginFront();
        }elseif($_GET['action'] == 'adminMessage'){
            $controllerMessage->index();
        }elseif($_GET['action'] == 'adminMessageAsc'){
            $controllerMessage->index('asc');
        }elseif($_GET['action'] == 'adminMessageDesc'){
            $controllerMessage->index('desc');
        }

    }else{
        $controllerfront->accueil();
    }
}catch(Exception $e){
    require 'app/views/page_404.php';
}