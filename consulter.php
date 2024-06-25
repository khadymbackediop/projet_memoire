<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Véhicules</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Liste des Véhicules</h1>
    </header>
    <table>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Kilométrage</th>
            <th>Carburant</th>
            <th>Boîte de vitesse</th>
            <th>Prix estimatif</th>
        </tr>
        <?php
        // Connexion à la base de données
        $conn = new mysqli("localhost", "root", "", "voiture_estimation");

        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM voitures";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["marque"] . "</td><td>" . $row["modele"] . "</td><td>" . $row["annee"] . "</td><td>" . $row["kilometrage"] . "</td><td>" . $row["carburant"] . "</td><td>" . $row["boite_de_vitesse"] . "</td><td>" . $row["prix_estimatif"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Aucun véhicule trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
