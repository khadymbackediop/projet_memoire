<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Estimation de Voiture</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Estimez le prix de votre voiture</h1>
    </header>
    <form action="estimer.php" method="POST">
        <label for="marque">Marque:</label>
        <input type="text" id="marque" name="marque" required>
        <label for="modele">Modèle:</label>
        <input type="text" id="modele" name="modele" required>
        <label for="annee">Année:</label>
        <input type="number" id="annee" name="annee" required>
        <label for="kilometrage">Kilométrage:</label>
        <input type="number" id="kilometrage" name="kilometrage" required>
        <label for="carburant">Carburant:</label>
        <select id="carburant" name="carburant">
            <option value="essence">Essence</option>
            <option value="diesel">Diesel</option>
            <option value="electrique">Électrique</option>
            <option value="hybride">Hybride</option>
        </select>
        <label for="boite_de_vitesse">Boîte de vitesse:</label>
        <select id="boite_de_vitesse" name="boite_de_vitesse">
            <option value="manuelle">Manuelle</option>
            <option value="automatique">Automatique</option>
        </select>
        <button type="submit">Estimer</button>
    </form>
</body>
</html>
