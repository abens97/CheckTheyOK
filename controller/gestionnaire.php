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
        $debut_plage_logement = 
        $incidents = getIncidents($bdd)->fetchAll();
        seeSavGestionnaire($incidents);
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