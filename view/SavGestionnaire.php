<!DOCTYPE html>

<?php
	
?>

<style type="text/css">
        #liste_incidents {
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

        #incident {
            box-shadow: 1px 1px green, -0.6em 0 .9em grey;
            position: absolute;
            overflow:scroll;
            width:31%;
            height:50%;
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            margin-top : 2%;
            margin-left: 62%;
            border-width:5px;
            border-style:double;
            border-color:#82A898;
            color:black;
            border-radius : 10px;
            opacity: 0.9;
        }
</style>

<html>
<div id="liste_incidents">
                <h1>Liste des incidents</h1>

                <ul>
                    <?php foreach ($incidents as $incident) { ?>
                        <li><a href="index.php?cible=gestionnaire&action=see_Sav_Gestionnaire&ticket=<?=$incident['id_incident']?>">Incident n°<?= $incident["id_incident"]; ?> au logement n°<?= $incident["numero_logement"]; echo' - '; echo $incident["resolu"]; ?></a></li>
                    <?php } ?>
                </ul>
</div>
<?php
if ($incident_choisi['id_incident'] != 0){
                echo"<div id='incident'><h1>Incident n°";
                echo $incident_choisi['id_incident'];
                $incident_choisi_id = $incident_choisi['id_incident'];
                echo "</h1><h2>Logement n°";
                echo $incident_choisi['numero_logement'];
                echo "</h1><ul>";
                
                foreach ($messages as $message) {
                echo "<li>";
                echo $message['adresseMail'];
                echo " : ";
                echo $message['texte'];
                echo "</li>";
                }
                echo "</ul>";
                echo "<form method='post' action='index.php?cible=gestionnaire&action=add_message&ticket=$incident_choisi_id'>
                <textarea placeholder='Votre message' name='new_message' rows='5' cols='65'></textarea><br>
                <input type='submit' id='btn-submit' value='Envoyer le message'></input>
                </form>
                <form method='post' action='index.php?cible=gestionnaire&action=incident_resolu&ticket=$incident_choisi_id'>
                <input type='submit' id='btn-submit' value='Incident résolu'></input>
                </form>
                <form method='post' action='index.php?cible=gestionnaire&action=incident_non_resolu&ticket=$incident_choisi_id'>
                <input type='submit' id='btn-submit' value='Incident non résolu'></input>
                </form>";

                echo "</div>";


                
}
?>

</html>