<!DOCTYPE html>
<?php include "../Parts/1SERVER.php";if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - Personnages</title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/  Accueil, Personnages, Histoire, Carte, Album, Équipement -->
<link rel="stylesheet" href="../../Style/bootstrap.css">
<link rel="stylesheet" href="../../Style/Style.css">
<?php
$page = "Personnages";
include "bdd/connexion.php";
include "../Parts/Header.php";
?>

<div class="row banner">
    <titre id="banner">Personnages</titre>
</div>

<div class="row">
    <div class="col-10 row">
        <?php
        if (isset($bdd)) {
            $req = $bdd->prepare('SELECT COUNT(*) FROM personnage');

            $req->execute();
            $pers = $req->fetchAll();
            $count = $pers[0][0];


            $req = $bdd->prepare('SELECT * FROM personnage');
            $req->execute();
            $pers = $req->fetchAll();
        }
        for ($a=0;$a<$count;$a++){
            echo "
            <div class='card col-auto' style='width: 25%;'>
                <img class='card-img-top' src='";echo $racine, $pers[$a][1];echo "' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>"; echo $pers[$a][2]; echo"</h5>
                    <p class='card-text'>";echo $pers[$a][3]; echo"</p>
                </div>
            </div>
            ";
        }
        ?>
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
