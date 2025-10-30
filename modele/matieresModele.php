<?php   
include_once 'bdd.php';

class MatieresModele {
    private $bdd;
    
    public function __construct() {
        $this->bdd = Bdd::Connexion();
    }
    
    public function getAllMatieres() {
        return $this->bdd->query("SELECT * FROM matiere ORDER BY matiere ASC")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addMatiere($matiere) {
        $add = $this->bdd->prepare("INSERT INTO matiere (matiere) VALUES (?)");
        return $add->execute([$matiere]);
    }
}
?>