
<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");

    $Email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
    $MotdePasse = sha1(isset($_POST['modp']) ? $_POST['modp'] : '');
    $ok = true;
    $messages = array();
    if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( !sha1(isset($MotdePasse)) || empty(sha1($MotdePasse)) ) {    /* Probleme ici à modifier */
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

