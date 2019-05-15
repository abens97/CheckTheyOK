<?php

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]); // Petite fonction de sécurité

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
        seeCguUser();
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
    seeAccueilUser();
}
?>