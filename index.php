<?php

//error_reporting(E_ERROR | E_PARSE);

// Appel des fonctions du contrôleur
require_once ("controller/functions.php");

// Appel des classes liées aux graphiques

// Appel des fonctions liées à la BDD
require_once ("model/connection.php");
require_once ("model/queriesUser.php");
require_once ("model/queriesAdmin.php");
require_once ("model/queriesGestionnaire.php");

// On identifie le contrôleur à appeler dont le nom est contenu dans cible passé en GET
if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'offline';
}
    
// On appelle le contrôleur
require ('controller/' . $url . '.php');

?>