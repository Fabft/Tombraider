<?php
include "../connexion.php";

$Nouvid = $_POST["Nouvid"];
$Nouvpage = $_POST["Nouvpage"];
$Nouvimage = $_POST["Nouvimage"];

if (isset($bdd)) {
    $req = $bdd->prepare('UPDATE `album` SET `page`=?,`image`=? WHERE id = ?');
    $req->execute([$Nouvpage,$Nouvimage,$Nouvid]);
}

header("Location: al.php");
?>