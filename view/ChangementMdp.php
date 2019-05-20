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
<head>

<style type="text/css">

</style>

<body>

<form method="post" class="formulaire" action="Alexistest.php">

            <div class="mail">
              <h2>Changement de mot de passe</h2>
              </div>
              <div class="option">
                <label> ANCIEN MOT DE PASSE </label>
                <input type="password" id="oldPass" name="oldPass" placeholder="Entrez votre ancien mot de passe...">
              </div>
              <div class="option">
                <label> NOUVEAU MOT DE PASSE </label>
                <input type="password" id="newPass" name="newPass" placeholder="Entrez votre nouveau mot de passe...">
              </div>
              <div class="option">
                <label> CONFIRMEZ MOT DE PASSE </label>
                <input type="password" id="confPass" name="confPass" placeholder="Confirmez votre mot de passe...">
              </div>
            <div class="submit">
              <input type="submit" name="valider" placeholder="valider">
            </div>

</form>

</body>

