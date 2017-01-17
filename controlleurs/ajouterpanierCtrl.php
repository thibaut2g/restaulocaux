<?php 
session_start();
$quantite = $_POST['quantite'];
$produit = $_POST['produit'];
$agriculteur = $_POST['agriculteur'];
$prix = $_POST['prix'];
$nom = $_POST['nom'];

$valeurs = array('agriculteur' => $agriculteur, 'produit' => $produit, 'nom' => $nom, 'quantite' => $quantite, 'prix' => $prix);
array_push($_SESSION['panier'],$valeurs);
header("Location:../commander.php")
?>
