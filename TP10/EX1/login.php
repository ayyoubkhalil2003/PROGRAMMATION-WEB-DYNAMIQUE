<?php
$erreur = $_GET['erreur'] ?? 0;
$message = '';

if ($erreur == 1) $message = "Veuillez saisir un login et un mot de passe";
elseif ($erreur == 2) $message = "Erreur de login/mot de passe";
elseif ($erreur == 3) $message = "Vous avez été déconnecté du service";
?>
<form action="validation.php" method="post">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="pass" placeholder="Mot de passe"><br>
    <input type="submit" value="Se connecter">
</form>
<p style="color:red;"><?= $message ?></p>
