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
#zone {padding-bottom:1%;background-color: white; opacity: 0.9;  border-radius: 8px; width:75%; display: table; margin: 0 auto;margin-top: 7%; color: grey;}
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
  #champs{margin-top: 0%;margin-left: 2%;}
#infologement {font-size:210%;margin:0 auto;width: 100%;text-align: center;}
#demiligne{-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display: table-cell;padding-top: 1%;}
#ligne {padding-left:6%;width: 100%; font-size: 110%;}
#ligne label {font-size:135%;}
.Nettoyer { content: "";display: table;clear: both;}
@media only screen and (min-width: 48em) { #demiligne {width: 16%;}}
</style>
</head>
<html>

  <div id="zone" class="Nettoyer">
    <form id=registration_form action ="index.php?cible=user&action=see_Logements" method="post">
        <table>
          <div id="infologement">
            Nouveau logement
            <hr width="75%" color=#82A898>
          </div>

          <div id="ligne">
            <div id="demiligne">
              <label for="nombre_resident">Nombre de résident(s)* : </label>
            </div>
            <div id="demiligne">
              <input type="number" id="nombre_resident" placeholder=" -- Selectionner --" name="nombre_resident" maxlength="3" class="dropdown"><br>
            </div>
            <div id="demiligne">
              <label for="type_logement">Type de logement* : </label>
            </div>
            <div id="demiligne">
                <select name="type_logement" class="dropdown-select" >
                  <option value=""><i>-- Selectionner --</i></option>
                  <option value="Appartement T1">Appartement T1</option>
                  <option value="Appartement T2">Appartement T2</option>
                  <option value="Appartement T3">Appartement T3</option>
                  <option value="Villa">Villa</option>
                  <option value="Duplex">Duplex</option>
                </select>
            </div>
          </div>

          <div id="ligne">
            <div id="demiligne">
              <label for="adresse">Adresse postale* : </label>
            </div>
            <div id="demiligne">
              <input type="text" id="adresse" placeholder="__, rue _______" name="adresse" maxlength="30"><br>
            </div>
            <div id="demiligne">
              <label for="code_postal">Code postal* : </label>
            </div>
            <div id="demiligne">
              <input type="text" id="code_postal" placeholder="20000" name="code_postal" maxlength="5"><br>
            </div>
          </div>

          <div id="ligne">
            <div id="demiligne">
              <label for="complement_adresse">Complément d'adresse : </label>
            </div>
            <div id="demiligne">
              <input type="text" id="complement_adresse" placeholder="Résidence, étage... " name="complement_adresse" maxlength="50">
            </div>
            
            <div id="demiligne">
              <label for="ville">Ville* : </label>
            </div>
            <div id="demiligne">
              <input type="text" id="ville" placeholder="" name="ville" maxlength="30"><br>
            </div>
          </div>

          <div id="ligne">
            <div id="demiligne">
              <label for="presence_escalier">Présence d'un escalier* : </label>
            </div>
            <div id="demiligne">
              <input type="checkbox" id="presence_escalier" name="presence_escalier" value="1"><br>
            </div>
            <div id="demiligne">
            </div>
            <div id="demiligne">
            </div>
          </div>
        
          <br>
          <div id="ligne">
            <button>Confirmer</button>
          </div><br>
          <div id="champs">
          <i>* Champs obligatoires</i>
          </div>
        </table>
    </form> 
  </div>
</html>