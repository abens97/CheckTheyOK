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

        #contenu {margin-top: 8%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        [type="submit"]:active {background-color: green; color:white;}
        input {width: 180px;}
        
</style>

<html>

<body>
	<div id="contenu">
        <div class="Ligne">
            <form method="post">
                <label for="id">Saisissez votre adresse e-mail actuelle :</label>
                <input type="text" id="Email" name="Email">                
            </form> 
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Saisissez votre nouvelle adresse e-mail :</label>                 
                <input type="text" id="NouvelEmail" name="NouvelEmail">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitEmail" name="Submit_ReinitEmail">&#10143 Réinitialiser son adresse e-mail</button>
        </div>
    </div>
    <div id="contenu">
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Saisissez votre nouveau numéro de téléphone:</label>                 
                <input type="text" id="NouveauTel" name="NouveauTel">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitTel" name="Submit_ReinitTel">&#10143 Valider le numéro de téléphone</button>
        </div>
    </div>
</body>


</html>