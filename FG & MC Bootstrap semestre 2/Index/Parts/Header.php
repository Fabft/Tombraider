<?php
include "1SERVER.php";

if (isset($racine) && isset($page)){}
if ($page == "Index")
    include "Pages/bdd/connexion.php";
elseif ($page == "equipement")
    include "../bdd/connexion.php";
else include "bdd/connexion.php";

$class = [];
if (isset($page)){
    switch ($page){
        case "Index":
            $class = ["btn-dark","","","","",""];
            break;
        case "Personnages":
            $class = ["","btn-dark","","","",""];
            break;
        case "equipement":
        case "Equipement":
            $class = ["","","btn-dark","","",""];
            break;
        case "Histoire":
            $class = ["","","","btn-dark","",""];
            break;
        case "Carte":
            $class = ["","","","","btn-dark",""];
            break;
        case "Album":
            $class = ["","","","","","btn-dark"];
            break;
    }
}

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM album WHERE page = "index"');
    $req->execute();
    $logo = $req->fetchAll();
}

?>
<header class="container-fluid Header">
    <div class="row card-header">
        <div class="col-11"><img class="Logo" src="<?php echo $racine; echo $logo[4][2]; ?>" alt=""></div>
        <?php if ($page == "Index") { echo "<div class='col-1'> <a href='https://www.feralinteractive.com/fr/games/tombraider/media/' target='_blank'> <img class='Logo2' src='", $logo[5][2],"' alt=''></a></div>";} ?>
    </div>
</header>

<nav class="nav nav-pills nav-fill card-header dégradé">
    <a href="<?php echo $racine; ?>Index/index.php" class="btn <?php echo $class[0]; ?> nav-item">Accueil</a>
    <a href="<?php echo $racine; ?>Index/Pages/Personnages.php" class="btn <?php echo $class[1]; ?> nav-item">Personnages</a>
    <a href="<?php echo $racine; ?>Index/Pages/Équipement.php" class="btn <?php echo $class[2]; ?> nav-item">Équipement</a>
    <a href="<?php echo $racine; ?>Index/Pages/Histoire.php" class="btn <?php echo $class[3]; ?> nav-item">Histoire</a>
    <a href="<?php echo $racine; ?>Index/Pages/Carte.php" class="btn <?php echo $class[4]; ?> nav-item">Carte</a>
    <a href="<?php echo $racine; ?>Index/Pages/Album.php" class="btn <?php echo $class[5]; ?> nav-item">Album</a>
</nav>
