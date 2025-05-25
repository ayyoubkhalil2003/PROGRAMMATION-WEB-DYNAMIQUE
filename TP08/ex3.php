<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>

    <form method="POST">
        <label>Nom :</label><br>
        <input type="text" name="nom"><br><br>

        <label>Email :</label><br>
        <input type="email" name="email"><br><br>

        <label>Message :</label><br>
        <textarea name="message" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = trim($_POST["nom"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        if (!empty($nom) && !empty($email) && !empty($message)) {
            echo "<h2>Données reçues :</h2>";
            echo "<p><strong>Nom :</strong> $nom</p>";
            echo "<p><strong>Email :</strong> $email</p>";
            echo "<p><strong>Message :</strong><br>$message</p>";
        } else {
            echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>
</body>
</html>
