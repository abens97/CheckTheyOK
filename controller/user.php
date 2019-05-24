<?php
session_start();
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);
    switch($action) {
    case "see_Accueil_User":
        seeAccueilUser();
        break;

    case "see_Statistiques":
        seeStatistiques();
        break;

    case "see_Programmer":
        seeProgrammer();
        break;

    case "see_Logements":
        seeLogements();
        break;

    case "see_Sav":
        seeSav();
        break;

    case "see_Faq_User":
        seeFaqUser();
        break;

    case "see_Cgu_User":
        $cgu = getCgu($bdd);
        seeCguUser($cgu);
        break;

    case "deconnexion":
        header ("Location:index.php?cible=offline");
        session_destroy();
        break;

    case "see_Changer_Tel":
        seeChangerTel();
        break;
        
    case "see_Changer_Langues":
        seeChangerLangues();
        break;

    case "see_Changer_Notif":
        seeChangerNotif();
        break;

    case "see_Changer_Photo":
        seeChangerPhoto();
        break;

    case "see_Changer_Mdp":
        seeChangerMdp();
        break;

    case "changer_Tel":
        $mdp = sha1($_POST["form_password"]);
        $tel = $_POST["form_tel"];
        $retype_tel = $_POST['form_retype_tel'];
        
        break;

    case "changer_Mdp":
        $ancienMdp = $_POST["ancien_mdp"];
        $nouveauMdp = $_POST["nouveau_mdp"];
        $confirmMdp = $_POST["confirm_mdp"];
        $ancienMdpCrypte = sha1($ancienMdp);
        $resultat = getUserlog($bdd, $_SESSION["email"]);
        if($_POST["ancien_mdp"] && $_POST["nouveau_mdp"] === $_POST["confirm_mdp"]){
            if($ancienMdpCrypte == $resultat['mot_de_passe'])
            {
                $mdp = sha1($nouveauMdp);
                replaceMdp($bdd, $_SESSION["email"],$mdp);
                header('index.php?cible=user&action=see_Changer_Mdp&erreur=mot_de_passe_change');
            }
            else 
            {
                echo 'Mauvais mot de passe !';
            }
        }
        else 
        {
            header('index.php?cible=user&action=see_Changer_Mdp&erreur=RemplisTout');
            echo 'Remplis tout !';
        } 

        break; 

    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilUser();
}
?>