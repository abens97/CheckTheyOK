<!DOCTYPE html>

<?php
    require ("view/hefonaUser.php");
?>
<head>

<style type="text/css">

</style>

<body>

<form method="post" class="formulaire" action="index.php?cible=user&action=changer_Mdp">

            <div class="mail">
              <h2>Changement de mot de passe</h2>
              </div>
              <div class="option">
                <label> ANCIEN MOT DE PASSE </label>
                <input type="password" id="ancien_mdp" name="ancien_mdp" placeholder="Entrez votre ancien mot de passe...">
              </div>
              <div class="option">
                <label> NOUVEAU MOT DE PASSE </label>
                <input type="password" id="nouveau_mdp" name="nouveau_mdp" placeholder="Entrez votre nouveau mot de passe...">
              </div>
              <div class="option">
                <label> CONFIRMEZ MOT DE PASSE </label>
                <input type="password" id="confirm_mdp" name="confirm_mdp" placeholder="Confirmez votre mot de passe...">
              </div>
            <div class="submit">
              <input type="submit" name="valider" placeholder="valider">
            </div>

</form>

</body>

