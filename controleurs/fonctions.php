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
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/Accueil.php");
}

function seeInscription() {
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/Inscription.php");
}

function seeMdpoublie() {
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/mdp.php");
}

function seeFaq() {
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/FAQ.php");
}

function seeCgu() {
    require ("Html/Header&FooterHorsConnexion.php");
    require ("Html/CGU.php");
}

function seeFaqUser() {
    require ("Html/Header&Navigation&Footer.php");
    require ("Html/FAQ.php");
}

function seeCguUser() {
    require ("Html/Header&Navigation&Footer.php");
    require ("Html/CGU.php");
}

function seeAccueilUser() {
    //require ("Html/Header&Navigation&Footer.php");
    require ("Html/AccueilUser.php");
}

function seeStatistiques() {
    //require ("Html/Header&Navigation&Footer.php");
    require ("Html/Statistiques.php");
}

function seeProgrammer() {
    //require ("Html/Header&Navigation&Footer.php");
    require ("Html/Programmer.php");
}

function seeLogements() {
    //require ("Html/Header&Navigation&Footer.php");
    require ("Html/Logements.php");
}

function seeSav() {
    //require ("Html/Header&Navigation&Footer.php");
    require ("Html/Sav.php");
}

function seeAccueilDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/AccueilDomisep.php");
}

function seeStatistiquesDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/StatistiquesDomisep.php");
}

function seeConfigurationDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/ConfigurationDomisep.php");
}

function seeGestionnairesDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/GestionnairesDomisep.php");
}

function seeFaqDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/FAQ.php");
}

function seeCguDomisep() {
    require ("Html/HeFoNaDomisep.php");
    require ("Html/CGU.php");
}

function seeAccueilGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/AccueilGestionnaire.php");
}

function seeTdbGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/TdbGestionnaire.php");
}

function seeStatistiquesGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/StatistiquesGestionnaire.php");
}

function seeSavGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/SavGestionnaire.php");
}

function seeFaqGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/FAQ.php");
}

function seeCguGestionnaire() {
    require ("Html/HeFoNaGestionnaire.php");
    require ("Html/CGU.php");
}
