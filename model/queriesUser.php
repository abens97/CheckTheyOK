<?php

function estInscrit(PDO $bdd, String $Email, String $MotdePasse) : bool {
    $req = $bdd->prepare("SELECT * FROM Utilisateur WHERE email = ? AND mot_de_passe = ?");
    $req->execute(array($Email,$MotdePasse));
    $n=$req->rowCount();
    return ($n==1);
}

function Inscrire(PDO $bdd, String $nom, String $prenom, String $numero_telephone, String $email, String $mot_de_passe) {
    $req = $bdd->prepare("INSERT INTO Utilisateur(nom,prenom,numero_telephone,email,mot_de_passe,type_utilisateur)VALUES(?,?,?,?,?,?)");
    $typeutilisateur = 1;
    $req->execute(array($nom,$prenom,$numero_telephone,$email,$mot_de_passe,$typeutilisateur));
}

function addLogement(PDO $bdd,$email,$nombre_resident,$type_logement,$adresse,$complement_adresse,$code_postal,$ville,$presence_escalier,$etat_personne_agee) {
    $req = $bdd->prepare("INSERT INTO Logement(email_utilisateur,nombre_resident,type_logement,adresse,complement_adresse,code_postal,ville,presence_escalier,etat_personne_agee)VALUES(?,?,?,?,?,?,?,?,?)");
    $req->execute(array($email,$nombre_resident,$type_logement,$adresse,$complement_adresse,$code_postal,$ville,$presence_escalier,$etat_personne_agee));
}

function hadLogement(PDO $bdd, String $Email) : bool {
    $req = $bdd->prepare("SELECT * FROM Logement WHERE email_utilisateur = ?");
    $req->execute(array($Email));
    $n=$req->rowCount();
    return ($n==1);
}

function getLogement(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT numero_logement FROM Logement WHERE email_utilisateur = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    return $row["numero_logement"];
}

function addPiece(PDO $bdd,$numero_logement,$numero_piece_logement,$nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur) {
    $req = $bdd->prepare("INSERT INTO Piece(numero_logement,numero_piece_logement,nom,surface,capteur_luminosite,capteur_temperature,volets,ventilateur)VALUES(?,?,?,?,?,?,?,?)");
    $req->execute(array($numero_logement,$numero_piece_logement,$nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur));
}

function setPiece(PDO $bdd,$numero_logement,$numero_piece_logement,$nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur) {
    $req = $bdd->prepare("UPDATE Piece SET nom=?, surface=?, capteur_luminosite=?, capteur_temperature=?, volets=?, ventilateur=? WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($nom,$surface,$capteur_luminosite,$capteur_temperature,$volets,$ventilateur,$numero_logement,$numero_piece_logement));
}

function hadPiece(PDO $bdd, $numero_logement, $numero_piece_logement) : bool {
    $req = $bdd->prepare("SELECT * FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $n=$req->rowCount();
    return ($n==1);
}

function getNomPiece(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT nom FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["nom"];
}

function getSurface(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT surface FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["surface"];
}

function getLumi(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT capteur_luminosite FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["capteur_luminosite"];
}

function getTemp(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT capteur_temperature FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["capteur_temperature"];
}

function getVolets(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT volets FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["volets"];
}

function getVentilateur(PDO $bdd,$numero_logement,$numero_piece_logement){
    $req = $bdd->prepare("SELECT ventilateur FROM Piece WHERE numero_logement = ? AND numero_piece_logement = ?");
    $req->execute(array($numero_logement,$numero_piece_logement));
    $row=$req->fetch();
    return $row["ventilateur"];
}

function InscrireGestionnaire(PDO $bdd, String $nom, String $email, String $mot_de_passe, Int $logement_debut, Int $logement_fin) {
    $req1 = $bdd->prepare("INSERT INTO Utilisateur(nom,email,mot_de_passe,type_utilisateur)VALUES(?,?,?,?)");
    $req1->execute(array($nom,$email,$mot_de_passe,'3'));
    $req2 = $bdd->prepare("INSERT INTO Gestionnaire(email_gestionnaire,debut_plage_logement,fin_plage_logement)VALUES(?,?,?)");
    $req2->execute(array($email,$logement_debut,$logement_fin));
}

function getGestionnaires(PDO $bdd){
    $req = $bdd->query("SELECT * FROM Gestionnaire");
    return $req;
}

function recupereNom(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT nom FROM Utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    echo $row["nom"];
}

function recupereCivilite(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT civilite FROM Utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    echo $row["civilite"];
}

function changementMdp(PDO $bdd, $Email, $new_mdp){
    $req = $db->prepare("UPDATE Utilisateur SET mot_de_passe = ? WHERE email = ?");
    $req->execute(array($Email));
}

function avatar(PDO $bdd, String $extensionsUpload) {
    $updateavatar = $bdd->prepare('UPDATE Utilisateur SET avatar = :avatar WHERE email = :email');
    $updateavatar->execute(array('avatar' => $_SESSION['email'].'.'.$extensionsUpload,'email' => $_SESSION['email']));
}

function recupereTypeUser(PDO $bdd, String $Email){
    $req = $bdd->prepare("SELECT type_utilisateur FROM Utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $row=$req->fetch();
    return $row["type_utilisateur"] ;
}

function emailUtilise(PDO $bdd, String $Email) : bool {
    $req = $bdd->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $req->execute(array($Email));
    $n=$req->rowCount();
    return ($n==1);
}

?>