<?php
	require "modeles/pdo.php";
	$recherche=htmlspecialchars($_POST['recherche']);
	$table = [];
	if ($recherche !== '') {
		$req = $bdd->query('SELECT * FROM magasin WHERE produit LIKE "%'.$recherche.'%" ORDER BY produit');	
		while ($donnees = $req->fetch()) {
			array_push($table, $donnees);
		}
	}
	?>