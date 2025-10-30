<?php
include 'modele/matieresModele.php';

class MatieresController {
    private $modele;
    public $message = '';
    public $messageType = '';

    public function __construct() {
        $this->modele = new MatieresModele();
    }

    // Affiche la liste des matières
    public function listMatiere() {
        $matieres = $this->modele->getAllMatieres();
        include 'view/matieresList.php';
    }

    // Formulaire pour ajouter une matière
    public function formMatiere() {
        include 'view/addMatiere.php';
    }

    // Ajout d'une matière
    public function addMatiere() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
            $matiere = trim($_POST['matiere']);

            if (!empty($matiere)) {
                if ($this->modele->addMatiere($matiere)) {
                    $this->message = "Matière ajoutée avec succès !";
                    $this->messageType = 'success';
                } else {
                    $this->message = "Erreur lors de l'ajout de la matière.";
                    $this->messageType = 'error';
                }
            } else {
                $this->message = "Veuillez entrer un nom de matière.";
                $this->messageType = 'error';
            }
        }

        // Affiche le formulaire après soumission
        $this->formMatiere();
    }
}
?>
