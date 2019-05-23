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
        $email = $_SESSION['email'];
        if(hadLogement($bdd,$email)){
            $numero_logement = getLogement($bdd, $email);
            seeLogementsConnect($bdd,$numero_logement); 
        } else {
            seeLogements();
        }
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

    case "add_logement":
        $email = $_SESSION['email'];
        $nombre_resident = $_POST['nombre_resident'];
        $type_logement = $_POST['type_logement'];
        $adresse = $_POST['adresse'];
        $complement_adresse = $_POST['complement_adresse'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $presence_escalier = $_POST['presence_escalier'];
        $etat_personne_agee = "1";
        addLogement($bdd,$email,$nombre_resident,$type_logement,$adresse,$complement_adresse,$code_postal,$ville,$presence_escalier,$etat_personne_agee);
        header ("Location:index.php?cible=user&action=see_Logements");
        break;

    case "add_piece":
        $email = $_SESSION['email'];
        $numero_logement = getLogement($bdd, $email);
        $nom = $_POST['nom'];
        $surface = $_POST['surface'];
        $capteur_luminosite = $_POST['capteur_luminosite'];
        $capteur_temperature = $_POST['capteur_temperature'];
        $volets = $_POST['volets'];
        $ventilateur = $_POST['ventilateur'];
        $numero_piece_logement = checkPieceAdd($bdd,$numero_logement);
        addPiece($bdd,$numero_logement,$numero_piece_logement,$nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur);
        header ("Location:index.php?cible=user&action=see_Logements");
        break;

    case "set_piece":
        $email = $_SESSION['email'];
        $numero_logement = getLogement($bdd, $email);
        $nom = $_POST['nom'];
        $surface = $_POST['surface'];
        $capteur_luminosite = $_POST['capteur_luminosite'];
        $capteur_temperature = $_POST['capteur_temperature'];
        $volets = $_POST['volets'];
        $ventilateur = $_POST['ventilateur'];
        $numero_piece_logement = checkPiece($bdd,$numero_logement);
        setPiece($bdd,$numero_logement,$numero_piece_logement,$nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur);
        header ("Location:index.php?cible=user&action=see_Logements");
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