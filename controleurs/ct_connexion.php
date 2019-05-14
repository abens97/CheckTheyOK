
<?php
    include ("../modele/connexion.php");
    include ("../modele/requetes.utilisateurs.php");

    $Email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
    $MotdePasse = isset($_POST['modp']) ? $_POST['modp'] : '';
    $ok = true;
    $messages = array();
    if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( empty($MotdePasse) ) {    /* Probleme ici à modifier */
        $ok = false;
        $messages[] = 'Veuillez écrire votre mot de passe !';
    }   
    if ($ok) {
        $mdpCrypte = sha1($MotdePasse);
        if(estInscrit($bdd,$Email,$mdpCrypte)) {
            $Type_user = recupereTypeUser($bdd,$Email);
            if($Type_user=='4'){
                echo "Bienvenue sur Domisep";
            }
            else if($Type_user=='3'){
            }
            else if($Type_user=='2'){
            }
            else {
                session_start();
                $_SESSION["email"]= $Email;
                $ok = true;
            }
        } 
        else {
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

