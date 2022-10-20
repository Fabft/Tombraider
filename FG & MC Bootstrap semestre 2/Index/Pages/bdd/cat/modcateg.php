<?php include "../maj.php";
include "../connexion.php";


    $id = $_GET["id"];
    if (isset($bdd)) {
        $req = $bdd->prepare('SELECT * FROM categorie WHERE id = ?');
        $req->execute([$id]);
        $categs = $req->fetchAll();

    }

    echo "
<form action='modif.php' method='post'>
<table border='10'>
        <tr>
            <th>ID</th><th>Nom</th><th>Images</th>
        </tr>";

    foreach ($categs as $categ) {
        $id = $categ["id"];
        $intit = $categ["Nom"];
        $photo = $categ["Images"];
        echo "
    <tr>
    <td><input type='text' value='$id' name='Nouvid' readonly='true'></td>
    <td><input type='text' value='$intit' name='Nouvnom'></td>
    <td><input type='text' value='$photo' name='Nouvimages'></td>
    </tr>
    ";
    }

    echo "
    <tr><td colspan=\"3\" style=\"text-align: center\"><input type=\"submit\" value=\"Valider\"></td></tr>
    </table>
    </form>
    ";
//}
?>