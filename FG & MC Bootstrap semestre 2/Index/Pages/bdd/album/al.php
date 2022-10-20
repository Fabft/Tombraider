<?php include "../maj.php";
include "../connexion.php";
if (isset($racine)){}
if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM album');
}
$req->execute();
$album = $req->fetchAll();


?>
<table border="10">
    <tr>
        <th>ID</th><th>Page</th><th>Intitulé</th><th>Image</th><th>Modifier</th><th>Supprimer</th>
    </tr>

    <?php
    foreach ($album as $al){
        $id = $al["id"];
        $page = $al["page"];
        $img = $al["image"];
        $intit = explode("/",$img);

        echo "
<tr>
<td>$id</td>
<td>$page</td>
<td>",$intit[count($intit)-1],"</td>
<td><a href='$racine$img' target='_blank'><img src='$racine$img' style='height: auto;width: 100px'></a></td>
<td style='text-align: center'><a href='modal.php?id=",$al["id"],"'>📝</a></td>
<td style='text-align: center'><a href='supal.php?id=",$al["id"],"'>❌</a></td>
</tr>
";
    }

    ?>

</table>
<br><br>

<form action="addal.php" method="post">
    <table border="10">
        <tr><th colspan="2">Ajouter un équipement</th></tr>
        <tr><th>Page</th> <td><input type="text" name="page"></td></tr>
        <tr><th>Image</th> <td><input type="text" name="img"></td></tr>
        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Ajouter"></td></tr>
    </table>
</form>
