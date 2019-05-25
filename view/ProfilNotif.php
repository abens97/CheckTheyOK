<!DOCTYPE html>

<?php

require ("view/hefonaUser.php");

?>

<style type="text/css">
#contenu {font-size: 29px; margin:auto; text-align: center;margin-top: 10%;}
[type="radio"] {transform: scale(1.5);}
</style>

<html>

<div id="contenu">
<label for="langue"> Réception de notifications : </label> <br/><br/>
<br>
<input type="radio" id="Notif" name="Notif" value="Sms" checked>SMS<br/>
<br>
<input type="radio" id="Notif" name="Notif" value="Email_notif">E-mail<br>
<br>
<input type="radio" id="Notif" name="Notif" value="Appel" >Appel téléphonique<br/>
</div>

</html>