<?php 
session_start();
$quantite = $_POST['quantite'];
$produit = $_POST['produit'];
$agriculteur = $_POST['agriculteur'];
$prix = $_POST['prix'];
$nom = $_POST['nom'];

$valeurs = array($agriculteur, $produit, $nom, $quantite, $prix);
array_push($_SESSION['panier'],$valeurs);
header("Location:../commander.php")
?>
