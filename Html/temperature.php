<!DOCTYPE html>

<?php include "Header&Navigation&Footer.php";?>

<style type="text/css">

#Temperature {background-color: white; opacity: 0.7;  border-radius: 8px; width:65%; text-align: center;display: table; margin: 0 auto;margin-top: 6%; color: grey;font-size: 28px;: center;}
#infotemp{margin:0 auto;display : block;width: 100%;}
#ligne {display: table-row;width: 100%;margin:0 auto;margin-top: 4%;}
[type="number"] {width: 20%;}
</style>

<html>

<div id="Temperature">
	<div id="infotemp">La température actuelle est de X°C
	</div>
	<hr width="75%" color=#82A898>
	<div id="ligne">
	<input type="checkbox" name="Ventilateur" value="i">
	Activer/Désactiver le ventilateur
	</div>
	<div id="ligne">
	<input type="checkbox" name="AutoVentilateur" value="i">
	Activer/Désactiver l'automatisation du ventilateur
	</div>
	<div id="ligne">
	Je veux que le ventilatur s'allume quand il fait
	<input type="number" id="templimite" placeholder="__°C" name="templimite" maxlength="3"> °C
</div>
</html>