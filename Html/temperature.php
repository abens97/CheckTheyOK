<!DOCTYPE html>

<?php include "Header&Navigation&Footer.php";?>

<style type="text/css">

#section {background-color: white; opacity: 0.7;  border-radius: 8px; width:65%; text-align: center;display: table; margin: 0 auto;margin-top: 6%; color: grey;font-size: 28px;}
#titre {margin:0 auto;}

</style>

<html>

<div id="section">
	<div id="titre">La température actuelle est de X°C
	</div>
	<hr width="75%" color=#82A898>
	<div>
	<input type="checkbox" name="Ventilateur" value="i">
	Activer/Désactiver le ventilateur
	</div>
	<div>
	<input type="checkbox" name="AutoVentilateur" value="i">
	Activer/Désactiver l'automatisation du ventilateur
	</div>
</div>
</html>