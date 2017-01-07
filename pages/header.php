<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


  <title>LocalFarmer</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="public/css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="public/css/style.css" type="text/css" rel="stylesheet"/>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
  <script src="https://code.angularjs.org/1.5.8/angular-route.min.js"></script>
  <script src="public/js/app.js"></script>

</head>

<body ng-app = 'MonApp'>
 <nav class="transparent navbar-fixed green darken-3" role="navigation" id="scroll">
  <a id="logo-container" href="#" class="brand-logo scrollspy"><span>LocalFarmer</span></a>
    <div class="nav-wrapper container">
      
      <ul class="right hide-on-med-and-down">
             <li><a href="accueil.php">Accueil</a></li>  
              <li><a href="profil.php">Profil</a></li>
              <li><a href="about.php">A propos</a></li>

      </ul>

      <ul class="side-nav">
              <li><a href="#/profil.php">Profil</a> </li>
              <li><a href="#/about.php">A propos</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
  <main>

