<?php 
	
	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "";
			$pdo = new PDO('mysql:host=localhost;dbname=cv-tp_loto', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// récupere les données des futurs matchs
	function getUser() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * FROM matchs_futurs';
		$rows = $con->query($requete);
		return $rows;
	}
    // récupere les données de la page Loisir
    function getLoisirs() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from matchs_passes';
    $rows = $con->query($requete);
    return $rows;
}


	// ajouter un futur match
	function createFMatch($eq1,$eq2,$dateMatch) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO matchs_futurs (eq1,eq2,dateMatch) 
					VALUES ('$eq1','$eq2','$dateMatch')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
    // ajouter une formation en plus
    function createPMatch($eq1, $eq2, $dateMatch, $resultat) {
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO matchs_passes (eq1, eq2, dateMatch, resultat) 
					VALUES ('$eq1', '$eq2', '$dateMatch' ,'$resultat')";
        $con->exec($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    }

	function updateFMatch($id,$eq1,$eq2) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE matchs_futurs set 
						eq1 = '$eq1' 
						eq2 = '$eq2' 
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
function updatePMatch($id,$eq1,$eq2,$resultat) {
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE matchs_passes set 
						eq1 = '$eq1' 
						eq2 = '$eq2'
						resultat = '$resultat' 
						where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

	// supprime un user
	function deleteFMatch($id) {
		try {
                $con = getDatabaseConnexion();
                $requete = "DELETE * from matchs_futurs where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
    function deletePMatch($id) {
    try {
        $con = getDatabaseConnexion();
        $requete = "DELETE * from matchs_passes where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

 ?>