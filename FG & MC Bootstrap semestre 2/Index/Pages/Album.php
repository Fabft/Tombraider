<!DOCTYPE html>
<?php include "../Parts/1SERVER.php";if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - Album</title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/  Accueil, Personnages, Histoire, Carte, Album, Équipement -->
<link rel="stylesheet" href="../../Style/bootstrap.css">
<link rel="stylesheet" href="../../Style/Style.css">
<?php
$page = "Album";
include "../Parts/Header.php";
include "bdd/connexion.php";
?>

<div class="row banner">
    <titre id="banner">Album</titre>
</div>


<div class="row">
    <div class="col-10 main">
        <div class="col-3"></div>
        <table class="col-9">
            <tr>
                <?php
                if (isset($bdd)) {
                    $req = $bdd->prepare('SELECT COUNT(*) FROM album WHERE page="album"');

                    $req->execute();
                    $alb = $req->fetchAll();
                    $count = $alb[0][0];


                    $req = $bdd->prepare('SELECT * FROM album WHERE page="album"');
                    $req->execute();
                    $alb = $req->fetchAll();
                }
                for($i=0 ;$i<$count ;$i++ ){
                    echo   "<td class='albumtd'><a href='";echo $racine, $alb[$i][2]; echo"' target='_blank'><img class='card-img albumimg' src='";echo $racine, $alb[$i][2]; echo"'></a></td>";
                    $u = $i+1;
                    if ($u %2 ==0){
                        echo "</tr><tr>";
                    }
                }

                ?>
        </table>
    </div>
    <?php
    include "../Parts/Sidebar.php"
    ?>
</div>
</div>

<?php
include "../Parts/Footer.php"
?>
</body>
</html>
