<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    <form method="POST">
        <label>Nom d'utilisateur :</label><br>
        <input type="text" name="username"><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Se connecter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $utilisateur = "admin";
        $motdepasse = "1234";

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === $utilisateur && $password === $motdepasse) {
            echo "<p style='color:green;'>Connexion réussie. Bienvenue, $username !</p>";
        } else {
            echo "<p style='color:red;'>Nom d'utilisateur ou mot de passe incorrect.</p>";
        }
    }
    ?>
</body>
</html>
