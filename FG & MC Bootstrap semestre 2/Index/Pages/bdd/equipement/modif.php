<?php
include "../connexion.php";

$Nouvid = $_POST["Nouvid"];
$Nouvban = $_POST["Nouvban"];
$Nouvevo = $_POST["Nouvevo"];
$Nouvame = $_POST["Nouvame"];
$Nouvcap = $_POST["Nouvcap"];

if (isset($bdd)) {
    $req = $bdd->prepare('UPDATE `equipement` SET `Banner`=?,`Evolutions`=?, `Ameliorations`=?, `Capacites`=? WHERE id = ?');
    $req->execute([$Nouvban,$Nouvevo,$Nouvame,$Nouvcap,$Nouvid]);
}

header("Location: eq.php");
?>