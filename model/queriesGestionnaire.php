<?php

function getIncidents(PDO $bdd, $debut_plage_logement, $fin_plage_logement){
    $req = $bdd->prepare("SELECT * FROM Incident WHERE numero_logement >= ? AND numero_logement <= ?");
    $req->execute(array($debut_plage_logement,$fin_plage_logement));
    return $req;
}

function getMessages(PDO $bdd, $numero_incident){
    $req = $bdd->prepare("SELECT * FROM Messagesav WHERE numTicket=?");
    $req->execute(array($numero_incident));
    return $req;
}

function getDebutPlage(PDO $bdd, $email_gestionnaire){
    $req = $bdd->prepare("SELECT debut_plage_logement FROM Gestionnaire WHERE email_gestionnaire = ?");
    $req->execute(array($email_gestionnaire));
    $row=$req->fetch();
    return $row["debut_plage_logement"];
}

function getFinPlage(PDO $bdd, $email_gestionnaire){
    $req = $bdd->prepare("SELECT fin_plage_logement FROM Gestionnaire WHERE email_gestionnaire = ?");
    $req->execute(array($email_gestionnaire));
    $row=$req->fetch();
    return $row["fin_plage_logement"];
}

function getIncident(PDO $bdd, $numero_incident){
    $req = $bdd->prepare("SELECT * FROM Incident WHERE id_incident = ?");
    $req->execute(array($numero_incident));
    return $req;
}

function resoudreIncident(PDO $bdd, $numero_incident){
    $req = $bdd->prepare("UPDATE Incident SET resolu = 'résolu'  WHERE id_incident = ?");
    $req->execute(array($numero_incident));
}

function nonResoudreIncident(PDO $bdd, $numero_incident){
    $req = $bdd->prepare("UPDATE Incident SET resolu = 'non résolu'  WHERE id_incident = ?");
    $req->execute(array($numero_incident));
}

function addMessage(PDO $bdd, $emailauteur, $numTicket, $texte){
    $req = $bdd->prepare("INSERT INTO Messagesav (adresseMail, numTicket, texte) VALUES(?,?,?)");
    $req->execute(array($emailauteur,$numTicket,$texte));
}

?>