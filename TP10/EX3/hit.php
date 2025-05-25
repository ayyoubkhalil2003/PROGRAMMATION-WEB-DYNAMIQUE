<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetId = $_POST['target_id'];

    // Récupérer le guerrier cible
    $stmt = $pdo->prepare("SELECT * FROM warriors WHERE id = ?");
    $stmt->execute([$targetId]);
    $warrior = $stmt->fetch();

    if ($warrior) {
        $newDamage = $warrior['damage'] + 5;

        if ($newDamage >= 100) {
            // Supprimer le guerrier
            $stmt = $pdo->prepare("DELETE FROM warriors WHERE id = ?");
            $stmt->execute([$targetId]);
            echo "{$warrior['name']} est mort et a été supprimé.";
        } else {
            // Mettre à jour les dégâts
            $stmt = $pdo->prepare("UPDATE warriors SET damage = ? WHERE id = ?");
            $stmt->execute([$newDamage, $targetId]);
            echo "{$warrior['name']} a reçu 5 dégâts. Total: $newDamage.";
        }
    }
}
?>

<form method="POST">
    ID du guerrier à frapper : <input type="number" name="target_id" required>
    <button type="submit">Frapper</button>
</form>

