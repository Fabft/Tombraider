<?php include "../maj.php";
include "../connexion.php";

    $id = $_GET["id"];
    if (isset($bdd)) {
        $req = $bdd->prepare('SELECT * FROM personnage WHERE id = ?');
        $req->execute([$id]);
        $perso = $req->fetchAll();

    }

    echo "
<form action='modif.php' method='post'>
<table border='10'>
        <tr>
            <th>ID</th><th>Image</th><th>Nom</th><th>Description</th>
        </tr>";

    foreach ($perso as $pers){
        $id = $pers["id"];
        $img = $pers["image"];
        $nom = $pers["nom"];
        $desc = $pers["description"];
        echo "
    <tr>
    <td><input type='text' value='$id' name='Nouvid' readonly='true'></td>
    <td><input type='text' value='$img' name='Nouvimg'></td>
    <td><input type='text' value='$nom' name='Nouvnom'></td>
    <td><input type='text' value='$desc' name='Nouvdesc'></td>
    </tr>
    ";}

    echo "
    <tr><td colspan=\"5\" style=\"text-align: center\"><input type=\"submit\" value=\"Valider\"></td></tr>
    </table>
    </form>
    ";

?>