<?php

function estInscrit(PDO $bdd, String $Email, String $MotdePasse) : bool {
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mot_de_passe = ?");
    $req->execute(array($Email,$MotdePasse));
    $n=$req->rowCount();
    return ($n==1);
}

function Inscrire(PDO $bdd, String $nom, String $prenom, String $numero_telephone, String $Email, String $MotdePasse) {
    $req = $bdd->prepare("INSERT INTO utilisateur(nom,prenom,numero_telephone,email,mot_de_passe)VALUES(?,?,?,?,?)");
    $req->execute(array($nom,$prenom,$numero_telephone,$Email,$MotdePasse));
}

function recupereNom(PDO $bdd, String $Email) {
    $req = $bdd->prepare("SELECT prenom FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    echo $row["prenom"];
}

function changementMdp(PDO $bdd, $Email, $new_mdp){
    $req = $db->prepare("UPDATE Utilisateur SET mot_de_passe = ? WHERE email = ?");
    $req->execute(array($Email));
}

function avatar(PDO $bdd, String $extensionsUpload) {
    $updateavatar = $bdd->prepare('UPDATE utilisateur SET avatar = :avatar WHERE email = :email');
    $updateavatar->execute(array('avatar' => $_SESSION['email'].'.'.$extensionsUpload,'email' => $_SESSION['email']));
}

function emailUtilise(PDO $bdd, String $Email) : bool {
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $n=$req->rowCount();
    return ($n==1);
}

?>