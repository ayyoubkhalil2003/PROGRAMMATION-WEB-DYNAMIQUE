<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    $stmt = $pdo->prepare("INSERT INTO warriors (name) VALUES (:name)");
    $stmt->execute(['name' => $name]);

    echo "Guerrier $name créé avec succès !";
}
?>

<form method="POST">
    Nom du guerrier : <input type="text" name="name" required>
    <button type="submit">Créer</button>
</form>
