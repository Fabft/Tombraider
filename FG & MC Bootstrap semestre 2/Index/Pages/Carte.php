<!DOCTYPE html>
<?php include "../Parts/1SERVER.php";if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - Carte</title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/  Accueil, Personnages, Histoire, Carte, Album, Équipement -->
<link rel="stylesheet" href="../../Style/bootstrap.css">
<link rel="stylesheet" href="../../Style/Style.css">
<?php
$page = "Carte";
include "../Parts/Header.php";
include "bdd/connexion.php";
if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM album WHERE page="carte"');

    $req->execute();
    $carte = $req->fetchAll();
}


?>

<div class="row banner">
    <titre id="banner">Carte</titre>
</div>

<div class="row">
    <div class="col-10 carte">
        <a href="https://www.ign.com/maps/tomb-raider/island" target="_blank"><img src="<?php echo $racine, $carte[0][2];?>"></a>
    </div>
    <?php
    include "../Parts/Sidebar.php"
    ?>
</div>

<?php
include "../Parts/Footer.php"
?>
</body>
</html>
