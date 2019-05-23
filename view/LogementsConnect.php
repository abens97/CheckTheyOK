<!DOCTYPE html>

<?php
  //session_start();
  require ("view/hefonaUser.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="Combo.css">
<style type="text/css">
    #piece1 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece2 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 55%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece3 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 18%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
    #piece4 {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:30%;
            height:25%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 18%;
            margin-left: 55%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
    }
</style>
</head>
<html>
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