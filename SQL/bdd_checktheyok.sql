-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 avr. 2019 à 15:00
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_checktheyok`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

DROP TABLE IF EXISTS `actionneur`;
CREATE TABLE IF NOT EXISTS `actionneur` (
  `id_actionneur` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_piece` mediumint(8) UNSIGNED NOT NULL,
  `type_actionneur` char(1) DEFAULT NULL,
  `etat` char(1) DEFAULT NULL,
  `automatique` char(1) DEFAULT NULL,
  `seuil` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id_actionneur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id_connexion` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email_utilisateur` varchar(40) NOT NULL,
  `date_connexion` date DEFAULT NULL,
  PRIMARY KEY (`id_connexion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_piece` mediumint(8) UNSIGNED NOT NULL,
  `type_capteur` char(1) DEFAULT NULL,
  `valeur` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id_capteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

DROP TABLE IF EXISTS `consommation`;
CREATE TABLE IF NOT EXISTS `consommation` (
  `id_consommation` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero_logement` smallint(5) UNSIGNED NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `consommation_totale` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_consommation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

DROP TABLE IF EXISTS `gestionnaire`;
CREATE TABLE IF NOT EXISTS `gestionnaire` (
  `id_gestionnaire` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `debut_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `fin_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_gestionnaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

DROP TABLE IF EXISTS `incident`;
CREATE TABLE IF NOT EXISTS `incident` (
  `id_incident` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `id_gestionnaire` smallint(5) UNSIGNED DEFAULT NULL,
  `id_piece` mediumint(8) UNSIGNED DEFAULT NULL,
  `type_incident` varchar(40) DEFAULT NULL,
  `type_capteur` char(1) DEFAULT NULL,
  `type_actionneur` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_incident`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `numero_logement` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adresse` varchar(50) DEFAULT NULL,
  `complement_adresse` varchar(15) DEFAULT NULL,
  `code_postal` char(5) DEFAULT NULL,
  `ville` varchar(15) DEFAULT NULL,
  `presence_escalier` binary(1) DEFAULT NULL,
  `etat_personne_agee` binary(1) DEFAULT NULL,
  PRIMARY KEY (`numero_logement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id_piece` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero_logement` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `surface` smallint(5) UNSIGNED DEFAULT NULL,
  `nombre_actionneur` tinyint(3) UNSIGNED DEFAULT NULL,
  `nombre_capteur` tinyint(3) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_piece`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `email` varchar(40) NOT NULL,
  `type_utilisateur` char(1) DEFAULT NULL,
  `civilite` char(3) DEFAULT NULL,
  `prenom` varchar(10) DEFAULT NULL,
  `nom` varchar(30) NOT NULL,
  `numero_telephone` char(13) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `cle_id` char(20) DEFAULT NULL,
  `numero_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `photo_profil` blob,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `type_utilisateur`, `civilite`, `prenom`, `nom`, `numero_telephone`, `mot_de_passe`, `cle_id`, `numero_logement`, `photo_profil`) VALUES
('domisep@checktheyok.fr', '4', NULL, NULL, 'Domisep', NULL, 'motdepassedomisep', NULL, NULL, NULL),
('roma@outlook.fr', NULL, NULL, 'Romain', 'Polo', '0624631544', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL),
('romainpolo@outlook.fr', NULL, NULL, 'Romain', 'Polo', '0601025245', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
