<?php 
	require 'pdo.php';
	$id = $_SESSION["id"];
	$req = $bdd->query('SELECT * FROM commande WHERE id_restaurant = '.$id);
	$table = [];
	while ($resultat = $req->fetch()) {
		array_push($table, $resultat);
	}
 ?>