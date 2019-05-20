CREATE DATABASE bdd_CheckTheyOk CHARACTER SET 'utf8';

USE bdd_CheckTheyOk;

CREATE TABLE Utilisateur (
    email  VARCHAR(40) NOT NULL,
    type_utilisateur CHAR(1),
    civilite CHAR(3),
    prenom VARCHAR(10),
    nom VARCHAR(30) NOT NULL,
    numero_telephone CHAR(13),
    mot_de_passe VARCHAR(30) NOT NULL,
    cle_id CHAR(20),
    numero_logement SMALLINT UNSIGNED,
    photo_profil BLOB,
    PRIMARY KEY (email)
);

INSERT INTO Utilisateur VALUES ('domisep@checktheyok.fr', 4, NULL, NULL, 'Domisep', NULL, 'motdepassedomisep', NULL, NULL, NULL);


CREATE TABLE Logement (
    numero_logement SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    adresse VARCHAR(50),
    complement_adresse VARCHAR(15),
    code_postal CHAR(5),
    ville VARCHAR(15),
    presence_escalier BINARY(1),
    etat_personne_agee BINARY(1),
    PRIMARY KEY (numero_logement)
);

CREATE TABLE Gestionnaire (
    id_gestionnaire  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    debut_plage_logement SMALLINT UNSIGNED,
    fin_plage_logement SMALLINT UNSIGNED,
    PRIMARY KEY (id_gestionnaire)
);
CREATE TABLE Activite (
    id_connexion  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    email_utilisateur varchar(40) NOT NULL,
    date_connexion date,
    PRIMARY KEY (id_connexion)
);
CREATE TABLE Consommation (
    id_consommation  mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
    numero_logement smallint unsigned NOT NULL,
    date_debut datetime,
    date_fin datetime,
    consommation_totale int unsigned,
    PRIMARY KEY (id_consommation)
);
CREATE TABLE Piece (
    id_piece  mediumint unsigned NOT NULL AUTO_INCREMENT,
    numero_logement smallint unsigned NOT NULL,
    nom varchar(40),
    surface smallint unsigned,
    nombre_actionneur tinyint unsigned,
    nombre_capteur tinyint unsigned,
    PRIMARY KEY (id_piece)
);
CREATE TABLE Actionneur (
    id_actionneur  mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
    id_piece mediumint unsigned NOT NULL,
    type_actionneur char(1),
    etat char(1),
    automatique char(1),
    seuil mediumint,
    PRIMARY KEY (id_actionneur)
);
CREATE TABLE Capteur (
    id_capteur  mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
    id_piece mediumint unsigned NOT NULL,
    type_capteur char(1),
    valeur mediumint,
    PRIMARY KEY (id_capteur)
);
CREATE TABLE Incident (
    id_incident  smallint UNSIGNED NOT NULL AUTO_INCREMENT,
    numero_logement smallint unsigned,
    id_gestionnaire smallint unsigned,
    id_piece mediumint unsigned,
    type_incident varchar(40),
    type_capteur char(1),
    type_actionneur char(1),
    PRIMARY KEY (id_incident)
);