<!DOCTYPE html>
<?php

require ("view/hefonaUser.php");

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
<br><br><br><br><br><br><br>
    <div id="contenu">
        <div class="Ligne">
                    <label for="id">Saisissez votre mot de passe actuel :</label>
                    <input type="text" id="ancien_mdp" name="ancien_mdp">                
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Saisissez votre nouveau numéro de téléphone:</label>                 
                <input type="text" id="telephone" name="telephone">
            </form> 
        </div>
        <div class="Ligne">
            <form method="post">
                <label for="e-mail">Confirmer  votre nouveau numéro de téléphone:</label>                 
                <input type="text" id="confirmTel" name="confirmTel">
            </form> 
        </div>
        <div class="Ligne">
            <button type="submit" id= "Submit_ReinitTel" name="Submit_ReinitTel">&#10143 Valider le numéro de téléphone</button>
        </div>
    </div>
</body>


</html>