<!DOCTYPE html>
<?php
echo "$nom<br>Taille de la pièce : $surface m²<br>";
if ($lumi=="1"){
    echo "Capteur de luminosité : oui<br>";
} else {
    echo "Capteur de luminosité : non<br>";
}
if ($temp=="1"){
    echo "Capteur de température : oui<br>";
} else {
    echo "Capteur de température : non<br>";
}
if ($volets=="1"){
    echo "Volets : oui<br>";
} else {
    echo "Volets : non<br>";
}
if ($ventilateur=="1"){
    echo "Ventilateur : oui<br>";
} else {
    echo "Ventilateur : non<br>";
}
?>
<form method="POST" action="index.php?cible=user&action=see_Logements&modifier=oui">
<button id= "btn-submit2" type="submit" name="btn-submit2" >&#10143 Modifier la pièce</button>
</form>
</html>