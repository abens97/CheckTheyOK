
<?php
    require ("modele/connexion.php");
    require ("modele/requetes.utilisateurs.php");
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/Accueil.php");

    $Email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
    $MotdePasse = isset($_POST['modp']) ? $_POST['modp'] : '';
    $Type_user = recupereTypeUser($bdd,$Email);
    $ok = true;
    $messages = array();

    //A réintégrer quand tout marchera
    /*if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( empty($MotdePasse) ) {     Probleme ici à modifier 
        $ok = false;
        $messages[] = 'Veuillez écrire votre mot de passe !';
    } */

    //Fonction de vérification des id
    if ($ok) {
        $mdpCrypte = sha1($MotdePasse);
        if(estInscrit($bdd,$Email,$mdpCrypte)) {
            if($Type_user=="4"){
                session_start();
                $_SESSION['email']= $Email;
                $_SESSION['typeUser']= $Type_user;
                $ok = true;

                $_GET['cible']='ct_domisep';
                echo 'Salut';
            }
            else if($Type_user=="3"){
            }
            else if($Type_user=="2"){
            }
            else {
                session_start();
                $_SESSION['email']= $Email;
                $_SESSION['typeUser']= $Type_user;
                $ok = true;
            }
        } 
        else {
            $ok = false;
            $messages[] = 'E-mail ou mot de passe incorrect !';
        }
        
    }

    //Faire en sorte que ça s'affiche pas sur la page direct
    /*echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );*/
?>

