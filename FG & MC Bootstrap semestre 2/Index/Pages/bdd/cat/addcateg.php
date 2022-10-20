<?php
include "../connexion.php";

if (isset($_POST['Nom']) && isset($_POST['Images'])) {
    $Nom = $_POST['Nom'];
    $Images = $_POST['Images'];

    if (isset($bdd)) {
        $req = $bdd->prepare('INSERT INTO `categorie`(`Nom`, `Images`) VALUES (?,?)');
    }
    $req->execute([$Nom,$Images]);

    header("Location: cat.php");
}
?>