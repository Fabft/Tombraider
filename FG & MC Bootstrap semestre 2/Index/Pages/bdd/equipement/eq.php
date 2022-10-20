<?php include "../maj.php";
include "../connexion.php";
if (isset($racine)){}
if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM equipement');
}
$req->execute();
$equips = $req->fetchAll();


?>
<table border="10">
    <tr>
        <th>Bannière</th><th>Évolutions</th><th>Améliorations</th><th>Capacités</th><th>ID</th><th>Modifier</th><th>Supprimer</th>
    </tr>

    <?php
    foreach ($equips as $equip){
        $Bann = $equip["Banner"];
        $Evo = $equip["Evolutions"];
        $Ame = $equip["Ameliorations"];
        $Cap = $equip["Capacites"];
        $id = $equip["id"];

        echo "
<tr>
<td>$Bann</td>
<td><a href='$racine$Evo' target='_blank'><img src='$racine$Evo' style='height: auto; width: 400px'></a></td>
<td><a href='$racine$Ame' target='_blank'><img src='$racine$Ame' style='height: auto; width: 400px'></a></td>
<td><a href='$racine$Cap' target='_blank'><img src='$racine$Cap' style='height: auto; width: 400px'></a></td>
<td>$id</td>
<td style='text-align: center'><a href='modeq.php?id=",$equip["id"],"'>📝</a></td>
<td style='text-align: center'><a href='supeq.php?id=",$equip["id"],"'>❌</a></td>
</tr>
";
    }

    ?>

</table>
<br><br>

<form action="addeq.php" method="post">
    <table border="10">
        <tr><th colspan="2">Ajouter un équipement</th></tr>
        <tr><th>Bannière</th> <td><input type="text" name="Bann"></td></tr>
        <tr><th>Évolutions</th> <td><input type="text" name="Evo"></td></tr>
        <tr><th>Améliorations</th> <td><input type="text" name="Ame"></td></tr>
        <tr><th>Capacités</th> <td><input type="text" name="Cap"></td></tr>
        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Ajouter"></td></tr>
    </table>
</form>
