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
</style>
</head>
<html>
  
  <div id="ajouter" onclick="document.getElementById('zone').style.display = 'table'">
    <a href="index.php?cible=user&action=see_Ajout_Logement"><img src = "view/Images/Add.png" alt="Logo" width="70"></a>
  </div>

  

  
</html>