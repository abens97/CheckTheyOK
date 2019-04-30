<?php

    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");

    if(isset($_FILES["avatar"]) AND !empty($_FILES["avatar"]['name'])) 
    {
        $taillemax = 2097152;
        $extensionsValides = array('jpg','jpeg','gif','png')
        if($_FILES['avatar']['size'] <= $taillemax) 
        {
            $extensionsUpload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1)); 
            if(in_array($extensionsUpload,$extensionsValides))
            {
                $chemin = "../membres/avatar/".$_SESSION['email'].".".$extensionsUpload;
                $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
                if($resultat) 
                {
                    $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE email = :email');
                    $updateavatar->execute(array(
                        'avatar' => $_SESSION['email'].'.'.$extensionsUpload,
                        'email' => $_SESSION['email']
                        ));
                     header("Location:../Html/Profil.php?email=".$_SESSION['email']);
                }
                else {
                    $erreur = "Erreur durant l'importation de votre fichier";
                }
            }
            else {
                $erreur = 'Votre photo de profil doit être au format jpg, jpeg, gif ou png';
            }
        }
        else {
            $erreur = 'Votre photo de profil ne doit pas dépasser 2Mo !';
        }
    }
?>