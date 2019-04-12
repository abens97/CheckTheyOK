<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");
    $Email = htmlspecialchars($_POST["Identifiant"]);
    $MotdePasse = htmlspecialchars($_POST["mdp"]);

    if(estInscrit($bdd,$Email,$MotdePasse)) {
        header("Location:../Html/Programmer.php");
    }
    else {
        header("Location:../Html/Accueil.php");
    }
?>