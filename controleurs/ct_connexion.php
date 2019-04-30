<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");
    if(!empty($_POST["Identifiant"]) AND !empty($_POST["mdp"]))
    {
        $Email = htmlspecialchars($_POST["Identifiant"]);
        $MotdePasse = sha1($_POST["mdp"]);
    
        if(estInscrit($bdd,$Email,$MotdePasse)) {
            session_start();
            $_SESSION["email"]= $Email;
            header("Location:../Html/Programmer.php");
        }
        else {
            header("Location:../Html/Accueil.php?erreur=Identifiant ou mot de passe incorrects");
        }
    }
    else{
        header("Location:../Html/Accueil.php?erreur=Veuillez remplir tous les champs !");
    }
  
?>

