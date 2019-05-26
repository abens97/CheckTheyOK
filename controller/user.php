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

    case "see_Ajout_Logement":
        see_Ajout_Logement();
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

    case "see_Sav":
        $email = $_SESSION['email'];
        $numero_logement = getLogement($bdd, $email);
        $incidents = getIncidentsUser($bdd,$numero_logement)->fetchAll();
        if (isset($_GET['ticket'])){
            $numero_incident = $_GET['ticket'];
            $incident_choisi = getIncident($bdd,$numero_incident)->fetch();
            $messages = getMessages($bdd,$numero_incident)->fetchAll();
        } else{
            $incident_choisi = 0;
            $messages ="";
        }
        seeSav($incidents,$incident_choisi,$messages);
        break;

    case "add_message":
        $email = $_SESSION['email'];
        if (isset($_POST['new_message'])){
            $new_message = $_POST['new_message'];
            if (isset($_GET['ticket'])){
                $numero_incident = $_GET['ticket'];
            }
            addMessage($bdd, $email, $numero_incident,$new_message);
        }
        header ("Location:index.php?cible=user&action=see_Sav&ticket=$numero_incident");
        break;

    case "add_incident":
        $email = $_SESSION['email'];
        $numero_logement = getLogement($bdd, $email);
        $numero_incident = addIncident($bdd, $numero_logement);
        header ("Location:index.php?cible=user&action=see_Sav&ticket=$numero_incident");
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
        $resultat = getUserlog($bdd, $_SESSION["email"]);
        $messages = array();
        if($mdp == $resultat['mot_de_passe'])
            { 
                replaceTel($bdd, $_SESSION["email"],$tel);
                $messages[] = 'Numéro de Téléphone changé !';
                seeChangerTel($messages);
                break;
            }
        else {
            $messages[] ='Mot de passe incorrect';
            seeChangerTel($messages);
            break;
        }
        break;

    case "changer_Mdp":
        $ancienMdp = $_POST["form_mdp"];
        $nouveauMdp = $_POST["form_password"];
        $confirmMdp = $_POST["form_retype_password"];
        $ancienMdpCrypte = sha1($ancienMdp);
        $resultat = getUserlog($bdd, $_SESSION["email"]);
        if($ancienMdpCrypte == $resultat['mot_de_passe'])
        {
            $mdp = sha1($nouveauMdp);
            replaceMdp($bdd, $_SESSION["email"],$mdp);
            echo 'Oui!';
        }
        else 
        {
            echo 'Mauvais mot de passe !';
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