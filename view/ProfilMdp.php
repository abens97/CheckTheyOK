<!DOCTYPE html>

<?php

require ("view/hefonaUser.php");

?>

<html>
<head>
<script type="text/javascript" language="javascript" src="view/javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="view/javascripts/scriptProfilMdp.js"></script>
<style type="text/css">

        #contenu {margin-top: 12%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        [type="submit"]:active {background-color: green; color:white;}
        input {width: 180px;}
        .error_form{color:red;}    


</style>

<body>

<form id='mdpChangement_form' action = "index.php?cible=user&action=changer_Mdp" method="post">

        <div id="contenu">
            <div class="Ligne">
                    <label for="mdp">Saisissez votre mot de passe actuel :</label>
                    <input type="password" id="form_mdp" name="form_mdp">   
                    <br>
                    <span class="error_form" id="mdp_error_message"></span>            
            </div>
            <div class="Ligne">
                    <label for="form_password">Saisissez votre nouveau mot de passe :</label>                 
                    <input type="password" id="form_password" name="form_password">
                    <br>
                    <span class="error_form" id="password_error_message"></span>            
            </div>
            <div class="Ligne">
                    <label for="form_retype_password">Confirmez votre nouveau mot de passe :</label>                 
                    <input type="password" id="form_retype_password" name="form_retype_password">
                    <br>
                    <span class="error_form" id="retype_password_error_message"></span>            
            </div>
            <div class="Ligne">
                <button type="submit" id= "submit" name="submit">&#10143 Réinitialiser son mot de passe</button>
            </div>
        </div>
<form>
</body>
</head>
</html>