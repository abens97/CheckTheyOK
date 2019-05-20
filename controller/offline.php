<?php

    $messages = array();
    $ok = true;

    if (isset($_GET["action"])) {
        $action = htmlspecialchars($_GET["action"]);
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
            $cgu = getCgu($bdd);
            seeCgu($cgu);
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
                    addConnexion($bdd, $Email, $Type_user);
                    if($Type_user=="4"){
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $Type_user;
                        $ok = true;
                        header ("Location:index.php?cible=domisep");
                    }
                    else if($Type_user=="3"){
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $Type_user;
                        $ok = true;
                        header ("Location:index.php?cible=gestionnaire");
                    }
                    else if($Type_user=="2"){
                    }
                    else {
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $Type_user;
                        $ok = true;
                        header ("Location:index.php?cible=user");
                    }
                } 
                else {
                    seeFaq();
                    $ok = false;
                    $messages[] = 'E-mail ou mot de passe incorrect !';
                }
            }
            break;

        case "inscription":
            $nom = $_POST['form_nom'];
            $prenom =$_POST['form_prenom'];
            $numero_telephone =$_POST['form_tel'];
            $Email =$_POST['form_email'];
            $Email2 =$_POST['form_retype_email'];
            $MotdePasse =$_POST['form_password'];                
            $MotdePasse2 =$_POST['form_retype_password'];
            $ok = true;
            //$messages = array();
            //echo "inscription";
                
                
            if (empty($nom) OR empty($prenom) OR empty($numero_telephone) OR empty($Email) OR empty($MotdePasse) OR empty($MotdePasse2)) 
            {
                //echo " + un champ manquant";
                //$messages[] = 'Veuillez remplir tous les champs obligatoires !';                    
                //seeInscription();
            }
            elseif ($MotdePasse != $MotdePasse2) {
                //echo " + mot de passe correspondent pas"; 
                //$messages[] = 'Vos mots de passe ne correspondent pas !';
                //seeInscription();
            }
            elseif ($Email != $Email2) {
                //echo " + email correspondent pas"; 
                //$message[] = 'Vos adresses e-mails ne correspondent pas !';
                //seeInscription();
            } else {
                //echo " + tout va bien"; 
                $mdp = sha1($MotdePasse);
                Inscrire($bdd, $nom, $prenom, $numero_telephone, $Email, $mdp);
                header("Location:index.php?cible=offline");
            }
            /*
            echo json_encode(
                array(
                    'messages' => $messages,
                )
            );
            */
            break;
    
        default:
            echo "Erreur 404";
            break;
        }
    } else {
        seeAccueil();
    }

    
    
    /*
    //A réintégrer quand tout marchera
    if ( !isset($Email) || empty($Email) ) {
        $ok = false;
        $messages[] = 'Veuillez écrire votre E-mail ! ';
    }
    if ( empty($MotdePasse) ) {    
        $ok = false;
        $messages[] = 'Veuillez écrire votre mot de passe !';
    } 

    

    //Faire en sorte que ça s'affiche pas sur la page direct
    
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );
    */
    
?>

