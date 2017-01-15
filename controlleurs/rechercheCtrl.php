<?php 
	require 'modeles/recherche.php';
	$i = 0;
	if ($table == []) {
		echo '<p class="flow-text center">Nous n\'avons trouvé aucun produit</p>';
	}else{
		while (isset($table[$i])) {
			$a = $table[$i];
			echo '
	        			<div class="col s6 m3">
	          				<div class="card green darken-1">
	            				<div class="card-content white-text">
	              					<span class="card-title">'.$a[0].'</span>
	              					<p>Quantité restante: '.$a[1].' kilo  <br>  Prix: '.$a[2].' € / kilo</p>
	            				</div>
	            				<div class="card-action">
	              					<a href="commander.php?produit='.$a[0].'&quantite='.$a[1].'">Ajouter au panier</a>
					            </div>
					        </div>
					    </div>
			';
			$i = $i + 1;
			}
	}
?>










