<?php

function estInscrit(PDO $bdd, String $Email, String $MotdePasse) : bool {
    $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE Email = ? AND MotdePasse = ?");
    $req->execute(array($Email,$MotdePasse));
    $n=$req->rowCount();
    return ($n==1);
}

?> 