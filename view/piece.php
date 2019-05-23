<!DOCTYPE html>
<form method="post" action="index.php?cible=user&action=add_piece">
    <table>
        <div id="ligne">
            <label for="nom">Nom de la pièce : </label>
            <input type="text" id="nom" placeholder="Salon, Salle à manger..." name="nom" maxlength="30"><br>
        </div>
        <div id="ligne">
            <label for="surface">Surface de la pièce (en m²) : </label>
            <input type="number" id="surface" placeholder=" -- Selectionner --" name="surface" maxlength="3" class="dropdown"><br>
        </div>
        <div id="ligne">
            <label for="capteur_luminosite">Capteur de luminosité </label>
            <input type="checkbox" id="capteur_luminosite" name="capteur_luminosite" value="1"><br>
        </div>
        <div id="ligne">
            <label for="capteur_temperature">Capteur de température </label>
            <input type="checkbox" id="capteur_temperature" name="capteur_temperature" value="1"><br>
        </div>
        <div id="ligne">
            <label for="volets">Volets </label>
            <input type="checkbox" id="volets" name="volets" value="1"><br>
        </div>
        <div id="ligne">
            <label for="ventilateur">Ventilateur </label>
            <input type="checkbox" id="ventilateur" name="ventilateur" value="1"><br>
        </div>
        <div id="ligne">            
            <label>
                <button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Créer une pièce</button>
            </label><br>
        </div>
    </table>
</form>
</html>