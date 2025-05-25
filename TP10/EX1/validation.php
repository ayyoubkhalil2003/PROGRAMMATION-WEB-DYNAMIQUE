<?php
session_start();
require 'config.php';

if (isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
    session_destroy();
    header("Location: login.php?erreur=3");
    exit;
}

$login = $_POST['login'] ?? '';
$pass = $_POST['pass'] ?? '';

if (empty($login) || empty($pass)) {
    header("Location: login.php?erreur=1");
    exit;
}

if ($login === USERLOGIN && $pass === USERPASS) {
    $_SESSION['CONNECT'] = 'OK';
    $_SESSION['login'] = $login;
    header("Location: accueil.php");
} else {
    header("Location: login.php?erreur=2");
}
