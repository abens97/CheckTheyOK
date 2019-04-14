<?php

include ("../modele/connexion.php");
include ("../modele/requetes.utilisateurs.php");
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$numero_telephone = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$mot_de_passe = htmlspecialchars($_POST["mdp"]);

if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['numero_telephone']) AND !empty($_POST['email']) AND !empty($_POST['mot_de_passe']) AND !empty($_POST['mot_de_passe2'])) { 
    Inscrire($bdd, $nom, $prenom, $numero_telephone, $email, $mot_de_passe);
    header("Location:../Html/Accueil.php");
}
else{
    header("Location:../Html/Inscription.php?erreurinscription=Veuillez remplir tous les champs !");
}
?>