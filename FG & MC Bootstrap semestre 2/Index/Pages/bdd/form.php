<?php
include "connexion.php";
$username = $_POST['username'];
if (isset($bdd)) {
    $stmt = $bdd->prepare("SELECT * FROM admin WHERE pseudo = ?");
}
$stmt->execute([$username]);
$user = $stmt->fetch();


if ($_POST['mdp'] == $user['mdp'] && $user != false){header ("Location:maj.php?t=maj");}
else {header ("Location:../../index.php");}
?>
