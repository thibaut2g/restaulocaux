<?php 
// Hachage du mot de passe
$pass_hache = md5(htmlspecialchars($_POST['mdp']));
$mail = htmlspecialchars($_POST['mail']);

// Vérification des identifiants
require "../modeles/pdo.php";

$req = $bdd->prepare('SELECT id_agriculteur, nom FROM agriculteur WHERE email = :mail AND mdp = :mdp');
$req->execute(array(
    'mail' => $mail,
    'mdp' => $pass_hache));
$req2 = $bdd->prepare('SELECT id_restaurant, nom FROM restaurant WHERE email = :mail AND mdp = :mdp');
$req2->execute(array(
    'mail' => $mail,
    'mdp' => $pass_hache));

$resultat = $req->fetch();
$resultat2 = $req2->fetch();
if ($resultat)
{
    session_start();
    $_SESSION['id'] = $resultat['id_agriculteur'];
    $_SESSION['mail'] = $mail;
    $_SESSION['nom'] = $resultat['nom'];
    $_SESSION['profil'] = 'agriculteur';
}
elseif ($resultat2) {
    session_start();
    $_SESSION['id'] = $resultat2['id_restaurant'];
    $_SESSION['mail'] = $mail;
    $_SESSION['nom'] = $resultat2['nom'];
    $_SESSION['profil'] = 'restaurant';
}else{
    header("Location:../accueil.php?connexion=erreur_connexion");
}

if (isset($_SESSION['id']) AND isset($_SESSION['nom']))
{
   header("Location:../profil.php");
}
        ?>
