<!DOCTYPE html>
<?php include "../../Parts/1SERVER.php";if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}
include "../bdd/connexion.php";

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM equipement');
}
$req->execute();
$equips= $req->fetchAll();


$a = $_GET['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tomb Raider - <?php echo $equips[$a][0] ?></title>
</head>
<body>
<!-- https://www.feralinteractive.com/fr/games/tombraider/media/ | http://www.imfdb.org/wiki/Tomb_Raider_(2013) | https://tombraider.fandom.com/wiki/Bow -->
<link rel="stylesheet" href="../../../Style/bootstrap.css">
<link rel="stylesheet" href="../../../Style/Style.css">
<?php
$page = "equipement";
include "../../Parts/Header.php";
?>

<div class="row banner">
    <titre id="banner"><?php echo $equips[$a][0]; ?></titre>
</div>

<div class="row">
    <div class="col-10 dégradé2">

        <p class="categ">Évolutions :</p>
        <div class="card catext">
            <a href="<?php echo $equips[$a][1]; ?>" target="_blank"><img src="<?php echo $equips[$a][1]; ?>" style="width: 100%"></a>
        </div>


        <p class="categ">Améliorations :</p>
        <div class="card catext">
            <a href="<?php echo $equips[$a][2]; ?>" target="_blank"><img src="<?php echo $equips[$a][2]; ?>" style="width: 100%"></a>
        </div>


        <p class="categ">Capacités :</p>
        <div class="card catext">
            <a href="<?php echo $equips[$a][3]; ?>" target="_blank"><img src="<?php echo $equips[$a][3]; ?>" style="width: 100%"></a>
        </div>

        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <a class="btn btn-dark" href="../Équipement.php">Retour</a>
            </div>
        </div>
    </div>
    <?php
    include "../../Parts/Sidebar.php"
    ?>
</div>

<?php
include "../../Parts/Footer.php"
?>
</body>
</html>
