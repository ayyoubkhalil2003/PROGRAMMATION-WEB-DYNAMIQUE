<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
</head>
<body>
    <h1>Laisser un message</h1>

    <form method="POST">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Message :</label><br>
        <textarea name="message" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    $fichier = "messages.txt";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = trim($_POST["nom"]);
        $message = trim($_POST["message"]);

        if (!empty($nom) && !empty($message)) {
            $date = date("d/m/Y H:i");
            $ligne = "$date | $nom : $message\n";
            file_put_contents($fichier, $ligne, FILE_APPEND);
        }
    }

    echo "<h2>Messages :</h2>";
    if (file_exists($fichier)) {
        $lignes = file($fichier);
        foreach ($lignes as $ligne) {
            echo "<p>" . htmlspecialchars($ligne) . "</p>";
        }
    }
    ?>
</body>
</html>
