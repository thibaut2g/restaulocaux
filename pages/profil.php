<?php include 'controlleurs/profilCtrl.php' ?>
<div class="top"></div>
<div class="container">
	<h3><?= 'Hello '.$nom ?></h3>
	<div class="top"></div>
	<div class="row">
		<?php  
 		if ($profil == 'agriculteur') {?>
			<h3>Magasin :</h3><hr>
			<?php include "controlleurs/magasinCtrl.php";
	    	// magasin;commandes;argent;disponibilité
	    }else{// rechercher_produit;rechercher_magasin;commandes?>
	    	<h5>Vos commandes</h5><hr>
	   <?php
	   		include 'controlleurs/commandes_restaurantCtrl.php';
	    }?>

	</div>
</div>
