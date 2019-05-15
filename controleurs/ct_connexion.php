
<?php

    require ("modele/connexion.php");
    require ("modele/requetes.utilisateurs.php");

    if (isset($_GET["action"])) {
        $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité
    
        switch($action) {
        case "see_Accueil":
            seeAccueil();
            break;
    
        case "see_Inscription":
            seeInscription();
            break;

        case "see_Mdpoublie":
            seeMdpoublie();
            break;

        case "see_Faq":
            seeFaq();
            break;

        case "see_Cgu":
            seeCgu();
            break;

        case "connexion":
            $Email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
            $MotdePasse = isset($_POST['modp']) ? $_POST['modp'] : '';
            $Type_user = recupereTypeUser($bdd,$Email);
            $ok = true;
            //$messages = array(); à remettre plus tard

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
            break;
    
        default:
            echo "Erreur 404";
            break;
        }
    } else {
        seeAccueil();
    }

    
    

    //A réintégrer quand tout marchera
    /*if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( empty($MotdePasse) ) {     Probleme ici à modifier 
        $ok = false;
        $messages[] = 'Veuillez écrire votre mot de passe !';
    } */

    

    //Faire en sorte que ça s'affiche pas sur la page direct
    /*echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );*/
?>

