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
<label for="langue"> Réception de notification : </label> <br/><br/>
<input type="radio" id="Notif" name="Notif" value="Sms" checked>SMS<br/>
<input type="radio" id="Notif" name="Notif" value="Email_notif">E-mail<br>
<input type="radio" id="Notif" name="Notif" value="Appel" >Appel téléphonique<br/>
</div>

</html>