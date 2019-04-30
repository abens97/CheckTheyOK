<?php
 
include ("../modele/connexion.php");
include ("../modele/requetes.utilisateurs.php");
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$numero_telephone = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$email2 = htmlspecialchars($_POST['email']);
$mot_de_passe = sha1($_POST["mdp"]);
$mot_de_passe2 = sha1($_POST['mdp2']);

if(isset($_POST['check_inscription'])){
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['tel']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
        if ($email == $email2)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                if ($mot_de_passe == $mot_de_passe2)
                {
                    Inscrire($bdd, $nom, $prenom, $numero_telephone, $email, $mot_de_passe);
                    header("Location:../Html/Programmer.php");
                }
                else 
                {
                    $erreur = 'Vos mots de passe ne correspondent pas !';
                    header("Location:../Html/Inscription.php");
                }
            }
            else 
            {
                $erreur = "Votre adresse e-mail n'est pas valide ! ";
                header("Location:../Html/Inscription.php");
            }
        } 
        else 
        {
            $erreur = 'Vos adresses e-mails ne correspondent pas !';
            header("Location:../Html/Inscription.php");
        }  
    }
    else
    {
        $erreur= 'Veuillez remplir tous les champs !';
        header("Location:../Html/Inscription.php");
    }
}
?>