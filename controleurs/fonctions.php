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
    require ("Html/Inscription.php");
}

function seeMdpoublie() {
    require ("Html/mdp.php");
}

function seeFaq() {
    require ("Html/FAQ.php");
}

function seeCgu() {
    require ("Html/CGU.php");
}