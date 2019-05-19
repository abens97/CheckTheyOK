<?php

function getCgu(PDO $bdd){
    $req = $bdd->query("SELECT contenu FROM fichier WHERE id_fichier = 1");
    $row=$req->fetch();
    return $row["contenu"];
}

function setCgu(PDO $bdd, String $newcgu){
    $cgu = htmlspecialchars($newcgu,ENT_QUOTES);
    $req = $bdd->prepare("UPDATE fichier SET contenu = '$cgu'  WHERE id_fichier = 1");
    $req->execute();
}
function getEmailContact(PDO $bdd){
    $req = $bdd->query("SELECT contenu FROM fichier WHERE id_fichier = 2");
    $row=$req->fetch();
    return $row["contenu"];
}

function setEmailContact(PDO $bdd, String $emailcontact){
    $req = $bdd->prepare("UPDATE fichier SET contenu = '$emailcontact'  WHERE id_fichier = 2");
    $req->execute();
}
?>