<style>
 	main{
 		background:#e8f5e9;
 	}
 </style>
 <?php include 'controlleurs/recapCtrl.php'; ?>

<div class="top"></div>
<div class="top"></div>
<div class="container">
	<h5>Récapitulatifs de votre commande</h5><hr>
	 <?php 
		var_dump($recap);
	 ?>
	<h5>Formulaire de paiement</h5><hr>
	<p class="flow-text">Total de vos achats : <?= $prix;?>  €.</p>
	<form action="controlleurs/paiementCtrl.php" method="post" class="transparent">
		<input type="submit" value="Payer" class="btn">
	</form>
</div>
