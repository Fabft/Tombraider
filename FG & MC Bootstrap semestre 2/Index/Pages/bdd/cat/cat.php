<?php include "../maj.php";
include "../connexion.php";
if (isset($racine)){}
if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM categorie');
}
$req->execute();
$categs = $req->fetchAll();


?>
<table border="10">
    <tr>
        <th>ID</th><th>Intitulé</th><th>Photo</th><th>Modifier</th><th>Supprimer</th>
    </tr>

    <?php
    foreach ($categs as $categ){
        $id = $categ["id"];
        $Nom = $categ["Nom"];
        $img = $categ["Images"];
        echo "
<tr>
<td>$id</td>
<td>$Nom</td>
<td><a href='$racine$img' target='_blank'><img src='$racine$img' style='height: auto; width: 400px'></a></td>
<td style='text-align: center'><a href='modcateg.php?id=",$categ["id"],"'>📝</a></td>
<td style='text-align: center'><a href='supcateg.php?id=",$categ["id"],"'>❌</a></td>
</tr>
";
    }

    ?>

</table>
<br><br>

<form action="addcateg.php" method="post">
    <table border="10">
        <tr><th colspan="2">Ajouter une catégorie</th></tr>
        <tr><th>Nom</th> <td><input type="text" name="Nom"></td></tr>
        <tr><th>Image</th> <td><input type="text" name="Images"></td></tr>
        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Ajouter"></td></tr>
    </table>
</form>
