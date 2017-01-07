<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


  <title>Restaulocaux</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
  <script src="https://code.angularjs.org/1.5.8/angular-route.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/services/map.js"></script>
  <script src="js/controllers/map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4ItKYWgc3mH1TZBJ_vlKRcz6vWYVU_3s"></script>

</head>

<body ng-app = 'MonApp'>
 <nav class="transparent navbar-fixed indigo darken-3" role="navigation" id="scroll">
  <a id="logo-container" href="#" class="brand-logo scrollspy"><span>Restaulocaux</span></a>
    <div class="nav-wrapper container">
      
      
      <ul class="right hide-on-med-and-down">
             <li><a href="accueil.php">Accueil</a></li>   
             <li><a href="restaurateurs.php">Restaurateurs</a></li>   
             <li> <a href="agriculteurs.php">Agriculteurs</a> </li>   
              <li><a href="profil.php">Profil</a></li>
              <li><a href="about.php">A propos</a></li>

      </ul>

      <ul class="side-nav">
              <li><a href="restaurateurs.php">Restaurateurs</a></li>
              <li> <a href="#/agriculteurs.php">Agriculteurs</a> </li>
              <li><a href="#/profil.php">Profil</a> </li>
              <li><a href="#/about.php">A propos</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
  <main>

