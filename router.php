<?php
class Router
{
    public function route()
    {
        $url = $_GET['url'] ?? 'home';

        switch ($url) {
            case 'home':
                require 'front/view/home.php';
                break;

            case 'dressing':
                require 'front/view/dressing.php';
                break;

            case 'addClothing':
                // Vérifie que la requête est bien POST
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clothingData'])) {
                    require 'back/controller/ClothingController.php';
                    $clothingController = new ClothingController();
                    $clothingController->addClothing($_POST['clothingData']); // Passe les données du formulaire
                } else {
                    echo 'Méthode non autorisée ou données manquantes.';
                }
                break;

            case 'suggestions':
                // Récupère des données météo (exemple)
                $weatherData = $_GET['weatherData'] ?? null;
                require 'back/controller/SuggestionController.php';
                $suggestionController = new SuggestionController();
                $suggestionController->getSuggestions($weatherData);
                break;

                // Ajout de la route 'weather' pour afficher la météo
            case 'weather':
                require 'back/controller/SuggestionController.php';
                $suggestionController = new SuggestionController();
                echo $suggestionController->getWeather('Paris'); // Remplace 'Paris' par une ville dynamique plus tard si nécessaire
                break;

            default:
                echo 'Page non trouvée';
                break;
        }
    }
}
