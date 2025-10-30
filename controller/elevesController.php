<?php
include 'modele/elevesModele.php';
include 'modele/niveauxModele.php';

class ElevesController {
    private $modele;
    
    public function __construct() {
        $this->modele = new ElevesModele();
    }
    
    // Liste des élèves
    public function listEleve() {
        $eleves = $this->modele->getAllEleves();
        include 'view/elevesList.php';
    }
    
    // Formulaire d'ajout
    public function formEleve() {
        $niveauxModele = new NiveauxModele();
        $niveaux = $niveauxModele->getAllNiveaux();
        include 'view/addEleve.php';
    }
    
    // Ajouter un élève
    public function addEleve() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
            $id_niveau = $_POST['id_niveau'];
            
            try {
                // ✅ Tentative d'ajout
                if ($this->modele->addEleve($nom, $prenom, $email, $mdp, $id_niveau)) {
                    // Succès : message de confirmation
                    $_SESSION['success'] = "Élève ajouté avec succès !";
                    header('Location: ?page=eleves');
                    exit;
                }
            } catch (Exception $e) {
                // ✅ Capture de l'erreur et affichage du message
                $error = $e->getMessage();
                
                // Recharger le formulaire avec les niveaux et le message d'erreur
                $niveauxModele = new NiveauxModele();
                $niveaux = $niveauxModele->getAllNiveaux();
                include 'view/addEleve.php';
            }
        } else {
            $this->formEleve();
        }
    }
    
    // Modifier un élève
    public function editEleve() {
        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            header('Location: ?page=eleves');
            exit;
        }
        
        $eleve = $this->modele->getEleveById($id);
        $niveaux = (new NiveauxModele())->getAllNiveaux();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $this->modele->updateEleve(
                    $id,
                    $_POST['nom'],
                    $_POST['prenom'],
                    $_POST['email'],
                    $_POST['id_niveau']
                );
                $_SESSION['success'] = "Élève modifié avec succès !";
                header('Location: ?page=eleves');
                exit;
            } catch (Exception $e) {
                $error = $e->getMessage();
                include 'view/editEleve.php';
                return;
            }
        }
        
        include 'view/editEleve.php';
    }
    
    // Supprimer un élève
    public function deleteEleve() {
        $id = $_GET['id'] ?? null;
        
        if ($id) {
            $this->modele->deleteEleve($id);
            $_SESSION['success'] = "Élève supprimé avec succès !";
        }
        
        header('Location: ?page=eleves');
        exit;
    }
}
?>