<?php if (!isset($_SESSION['id']) OR !isset($_SESSION['nom']))
          {
             header("Location:erreur.php");
          } ?>
	<div class="top"></div>
	<div class="container" >
		<div class="row ">
			<form class="col s12" action="controlleurs/nvproduitCtrl.php" method=post>
					<div class="top"></div>
					<?php 
			         if (isset($_GET['erreur'])) {
			         	if ($_GET['erreur']==1) {
			         		echo '<p class="flash z-depth-2 flow-text">Il manque des informations</p>';
			         	}
			          }  ?>
			    <div class="row">

				      <h1 class="white-text center z-depth-2 green darken-3">Nouveau produit</h1>

				        <div class="input-field col s6">
				          <input id="nom" type="text" name="nom" class="validate">
				          <label for="nom">Nom</label>
				        </div>

				        <div class="input-field col s6">
				          <input id="prix" type="number" name="prix" class="validate">
				          <label for="prix">Prix au kilo</label>
				        </div>

				        <div class="input-field col s6">
				          <input id="quantite" type="number" name="quantite" class="validate">
				          <label for="quantite">Quantité en kilo</label>
				        </div>
			      
				</div>
				<input class="large btn-large" type="submit" value="Valider" />
				<a href="profil.php" class="waves-effect waves-light btn btn-large right">Annuler</a>
			</form>	  		
		</div>
	</div>		      	