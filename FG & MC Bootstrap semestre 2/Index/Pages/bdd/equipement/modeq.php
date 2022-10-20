<?php include "../maj.php";
include "../connexion.php";

    $id = $_GET["id"];
    if (isset($bdd)) {
        $req = $bdd->prepare('SELECT * FROM equipement WHERE id = ?');
        $req->execute([$id]);
        $equips = $req->fetchAll();

    }

    echo "
<form action='modif.php' method='post'>
<table border='10'>
        <tr>
            <th>ID</th><th>Bannière</th><th>Évolutions</th><th>Améliorations</th><th>Capacités</th>
        </tr>";

    foreach ($equips as $equip){
        $Bann = $equip["Banner"];
        $Evo = $equip["Evolutions"];
        $Ame = $equip["Ameliorations"];
        $Cap = $equip["Capacites"];
        $id = $equip["id"];
        echo "
    <tr>
    <td><input type='text' value='$id' name='Nouvid' readonly='true'></td>
    <td><input type='text' value='$Bann' name='Nouvban'></td>
    <td><input type='text' value='$Evo' name='Nouvevo'></td>
    <td><input type='text' value='$Ame' name='Nouvame'></td>
    <td><input type='text' value='$Cap' name='Nouvcap'></td>
    </tr>
    ";}

    echo "
    <tr><td colspan=\"5\" style=\"text-align: center\"><input type=\"submit\" value=\"Valider\"></td></tr>
    </table>
    </form>
    ";

?>