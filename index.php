<?php
// Inclusion des fichiers de configuration
require_once 'config.php';

// Inclusion du fichier router qui contient la classe Router
require_once 'router.php';

// Inclusion des contrôleurs nécessaires
require_once 'back/controller/ClothingController.php';
require_once 'back/controller/SuggestionController.php';

// Instanciation du routeur
$router = new Router();
$router->route();  // Appelle la méthode route pour gérer les routes

// Exemple d'utilisation des contrôleurs
$clothingController = new ClothingController();
$suggestionController = new SuggestionController();

// Vérifie s'il y a des données POST avant d'appeler addClothing()
if (isset($_POST['clothingData'])) {
    $clothingController->addClothing($_POST['clothingData']);
}
