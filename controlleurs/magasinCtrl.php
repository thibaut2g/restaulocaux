<?php 
	require 'modeles/magasin.php';
	$i = 0;
	if ($table == []) {
		echo '<p class="flow-text">Votre magasin est vide</p>';
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
									<form action="modifier.php" method=post>
										<input type="hidden" name="produit" value="'.$a[0].'">
										<input class="btn" type="submit" value="Modifier" />
									</form>
					            </div>
					        </div>
					    </div>
			';
			$i = $i + 1;
			}
	}
?>
<br><br>
<a href="nouveau.php" class="waves-effect waves-light btn">Ajouter</a>