<?php

function getIncidents(PDO $bdd, $debut_plage_logement, $fin_plage_logement){
    $req = $bdd->prepare("SELECT * FROM Incident WHERE numero_logement >= ? AND numero_logement <= ?");
    $req->execute(array($debut_plage_logement,$fin_plage_logement));
    return $req;
}

?>