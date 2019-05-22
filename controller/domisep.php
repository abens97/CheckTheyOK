<?php

if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);

    switch($action) {
    case "see_Accueil_Domisep":
        seeAccueilDomisep();
        break;
    
    case "see_Statistiques_Domisep":
        error_reporting(E_ERROR | E_PARSE);
         if (isset($_POST["mois"])) {
            $mois = htmlspecialchars($_POST["mois"]);
         } else {
            $mois = date('m');
         }
         if (isset($_POST["annee"])) {
            $annee = htmlspecialchars($_POST["annee"]);
         } else {
            $annee = date('Y');
         }
        $datay1 = calculActivite($bdd,"1",$mois,$annee);
        $datay2 = calculActivite($bdd,"2",$mois,$annee);
        $datay3 = calculActivite($bdd,"3",$mois,$annee);
        $datay4 = calculActivite($bdd,"4",$mois,$annee);
        $datay5 = calculActiviteTotale($bdd,$mois,$annee);
        
        // Setup the graph
        $graph = new Graph(1000,550);
        $graph->SetScale("textlin");
        
        $theme_class=new UniversalTheme;
        
        $graph->SetTheme($theme_class);
        $graph->img->SetAntiAliasing(false);
        $graph->title->Set("Activité sur le site Domisep au mois $mois de l'année $annee");
        
        $graph->SetMargin(40,20,36,63);
        
        $graph->img->SetAntiAliasing();
        
        $graph->yaxis->HideZeroLabel();
        $graph->SetScale("int");
        $graph->yaxis->HideLine(false);
        
        $graph->xgrid->Show();
        $graph->xgrid->SetLineStyle("solid");
        $graph->xgrid->SetColor('#E3E3E3');
        
        $p1 = new LinePlot($datay1);
        $graph->Add($p1);
        $p1->SetColor("#6495ED");
        $p1->SetLegend('Utilisateur');
        
        $p2 = new LinePlot($datay2);
        $graph->Add($p2);
        $p2->SetColor("#B22222");
        $p2->SetLegend('Utilisateur 2');
        
        $p3 = new LinePlot($datay3);
        $graph->Add($p3);
        $p3->SetColor("#FF1493");
        $p3->SetLegend('Gestionnaire');

        $p4 = new LinePlot($datay4);
        $graph->Add($p4);
        //$p4->SetColor("#FF1493");
        $p4->SetLegend('Domisep');

        $p5 = new LinePlot($datay5);
        $graph->Add($p5);
        //$p5->SetColor("#FF1493");
        $p5->SetLegend('Total');
        
        $graph->legend->SetFrameWeight(1);
        
        // Output line
        @unlink("view/Images/graphique_test.png");
        $graph->Stroke('view/Images/graphique_test.png');
        
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
        header ("Location:index.php?cible=offline");
        session_destroy();
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