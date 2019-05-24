<?php
session_start();
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);
    
    switch($action) {
    case "see_Accueil_Gestionnaire":
        seeAccueilGestionnaire();
        break;
    
    case "see_Tdb_Gestionnaire":
        seeTdbGestionnaire();
        break;

    case "see_Statistiques_Gestionnaire":
        seeStatistiquesGestionnaire();
        break;
    
    case "see_Sav_Gestionnaire":
        $email_gestionnaire = $_SESSION['email'];
        $debut_plage_logement = getDebutPlage($bdd, $email_gestionnaire);
        $fin_plage_logement = getFinPlage($bdd, $email_gestionnaire);
        $incidents = getIncidents($bdd,$debut_plage_logement,$fin_plage_logement)->fetchAll();
        if (isset($_GET['ticket'])){
            $numero_incident = $_GET['ticket'];
            $incident_choisi = getIncident($bdd,$numero_incident)->fetch();
            $messages = getMessages($bdd,$numero_incident)->fetchAll();
        } else{
            $incident_choisi = 0;
            $messages ="";
        }
        
        seeSavGestionnaire($incidents,$incident_choisi,$messages);
        break;
        
    case "see_Faq_Gestionnaire":
        seeFaqGestionnaire();
        break;

    case "see_Cgu_Gestionnaire":
        $cgu = getCgu($bdd);
        seeCguGestionnaire($cgu);
        break;

    case "deconnexion":
        header ("Location:index.php?cible=offline");
        session_destroy();
        break;

    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilGestionnaire();
}
?>