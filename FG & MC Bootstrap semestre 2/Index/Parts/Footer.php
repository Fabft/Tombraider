<?php
include "1SERVER.php";

if (isset($racine) && isset($page)){}
if ($page == "Index")
    include "Pages/bdd/connexion.php";
elseif ($page == "equipement")
    include "../bdd/connexion.php";
else include "bdd/connexion.php";

if (isset($bdd)) {
    $req = $bdd->prepare('SELECT * FROM album WHERE page = "index"');
    $req->execute();
    $footer = $req->fetchAll();
}

?>
<footer id="pied" class="card-footer container-fluid">
    <table id="Footer">
        <tr>
            <td>Auteurs : FabienG_MattéoC</td>
            <td>Année de création : 2022</td>
        </tr>
        <tr>
            <td colspan="2"><img class="ligne" src="<?php echo $racine; echo $footer[3][2];?>"></td>
        </tr>
        <tr> <th colspan="2">Infos générales : Présentation du jeu Tomb Raider </th></tr>
    </table>
</footer>