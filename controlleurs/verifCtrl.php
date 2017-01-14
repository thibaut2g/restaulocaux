<?php 

// Dans le cas où il y a une tentative de connexion échoué, on explique le problème

   if (isset($_GET['connexion'])) {
            if ($_GET['connexion']=='erreur_connexion') {
               echo '<p class="flash z-depth-2 flow-text red">Mauvais identifiant ou mot de passe</p>';
            }
            elseif ($_GET['connexion']=='erreur_inscription') {
               echo '<p class="flash z-depth-2 flow-text red">Adresse mail déjà existante</p>';
            }
            elseif ($_GET['connexion']=='erreur_incomplet') {
               echo '<p class="flash z-depth-2 flow-text red">Les données saisies sont incomplètes !</p>';
            }
   }
 ?>