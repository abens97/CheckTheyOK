
<?php

// Appel des fonctions du contrôleur
require ("controller/functions.php");
// Appel des fonctions liées à l'affichage

// Appel des fonctions liées à la BDD
require ("model/connection.php");
require ("model/queriesUser.php");
require ("model/queriesAdmin.php");

// On identifie le contrôleur à appeler dont le nom est contenu dans cible passé en GET
if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'offline';
}
    
// On appelle le contrôleur
include('controller/' . $url . '.php');

?>