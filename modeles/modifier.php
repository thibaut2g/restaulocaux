<?php
	if (isset($_GET['produit'])) {
		require "pdo.php";
		$id=htmlspecialchars($_GET['produit']);
		$id_agriculteur = $_SESSION['id'];
		$req = $bdd->query('SELECT * FROM magasin WHERE id_magasin='.$id.' AND id_agriculteur ='.$id_agriculteur);
		$resultat=$req->fetch();
	}else{
		header("Location:erreur.php");
	}
?>