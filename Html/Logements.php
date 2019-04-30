<!DOCTYPE html>

<?php include "Header&Navigation&Footer.php";?>
<head>
<link rel="stylesheet" type="text/css" href="Combo.css">
<style type="text/css">
#ajouter {margin:0 auto;display:table;}
#ajouter img:hover {opacity: 0.7;}
#zone {background-color: white; opacity: 0.9;  border-radius: 8px; width:65%; display: table; margin: 0 auto;margin-top: 6%; color: grey;}
#infologement {margin:0 auto;width: 100%;text-align: center;}
#demiligne{float: left;width:30%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table;padding-top: 1%;}
#ligne {padding-left:6%;width: 100%; font-size: 110%;}
.Nettoyer { content: "";display: table;clear: both;}
@media only screen and (min-width: 48em) { #demiligne {width: 50%;}}
</style>
</head>
<html>
  
  <div id="ajouter">
    <a href="#"><img src = "../Images/Add.png" alt="Logo" width="70"></a>
  </div>

  <div id="zone" class="Nettoyer"  >
    
    <div id="infologement">
      Nouveau logement
      <hr width="75%" color=#82A898>
    </div>

    <div id="ligne">
      <div id="demiligne">
        <label for="prenom">Adresse postale :</label>
        <input type="text" id="adresse" placeholder="__, rue _______" name="adresse" maxlength="30"><br>
      </div>
      <div id="demiligne">
        <label for="type">Type de logement :</label>
        <div class="dropdown">
          <select name="combologement" class="dropdown-select" >
            <option value=""><i>-- Selectionner --</i></option>
            <option value="1">Appartement T1</option>
            <option value="2">Appartement T2</option>
            <option value="3">Appartement T3</option>
            <option value="4">Villa</option>
            <option value="5">Duplex</option>
          </select>
        </div>
      </div>
    </div>
    <div id="ligne">
      <label for="type">Type de logement :</label>
        <div class="dropdow">
          <select name="combologement" class="dropdown-selec" >
            <option value=""><i>-- Selectionner --</i></option>
            <option value="1">Appartement T1</option>
            <option value="2">Appartement T2</option>
            <option value="3">Appartement T3</option>
            <option value="4">Villa</option>
            <option value="5">Duplex</option>
          </select>
        </div>
      </div>
  </div>
</html>