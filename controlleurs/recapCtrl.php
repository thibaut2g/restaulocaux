<?php 
	$prix = '';
	$commande = $_SESSION['panier'];
	$recap = $_SESSION['panier'];
	while ($produit = array_pop($commande)) {
		$prix = $prix + $produit['quantite']*$produit['prix'];
	}
 ?>