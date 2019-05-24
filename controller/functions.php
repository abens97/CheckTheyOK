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

function seeLogementsConnect($bdd,$numero_logement) {
    require ("view/LogementsConnect.php");
}

function seeSav() {
    //require ("view/hefonaUser.php");
    require ("view/Sav.php");
}

function seeChangerTel(){
    //require ("view/hefonaUser.php");
    require ("view/ProfilTel.php");
}
function seeChangerLangues(){
    //require ("view/hefonaUser.php");
    require ("view/ProfilLangues.php");
}
function seeChangerMdp(){
    //require ("view/hefonaUser.php");
    require ("view/ProfilMdp.php");
}
function seeChangerNotif(){
    //require ("view/hefonaUser.php");
    require ("view/ProfilNotif.php");
}
function seeChangerPhoto(){
    //require ("view/hefonaUser.php");
    require ("view/ProfilPhoto.php");
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

function seeSavGestionnaire($incidents) {
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

function seeVide() {
    require ("view/vide.php");
}
function calculActivite($bdd,$typeUser,$mois,$annee){
    $activite = array();
    if ($mois==1||$mois==3||$mois==5||$mois==7||$mois==8||$mois==10||$mois==12){
        $taille = 33;
        for($i=1;$i<$taille;$i++) 
        { 
            $day="$i/$mois/$annee";
            $activite[$i] = comptConnexionTypeUser($bdd,$day,$typeUser);
        } 
    }
    else if ($mois==4||$mois==6||$mois==9||$mois==11){
        $taille = 32;
        for($i=1;$i<$taille;$i++) 
        { 
            $day="$i/$mois/$annee";
            $activite[$i] = comptConnexionTypeUser($bdd,$day,$typeUser);
        } 
    }
    else if ($mois==2){
        if((is_int($annee/4)&&!is_int($annee/100))||is_int($annee/400)){
            $taille = 31;
            for($i=1;$i<$taille;$i++) 
            { 
                $day="$i/$mois/$annee";
                $activite[$i] = comptConnexionTypeUser($bdd,$day,$typeUser);
            } 
        } else {
            $taille = 30;
            for($i=1;$i<$taille;$i++) 
            { 
                $day="$i/$mois/$annee";
                $activite[$i] = comptConnexionTypeUser($bdd,$day,$typeUser);
            } 
        }
    }
    return $activite;
}

function calculActiviteTotale($bdd,$mois,$annee){
    $activite = array();
    if ($mois==1||$mois==3||$mois==5||$mois==7||$mois==8||$mois==10||$mois==12){
        $taille = 33;
        for($i=1;$i<$taille;$i++) 
        { 
            $day="$i/$mois/$annee";
            $activite[$i] = comptConnexion($bdd,$day);
        } 
    }
    else if ($mois==4||$mois==6||$mois==9||$mois==11){
        $taille = 32;
        for($i=1;$i<$taille;$i++) 
        { 
            $day="$i/$mois/$annee";
            $activite[$i] = comptConnexion($bdd,$day);
        } 
    }
    else if ($mois==2){
        if((is_int($annee/4)&&!is_int($annee/100))||is_int($annee/400)){
            $taille = 31;
            for($i=1;$i<$taille;$i++) 
            { 
                $day="$i/$mois/$annee";
                $activite[$i] = comptConnexion($bdd,$day);
            } 
        } else {
            $taille = 30;
            for($i=1;$i<$taille;$i++) 
            { 
                $day="$i/$mois/$annee";
                $activite[$i] = comptConnexion($bdd,$dayr);
            } 
        }
    }
    return $activite;
}

function checkPieceAdd($bdd,$numero_logement){
    if (hadPiece($bdd,$numero_logement,"4")){
        return "erreur";
    }
    else if (hadPiece($bdd,$numero_logement,"3")){
        return "4";
    }
    else if (hadPiece($bdd,$numero_logement,"2")){
        return "3";
    }
    else if (hadPiece($bdd,$numero_logement,"1")){
        return "2";
    }
    else {
        return "1";
    }
}

function checkPiece($bdd,$numero_logement){
    if (hadPiece($bdd,$numero_logement,"4")){
        return "4";
    }
    else if (hadPiece($bdd,$numero_logement,"3")){
        return "3";
    }
    else if (hadPiece($bdd,$numero_logement,"2")){
        return "2";
    }
    else if (hadPiece($bdd,$numero_logement,"1")){
        return "1";
    }
    else {
        return "erreur";
    }
}