<!DOCTYPE html>

<?php
	
?>

<style type="text/css">
        #Construction {
            border: 4px solid lightgrey;
            border-radius: 4px;
            width:34%;
            overflow: hidden;
            margin: 0 auto;
            height :60%;
            }
        #liste_ticket {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:45%;
            height:50%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 12%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }

</style>

<html>
<div>
    Sav Gestionnaire
    <p>-> Liste des incidents</p>
    <p>-> Changer l'état d'un incident</p>
</div>
<div id="liste_ticket">
                <h1>Liste des incidents</h1>

                <ul>
                    <?php foreach ($incidents as $incident) { ?>
                        <li><a href="index.php?cible=gestionnaire&action=see_Incident&ticket=<?=$incident['id_incident']?>">Incident n°<?= $incident["id_incident"]; ?> au logement n°<?= $incident["numero_logement"]; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

<!--Mettre ici le contenu de nos pages-->

</html>