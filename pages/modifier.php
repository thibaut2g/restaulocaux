 <div class="top"></div>
 <div class="top"></div>
 <div class="container">
		<?php include 'modeles/modifier.php'; ?>
		<div class="row">

			 <form class="col s12" action="controlleurs/mdproduitCtrl.php?produit=<?= $id; ?>" method=post>
	      		<div class="top"></div>
				<div class="top"></div>
				<div class="row">
				  <h1 class="white-text center z-depth-2">Modifier produit</h1>

				    <div class="input-field col s6">
				      <input id="nom" type="text" name="nom" value=<?php echo '"'.$resultat['produit'].'"' ?>>
				      <label for="nom">Nom du produit</label>
				    </div>

				    <div class="input-field col s6">
				      <input id="quantite" type="number" name="quantite" value=<?php echo '"'.$resultat['quantite'].'"' ?>>
				      <label for="quantite">Quantité en kilo</label>
				    </div>

				    <div class="input-field col s6">
				      <input id="prix" type="number" name="prix" value=<?php echo '"'.$resultat['prix'].'"' ?>>
				      <label for="prix">Prix au kilo</label>
				    </div>
				</div>
				<div class="row">
					<div>
	            		<input class="large btn-large" type="submit" value="Modifier" />
				  		<a href="controlleurs/supproduitCtrl.php?supprimer=<?= $id; ?>" class="waves-effect waves-light btn btn-large" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ce produit?'));">Supprimer</a>
				  		<a href="profil.php" class="waves-effect waves-light btn btn-large right">Annuler</a>
				    </div>
				</div>
			</form>
		</div>

</div>