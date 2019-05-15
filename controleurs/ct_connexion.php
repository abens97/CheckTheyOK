
<?php

    require ("modele/connexion.php");
    require ("modele/requetes.utilisateurs.php");

    $messages = array();
    $ok = true;

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
            if (isset($_POST['email']) && isset($_POST['modp'])) {
                $Email = $_POST['email'];
                $MotdePasse = $_POST['modp'];
            }
            $Type_user = recupereTypeUser($bdd,$Email);
            $messages = array(); 

            //Fonction de vérification des id
            if ($ok) {
                $mdpCrypte = sha1($MotdePasse);
                if(estInscrit($bdd,$Email,$mdpCrypte)) {
                    
                    if($Type_user=="4"){
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $Type_user;
                        $ok = true;
                        seeAccueilUser();
                        
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
                        header ("Location:index.php?cible=ct_user");
                    }
                } 
                else {
                    seeFaq();
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
    /*
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );
    */
?>

