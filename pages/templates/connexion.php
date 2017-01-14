<div class="row">
	<div class="col s12 m6">
		<?php include 'controlleurs/verifCtrl.php'  ?>
    </div>
</div>
<div class="row">
	<div class="col s12 l6 center-align">
		  <ul class="collapsible" data-collapsible="expandable">
		    <li>
		      <div class="collapsible-header flow-text green darken-3 white-text waves-effect waves-light">Connexion</div>
		      <div class="collapsible-body">
			   		<form class="col s12" method="post" action="controlleurs/connexionCtrl.php">
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="mail" type="email" class="validate" name="mail">
				          <label for="pseudo">Mail</label>
				        </div>
				      </div>
				      <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate" name="mdp">
				          <label for="password">Password</label>
				        </div>
				      </div>
				      <input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
			    	</form>
			    </div>
		    </li>
		  </ul>	
	</div>
