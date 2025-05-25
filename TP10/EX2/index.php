<?php
require 'connexion.php';

// Ajouter un exercice
if (isset($_POST['titre'], $_POST['auteur'])) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date = date('Y-m-d');

    $stmt = $pdo->prepare("INSERT INTO exercice (titre, auteur, date_creation) VALUES (?, ?, ?)");
    $stmt->execute([$titre, $auteur, $date]);

    echo "✅ Exercice ajouté.";
}

// Supprimer un exercice
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    $pdo->prepare("DELETE FROM exercice WHERE id = ?")->execute([$id]);
    echo "🗑️ Exercice supprimé.";
}

// Lire tous les exercices
$exos = $pdo->query("SELECT * FROM exercice")->fetchAll();
?>

<h2>Ajouter un exercice</h2>
<form method="post">
    Titre: <input type="text" name="titre" required><br>
    Auteur: <input type="text" name="auteur" required><br>
    <button type="submit">Ajouter</button>
</form>

<h2>Liste des exercices</h2>
<table border="1">
    <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Date</th><th>Actions</th></tr>
    <?php foreach ($exos as $exo): ?>
        <tr>
            <td><?= $exo['id'] ?></td>
            <td><?= $exo['titre'] ?></td>
            <td><?= $exo['auteur'] ?></td>
            <td><?= $exo['date_creation'] ?></td>
            <td>
                <a href="modifier.php?id=<?= $exo['id'] ?>">Modifier</a> |
                <a href="?supprimer=<?= $exo['id'] ?>" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
