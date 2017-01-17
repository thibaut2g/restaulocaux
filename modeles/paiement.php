<?php 
require 'pdo.php';
while ($commande = array_pop($panier)) {

	$nom = $commande['nom'];
	$quantite = $commande['quantite'];
	$prix = $commande['prix'];
	$date_livraison = 0;
	$heure_livraison = 0;
	$restaurateur = $_SESSION['id'];
	$agriculteur = $commande['agriculteur'];

	$req = $bdd->prepare('INSERT INTO commande
	                            VALUES( NULL,
	                                    :nom, 
	                                    :quantite, 
	                                    :prix,
	                                    NULL,
	                                    NULL,
	                                    :id_restau, 
	                                    :id_agri)');
	$req->execute(array( 'nom' => $nom,
                         'quantite' => $quantite, 
                         'prix' => $prix, 
                         'id_restau' => $restaurateur, 
                         'id_agri' => $agriculteur));
}
?>