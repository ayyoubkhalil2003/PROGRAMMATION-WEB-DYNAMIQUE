<?php
session_start();
if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] != 'OK') {
    header("Location: login.php");
    exit;
}
?>
<p>Hello <?= $_SESSION['login'] ?></p>
<a href="validation.php?afaire=deconnexion">Déconnexion</a>
