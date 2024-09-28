<?php

class SuggestionController
{
    // Méthode pour obtenir les suggestions en fonction de la météo
    public function getSuggestions($weatherData)
    {
        if ($weatherData) {
            // Logique pour générer des suggestions basées sur la météo
            echo 'Suggestions basées sur la météo : ' . $weatherData;
        } else {
            echo 'Pas de données météo disponibles.';
        }
    }

    // Méthode pour appeler l'API OpenWeather et obtenir la météo d'une ville
    public function getWeather($city)
    {
        $apiKey = '7021d4ac130af2ebe12387c1e893c4f6'; // Ta clé API OpenWeather
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=fr";

        // Récupérer les données de l'API
        $weatherData = file_get_contents($url);

        if ($weatherData === FALSE) {
            return "Erreur lors de la récupération des données météo.";
        }

        // Convertir les données JSON en tableau PHP
        $weatherArray = json_decode($weatherData, true);

        if ($weatherArray['cod'] == 200) {
            // Récupérer des informations comme la température et la description
            $temperature = $weatherArray['main']['temp'];
            $description = $weatherArray['weather'][0]['description'];

            // Retourne les données météo
            return "Il fait actuellement {$temperature}°C avec {$description} à {$city}.";
        } else {
            return "Ville non trouvée ou problème avec l'API.";
        }
    }
}
