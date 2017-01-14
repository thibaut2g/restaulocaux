<?php 
	session_start();
	require '../modeles/pdo.php';
	$id = $_GET['produit'];
	$id_agriculteur = $_SESSION['id'];
	$nom = htmlspecialchars($_POST['nom']);
	$quantite = htmlspecialchars($_POST['quantite']);
	$prix = htmlspecialchars($_POST['prix']);


	if ($nom!=='' and $quantite!=='' and $prix!==''){

		 $req=$bdd->prepare('UPDATE magasin
					SET produit = :produit,
					    quantite = :quantite,
					    prix = :prix
					    WHERE id_magasin='.$id.' AND id_agriculteur = '.$id_agriculteur );

		$req->execute(array('produit' => $nom, 'quantite' => $quantite, 'prix' => $prix));
    	header("Location:../profil.php");

	}else{
    	header("Location:../modifier.php?erreur=1");
	}

 ?>