<?php
require_once 'controller/elevesController.php';

$controller = new ElevesController();
$page = $_GET['page'] ?? 'eleves';

switch ($page) {
    case 'eleves':
        $controller->listEleve();
        break;
    
    case 'formEleve': // ✅ Pour afficher le formulaire vide
        $controller->formEleve();
        break;
    
    case 'addEleve': // ✅ Pour traiter le POST d'ajout
        $controller->addEleve();
        break;
    
    case 'editEleve':
        $controller->editEleve();
        break;
    
    case 'deleteEleve':
        $controller->deleteEleve();
        break;
    
    default:
        $controller->listEleve();
        break;
}
?>