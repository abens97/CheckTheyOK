<?php

function getCgu(PDO $bdd){
    $req = $bdd->query("SELECT contenu FROM Fichier WHERE id_fichier = 1");
    $row=$req->fetch();
    return $row["contenu"];
}

function setCgu(PDO $bdd, String $newcgu){
    $cgu = htmlspecialchars($newcgu,ENT_QUOTES);
    $req = $bdd->prepare("UPDATE Fichier SET contenu = '$cgu'  WHERE id_fichier = 1");
    $req->execute();
}

function getEmailContact(PDO $bdd){
    $req = $bdd->query("SELECT contenu FROM Fichier WHERE id_fichier = 2");
    $row=$req->fetch();
    return $row["contenu"];
}

function setEmailContact(PDO $bdd, String $emailcontact){
    $req = $bdd->prepare("UPDATE Fichier SET contenu = '$emailcontact'  WHERE id_fichier = 2");
    $req->execute();
}

function addConnexion(PDO $bdd, String $emailuser ,$typeuser){
    $req = $bdd->prepare("INSERT INTO Activite (email_utilisateur, type_utilisateur, date_connexion) VALUES(?,?,?)");
    date_default_timezone_set('Europe/Paris');
    $dateconnexion = date("d/m/Y");
    $req->execute(array($emailuser,$typeuser,$dateconnexion));
}

function comptConnexion(PDO $bdd, String $day){
    $req = $bdd->prepare("SELECT * FROM Activite WHERE date_connexion = ?");
    $req->execute(array($day));
    $n=$req->rowCount();
    return $n;
}

function comptConnexionTypeUser(PDO $bdd, String $day, $typeuser){
    $req = $bdd->prepare("SELECT * FROM Activite WHERE date_connexion = ? AND type_utilisateur = ?");
    $req->execute(array($day, $typeuser));
    $n=$req->rowCount();
    return $n;
}
?>