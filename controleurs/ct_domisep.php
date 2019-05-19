<?php

require ("modele/connexion.php");
require ("modele/requetes.utilisateurs.php");
require ("modele/requetes.admin.php");

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
        $gestionnaires = getGestionnaires($bdd)->fetchAll();
        seeGestionnairesDomisep($gestionnaires);
        break;

    case "see_Configuration_Domisep":
        $cgu = getCgu($bdd);
        seeConfigurationDomisep($cgu);
        break;
    
    case "see_Faq_Domisep":
        seeFaqDomisep();
        break;

    case "see_Cgu_Domisep":
        $cgu = getCgu($bdd);
        seeCguDomisep($cgu);
        break;

    case "deconnexion":
        session_destroy();
        header ("Location:index.php?cible=ct_connexion");
        break;

    case "modifier_Cgu":
        $newcgu = $_POST['cgu'];
        setCgu($bdd, $newcgu);
        //$cgu = getCgu($bdd);
        header ("Location:index.php?cible=ct_domisep&action=see_Configuration_Domisep");

    case "ajouter_Gestionnaire":
        $nom = $_POST['form_nom'];
        $email =$_POST['form_email'];
        $mdp =sha1($_POST['form_password']);
        $logement_debut =ceil($_POST['form_debut']);
        $logement_fin =ceil($_POST['form_fin']);
        InscrireGestionnaire($bdd,$nom,$email,$mdp,$logement_debut,$logement_fin);
        $gestionnaires = getGestionnaires($bdd)->fetchAll();
        header ("Location:index.php?cible=ct_domisep&action=see_Gestionnaires_Domisep");
        break;
        
    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilDomisep();
}
?>