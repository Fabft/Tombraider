<?php
include "1SERVER.php";
if (isset($racine)){}
?>


<div class="col-2 card-footer">
    <div class="textei">
        A propos <br>
    </div>
    <div class="desci">
        Ce site parle du jeu de <a href="https://square-enix-games.com/fr_FR/home" target="_blank">SQUARE ENIX</a> & <a href="https://crystald.com/" target="_blank">CRYSTAL DYNAMICS</a>, un original de 2013.<br><br>
    </div>
    <div class="textei">
        Sites Favoris <br>
    </div>
    <div class="desci">
        <a href="https://www.feralinteractive.com/fr/games/tombraider/media/" target="_blank">feralinteractive.com</a> <br>
        <a href="https://fr.wikipedia.org/wiki/Tomb_Raider_(jeu_vid%C3%A9o,_2013)" target="_blank">TR 2013 Wiki</a>
    </div>

    <?php
    if (isset($page)) {
        if ($page == "Carte") {
            include "bdd/connexion.php";
            if (isset($bdd)) {
                $req = $bdd->prepare('SELECT * FROM album WHERE page="carte"');

                $req->execute();
                $carte = $req->fetchAll();
            }
            echo "
    <div class='textei'>Légende :<br></div>
    <div class='desci'>
        <img src='",$racine,$carte[1][2],"'> Entrées de tombeaux. <br>
        <img src='",$racine,$carte[2][2],"'> Feux de camp <br><br>
    </div>
    ";
        }

        if ($page == "equipement"){
            include "../bdd/connexion.php";
            if (isset($bdd)) {
                $req = $bdd->prepare('SELECT * FROM equipement');
                $req->execute();
                $categs = $req->fetchAll();
                $i = 0;
            }
            echo "
    <nav class='row p-4'>
        <p class='desci'>Autres équipements :</p>";
            foreach ($categs as $categ){
                echo "<a type='button' class='col-12 btn btn-outline-light' href='Equip.php?id=$i'>"; echo $categ[0]; echo "</a>";
                $i++;
            }
            echo "</nav>";
        }
    }

    ?>


    <form action="<?php echo $racine; ?>Index/Pages/bdd/form.php" method="post">
        <table>
            <br><br>
            <tr>
                <td>    <label class="textei">Nom</label>
                    <input type="text" id="name" name="username">
                </td>
            </tr>
            <tr>
                <td>    <label class="textei">Mot de passe</label>
                    <input type="password" id="password" name="mdp">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" class="btn-dark btn" value="connexion">
                </td>
            </tr>
        </table>

    </form>
</div>