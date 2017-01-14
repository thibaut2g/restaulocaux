




<?php
	require "../modeles/pdo.php";
	$recherche=htmlspecialchars($_POST['recherche']);
		
			$req = $bdd->query('SELECT * FROM magasin WHERE ( produit LIKE "%'.$recherche.'%") ORDER BY produit');
			$donnees = $req->fetch();

	?>

<?php 
echo $donnees['prix'];





$req->closeCursor(); // Termine le traitement de la requête

?>








