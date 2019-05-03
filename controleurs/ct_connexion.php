
<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");

    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $MotdePasse = sha1(isset($_POST['mdp']) ? $_POST['mdp'] : '');
    $ok = true;
    $messages = array();
    if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( !isset($MotdePasse) || empty($MotdePasse) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre mot de passe !';
    }
    
    if ($ok) {
        if(estInscrit($bdd,$Email,$MotdePasse)) {
            session_start();
            $_SESSION["email"]= $Email;
            $ok = true;
        } else {
            $ok = false;
            $messages[] = 'E-mail ou mot de passe incorrect !';
        }
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );
?>

