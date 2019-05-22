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
            seeLogementsConnect(); 
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
    
    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilUser();
}
?>