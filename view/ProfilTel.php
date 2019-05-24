<!DOCTYPE html>
<?php

require ("view/hefonaUser.php");

?>
    <script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="view/javascripts/script.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Domisep</title>
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
<br><br><br><br>
<form id=telChangement_form action = "index.php?cible=user&action=changer_Tel" method="post">
    <div id="contenu">
        <div class="Ligne">
                    <label for="id">Saisissez votre mot de passe actuel :</label>
                    <input type="text" id="form_password" name="form_password">    
                    <span class="error_form" id="password_error_message"></span>            
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Saisissez votre nouveau numéro de téléphone:</label>                 
                <input type="text" id="form_tel" name="form_tel">
                <span class="error_form" id="tel_error_message"></span>
            </form> 
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Confirmez votre nouveau numéro de téléphone:</label>                 
                <input type="text" id="form_retype_tel" name="form_retype_tel">
                <span class="error_form" id="retype_tel_error_message"></span>
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitTel" name="Submit_ReinitTel">&#10143 Valider le numéro de téléphone</button>
        </div>
    </div>
</form>
</body>


</html>