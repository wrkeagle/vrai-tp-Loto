
<div>
    <h1>Matchs Futurs</h1>
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
    echo 'Seconde Equipe: ' .  $donnees["eq2"] . ' ';
    echo 'Le: ' . $donnees["dateMatch"] . '.<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>
</div>
<div>
    <h1>Matchs Passés</h1>
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
        echo 'Seconde Equipe: ' .  $donnees["eq2"] . ' ';
        echo 'Le: ' . $donnees["dateMatch"] . '.<br />';
        echo "Résultat: " . $donnees["resultat"] . '<br />';
        echo '<br />';
    }

    $reponse->closeCursor();
    ?>
</div>
