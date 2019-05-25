-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 25 mai 2019 à 12:42
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.3.2

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
-- Structure de la table `Actionneur`
--

CREATE TABLE `Actionneur` (
  `id_actionneur` mediumint(8) UNSIGNED NOT NULL,
  `id_piece` mediumint(8) UNSIGNED NOT NULL,
  `type_actionneur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `automatique` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seuil` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Activite`
--

CREATE TABLE `Activite` (
  `id_connexion` smallint(5) UNSIGNED NOT NULL,
  `email_utilisateur` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `type_utilisateur` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `date_connexion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `Capteur`
--

CREATE TABLE `Capteur` (
  `id_capteur` mediumint(8) UNSIGNED NOT NULL,
  `id_piece` mediumint(8) UNSIGNED NOT NULL,
  `type_capteur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valeur` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Consommation`
--

CREATE TABLE `Consommation` (
  `id_consommation` mediumint(8) UNSIGNED NOT NULL,
  `numero_logement` smallint(5) UNSIGNED NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `consommation_totale` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Fichier`
--

CREATE TABLE `Fichier` (
  `id_fichier` smallint(6) NOT NULL,
  `contenu` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `Fichier`
--

INSERT INTO `Fichier` (`id_fichier`, `contenu`) VALUES
(1, '&lt;div id=&quot;article&quot;&gt;ARTICLE 1 : Objet&lt;/div&gt;\r\n    				&lt;p&gt;Les présentes « conditions générales d&#039;utilisation » ont pour objet l&#039;encadrement juridique de l’utilisation du site [votre site] et de ses services.&lt;/p&gt;\r\n    				&lt;p&gt;Ce contrat est conclu entre :&lt;/p&gt;\r\n    				&lt;p&gt;Le gérant du site internet, ci-après désigné « l’Éditeur »,&lt;/p&gt;\r\n    				&lt;p&gt;Toute personne physique ou morale souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».&lt;/p&gt;\r\n    				&lt;p&gt;Les conditions générales d&#039;utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.&lt;/p&gt;\r\n    			&lt;div id=&quot;article&quot;&gt;ARTICLE 2 : Mentions légales&lt;/div&gt;\r\n    				&lt;p&gt;&lt;em&gt;Pour les personnes morales :&lt;/em&gt;&lt;/p&gt;\r\n    				&lt;p&gt;Le site [nom du site] est édité par la société [nom de la société], [statut juridique (SAS, SARL, etc.)] au capital de [montant en euros] €, dont le 	siège social est situé au [adresse du siège social].&lt;/p&gt;\r\n    				&lt;p&gt;La société est représentée par [nom et prénom du responsable].&lt;/p&gt;\r\n    				&lt;p&gt;&lt;em&gt;Pour les personnes physiques :&lt;/em&gt;&lt;/p&gt;\r\n    				&lt;p&gt;Le site [nom du site] est édité par [nom et prénom du responsable], domicilié au [adresse postale].&lt;/p&gt;\r\n    			&lt;div id=&quot;article&quot;&gt;ARTICLE 3 : accès aux services&lt;/div&gt;\r\n    				&lt;ul&gt;\r\n    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;\r\n    					&lt;li&gt;[Service n°1]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°2]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°3]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°4]&lt;/li&gt;\r\n    				&lt;/ul&gt;\r\n    				&lt;p&gt;Les services suivants ne sont pas accessible pour l’Utilisateur que s’il est membre du site (c’est-à-dire qu’ile st identifié à l’aide de ses identifiants de connexion) :&lt;/p&gt;\r\n    				&lt;ul&gt;\r\n    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;\r\n    					&lt;li&gt;[Service n°1]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°2]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°3]&lt;/li&gt;\r\n    					&lt;li&gt;[Service n°4]&lt;/li&gt;\r\n    				&lt;/ul&gt;\r\n                    &lt;p&gt;Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 4 : Responsabilité de l’Utilisateur&lt;/div&gt;\r\n            		&lt;p&gt;L&#039;Utilisateur est responsable des risques liés à l’utilisation de son identifiant de connexion et de son mot de passe.&lt;/p&gt;\r\n                    &lt;p&gt;Le mot de passe de l’Utilisateur doit rester secret. En cas de divulgation de mot de passe, l’Éditeur décline toute responsabilité.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur assume l’entière responsabilité de l’utilisation qu’il fait des informations et contenus présents sur le site [votre site].&lt;/p&gt;\r\n                    &lt;p&gt;Tout usage du service par l&#039;Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l&#039;objet d&#039;une indemnisation au profit du site.&lt;/p&gt;\r\n                    &lt;ul&gt;\r\n                        &lt;p&gt;Le site permet aux membres de publier sur le site :&lt;/p&gt;\r\n                        &lt;li&gt;[Commentaires] ;&lt;/li&gt;\r\n                        &lt;li&gt;[Oeuvres] ;&lt;/li&gt;\r\n                        &lt;li&gt;Etc.&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;p&gt;Le membre s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification. &lt;/p&gt;\r\n                    &lt;p&gt;En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur s&#039;engage toutefois à citer le membre en cas d’utilisation de  sa publication&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 5 : Responsabilité de l’Éditeur&lt;/div&gt;\r\n            		&lt;p&gt;Tout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.&lt;/p&gt;\r\n                    &lt;p&gt;De même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d&#039;un tiers.&lt;/p&gt;\r\n                    &lt;p&gt;Le site [votre site] s&#039;engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données. Toutefois, il n’apporte pas une garantie de sécurité totale.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 6 : Propriété intellectuelle&lt;/div&gt;\r\n            		&lt;p&gt;Les contenus du site [votre site] (logos, textes, éléments graphiques, vidéos, etc.) son protégés par le droit d’auteur, en vertu du Code de la propriété intellectuelle.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur devra obtenir l’autorisation de l’éditeur du site avant toute reproduction, copie ou publication de ces différents contenus.&lt;/p&gt;\r\n                    &lt;p&gt;Ces derniers peuvent être utilisés par les utilisateurs à des fins privées ; tout usage commercial est interdit.&lt;/p&gt;\r\n                    &lt;p&gt;L’Utilisateur est entièrement responsable de tout contenu qu’il met en ligne et il s’engage à ne pas porter atteinte à un tiers.&lt;/p&gt;\r\n                    &lt;p&gt;L’Éditeur du site se réserve le droit de modérer ou de supprimer librement et à tout moment les contenus mis en ligne par les utilisateurs, et ce sans justification.&lt;/p&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 7 : Données personnelles&lt;/div&gt;\r\n            		&lt;p&gt;L’Utilisateur doit obligatoirement fournir des informations personnelles pour procéder à son inscription sur le site. &lt;/p&gt;\r\n                    &lt;p&gt;L’adresse électronique (e-mail) de l’utilisateur pourra notamment être utilisée par le site [nom de votre site] pour la communication d’informations diverses et la gestion du compte.&lt;/p&gt;\r\n                    &lt;p&gt;[Votre site] garantie le respect de la vie privée de l’utilisateur, conformément à la loi n°78-17 du 6 janvier 1978 relative à l&#039;informatique, aux fichiers et aux libertés.&lt;/p&gt;\r\n                    &lt;p&gt;Le site est déclaré auprès de la CNIL sous le numéro suivant : [numéro].&lt;/p&gt;\r\n                    &lt;p&gt;En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l&#039;Utilisateur dispose d&#039;un droit d&#039;accès, de rectification, de suppression et d&#039;opposition de ses données personnelles. L&#039;Utilisateur exerce ce droit via :&lt;/p&gt;\r\n                    &lt;ul&gt;\r\n                        &lt;li&gt;Son espace personnel sur le site ;&lt;/li&gt;\r\n                        &lt;li&gt;Un formulaire de contact ;&lt;/li&gt;\r\n                        &lt;li&gt;Par mail à [adresse mail de l’administrateur] ;&lt;/li&gt;\r\n                        &lt;li&gt;Par voie postale au [votre adresse].&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n        		&lt;div id=&quot;article&quot;&gt;ARTICLE 8 : Liens hypertextes&lt;/div&gt;\r\n            		&lt;p&gt;Les domaines vers lesquels mènent les liens hypertextes présents sur le site n’engagent pas la responsabilité de l’Éditeur de [votre site], qui n’a pas de contrôle sur ces liens.&lt;/p&gt;\r\n                    &lt;p&gt;Il est possible pour un tiers de créer un lien vers une page du site [votre site] sans autorisation expresse de l’éditeur.&lt;/p&gt;\r\n                &lt;div id=&quot;article&quot;&gt;ARTICLE 9 : Évolution des conditions générales d’utilisation&lt;/div&gt;\r\n                    &lt;p&gt;Le site [votre site] se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.&lt;/p&gt;\r\n        	   &lt;div id=&quot;article&quot;&gt;ARTICLE 10 : Durée du contrat&lt;/div&gt;	\r\n                    &lt;p&gt;La durée du présent contrat est indéterminée. Le contrat produit ses effets à l&#039;égard de l&#039;Utilisateur à compter du début de l’utilisation du service.&lt;/p&gt;\r\n                &lt;div id=&quot;article&quot;&gt;ARTICLE 11 : Droit applicable et juridiction compétente&lt;/div&gt;\r\n                    &lt;p&gt;Le présent contrat dépend de la législation française. &lt;/p&gt;\r\n                    &lt;p&gt;En cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.&lt;/p&gt;                                                '),
(2, 'domisep@checktheyok.fr');

-- --------------------------------------------------------

--
-- Structure de la table `Gestionnaire`
--

CREATE TABLE `Gestionnaire` (
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `debut_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `fin_plage_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `prenom` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telephone` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- --------------------------------------------------------

--
-- Structure de la table `Incident`
--

CREATE TABLE `Incident` (
  `id_incident` smallint(5) UNSIGNED NOT NULL,
  `numero_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `id_gestionnaire` smallint(5) UNSIGNED DEFAULT NULL,
  `id_piece` mediumint(8) UNSIGNED DEFAULT NULL,
  `type_incident` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_capteur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_actionneur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resolu` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Incident`


-- --------------------------------------------------------

--
-- Structure de la table `Logement`
--

CREATE TABLE `Logement` (
  `numero_logement` smallint(5) UNSIGNED NOT NULL,
  `email_utilisateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_resident` int(11) DEFAULT NULL,
  `type_logement` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complement_adresse` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_postal` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presence_escalier` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat_personne_agee` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Messagesav`
--

CREATE TABLE `Messagesav` (
  `messageNB` int(8) NOT NULL,
  `adresseMail` varchar(255) NOT NULL,
  `numTicket` int(11) DEFAULT NULL,
  `texte` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Structure de la table `Piece`
--

CREATE TABLE `Piece` (
  `id_piece` mediumint(8) UNSIGNED NOT NULL,
  `numero_logement` smallint(5) UNSIGNED NOT NULL,
  `numero_piece_logement` tinyint(4) DEFAULT NULL,
  `nom` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surface` smallint(5) UNSIGNED DEFAULT NULL,
  `capteur_luminosite` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capteur_temperature` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `volets` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ventilateur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `type_utilisateur` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `civilite` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `numero_telephone` char(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cle_id` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_logement` smallint(5) UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`email`, `type_utilisateur`, `civilite`, `prenom`, `nom`, `numero_telephone`, `mot_de_passe`, `cle_id`, `numero_logement`, `avatar`) VALUES
('domisep@checktheyok.fr', '4', NULL, NULL, 'Domisep', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL)

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Actionneur`
--
ALTER TABLE `Actionneur`
  ADD PRIMARY KEY (`id_actionneur`);

--
-- Index pour la table `Activite`
--
ALTER TABLE `Activite`
  ADD PRIMARY KEY (`id_connexion`);

--
-- Index pour la table `Capteur`
--
ALTER TABLE `Capteur`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Index pour la table `Consommation`
--
ALTER TABLE `Consommation`
  ADD PRIMARY KEY (`id_consommation`);

--
-- Index pour la table `Fichier`
--
ALTER TABLE `Fichier`
  ADD PRIMARY KEY (`id_fichier`);

--
-- Index pour la table `Gestionnaire`
--
ALTER TABLE `Gestionnaire`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `Incident`
--
ALTER TABLE `Incident`
  ADD PRIMARY KEY (`id_incident`);

--
-- Index pour la table `Logement`
--
ALTER TABLE `Logement`
  ADD PRIMARY KEY (`numero_logement`);

--
-- Index pour la table `Messagesav`
--
ALTER TABLE `Messagesav`
  ADD PRIMARY KEY (`messageNB`),
  ADD KEY `numTicket` (`numTicket`);

--
-- Index pour la table `Piece`
--
ALTER TABLE `Piece`
  ADD PRIMARY KEY (`id_piece`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Actionneur`
--
ALTER TABLE `Actionneur`
  MODIFY `id_actionneur` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Activite`
--
ALTER TABLE `Activite`
  MODIFY `id_connexion` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Capteur`
--
ALTER TABLE `Capteur`
  MODIFY `id_capteur` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Consommation`
--
ALTER TABLE `Consommation`
  MODIFY `id_consommation` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Incident`
--
ALTER TABLE `Incident`
  MODIFY `id_incident` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Logement`
--
ALTER TABLE `Logement`
  MODIFY `numero_logement` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Messagesav`
--
ALTER TABLE `Messagesav`
  MODIFY `messageNB` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Piece`
--
ALTER TABLE `Piece`
  MODIFY `id_piece` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
