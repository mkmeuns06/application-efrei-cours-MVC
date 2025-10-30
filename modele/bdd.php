<?php
class Bdd {

    public static function Connexion() {
        try{
            $pdo = new PDO ('pgsql:host=localhost;port=5432;dbname=efrei','postgres','mk');
           // echo "Connexion a la BDD reussie";
        } catch (PDOException $e){
           echo "Erreur de connexion a la BDD" . $e->getMessage();
        }
        return $pdo;
        
    }
}
//$bdd = Bdd :: Connexion();
/*
$bdd = new Bdd();
$pdo = $bdd->Connexion(); 
*/
