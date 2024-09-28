<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="front/styles/main.css">
    <title>MyDressing - Dressing</title>
</head>

<body>
    <h1>Welcome to MyDressing</h1>
    <p>Gérez votre garde-robe facilement !</p>

    <nav>
        <a href="/dressing">Voir le dressing</a>
        <a href="/suggestions">Voir les suggestions de tenues</a>
    </nav>

    <div class="weather">
        <!-- Widget météo ici -->
    </div>

    <div class="suggestions">
        <!-- Suggestions de tenues ici -->
    </div>

    <!-- Formulaire d'ajout de vêtement -->
    <h2>Ajouter un vêtement</h2>
    <form action="/addClothing" method="POST">
        <label for="clothingData">Nom du vêtement :</label>
        <input type="text" name="clothingData" id="clothingData" required>
        <button type="submit">Ajouter</button>
    </form>

</body>

</html>