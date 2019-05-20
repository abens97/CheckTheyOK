<!DOCTYPE html>

<?php
	session_start();
	
    if(isset($_SESSION['email'])){
		include 'Header&Navigation&Footer.php';
	}
    else {
		header('Location:Accueil.php');
	}
?>

<style type="text/css">
#contenu {font-size: 29px; margin:auto; text-align: center;margin-top: 14%;}
[type="radio"] {transform: scale(1.5);}
</style>

<html>

<div id="contenu">
<label for="langue"> Choisissez votre langue :</label> <br/><br/>
<input type="radio" id="langue" name="langue" value="Français" checked>Français
<input type="radio" id="langue" name="langue" value="Anglais">Anglais<br>
<div id="contenu">

</html>