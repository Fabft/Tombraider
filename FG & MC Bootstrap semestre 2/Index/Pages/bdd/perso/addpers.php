<?php
include "../connexion.php";

if (isset($_POST['img']) && isset($_POST['nom']) && isset($_POST['desc'])) {
    $Image = $_POST['img'];
    $Nom = $_POST['nom'];
    $Description = $_POST['desc'];

    if (isset($bdd)) {
        $req = $bdd->prepare('INSERT INTO `personnage`(`image`, `nom`,`description`) VALUES (?,?,?)');
    }
    $req->execute([$Image,$Nom,$Description]);

    header("Location: pers.php");
}
?>