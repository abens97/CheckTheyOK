<!DOCTYPE html>
<?php

require ("view/hefonaUser.php");

?>
    <script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="view/javascripts/scriptProfilTel.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>
<style type="text/css">

        #contenu {margin-top: 8%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        [type="submit"]:active {background-color: green; color:white;}
        input {width: 180px;}
        .error_form{color:red;}    

</style>

<html>

<body>
<br>
<form id='telChangement_form' action = "index.php?cible=user&action=changer_Tel" method="post">
<?php 
			if(isset($messages[0]))
			{
				
				echo "<div class='error_form'> $messages[0]; </div>";
			}	
			?>
    <div id="contenu">
        <div class="Ligne">
                    <label for="form_password">Saisissez votre mot de passe actuel :</label>
                    <input type="password" id="form_password" name="form_password">    
                    <br>
                    <span class="error_form" id="password_error_message"></span>            
        </div>
        <div class="Ligne">
                <label for="form_tel">Saisissez votre nouveau numéro de téléphone:</label>                 
                <input type="tel" id="form_tel" name="form_tel" maxlength='10'>
                <br>
                <span class="error_form" id="tel_error_message"></span>
        </div>
        <div class="Ligne">
                <label for="retype_form_tel">Confirmez votre nouveau numéro de téléphone:</label>                 
                <input type="tel" id="retype_form_tel" name="retype_form_tel" maxlength='10'>
                <br>
                <span class="error_form" id="retype_tel_error_message"></span>
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitTel" name="Submit_ReinitTel">&#10143 Valider le numéro de téléphone</button>
        </div>
    </div>
</form>
</body>


</html>