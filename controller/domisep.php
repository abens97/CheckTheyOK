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
        $gestionnaires = getGestionnaires($bdd)->fetchAll();
        seeGestionnairesDomisep($gestionnaires);
        break;

    case "see_Configuration_Domisep":
        $cgu = getCgu($bdd);
        $emailcontact = getEmailContact($bdd);
        seeConfigurationDomisep($cgu,$emailcontact);
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
        header ("Location:index.php?cible=offline");
        break;

    case "modifier_Cgu":
        $newcgu = $_POST['cgu'];
        setCgu($bdd, $newcgu);
        header ("Location:index.php?cible=domisep&action=see_Configuration_Domisep");

    case "modifier_Email_Contact":
        $newemailcontact = $_POST['form_email'];
        setEmailContact($bdd, $newemailcontact);
        header ("Location:index.php?cible=domisep&action=see_Configuration_Domisep");

    case "ajouter_Gestionnaire":
        $prenom = $_POST['form_prenom'];
        $nom = $_POST['form_nom'];
        $numero_telephone = $_POST['form_tel'];
        $email =$_POST['form_email'];
        $mdp =sha1($_POST['form_password']);
        $logement_debut =ceil($_POST['form_debut']);
        $logement_fin =ceil($_POST['form_fin']);
        InscrireGestionnaire($bdd,$prenom,$nom,$numero_telephone,$email,$mdp,$logement_debut,$logement_fin);
        $gestionnaires = getGestionnaires($bdd)->fetchAll();
        header ("Location:index.php?cible=domisep&action=see_Gestionnaires_Domisep");
        break;
        
    default:
        echo "Erreur 404";
        break;
    }
} else {
    seeAccueilDomisep();
}
?>