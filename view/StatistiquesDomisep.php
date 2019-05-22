<!DOCTYPE html>

<style type="text/css">
    #Construction {
    border: 4px solid lightgrey;
    border-radius: 4px;
    width:52%;
    overflow: hidden;
    margin: 0 auto;
    height :55%;
}
}

</style>

<html>

<div id="Construction">
    <img src="view/Images/graphique_test.png">
</div>
<div id="Recap">
<?php
if (isset($_POST["mois"])) {
    $mois = htmlspecialchars($_POST["mois"]);
 } else {
    $mois = date('m');
 }
 if (isset($_POST["annee"])) {
    $annee = htmlspecialchars($_POST["annee"]);
 } else {
    $annee = date('Y');
 }
 echo "Activité du mois n°$mois de l'année $annee";
 ?>
</div>
<div id="Formulaire">
    <form id=registration_form action ="index.php?cible=domisep&action=see_Statistiques_Domisep" method="post">
        <table>
            <div id="ligne">
                <div id="form2_demi">
                    <label for="mois">Mois :</label>
                        <select name="mois">
                            <option value="01">janvier</option>
                            <option value="02">février</option>
                            <option value="03">mars</option>
                            <option value="04">avril</option>
                            <option value="05" selected>mai</option>
                            <option value="06">juin</option>
                            <option value="07">juillet</option>
                            <option value="08">août</option>
                            <option value="09">septembre</option>
                            <option value="10">octobre</option>
                            <option value="11">novembre</option>
                            <option value="12">décembre</option>
                        </select><br>
                </div>
            </div>
            <div id="ligne">
                <div id="form2_demi">
                    <label for="annee">Année :</label>
                        <select name="annee">
                            <option value="2019" selected>2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                        </select><br>
                </div>
            </div>
            <div id="ligne">            
                <div id="form2_bas">
                    <label>
                        <button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Valider</button>
                    </label><br>
                </div>
            </div>
        </table>
    </form>
</div>
<!--Mettre ici le contenu de nos pages-->

</html>
