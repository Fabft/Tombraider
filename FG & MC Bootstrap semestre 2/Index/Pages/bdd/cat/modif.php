<?php
include "../connexion.php";

$Nouvid = $_POST["Nouvid"];
$Nouvnom = $_POST["Nouvnom"];
$Nouvimages = $_POST["Nouvimages"];

if (isset($bdd)) {
    $req = $bdd->prepare('UPDATE `categorie` SET `Nom`=?,`Images`=? WHERE id = ?');
    $req->execute([$Nouvnom,$Nouvimages,$Nouvid]);
}

header("Location: cat.php");
?>