<?php
	include 'SqlFunctions.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$eq1 = $_GET["eq1"];
		$eq2 = $_GET["eq2"];
		$dateMatch = $_GET["dateMatch"];
		$resultat = $_GET["resultat"];
		
	}
	

	if ($action == "CREATE FMatch") {
		createFMatch($eq1, $eq2, $dateMatch);

		echo "Nouvelle experience ajoutée <br>";
		echo "<a href='/TP Loto Sportif/index.php'>les futurs matchs</a>";
		
	}
    if ($action == "CREATE PMatch") {
    createPMatch($eq1, $eq2, $dateMatch,$resultat);

    echo "Nouveau ajouté <br>";
    echo "<a href='/TP Loto Sportif/index.php'>Les futurs matchs</a>";

}

	
	if ($action == "UPDATE FMatch") {
        updateFMatch($id, $eq1,$eq2,$dateMatch);
		echo "match mis à jour <br>";
		echo "<a href='/TP Loto Sportif/index.php'>Les matchs</a>";
	}
    if ($action == "UPDATE PMatch") {
    updatePMatch($eq1,$eq2,$dateMatch,$resultat);
    echo "match mis à jour <br>";
    echo "<a href='/TP Loto Sportif/index.php'>les matchs</a>";
}
	if ($action == "DELETE") {
		deleteFMatch($id);
		echo "match supprimé <br>";
		echo "<a href='/TP Loto Sportif/index.php'>Liste des matchs futurs</a>";
	}
if ($action == "DELETE User") {
    deletePMatch($id);
    echo "match supprimé <br>";
    echo "<a href='/TP Loto Sportif/index.php'>liste des matchs passés</a>";
}

	
?>