<?php

    $messages = array();
    $ok = true;

    if (isset($_GET["action"])) {
        $action = htmlspecialchars($_GET["action"]);
        switch($action) {
        case "see_Accueil":
            seeAccueil($messages);
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
                $messages[] = 'Veuillez écrire votre e-mail !';
                seeAccueil($messages);
                break;
            }
            if (empty($MotdePasse)) 
            {   
                $messages[] = 'Veuillez écrire votre mot de passe !';
                seeAccueil($messages);
                break;
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
                    $messages[] = 'E-mail ou mot de passe incorrect !';
                    seeAccueil($messages);
                    break;
                }
            }
            

            break;

        case "inscription":
            $nom = $_POST['form_nom'];
            $prenom =$_POST['form_prenom'];
            $numero_telephone =$_POST['form_tel'];
            $Email =$_POST['form_email'];
            $MotdePasse =$_POST['form_password'];
            $civilite =$_POST['form_civilite'];          
            $mdp = sha1($MotdePasse);

            Inscrire($bdd, $nom, $prenom, $numero_telephone, $Email, $mdp, $civilite);
            header("Location:index.php?cible=offline");
                        
            break;
    
        default:
            echo "Erreur 404";
            break;
        }
    } else {
        seeAccueil($messages);
    }

?>

