<?php

function estInscrit(PDO $bdd, String $Email, String $MotdePasse) : bool {
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mot_de_passe = ?");
    $req->execute(array($Email,$MotdePasse));
    $n=$req->rowCount();
    return ($n==1);
}

function Inscrire(PDO $bdd, String $nom, String $prenom, String $numero_telephone, String $email, String $mot_de_passe) {
    $req = $bdd->prepare("INSERT INTO utilisateur(nom,prenom,numero_telephone,email,mot_de_passe)VALUES(?,?,?,?,?)");
    $req->execute(array($nom,$prenom,$numero_telephone,$Email,$MotdePasse));
}

function InscrireGestionnaire(PDO $bdd, String $nom, String $email, String $mot_de_passe, Int $logement_debut, Int $logement_fin) {
    $req1 = $bdd->prepare("INSERT INTO utilisateur(nom,email,mot_de_passe,type_utilisateur)VALUES(?,?,?,?)");
    $req1->execute(array($nom,$email,$mot_de_passe,'3'));
    $req2 = $bdd->prepare("INSERT INTO gestionnaire(email_gestionnaire,debut_plage_logement,fin_plage_logement)VALUES(?,?,?)");
    $req2->execute(array($email,$logement_debut,$logement_fin));
}

function getGestionnaires(PDO $bdd){
    $req = $bdd->query("SELECT * FROM gestionnaire");
    return $req;
}

function recupereNom(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT nom FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    echo $row["nom"];
}

function recupereCivilite(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT civilite FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    echo $row["civilite"];
}

function changementMdp(PDO $bdd, $Email, $new_mdp){
    $req = $db->prepare("UPDATE Utilisateur SET mot_de_passe = ? WHERE email = ?");
    $req->execute(array($Email));
}

function avatar(PDO $bdd, String $extensionsUpload) {
    $updateavatar = $bdd->prepare('UPDATE utilisateur SET avatar = :avatar WHERE email = :email');
    $updateavatar->execute(array('avatar' => $_SESSION['email'].'.'.$extensionsUpload,'email' => $_SESSION['email']));
}

function recupereTypeUser(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT type_utilisateur FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    return $row["type_utilisateur"] ;
}

function emailUtilise(PDO $bdd, String $Email) : bool {
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $n=$req->rowCount();
    return ($n==1);
}

?>