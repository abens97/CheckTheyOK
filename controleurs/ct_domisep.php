<?php

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);

    switch($action) {
    case "see_Accueil_Domisep":
        seeAccueilDomisep();
        break;
    
    case "see_Statistiques_Domisep":
        seeStatistiquesDomisep();
        break;

    case "see_Gestionnaires_Domisep":
        seeGestionnairesDomisep();
        break;

    case "see_Configuration_Domisep":
        seeConfigurationDomisep();
        break;
    
    case "see_Faq_Domisep":
        seeFaqDomisep();
        break;

    case "see_Cgu_Domisep":
        seeCguDomisep();
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
    seeAccueilDomisep();
}
?>