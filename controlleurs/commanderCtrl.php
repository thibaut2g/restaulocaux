<?php
	if (!isset($_SESSION['panier'])) {
		$_SESSION['panier']=array();
		$panier = array();
	}else{
		$panier = $_SESSION['panier'];
	}
	if (isset($_POST['produit'])) {
		echo '<h5>Votre commande</h5><hr>';

		$produit = $_POST['produit'];
		$agriculteur = $_POST['agriculteur'];
		require 'modeles/commande.php';
		echo '<p class="flow-text">Quelle quantité de '.$resultat[0].' voulez vous ajouter en kilo ?</p>';
		// $panier->set($produit, $quantite);?>
	<div class="row">
		  <form action="controlleurs/ajouterpanierCtrl.php" style="background: transparent" method="post">
		    <p class="range-field col s12 m4">
		      <input type="range" min="0" max="100" name="quantite"/>
		    </p>
		    <input type="hidden" name="produit" value="<?= $produit?>">
		    <input type="hidden" name="agriculteur" value="<?= $agriculteur?>">
		    <input type="hidden" name="prix" value="<?= $resultat[1]?>">
		    <input type="hidden" name="nom" value="<?= $resultat[0]?>">
		    <input type="submit" name="valider" value="Valider" class="btn col s12 m3 offset-m2">
		  </form>
  	</div>
<?php
		echo '<p class="flow-text">Le prix au kilo est de '.$resultat[1].' €</p><br><br>';
	}
	if ($panier !== array()) {
		echo "<h5>Déjà dans votre panier :</h5><hr>";
		var_dump($panier);?>
		<a href="payement.php" class="btn">Valider mes achats</a>
	<?php };
	

?>


