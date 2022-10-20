<?php
include "../connexion.php";
$id = $_GET["id"];

if (isset($bdd)) {
    $req = $bdd->prepare("DELETE FROM equipement WHERE id=?");
}
$req->execute([$id]);

header("Location: eq.php");