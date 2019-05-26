<!DOCTYPE html>

<?php
  //session_start();
  require ("view/hefonaUser.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="Combo.css">
<style type="text/css">
#ajouter {margin-left:15%;margin-top:6%;display:table;}
#ajouter img:hover {opacity: 0.7;}
#zone {padding-bottom:1%;background-color: white; opacity: 0.9;  border-radius: 8px; width:65%; display: none; margin: 0 auto;margin-top: -1%; color: grey;}
#zone button {float:right;font-size: 150%;border-radius: 4px;  background-color: inherit;
  font-family: inherit;margin-right: 5%;
  background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: -moz-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: -o-linear-gradient(top, transparent, rgba(0, 0, 0, 0.26));
  background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.26));
  -webkit-box-shadow: -3px -3px 3px rgba(0, 0, 0, 0.48);
  box-shadow: -2px -3px 3px rgba(68, 15, 39, 0.48);
  border: 1px solid;}
#zone button:hover{background-image: -webkit-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: -moz-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: -o-linear-gradient(bottom, transparent, rgba(0, 0, 0, 0.66));
  background-image: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.66)); background-color: limegreen; border-color: grey;}
  #champs{margin-top: 9%;margin-left: 2%;}
#infologement {font-size:210%;margin:0 auto;width: 100%;text-align: center;}
#demiligne{float: left;width:30%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table;padding-top: 1%;}
#ligne {padding-left:6%;width: 100%; font-size: 110%;}
#ligne label {font-size:155%;}
.Nettoyer { content: "";display: table;clear: both;}
@media only screen and (min-width: 48em) { #demiligne {width: 50%;}}
    #piece1, #piece2 , #piece3 , #piece4  {
            padding-bottom:1%;background-color: white; opacity: 0.9;  border-radius: 8px; width:25%; display: table-cell; margin: 0 auto;margin-top: -1%; color: grey;}
    }
    
</style>
</head>
<html>
<div id="ajouter" onclick="document.getElementById('zone').style.display = 'table'">
    <a href="index.php?cible=user&action=see_Ajout_Logement"><img src = "view/Images/Add.png" alt="Logo" width="70"></a>
  </div>
<div id=piece1>    
    <?php 
    if (isset($_GET["modifier"]) == "oui" && $_GET["modifier"] == "oui" && hadPiece($bdd,$numero_logement,"1")) {
        $nom = getNomPiece($bdd,$numero_logement,"1");
        $surface = getSurface($bdd,$numero_logement,"1");
        $lumi = getLumi($bdd,$numero_logement,"1");
        $temp = getTemp($bdd,$numero_logement,"1");
        $volets = getVolets($bdd,$numero_logement,"1");
        $ventilateur = getVentilateur($bdd,$numero_logement,"1");
        include ("view/pieceModif.php");
    }
    else if(hadPiece($bdd,$numero_logement,"1")){
        $nom = getNomPiece($bdd,$numero_logement,"1");
        $surface = getSurface($bdd,$numero_logement,"1");
        $lumi = getLumi($bdd,$numero_logement,"1");
        $temp = getTemp($bdd,$numero_logement,"1");
        $volets = getVolets($bdd,$numero_logement,"1");
        $ventilateur = getVentilateur($bdd,$numero_logement,"1");
        include ("view/pieceExistante.php");
    }
    else {
        include ("view/piece.php");
    }
    ?>
</div>
<?php
if (hadPiece($bdd,$numero_logement,"1")){
    echo ("<div id=piece2>");
            if (isset($_GET['modifier']) == 'oui' && $_GET['modifier'] == 'oui' && hadPiece($bdd,$numero_logement,'2')) {
                $nom = getNomPiece($bdd,$numero_logement,'2');
                $surface = getSurface($bdd,$numero_logement,'2');
                $lumi = getLumi($bdd,$numero_logement,'2');
                $temp = getTemp($bdd,$numero_logement,'2');
                $volets = getVolets($bdd,$numero_logement,'2');
                $ventilateur = getVentilateur($bdd,$numero_logement,'2');
                include ('view/pieceModif.php');
            }
            else if(hadPiece($bdd,$numero_logement,'2')){
                $nom = getNomPiece($bdd,$numero_logement,'2');
                $surface = getSurface($bdd,$numero_logement,'2');
                $lumi = getLumi($bdd,$numero_logement,'2');
                $temp = getTemp($bdd,$numero_logement,'2');
                $volets = getVolets($bdd,$numero_logement,'2');
                $ventilateur = getVentilateur($bdd,$numero_logement,'2');
                include ('view/pieceExistante.php');
    }
    else {
        include ('view/piece.php');
    }
    echo ("</div>");

}
if (hadPiece($bdd,$numero_logement,"2")){
    echo ("<div id=piece3>");
            if (isset($_GET['modifier']) == 'oui' && $_GET['modifier'] == 'oui' && hadPiece($bdd,$numero_logement,'3')) {
                $nom = getNomPiece($bdd,$numero_logement,'3');
                $surface = getSurface($bdd,$numero_logement,'3');
                $lumi = getLumi($bdd,$numero_logement,'3');
                $temp = getTemp($bdd,$numero_logement,'3');
                $volets = getVolets($bdd,$numero_logement,'3');
                $ventilateur = getVentilateur($bdd,$numero_logement,'3');
                include ('view/pieceModif.php');
            }
            else if(hadPiece($bdd,$numero_logement,'3')){
                $nom = getNomPiece($bdd,$numero_logement,'3');
                $surface = getSurface($bdd,$numero_logement,'3');
                $lumi = getLumi($bdd,$numero_logement,'3');
                $temp = getTemp($bdd,$numero_logement,'3');
                $volets = getVolets($bdd,$numero_logement,'3');
                $ventilateur = getVentilateur($bdd,$numero_logement,'3');
                include ('view/pieceExistante.php');
    }
    else {
        include ('view/piece.php');
    }
    echo ("</div>");

}
if (hadPiece($bdd,$numero_logement,"3")){
    echo ("<div id=piece4>");
            if (isset($_GET['modifier']) == 'oui' && $_GET['modifier'] == 'oui' && hadPiece($bdd,$numero_logement,'4')) {
                $nom = getNomPiece($bdd,$numero_logement,'4');
                $surface = getSurface($bdd,$numero_logement,'4');
                $lumi = getLumi($bdd,$numero_logement,'4');
                $temp = getTemp($bdd,$numero_logement,'4');
                $volets = getVolets($bdd,$numero_logement,'4');
                $ventilateur = getVentilateur($bdd,$numero_logement,'4');
                include ('view/pieceModif.php');
            }
            else if(hadPiece($bdd,$numero_logement,'4')){
                $nom = getNomPiece($bdd,$numero_logement,'4');
                $surface = getSurface($bdd,$numero_logement,'4');
                $lumi = getLumi($bdd,$numero_logement,'4');
                $temp = getTemp($bdd,$numero_logement,'4');
                $volets = getVolets($bdd,$numero_logement,'4');
                $ventilateur = getVentilateur($bdd,$numero_logement,'4');
                include ('view/pieceExistante.php');
    }
    else {
        include ('view/piece.php');
    }
    echo ("</div>");

}
?>
</html>