<?php 
	require '../modeles/pdo.php';
	$id=$_GET['supprimer'];
	$req = $bdd->query('DELETE FROM magasin WHERE id_magasin='.$id);
	header("Location:../profil.php");
