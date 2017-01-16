<div class="top"></div>
<div class="top"></div>
<div class="container">
	<div class="row">

		<form class="col s12" method="post" action="" >
	      <div class="row">

	        <div class="input-field col s12">
	          <input id="recherche" type="text" class="validate" name="recherche">
	          <label for="recherche">Recherchez des fruits et légumes</label>
	          
	         <input class="btn waves-green" type="submit" value="Rechercher">
	        </div>
	      </div>
	      
		</form>
			   
	<?php 
		require "controlleurs/rechercheCtrl.php";
	?>

	</div>
</div>

<style>
 	main{
 		background:#e8f5e9;
 	}
 </style>