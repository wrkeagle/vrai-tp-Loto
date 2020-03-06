<?php
require('pages/form.php');
?>
<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}


if(isset($_POST['valider'])){
	$req = $bdd->prepare('INSERT INTO contact(Nom,Adresse_mail,Num,Message) VALUES(:Nom,:Adresse_mail,:Num,:Message)');
	if(!$req){
		print_r($bdd->errorInfo());	
	}


if (!$req->execute(array(
		'Nom' => $_POST['Nom'],
		'Adresse_mail' => $_POST['Adresse_mail'],
        'Num' => $_POST['Num'],
        'Message' => $_POST['Message'],
	))) {
	print_r($req->errorInfo());
}
	

	echo 'Le message a bien été envoyé !';
}
?>