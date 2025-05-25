<?php
require 'connexion.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM exercice WHERE id = ?");
$stmt->execute([$id]);
$exo = $stmt->fetch();

if (isset($_POST['titre'], $_POST['auteur'])) {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];

    $stmt = $pdo->prepare("UPDATE exercice SET titre = ?, auteur = ? WHERE id = ?");
    $stmt->execute([$titre, $auteur, $id]);

    header("Location: index.php");
}
?>

<h2>Modifier exercice</h2>
<form method="post">
    Titre: <input type="text" name="titre" value="<?= $exo['titre'] ?>" required><br>
    Auteur: <input type="text" name="auteur" value="<?= $exo['auteur'] ?>" required><br>
    <button type="submit">Modifier</button>
</form>
