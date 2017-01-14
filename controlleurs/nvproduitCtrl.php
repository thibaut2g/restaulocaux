<?php 
	session_start();
	require '../modeles/pdo.php';
	$id = $_SESSION['id'];
	$nom = htmlspecialchars($_POST['nom']);
	$prix = htmlspecialchars($_POST['prix']);
	$quantite = htmlspecialchars($_POST['quantite']);

	if ($nom!=='' and $prix!=='' and $quantite!==''){

	        $req = $bdd->prepare('INSERT INTO magasin
	                            VALUES( NULL,
	                                    :nom, 
	                                    :quantite, 
	                                    :prix, 
	                                    :id)');
	        $req->execute(array( 'nom' => $nom,
	                             'quantite' => $quantite, 
	                             'prix' => $prix, 
	                             'id' => $id));
	        header('Location: ../profil.php');

	}else{
	    header("Location:../nouveau.php?erreur=1");
	}    

 ?>