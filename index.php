
<?php
/*
$isConnected = false;
//Appelle le contrôleur de connexion tant que l'user ne s'est pas log
if ($isConnected==false) {
    require ("controleurs/ct_connexion.php");
}
*/



/**
 * MVC :
 * - index.php : identifie le routeur à appeler en fonction de l'url
 * - Contrôleur : Crée les variables, élabore leurs contenus, identifie la vue et lui envoie les variables
 * - Modèle : contient les fonctions liées à la BDD et appelées par les contrôleurs
 * - Vue : contient ce qui doit être affiché
 **/

// Activation des erreurs
//ini_set('display_errors', 1);


// Appel des fonctions du contrôleur
require ("controleurs/fonctions.php");
// Appel des fonctions liées à l'affichage
require ("vues/fonctions.php");
// Appel des fonctions liées à la BDD
require ("modele/connexion.php");
require ("modele/requetes.utilisateurs.php");
require ("modele/requetes.admin.php");



// On identifie le contrôleur à appeler dont le nom est contenu dans cible passé en GET
if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'ct_connexion';
}

// On appelle le contrôleur
include('controleurs/' . $url . '.php');

?>