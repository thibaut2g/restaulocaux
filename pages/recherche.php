<div class="top"></div>
<div class="top"></div>
<div class="container">
		

 
<div class="row">

			   		<form class="col s12" method="post" action="" >
				      <div class="row">
				        <div class="input-field col s12" style="background: #2e7d32; border-radius: 5px; margin-top: 20px; padding: 10px 20px 20px 30px; ">
				          <input id="recherche" type="text" class="validate" name="recherche">
				          <label for="recherche">Recherchez des fruits et légumes</label>
				          
				         <input class=" waves-green" type="submit" value="Rechercher">
				          

				        </div>
				        
				      </div>
				      
				      
			    	</form>
			    </div>
		    

<?php 
if (isset($_POST['recherche'])) {
	require "controlleurs/rechercheCtrl.php";
}
?>


</div>