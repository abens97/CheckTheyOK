<!DOCTYPE html>

<?php

require ("view/hefonaUser.php");

?>

<html>
<style type="text/css">

        #contenu {margin-top: 12%;}
        .Ligne {text-align: center; margin:0 auto;font-size: 28px;padding-top: 15px;padding-bottom: 15px;}
        [type="submit"] {margin:0 auto; font-size: 80%; border-radius: 4px;border: 2px solid white; background-color: unset;opacity: 0.8;font-family: normal;color:white; align-items: center;}
        [type="submit"]:hover {opacity: 0.8;background-color: white;color:black;}
        [type="submit"]:active {background-color: green; color:white;}
        input {width: 180px;}

</style>

<body>

    <form method="post" class="formulaire" action="index.php?cible=user&action=changer_Mdp">

        <div id="contenu">
            <div class="Ligne">
                    <label for="id">Saisissez votre mot de passe actuel :</label>
                    <input type="text" id="ancien_mdp" name="ancien_mdp">                
            </div>
            <div class="Ligne">
                    <label for="e-mail">Saisissez votre nouveau mot de passe :</label>                 
                    <input type="text" id="nouveau_mdp" name="nouveau_mdp">
            </div>
            <div class="Ligne">
                    <label for="e-mail">Confirmez votre nouveau mot de passe :</label>                 
                    <input type="text" id="confirm_mdp" name="confirm_mdp">
            </div>
            <div class="Ligne">
                <button type="submit" id= "submit" name="submit">&#10143 Réinitialiser son mot de passe</button>
            </div>
        </div>

</body>

</html>