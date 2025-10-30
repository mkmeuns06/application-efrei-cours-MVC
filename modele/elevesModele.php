<?php
include_once 'bdd.php';

class ElevesModele {
    private $bdd;
    
    public function __construct() {
        $this->bdd = Bdd::Connexion();
    }
    
    public function getAllEleves() {
        return $this->bdd->query("SELECT eleves.*, niveaux.niveau 
                                  FROM eleves 
                                  INNER JOIN niveaux ON eleves.id_niveau = niveaux.id_niveau")
                         ->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // ✅ Ajout de la gestion d'exception
    public function addEleve($nom, $prenom, $email, $mdp, $id_niveau) {
        try {
            $stmt = $this->bdd->prepare("INSERT INTO eleves (nom, prenom, email, mdp, id_niveau) 
                                         VALUES (?, ?, ?, ?, ?)");
            return $stmt->execute([$nom, $prenom, $email, $mdp, $id_niveau]);
        } catch (PDOException $e) {
            // Vérifier si c'est une erreur de contrainte unique (code 23505)
            if ($e->getCode() == 23505 || strpos($e->getMessage(), 'eleves_email_key') !== false) {
                throw new Exception("Cet email est déjà utilisé !");
            }
            // Pour toute autre erreur SQL
            throw new Exception("Erreur lors de l'ajout de l'élève : " . $e->getMessage());
        }
    }
    
    public function getEleveById($id) {
        $stmt = $this->bdd->prepare("SELECT * FROM eleves WHERE id_eleves = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateEleve($id, $nom, $prenom, $email, $id_niveau) {
        try {
            $stmt = $this->bdd->prepare("UPDATE eleves SET nom = ?, prenom = ?, email = ?, id_niveau = ? 
                                         WHERE id_eleves = ?");
            return $stmt->execute([$nom, $prenom, $email, $id_niveau, $id]);
        } catch (PDOException $e) {
            if ($e->getCode() == 23505 || strpos($e->getMessage(), 'eleves_email_key') !== false) {
                throw new Exception("Cet email est déjà utilisé par un autre élève !");
            }
            throw new Exception("Erreur lors de la modification : " . $e->getMessage());
        }
    }
    
    public function deleteEleve($id) {
        $stmt = $this->bdd->prepare("DELETE FROM eleves WHERE id_eleves = ?");
        return $stmt->execute([$id]);
    }
}
?>