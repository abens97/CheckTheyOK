<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");

    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $numero_telephone = isset($_POST['tel']) ? $_POST['tel'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Email2 = isset($_POST['Email2']) ? $_POST['Email2'] : '';
    $MotdePasse = sha1(isset($_POST['mdp']) ? $_POST['mdp'] : '');
    $MotdePasse2 = sha1(isset($_POST['mdp']) ? $_POST['mdp'] : '');
    $ok = true;
    $messages = array();

    if (!isset($nom) || empty($nom) || !isset($prenom) || empty($prenom) || !isset($numero_telephone) || empty($numero_telephone) || !isset($Email) || empty($Email) || !isset($MotdePasse) || empty($MotdePasse) || !isset($MotdePasse2) || empty($MotdePasse2)) {
        $ok = false;
        $messages[] = 'Veuillez remplir tous les champs obligatoires !';
    }
    if (sha1(isset($MotdePasse)) != sha1(isset($MotdePasse2)) ) {
        $ok = false;
        $messages[] = 'Vos mots de passe ne correspondent pas !';
    }
    if (isset($Email) != isset($Email2)) {
        $ok = false;
        $message[] = 'Vos adresses e-mails ne correspondent pas !';
    }
    
    if ($ok) {
        if(Inscrire($bdd, $nom, $prenom, $numero_telephone, $Email, $MotdePasse) {
            session_start();
            $_SESSION["Email"]= $Email;
            $ok = true;
        } else {
            $ok = false;
            $messages[] = 'Une erreur c\'est produite ! Veuillez recommencer !';
        }
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );
?>
