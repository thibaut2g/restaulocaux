<?php
	require "modeles/pdo.php";
	$recherche=htmlspecialchars($_POST['recherche']);
		
			$req = $bdd->query('SELECT * FROM magasin WHERE produit LIKE "%'.$recherche.'%" ORDER BY produit');
			$table = [];
	while ($donnees = $req->fetch()) {
		array_push($table, $donnees);
	}

	?>


