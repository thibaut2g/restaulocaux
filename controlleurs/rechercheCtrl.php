<?php 
	if (isset($_POST['recherche'])) {

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
		              					<span class="card-title">'.$a[1].'</span>
		              					<p>Quantité restante: '.$a[2].' kilo  <br>  Prix: '.$a[3].' € / kilo</p>
		            				</div>
		            				<div class="card-action">
		              					<form action="commander.php" class="col s12" method=post>
											<input type="hidden" name="produit" value="'.$a[0].'">
											<input type="hidden" name="agriculteur" value="'.$a[4].'">
											<input class="btn" type="submit" value="Ajouter" />
										</form>
						            </div>
						        </div>
						    </div>
				';
				$i = $i + 1;
				}
		}
	}
?>

<a type="submit"></a>






