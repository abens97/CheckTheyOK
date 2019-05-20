<?php
/**
 * Fonctions liées aux contrôleurs
 */


/**
 * Détermine si le paramètre est un entier ou non
 * @param mixed $int
 * @return bool
 */
function estUnEntier($int): bool
{
    return is_numeric($int);
}

/**
 * Détermine si le paramètre est une string ou non
 * 
 * @param mixed $chaine
 * @return bool
 */
function estUneChaine($chaine): bool
{
    if (empty($chaine)) {
        return false;

    } else {
        return is_string($chaine);
    }
}

function estUnMotDePasse($chaine): bool
{
    if (empty($chaine) || strlen($chaine) < 8) {
        return false;
    } else {
        return is_string($chaine);
    }
}

function crypterMdp($password) {
    //return sha1($password);
    return password_hash($password, PASSWORD_BCRYPT);
}

function seeAccueil() {
    require ("view/hefonaOffline.php");
    require ("view/Accueil.php");
}

function seeInscription() {
    require ("view/hefonaOffline.php");
    require ("view/Inscription.php");
}

function seeMdpoublie() {
    require ("view/hefonaOffline.php");
    require ("view/mdp.php");
}

function seeFaq() {
    require ("view/hefonaOffline.php");
    require ("view/FAQ.php");
}

function seeCgu(String $cgu) {
    require ("view/hefonaOffline.php");
    require ("view/CGU.php");
}

function seeFaqUser() {
    require ("view/hefonaUser.php");
    require ("view/FAQ.php");
}

function seeCguUser(String $cgu) {
    require ("view/hefonaUser.php");
    require ("view/CGU.php");
}

function seeAccueilUser() {
    //require ("view/hefonaUser.php");
    require ("view/AccueilUser.php");
}

function seeStatistiques() {
    //require ("view/hefonaUser.php");
    require ("view/Statistiques.php");
}

function seeProgrammer() {
    //require ("view/hefonaUser.php");
    require ("view/Programmer.php");
}

function seeLogements() {
    //require ("view/hefonaUser.php");
    require ("view/Logements.php");
}

function seeSav() {
    //require ("view/hefonaUser.php");
    require ("view/Sav.php");
}

function seeAccueilDomisep() {
    require ("view/hefonaDomisep.php");
    require ("view/AccueilDomisep.php");
}

function seeStatistiquesDomisep() {
    require ("view/hefonaDomisep.php");
    require ("view/StatistiquesDomisep.php");
}

function seeConfigurationDomisep(String $cgu, String $emailcontact) {
    require ("view/hefonaDomisep.php");
    require ("view/ConfigurationDomisep.php");
}

function seeGestionnairesDomisep($gestionnaires) {
    require ("view/hefonaDomisep.php");
    require ("view/GestionnairesDomisep.php");
}

function seeFaqDomisep() {
    require ("view/hefonaDomisep.php");
    require ("view/FAQ.php");
}

function seeCguDomisep(String $cgu) {
    require ("view/hefonaDomisep.php");
    require ("view/CGU.php");
}

function seeAccueilGestionnaire() {
    //require ("view/hefonaGestionnaire.php");
    require ("view/AccueilGestionnaire.php");
}

function seeTdbGestionnaire() {
    require ("view/hefonaGestionnaire.php");
    require ("view/TdbGestionnaire.php");
}

function seeStatistiquesGestionnaire() {
    require ("view/hefonaGestionnaire.php");
    require ("view/StatistiquesGestionnaire.php");
}

function seeSavGestionnaire() {
    require ("view/hefonaGestionnaire.php");
    require ("view/SavGestionnaire.php");
}

function seeFaqGestionnaire() {
    require ("view/hefonaGestionnaire.php");
    require ("view/FAQ.php");
}

function seeCguGestionnaire(String $cgu) {
    require ("view/hefonaGestionnaire.php");
    require ("view/CGU.php");
}
