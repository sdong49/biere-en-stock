<?php

namespace Projet\Models;

class Manager{
    
    public function dbConnect(){
        try{
            $bdd = new \PDO('mysql:host=127.0.0.1;dbname=projet;charset=utf8','root','');
            // $bdd = new \PDO('mysql:host=localhost;dbname=gretaxao_saiyindong;charset=utf8','gretaxao_saiyindong','SaiyinDong2020');
            return $bdd;
        }catch (Exception $e){
            die('Erreur:'.$e->getMessage());
        }
    }
}