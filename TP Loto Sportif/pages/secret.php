<h1>Bienvenue dans l'éditeur!</h1>
<button> <a href="/TP Loto Sportif/index.php">Revenir à la page principale</a></button>
<div style="text-align: center;">
    <h2>Modifier/Ajouter/Supprimer</h2>

    <form action="/TP Loto Sportif/includes/CRUD.php" method="get">
        <p>

            <input type="hidden" name="eq1" value="<?php echo $id['eq1'];  ?>"/>
            <input type="hidden" name="action" value="<?php echo $action;  ?>"/>
        <div>
            <label for="eq2">equipe 2</label>
            <input type="text" id="eq2" name="eq2" value="<?php echo $id['eq2'];  ?>">
        </div>
        <div>
            <label for="dateMatch">Date du match:</label>
            <input type="text" id="dateMatch" name="dateMatch" value="<?php echo $id['dateMatch'];  ?>">
        </div>
        <div>
            <label for="resultat">resultat:</label>
            <input type="text" id="resultat" name="resultat" value="<?php echo $id['resultat'];  ?>">
        </div>
        <div class="button">
            <button type="submit"></button>
        </div>
        </p>
    </form>
</div>
<div style="text-align: center;">
<h2>Matchs futurs</h2>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=TP_loto;charset=utf8', "root", '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT id,eq1,eq2,dateMatch FROM matchs_futurs');

    while ($donnees = $reponse->fetch()) {
        echo 'Match numéro ' . $donnees["id"]. ':<br />';
        echo 'Première Equipe: ' . $donnees["eq1"] . ' VS ';
        echo 'Seconde Equipe: ' .  $donnees["eq2"] . '<br />';
        echo 'Le: ' . $donnees["dateMatch"] . '.<br />';
        echo '<br />';
    }

    $reponse->closeCursor();
    ?>


</div>
<div style="text-align: center;" >
<h2>Matchs Passés</h2>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=TP_loto;charset=utf8', "root", '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT id,eq1,eq2,dateMatch,resultat FROM matchs_passes');

    while ($donnees = $reponse->fetch()) {
        echo 'Match numéro ' .$donnees["id"]. ':<br />';
        echo 'Première Equipe: ' . $donnees["eq1"] . ' VS ';
        echo 'Seconde Equipe: ' .  $donnees["eq2"] . '<br />';
        echo 'Le: ' . $donnees["dateMatch"] . '.<br />';
        echo "Résultat: " . $donnees["resultat"] . '<br />';
        echo '<br />';
    }

    $reponse->closeCursor();
    ?>

</div>


