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
           
            $Email = isset($_POST['E-mail']) ? $_POST['E-mail'] : '';
            $MotdePasse = isset($_POST['modp']) ? $_POST['modp'] : '';
            $typeUser = recupereTypeUser($bdd,$Email); 
            $ok = true;
            $messages = array();
            if (empty($Email))
            {
                $ok = false;
                $messages[] = 'Veuillez écrire votre E-mail ! ';
            }
            if (empty($MotdePasse)) 
            {   
                $ok = false;
                $messages[] = 'Veuillez écrire votre mot de passe !';
            }


            //Fonction de vérification des id
            if ($ok) {
                $mdpCrypte = sha1($MotdePasse);
                if(estInscrit($bdd,$Email,$mdpCrypte)) {
                    addConnexion($bdd, $Email, $typeUser);
                    if($typeUser=="4"){
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $typeUser;
                        header ("Location:index.php?cible=domisep");
                    }
                    else if($typeUser=="3"){
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $typeUser;
                        header ("Location:index.php?cible=gestionnaire");
                    }
                    else if($typeUser=="2"){
                    }
                    else {
                        session_start();
                        $_SESSION['email']= $Email;
                        $_SESSION['typeUser']= $typeUser;
                        header ("Location:index.php?cible=user");
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
                    'messages' => $messages,
                )
            );

            break;

        case "inscription":
            $nom = $_POST['form_nom'];
            $prenom =$_POST['form_prenom'];
            $numero_telephone =$_POST['form_tel'];
            $Email =$_POST['form_email'];
            $MotdePasse =$_POST['form_password'];                
            $mdp = sha1($MotdePasse);

            Inscrire($bdd, $nom, $prenom, $numero_telephone, $Email, $mdp);
            header("Location:index.php?cible=offline");
                        
            break;
    
        default:
            echo "Erreur 404";
            break;
        }
    } else {
        seeAccueil();
    }

?>

