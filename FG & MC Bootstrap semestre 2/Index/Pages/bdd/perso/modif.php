<?php
include "../connexion.php";

$Nouvid = $_POST["Nouvid"];
$Nouvimg = $_POST["Nouvimg"];
$Nouvnom = $_POST["Nouvnom"];
$Nouvdesc = $_POST["Nouvdesc"];

if (isset($bdd)) {
    $req = $bdd->prepare('UPDATE `personnage` SET `image`=?,`nom`=?, `description`=? WHERE id = ?');
    $req->execute([$Nouvimg,$Nouvnom,$Nouvdesc,$Nouvid]);
}

header("Location: pers.php");
?>