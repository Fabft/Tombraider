<?php include "../maj.php";
include "../connexion.php";
if (isset($racine)){}
if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM personnage');
}
$req->execute();
$perso = $req->fetchAll();


?>
<table border="10">
    <tr>
        <th>ID</th><th>Image</th><th>Nom</th><th>Description</th><th>Modifier</th><th>Supprimer</th>
    </tr>

    <?php
    foreach ($perso as $pers){
        $id = $pers["id"];
        $img = $pers["image"];
        $nom = $pers["nom"];
        $desc = $pers["description"];

        echo "
<tr>
<td>$id</td>
<td><a href='$racine$img' target='_blank'><img src='$racine$img' style='height: auto; width: 100px'></a></td>
<td>$nom</td>
<td>$desc</td>
<td style='text-align: center'><a href='modpers.php?id=",$pers["id"],"'>📝</a></td>
<td style='text-align: center'><a href='suppers.php?id=",$pers["id"],"'>❌</a></td>
</tr>
";
    }

    ?>

</table>
<br><br>

<form action="addpers.php" method="post">
    <table border="10">
        <tr><th colspan="2">Ajouter un équipement</th></tr>
        <tr><th>Image</th> <td><input type="text" name="img"></td></tr>
        <tr><th>Nom</th> <td><input type="text" name="nom"></td></tr>
        <tr><th>Description</th> <td><input type="text" name="desc"></td></tr>
        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Ajouter"></td></tr>
    </table>
</form>
