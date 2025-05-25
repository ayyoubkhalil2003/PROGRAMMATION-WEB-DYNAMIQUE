<?php
include 'db.php';

$warriors = $pdo->query("SELECT * FROM warriors")->fetchAll();

foreach ($warriors as $warrior) {
    echo "Nom: {$warrior['name']} | Dégâts: {$warrior['damage']} <br>";
}
?>
