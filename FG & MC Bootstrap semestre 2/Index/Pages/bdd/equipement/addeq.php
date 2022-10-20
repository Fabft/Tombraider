<?php
include "../connexion.php";

if (isset($_POST['Bann']) && isset($_POST['Evo']) && isset($_POST['Ame']) && isset($_POST['Cap'])) {
    $Banniere = $_POST['Bann'];
    $Evolutions = $_POST['Evo'];
    $Ameliorations = $_POST['Ame'];
    $Capacites = $_POST['Cap'];

    if (isset($bdd)) {
        $req = $bdd->prepare('INSERT INTO `equipement`(`Banner`, `Evolutions`,`Ameliorations`,`Capacites`) VALUES (?,?,?,?)');
    }
    $req->execute([$Banniere,$Evolutions,$Ameliorations,$Capacites]);

    header("Location: eq.php");
}
?>