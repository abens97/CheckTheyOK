<?php

 
include("../model/connection.php");
$req = $bdd->prepare("SELECT etat FROM actionneur WHERE id_actionneur = ?");
$req->execute(array("2"));
$etat = $req->fetch(); 



function envoieTrame(String $trame){
    $ch = curl_init();  

    $name = 'projets-tomcat.isep.fr';//nom du site

    $numeroPort = ':8080';//numero de port du serveur

    $dossier = "appService";

    $nomEquipe = "008A";

    $parametre = "ACTION=COMMAND&TEAM=".$nomEquipe."&TRAME=".$trame;

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,'http://'.$name.$numeroPort.'/'.$dossier.'/?'.$parametre);
    $content = curl_exec($ch);
    echo $content;
}


if($etat["etat"] == "off";

    envoieTrame("1008A1a121111");
    $req = $bdd->prepare("UPDATE actionneur SET etat=? WHERE id_actionneur = ?");
    $req->execute(array("on", "2"));
} else {
    envoieTrame("1008A1a120000");
    $req = $bdd->prepare("UPDATE actionneur SET etat=? WHERE id_actionneur = ?");
    $req->execute(array("off", "2"));
}


?>