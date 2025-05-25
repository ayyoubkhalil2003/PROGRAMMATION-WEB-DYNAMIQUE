<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réponse</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Merci pour votre message</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = ($_POST['nom']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);

    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Message :</strong> $message</p>";
  } else {
    echo "<p>Aucune donnée reçue.</p>";
  }
  ?>
</body>
</html>
