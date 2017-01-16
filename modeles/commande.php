<?php 
	require 'modeles/pdo.php';
	$req = $bdd->query('SELECT produit, prix FROM magasin WHERE id_magasin='.$produit.' AND id_agriculteur ='.$agriculteur);
	$resultat = $req->fetch();
 ?>