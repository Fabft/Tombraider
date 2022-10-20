<!DOCTYPE html>
<?php include "../Parts/1SERVER.php";if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}
include "bdd/connexion.php";

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM categorie');
}
$req->execute();
$categs = $req->fetchAll();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - Équipement</title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/ | http://www.imfdb.org/wiki/Tomb_Raider_(2013) -->
<link rel="stylesheet" href="../../Style/bootstrap.css">
<link rel="stylesheet" href="../../Style/Style.css">
<?php
$page = "Equipement";
include "../Parts/Header.php"
?>

<banner class="row banner">
    <titre id="banner">Équipement</titre>
</banner>

<div class="row">
    <div class="col-10 gradient">
        <div class="row p-5">
            <?php
            //count total - compteur reste 1, 2 ou 3
            // si compteur multiple de 3 aller à la ligne
            include "bdd/connexion.php";
            if (isset($bdd)) {
                $req = $bdd->prepare('SELECT COUNT(*) FROM categorie');
                $req->execute();
                $categs = $req->fetchAll();
                $count = $categs[0][0];


                $req = $bdd->prepare('SELECT * FROM categorie');
                $req->execute();
                $categs = $req->fetchAll();
            }
            //echo "<vide class='col-1'></vide>";
            $c = 0;

            function categ($categs,$i,$col){
                echo "<vide class='col-$col'></vide>
            <div class='card col-auto border-5 border-dark btn' style='width: 25%; background: #212529;'>
                <a href='Équipement/Equip.php?id=$i' class='gradient'>
                <img class='card-img-top' src='"; echo $categs[$i][1]; echo"' alt='Card image cap'>
                <div class='card-body'><h5 class='card-title'>"; echo $categs[$i][0]; echo "</h5></div>
                </a>
            </div>";
                $u = $i+1;
                if ($u%3 == 0){
                    echo "</div><div class='row p-5'>";
                }
            }

            switch (fmod($count,3)){
                case 0:
                    for ($i=0;$i<$count;$i++){
                        categ($categs,$i,1);
                    }
                    break;
                case 1:
                    for ($i=0;$i<$count-1;$i++){
                        categ($categs,$i,1);
                    }
                    if ($i == $count-1){
                        categ($categs,$i,5);
                    }
                    break;
                case 2:
                    for ($i=0;$i<$count-2;$i++){
                        categ($categs,$i,1);
                    }
                    if ($i == $count-2){
                        categ($categs,$i,3);
                        $i++;
                    }
                    if ($i == $count-1){
                        categ($categs,$i,1);
                    }
                    break;
            }
            echo "</div></div>";
            include "../Parts/Sidebar.php"
            ?>
        </div>

        <?php
        include "../Parts/Footer.php"
        ?>
</body>
</html>
