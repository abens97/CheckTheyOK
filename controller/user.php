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
        session_destroy();
        header ("Location:index.php?cible=offline");
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
        $mdp = sha1($_POST["motdepasse"]);
        $tel = $_POST["form_tel"];
        $retype_tel = $_POST['form_retype_tel'];
        
        break;

    case "changer_Mdp":
        $ancienMdp = $_POST["ancien_mdp"];
        $nouveauMdp = $_POST["nouveau_mdp"];
        $confirmMdp = $_POST["confirm_mdp"];
        $ancienMdpCrypte = sha1($ancienMdp);
        $resultat = getUserlog($bdd, $_SESSION["email"]);
        echo 'oui';
        if($_POST["ancien_mdp"] && $_POST["nouveau_mdp"] === $_POST["confirm_mdp"]){
            if($ancienMdpCrypte == $resultat['mot_de_passe'])
            {
                $mdp = sha1($nouveauMdp);
                replaceMdp($bdd, $_SESSION["email"],$mdp);
                echo "mot de passe changé";
                echo '<br>';
            }
            else 
            {
                echo 'Mauvais mot de passe !';
            }
        }
        else 
        {
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