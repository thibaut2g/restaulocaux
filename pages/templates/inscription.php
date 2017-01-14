<div class="col s12 l6 center-align">
      <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header flow-text green darken-3 white-text waves-effect waves-light">
              Inscription
            </div>
            <div class="collapsible-body">

                <form class="col s12" method=post>
                      <div class="row">
  
                        <div class="input-field col s6">
                          <p>
                            <input name="group1" type="radio" id="restaurant" onclick="restau()" />
                            <label for="restaurant">Restaurant</label>
                          </p>
                        </div>
                        <div class="input-field col s6">
                          <p>
                            <input name="group1" type="radio" id="agriculteur" onclick="agri()" />
                            <label for="agriculteur">Agriculteur</label>
                          </p>
                        </div>
                        

                        <div id="restau">

                              <div class="input-field col s12">
                                  <input id="nom" name="nom" type="text" class="validate">
                                  <label for="nom">Nom du restaurant</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="adresse" name="adresse" type="text" class="validate">
                                <label for="adresse">Adresse</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="tel" name="tel" type="number" class="validate">
                                <label for="tel">Tel</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="mail" name="mail" type="email" class="validate">
                                <label for="mail">Mail</label>
                              </div>

                              <div class="input-field col s12">
                                <input id="mdp" name="mdp" type="text" class="validate">
                                <label for="mdp">Mot de passe</label>
                              </div>
                              
                        </div>

                        <div id="agri">

                              <div class="input-field col s12">
                                  <input id="nom" name="nom" type="text" class="validate">
                                  <label for="nom">Nom de la ferme</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="adresse" name="adresse" type="text" class="validate">
                                <label for="adresse">Adresse</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="tel" name="tel" type="number" class="validate">
                                <label for="tel">Tel</label>
                              </div>
                                        
                              <div class="input-field col s12">
                                <input id="mail" name="mail" type="email" class="validate">
                                <label for="mail">Mail</label>
                              </div>

                              <div class="input-field col s12">
                                <input id="mdp" name="mdp" type="text" class="validate">
                                <label for="mdp">Mot de passe</label>
                              </div>

                        </div>

                      </div>
                      <input class="large btn-large indigo darken-3" type="submit" value="Ok !" />
                </form>

            </div>
          </li>
        </ul>
    </div>

</div>


<script type="text/javascript">
  
  document.getElementById('agri').style.display='none';
  document.getElementById('restau').style.display='none';

  function agri(){
    document.getElementById('agri').style.display='block';
    document.getElementById('restau').style.display='none';
}
  function restau(){
    document.getElementById('restau').style.display='block';
    document.getElementById('agri').style.display='none';
}
</script>