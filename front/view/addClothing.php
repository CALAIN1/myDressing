<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="front/styles/main.css">
    <title>Ajouter un vêtement</title>
</head>

<body>
    <h1>Ajouter un vêtement</h1>
    <form method="post" action="addClothing">
        <label for="type">Type de vêtement :</label>
        <input type="text" id="type" name="type">
        <label for="color">Couleur :</label>
        <input type="text" id="color" name="color">
        <label for="season">Saison :</label>
        <input type="text" id="season" name="season">
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>