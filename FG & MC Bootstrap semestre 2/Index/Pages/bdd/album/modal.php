<?php include "../maj.php";
include "../connexion.php";

    $id = $_GET["id"];
    if (isset($bdd)) {
        $req = $bdd->prepare('SELECT * FROM album WHERE id = ?');
        $req->execute([$id]);
        $equips = $req->fetchAll();

    }

    echo "
<form action='modif.php' method='post'>
<table border='10'>
        <tr>
            <th>ID</th><th>Page</th><th>Image</th>
        </tr>";

    foreach ($equips as $equip){
        $id = $equip["id"];
        $page = $equip["page"];
        $image = $equip["image"];
        echo "
    <tr>
    <td><input type='text' value='$id' name='Nouvid' readonly='true'></td>
    <td><input type='text' value='$page' name='Nouvpage'></td>
    <td><input type='text' value='$image' name='Nouvimage'></td>
    </tr>
    ";}

    echo "
    <tr><td colspan=\"5\" style=\"text-align: center\"><input type=\"submit\" value=\"Valider\"></td></tr>
    </table>
    </form>
    ";

?>