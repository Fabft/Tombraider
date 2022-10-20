<?php
include "../connexion.php";

if (isset($_POST['page']) && isset($_POST['img'])) {
    $page = $_POST['page'];
    $image = $_POST['img'];

    if (isset($bdd)) {
        $req = $bdd->prepare('INSERT INTO `album`(`page`, `image`) VALUES (?,?)');
    }
    $req->execute([$page,$image]);

    header("Location: al.php");
}
?>