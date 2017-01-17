<?php 
	require 'modeles/commandes_restaurant.php'; 
	if ($table == []) {
		echo '<p class="flow-text">Vous n\'avez pas effectué de commande</p>';
	}else{
		$i = 0;
		while (isset($table[$i])) {
				$a = $table[$i];
				echo '
		        			<div class="col s6 m3">
		          				<div class="card green darken-1">
		            				<div class="card-content white-text">
		              					<span class="card-title">'.$a[1].'</span>
		              					<p>Quantité : '.$a[2].' kilo  <br>  Prix: '.$a[3]*$a[2].' € </p>
		            				</div>
		            				<div class="card-action">
		              					<p>Bonne journée !</p>
						            </div>
						        </div>
						    </div>
				';
				$i = $i + 1;
				}
		}


?>


<a href="rechercher.php" class="btn">Passer une commande</a>