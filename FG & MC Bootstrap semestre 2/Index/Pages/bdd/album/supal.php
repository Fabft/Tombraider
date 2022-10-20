<?php
include "../connexion.php";
$id = $_GET["id"];

if (isset($bdd)) {
    $req = $bdd->prepare("DELETE FROM album WHERE id=?");
}
$req->execute([$id]);

header("Location: al.php");