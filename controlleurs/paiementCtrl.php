<?php 
	session_start();
	$panier = $_SESSION['panier'];
	require '../modeles/paiement.php';
	$_SESSION['panier'] = array();
	header('Location: ../profil.php');
	
 ?>