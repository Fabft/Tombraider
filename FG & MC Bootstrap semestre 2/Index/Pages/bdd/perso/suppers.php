<?php
include "../connexion.php";
$id = $_GET["id"];

if (isset($bdd)) {
    $req = $bdd->prepare("DELETE FROM personnage WHERE id=?");
}
$req->execute([$id]);

header("Location: pers.php");