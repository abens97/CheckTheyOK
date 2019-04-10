<!DOCTYPE html>

<?php include "Header&FooterHorsConnexion.php";?>

<style type="text/css">

        .contenu {text-align: center; margin:0 auto;}

</style>

<html>

        <div class="contenu">
            <form method="post" action="mdpenvoye.php">
                <label for="id">Saisissez votre identifiant :</label>
                <input type="text" <id="ID" name="ID">
                <label for="e-mail">Saisissez votre adresse e-mail :</label>                 
                <input type="text" <id="emailmdp" name="emailmdp">
                <b>|</b>
                <input type="submit" value="Réinitialiser son mot de passe">
            </form> 
        </div>


</html>
