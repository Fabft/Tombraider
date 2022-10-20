<?php
if (isset($_GET['t'])) include "../../Parts/1SERVER.php";
else include "../../../Parts/1SERVER.php";
if (isset($racine)){echo "<link rel='icon' type='image/png' href='",$racine,"icon.png'>";}

echo "
<a href='",$racine,"Index/Pages/bdd/cat/cat.php'>Catégorie</a>
<a href='",$racine,"Index/Pages/bdd/equipement/eq.php'>Équipement</a>
<a href='",$racine,"Index/Pages/bdd/album/al.php'>Album</a>
<a href='",$racine,"Index/Pages/bdd/perso/pers.php'>Personnage</a>
<br>
<br>
<a href='",$racine,"Index/index.php'>Index</a>
";
?>