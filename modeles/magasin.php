<?php 
	require 'pdo.php';
	$id = $_SESSION["id"];
	$req = $bdd->query('SELECT * FROM magasin WHERE id_agriculteur = '.$id);
	$table = [];
	while ($resultat = $req->fetch()) {
		array_push($table, $resultat);
	}
	
 ?>