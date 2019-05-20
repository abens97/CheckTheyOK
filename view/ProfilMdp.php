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

        #contenu {margin-top: 12%;}
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
                <label for="id">Saisissez votre mot de passe actuel :</label>
                <input type="text" id="MotDePasse" name="MotDePasse">                
            </form> 
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Saisissez votre nouveau mot de passe :</label>                 
                <input type="text" id="NouveauMotDePasse" name="NouveauMotDePasse">
            </form> 
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Confirmez votre nouveau mot de passe :</label>                 
                <input type="text" id="ConfirmerMotDePasse" name="ConfirmerMotDePasse">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitMdp" name="Submit_ReinitMdp">&#10143 Réinitialiser son mot de passe</button>
        </div>
    </div>
</body>

</html>