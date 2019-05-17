<?php

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
        seeSavGestionnaire();
        break;

    case "see_Faq_Gestionnaire":
        seeFaqGestionnaire();
        break;

    case "see_Cgu_Gestionnaire":
        seeCguGestionnaire();
        break;

    case "deconnexion":
        session_destroy();
        header ("Location:index.php?cible=ct_connexion");
        break;

    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilGestionnaire();
}
?>