-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 mai 2019 à 08:59
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
  `type_utilisateur` char(1) NOT NULL,
  `date_connexion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_connexion`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_connexion`, `email_utilisateur`, `type_utilisateur`, `date_connexion`) VALUES
(7, 'arthurgestionnaire@gmail.com', '3', '19/05/2019'),
(6, 'arthur91690@gmail.com', '1', '19/05/2019'),
(5, 'domisep@checktheyok.fr', '4', '19/05/2019'),
(8, 'domisep@checktheyok.fr', '4', '19/05/2019'),
(9, 'domisep@checktheyok.fr', '4', '19/05/2019'),
(10, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(11, 'romain@gmail.com', '3', '20/05/2019'),
(12, 'arthur@gmail.com', '1', '20/05/2019'),
(13, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(14, 'arthur@gmail.com', '1', '20/05/2019'),
(15, 'arthur@gmail.com', '1', '20/05/2019'),
(16, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(17, 'mechant@gmail.com', '3', '20/05/2019'),
(18, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(19, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(20, 'arthur@gmail.com', '1', '20/05/2019'),
(21, 'arthurgestionnaire@gmail.com', '3', '20/05/2019'),
(22, 'domisep@checktheyok.fr', '4', '20/05/2019'),
(23, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(24, 'arthur91690@gmail.com', '1', '21/05/2019'),
(25, 'arthurgestionnaire@gmail.com', '3', '21/05/2019'),
(26, 'arthurgestionnaire@gmail.com', '3', '21/05/2019'),
(27, 'arthurgestionnaire@gmail.com', '3', '21/05/2019'),
(28, 'arthurgestionnaire@gmail.com', '3', '21/05/2019'),
(29, 'arthur91690@gmail.com', '1', '21/05/2019'),
(30, 'arthur91690@gmail.com', '1', '21/05/2019'),
(31, 'arthur91690@gmail.com', '1', '21/05/2019'),
(32, 'arthur91690@gmail.com', '1', '21/05/2019'),
(33, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(34, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(35, 'arthur91690@gmail.com', '1', '21/05/2019'),
(36, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(37, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(38, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(39, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(40, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(41, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(42, 'arthur91690@gmail.com', '1', '21/05/2019'),
(43, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(44, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(45, 'domisep@checktheyok.fr', '4', '21/05/2019'),
(46, 'domisep@checktheyok.fr', '4', '22/05/2019'),
(47, 'domisep@checktheyok.fr', '4', '22/05/2019'),
(48, 'domisep@checktheyok.fr', '4', '22/05/2019'),
(49, 'domisep@checktheyok.fr', '4', '22/05/2019'),
(50, 'arthurgestionnaire@gmail.com', '3', '22/05/2019');

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
-- Structure de la table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
CREATE TABLE IF NOT EXISTS `fichier` (
  `id_fichier` smallint(6) NOT NULL AUTO_INCREMENT,
  `contenu` mediumtext,
  PRIMARY KEY (`id_fichier`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id_fichier`, `contenu`) VALUES
(1, '                                                &lt;div id=&quot;article&quot;&gt;ARTICLE 1 : Objet&lt;/div&gt;\r\n    				&lt;p&gt;Les présentes « conditions générales d&#039;utilisation » ont pour objet l&#039;encadrement juridique de l’utilisation du site [votre site] et de ses services.&lt;/p&gt;\r\n    				&lt;p&gt;Ce contrat est conclu entre :&lt;/p&gt;\r\n    				&lt;p&gt;Le gérant du site internet, ci-après désigné « l’Éditeur »,&lt;/p&gt;\r\n    				&lt;p&gt;Toute personne physique ou morale souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».&lt;/p&gt;\r\n    				&lt;p&gt;Les conditions générales d&#039;utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.&lt;/p&gt;\r\n    			&lt;div id=&quot;article&quot;&gt;ARTICLE 2 : Mentions légales&lt;/div&gt;\r\n    				&lt;p&gt;&lt;em&gt;Pour les personnes morales :&lt;/em&gt;&lt;/p&gt;\r\n    				&lt;p&gt;Le site [nom du site] est édité par la société [nom de la société], [statut juridique (SAS, SARL, etc.)] au capital de [montant en euros] €, dont le 	siège social est situé au [adresse du siège social].&lt;/p&gt;\r\n    				&lt;p&gt;La société est représentée par [nom et prénom du responsable].&lt;/p&gt;\r\n    				&lt;p&gt;&lt;em&gt;Pour les personnes physiques :&lt;/em&gt;&lt;/p&gt;\r\n    				&lt;p&gt;Le site [nom du site] est édité par [nom et prénom du responsable], domicilié au [adresse postale].&lt;/p&gt;\r\n    			&lt;div id=&quot;article&quot;&gt;ARTICLE 3 : accès aux services&lt;/div&gt;\r\n    				&lt;ul&gt;\r\n    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;\r\n    					&lt;li&gt;[Service n°1]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°2]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°3]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°4]&lt;/li&gt;\r\n    				&lt;/ul&gt;\r\n    				&lt;p&gt;Les services suivants ne sont pas accessible pour l’Utilisateur que s’il est membre du site (c’est-à-dire qu’ile st identifié à l’aide de ses identifiants de connexion) :&lt;/p&gt;\r\n    				&lt;ul&gt;\r\n    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;\r\n    					&lt;li&gt;[Service n°1]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°2]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°3]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°4]&lt;/li&gt;\r\n    				&lt;/ul&gt;\r\n                    &lt;p&gt;Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 4 : Responsabilité de l’Utilisateur&lt;/div&gt;\r\n            		&lt;p&gt;L&#039;Utilisateur est responsable des risques liés à l’utilisation de son identifiant de connexion et de son mot de passe.&lt;/p&gt;\r\n                    &lt;p&gt;Le mot de passe de l’Utilisateur doit rester secret. En cas de divulgation de mot de passe, l’Éditeur décline toute responsabilité.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur assume l’entière responsabilité de l’utilisation qu’il fait des informations et contenus présents sur le site [votre site].&lt;/p&gt;\r\n                    &lt;p&gt;Tout usage du service par l&#039;Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l&#039;objet d&#039;une indemnisation au profit du site.&lt;/p&gt;\r\n                    &lt;ul&gt;\r\n                        &lt;p&gt;Le site permet aux membres de publier sur le site :&lt;/p&gt;\r\n                        &lt;li&gt;[Commentaires] ;&lt;/li&gt;\r\n                        &lt;li&gt;[Oeuvres] ;&lt;/li&gt;\r\n                        &lt;li&gt;Etc.&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;p&gt;Le membre s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification. &lt;/p&gt;\r\n                    &lt;p&gt;En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur s&#039;engage toutefois à citer le membre en cas d’utilisation de  sa publication&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 5 : Responsabilité de l’Éditeur&lt;/div&gt;\r\n            		&lt;p&gt;Tout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.&lt;/p&gt;\r\n                    &lt;p&gt;De même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d&#039;un tiers.&lt;/p&gt;\r\n                    &lt;p&gt;Le site [votre site] s&#039;engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données. Toutefois, il n’apporte pas une garantie de sécurité totale.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 6 : Propriété intellectuelle&lt;/div&gt;\r\n            		&lt;p&gt;Les contenus du site [votre site] (logos, textes, éléments graphiques, vidéos, etc.) son protégés par le droit d’auteur, en vertu du Code de la propriété intellectuelle.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur devra obtenir l’autorisation de l’éditeur du site avant toute reproduction, copie ou publication de ces différents contenus.&lt;/p&gt;\r\n                    &lt;p&gt;Ces derniers peuvent être utilisés par les utilisateurs à des fins privées ; tout usage commercial est interdit.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur est entièrement responsable de tout contenu qu’il met en ligne et il s’engage à ne pas porter atteinte à un tiers.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur du site se réserve le droit de modérer ou de supprimer librement et à tout moment les contenus mis en ligne par les utilisateurs, et ce sans justification.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 7 : Données personnelles&lt;/div&gt;\r\n            		&lt;p&gt;L’Utilisateur doit obligatoirement fournir des informations personnelles pour procéder à son inscription sur le site. &lt;/p&gt;\r\n                    &lt;p&gt;L’adresse électronique (e-mail) de l’utilisateur pourra notamment être utilisée par le site [nom de votre site] pour la communication d’informations diverses et la gestion du compte.&lt;/p&gt;\r\n                    &lt;p&gt;[Votre site] garantie le respect de la vie privée de l’utilisateur, conformément à la loi n°78-17 du 6 janvier 1978 relative à l&#039;informatique, aux fichiers et aux libertés.&lt;/p&gt;\r\n                    &lt;p&gt;Le site est déclaré auprès de la CNIL sous le numéro suivant : [numéro].&lt;/p&gt;\r\n                    &lt;p&gt;En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l&#039;Utilisateur dispose d&#039;un droit d&#039;accès, de rectification, de suppression et d&#039;opposition de ses données personnelles. L&#039;Utilisateur exerce ce droit via :&lt;/p&gt;\r\n                    &lt;ul&gt;\r\n                        &lt;li&gt;Son espace personnel sur le site ;&lt;/li&gt;\r\n                        &lt;li&gt;Un formulaire de contact ;&lt;/li&gt;\r\n                        &lt;li&gt;Par mail à [adresse mail de l’administrateur] ;&lt;/li&gt;\r\n                        &lt;li&gt;Par voie postale au [votre adresse].&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 8 : Liens hypertextes&lt;/div&gt;\r\n            		&lt;p&gt;Les domaines vers lesquels mènent les liens hypertextes présents sur le site n’engagent pas la responsabilité de l’Éditeur de [votre site], qui n’a pas de contrôle sur ces liens.&lt;/p&gt;\r\n                    &lt;p&gt;Il est possible pour un tiers de créer un lien vers une page du site [votre site] sans autorisation expresse de l’éditeur.&lt;/p&gt;\r\n                &lt;div id=&quot;article&quot;&gt;ARTICLE 9 : Évolution des conditions générales d’utilisation&lt;/div&gt;\r\n                    &lt;p&gt;Le site [votre site] se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.&lt;/p&gt;\r\n        	   &lt;div id=&quot;article&quot;&gt;ARTICLE 10 : Durée du contrat&lt;/div&gt;	\r\n                    &lt;p&gt;La durée du présent contrat est indéterminée. Le contrat produit ses effets à l&#039;égard de l&#039;Utilisateur à compter du début de l’utilisation du service.&lt;/p&gt;\r\n                &lt;div id=&quot;article&quot;&gt;ARTICLE 11 : Droit applicable et juridiction compétente&lt;/div&gt;\r\n                    &lt;p&gt;Le présent contrat dépend de la législation française. &lt;/p&gt;\r\n                    &lt;p&gt;En cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.&lt;/p&gt;                                                                                                  '),
(2, 'groupeapp9a@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

DROP TABLE IF EXISTS `gestionnaire`;
CREATE TABLE IF NOT EXISTS `gestionnaire` (
  `email_gestionnaire` varchar(40) NOT NULL,
  `debut_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `fin_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`email_gestionnaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionnaire`
--

INSERT INTO `gestionnaire` (`email_gestionnaire`, `debut_plage_logement`, `fin_plage_logement`) VALUES
('gentil@domisep.fr', 12, 42),
('gestionnaireb@gmail.com', 0, 0),
('gestionnairec@gmail.com', 0, 0),
('gestionnairee@gmail.com', 1, 2),
('super@gmail.com', 2, 7),
('final@gmail.com', 1, 10),
('gentil@gmail.com', 1, 3),
('salut@checktheyok.fr', 1, 1),
('deded@checktheyok.fr', 1, 1),
('test@gmail.com', 7, 10),
('test2@gmail.com', 1, 3),
('domisepde@checktheyok.fr', 1, 1),
('gestionnairefin@checktheyok.fr', 2, 6),
('romain@gmail.com', 7, 9),
('mechant@gmail.com', 1, 10);

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
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `messageNB` int(8) NOT NULL AUTO_INCREMENT,
  `adresseMail` varchar(255) NOT NULL,
  `numTicket` int(11) DEFAULT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`messageNB`),
  KEY `numTicket` (`numTicket`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`messageNB`, `adresseMail`, `numTicket`, `texte`) VALUES
(83, 'groupeapp8a@gmail.com', 13, 'hey'),
(84, 'groupeapp8a@gmail.com', 14, 'ss');

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
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `numTicket` int(8) NOT NULL AUTO_INCREMENT,
  `mailUser` varchar(255) NOT NULL,
  `mailAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`numTicket`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`numTicket`, `mailUser`, `mailAdmin`) VALUES
(13, 'groupeapp8a@gmail.com', 'admin@admin.com'),
(14, 'groupeapp8a@gmail.com', 'admin@admin.com');

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
('domisep@checktheyok.fr', '4', NULL, NULL, 'Domisep', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('arthur91690@gmail.com', '1', 'M.', 'Arthur', 'Gorge Bernat', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('arthurgestionnaire@gmail.com', '3', 'M.', NULL, 'Gestionnaire A', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('romain.polo@isep.fr', NULL, NULL, 'Romain', 'Polo', '0611223344', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('sarah.dacosta@isep.fr', NULL, NULL, 'Sarah', 'Da Costa', '0611223344', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('test@gmail.com', '3', NULL, NULL, 'TestGestionnaire', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('deded@checktheyok.fr', '3', NULL, NULL, 'deded', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('salut@checktheyok.fr', '3', NULL, NULL, 'coucou', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('gentil@gmail.com', '3', NULL, NULL, 'Gentil Gestionnaire', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('test2@gmail.com', '3', NULL, NULL, 'test2', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('domisepde@checktheyok.fr', '3', NULL, NULL, 'de', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('gestionnairefin@checktheyok.fr', '3', NULL, NULL, 'Dernier gestionnaire', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL),
('romain@gmail.com', '3', NULL, NULL, 'Gestionnaire Romain', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('domisep8@gmail.com', NULL, NULL, 'egegeg', 'gegeg', '0611223344', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('arthur@gmail.com', '1', NULL, 'dedede', 'dedede', '0611223344', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL),
('mechant@gmail.com', '3', NULL, NULL, 'Méchant gestionnaire', NULL, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
