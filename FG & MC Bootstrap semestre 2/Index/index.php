<!DOCTYPE html>
<?php include "Parts/1SERVER.php"; if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";} ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - Accueil</title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/  Accueil, Personnages, Histoire, Carte, Album, Équipement Database : user[user] //  admin[mcfg]-->
<link rel="stylesheet" href="../Style/bootstrap.css">
<link rel="stylesheet" href="../Style/Style.css">
<?php
$page = "Index";
include "Parts/Header.php";
include "Pages/bdd/connexion.php";

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM album WHERE page = "index"');
    $req->execute();
    $img = $req->fetchAll();
}
?>
<div class="row banner">
    <div>
        <img id="banner" src="<?php echo $racine, $img[0][2] ?>">
    </div>
</div>

<div class="row">
    <div class="col-10">
        <div class="row">
            <img class="col-3 img" src="<?php echo $racine, $img[1][2] ?>"">
            <p class="col-6 p">L'univers du jeu Tomb Raider <br> Game Of The Year Edition (2013)</p>
            <img class="col-2 img" src="<?php echo $racine, $img[2][2] ?>"">
        </div>
        <div class="card">
            <div class="texte">
                Infos utiles :
            </div>
            <div class="soustexte">
                27 Janvier 2020
            </div>
            <div class="desc">
                Voilà la toute première mouture du site Tomb Raider par MC & FB.
            </div>
        </div>
        <div class="card">
            <div class="desc"> C'est une première approche de bootstrap en mode maquette <br>
                Mise en place des containers, lignes, colonnes multiples, side bar...
            </div>
            <p class="soustexte">
                Blog créé avec <b>Bootstrap</b> par Fabien & Mattéo Janvier 2022 <br>
                <a class="btn btn-dark" href="index.php">Retour en haut</a>
            </p>
        </div>
    </div>
    <?php
    include "Parts/Sidebar.php";
    ?>
</div>

<?php
include "Parts/Footer.php";
?>
</body>
</html>