<?php
include_once 'bdd.php';

class NiveauxModele {
    private $bdd;
    
    public function __construct() {
        $this->bdd = Bdd::Connexion();
    }
    
    public function getAllNiveaux() {
        return $this->bdd->query("SELECT * FROM niveaux")
                         ->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
