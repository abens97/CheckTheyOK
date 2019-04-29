<!DOCTYPE html>

<?php include "Header&Navigation&Footer.php";?>

<style type="text/css">
#ajouter {margin:0 auto;display:table;}
#ajouter img:hover {opacity: 0.7;}
#zone {background-color: white; opacity: 0.7;  border-radius: 8px; width:65%; text-align: center;display: table; margin: 0 auto;margin-top: 6%; color: grey;font-size: 28px;: center;}
#titre {margin:0 auto;display : block;width: 100%;}
#ligne {display: table-row;width: 100%;margin:0 auto;}

</style>

<html>
  <div id="ajouter">
    <a href="#"><img src = "../Images/Add.png" alt="Logo" width="70"></a>
  </div>
  <div id="zone">
    <div id="titre">
      Nouveau logement
    </div>
    <hr width="75%" color=#82A898>
    <div id="ligne">
      <label for="prenom">Adresse postale :</label>
      <input type="text" id="adresse" placeholder="__, rue _______" name="prenom" maxlength="15"><br>
    </div>
  </div>
</html>