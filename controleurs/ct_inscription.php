<?php
    require ("../modele/connexion.php");
    require ("../modele/requetes.utilisateurs.php");

    $nom = $_POST['nom'];
    $prenom =$_POST['prenom'];
    $numero_telephone =$_POST['tel'];
    $Email =$_POST['form_email'];
    $Email2 =$_POST['form_retype_email'];
    $MotdePasse =$_POST['form_password'];
    $MotdePasse2 =$_POST['form_retype_password'];
    $ok = true;
    $messages = array();

    if (empty($nom) OR empty($prenom) OR empty($numero_telephone) OR empty($Email) OR empty($MotdePasse) OR empty($MotdePasse2)) 
    {
        $messages[] = 'Veuillez remplir tous les champs obligatoires !';
    }
    elseif ($MotdePasse != $MotdePasse2) {
        
        $messages[] = 'Vos mots de passe ne correspondent pas !';
    }
    elseif ($Email != $Email2) {
        $message[] = 'Vos adresses e-mails ne correspondent pas !';
    } else {
        $mdp = sha1($MotdePasse);
        session_start();
        Inscrire($bdd, $nom, $prenom, $numero_telephone, $Email, $mdp);
        $_SESSION["Email"]= $Email;
        header("Location: ../Html/Accueil.php");
    }

    echo json_encode(
        array(
            'messages' => $messages,
        )
    );
?>
