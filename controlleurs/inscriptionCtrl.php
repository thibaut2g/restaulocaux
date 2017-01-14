<?php

require "../modeles/pdo.php";

$nom = htmlspecialchars($_POST['nom']);
$adresse = htmlspecialchars($_POST['adresse']);
$tel = htmlspecialchars($_POST['tel']);
$mail = htmlspecialchars($_POST['mail']);
$pass_hache = md5(htmlspecialchars($_POST['mdp']));

 if ($nom!=='' and $adresse!=='' and $tel!=='' and $mail!=='' and $pass_hache!==''){
    $verifie = $bdd->query('SELECT nom FROM agriculteur WHERE email="'.$mail.'"');
    $verifie = $verifie->fetch();
    if (!$verifie) {
        if (isset($_POST['agri'])) {
            $table = 'agriculteur';
        }else{
            $table = 'restaurant';
        }

        $req = $bdd->prepare('INSERT INTO '.$table.'
                            VALUES( NULL,
                                    :nom, 
                                    :adresse, 
                                    :tel, 
                                    :email, 
                                    :mdp, 
                                    NULL)');
        $req->execute(array( 'nom' => $nom,
                             'adresse' => $adresse, 
                             'tel' => $tel, 
                             'email' => $mail, 
                             'mdp' => $pass_hache));
        


        $req = $bdd->prepare('SELECT id_'.$table.' FROM '.$table.' WHERE email = :mail AND mdp = :mdp');
    	$req->execute(array(
    	    'mail' => $mail,
    	    'mdp' => $pass_hache));

    	$resultat = $req->fetch();
        session_start();
        $_SESSION['id'] = $resultat['id_'.$table];
        $_SESSION['mail'] = $mail;
        $_SESSION['nom'] = $nom;
        $_SESSION['profil'] = $table;
        header('Location: ../profil.php');
        
    }else{
        header("Location:../accueil.php?connexion=erreur_inscription");
    }
}
else{
    header("Location:../accueil.php?connexion=erreur_incomplet");
}    

?>
