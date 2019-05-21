CREATE DATABASE bdd_CheckTheyOk CHARACTER SET 'utf8';

USE bdd_CheckTheyOk;

CREATE TABLE Utilisateur (
    email  VARCHAR(40) NOT NULL,
    type_utilisateur CHAR(1),
    civilite CHAR(3),
    prenom VARCHAR(20),
    nom VARCHAR(30) NOT NULL,
    numero_telephone CHAR(13),
    mot_de_passe VARCHAR(255) NOT NULL,
    cle_id CHAR(20),
    numero_logement SMALLINT UNSIGNED,
    avatar VARCHAR(255),
    PRIMARY KEY (email)
);

INSERT INTO Utilisateur VALUES ('domisep@checktheyok.fr', 4, NULL, NULL, 'Domisep', NULL, 'ed48cc5db3ec0ec98fb4421b6f9dcc547e0a47bb', NULL, NULL, NULL);


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
    prenom VARCHAR(20),
    nom VARCHAR(30) NOT NULL,
    numero_telephone CHAR(13),
    email  VARCHAR(40) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    debut_plage_logement SMALLINT UNSIGNED,
    fin_plage_logement SMALLINT UNSIGNED,
    PRIMARY KEY (email)
);
CREATE TABLE Activite (
    id_connexion  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    email_utilisateur varchar(40) NOT NULL,
    date_connexion date,
    PRIMARY KEY (id_connexion)
);
ALTER TABLE activite CHANGE date_connexion date_connexion VARCHAR(255) NULL DEFAULT NULL;
ALTER TABLE activite ADD type_utilisateur CHAR(1) NOT NULL AFTER email_utilisateur;
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
CREATE TABLE fichier (
    id_fichier smallint NOT NULL,
    contenu mediumtext,
    PRIMARY KEY (id_fichier)
);
INSERT INTO fichier VALUES (1,'&lt;div id=&quot;article&quot;&gt;ARTICLE 1 : Objet&lt;/div&gt;
    				&lt;p&gt;Les présentes « conditions générales d&#039;utilisation » ont pour objet l&#039;encadrement juridique de l’utilisation du site [votre site] et de ses services.&lt;/p&gt;
    				&lt;p&gt;Ce contrat est conclu entre :&lt;/p&gt;
    				&lt;p&gt;Le gérant du site internet, ci-après désigné « l’Éditeur »,&lt;/p&gt;
    				&lt;p&gt;Toute personne physique ou morale souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».&lt;/p&gt;
    				&lt;p&gt;Les conditions générales d&#039;utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.&lt;/p&gt;
    			&lt;div id=&quot;article&quot;&gt;ARTICLE 2 : Mentions légales&lt;/div&gt;
    				&lt;p&gt;&lt;em&gt;Pour les personnes morales :&lt;/em&gt;&lt;/p&gt;
    				&lt;p&gt;Le site [nom du site] est édité par la société [nom de la société], [statut juridique (SAS, SARL, etc.)] au capital de [montant en euros] €, dont le 	siège social est situé au [adresse du siège social].&lt;/p&gt;
    				&lt;p&gt;La société est représentée par [nom et prénom du responsable].&lt;/p&gt;
    				&lt;p&gt;&lt;em&gt;Pour les personnes physiques :&lt;/em&gt;&lt;/p&gt;
    				&lt;p&gt;Le site [nom du site] est édité par [nom et prénom du responsable], domicilié au [adresse postale].&lt;/p&gt;
    			&lt;div id=&quot;article&quot;&gt;ARTICLE 3 : accès aux services&lt;/div&gt;
    				&lt;ul&gt;
    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;
    					&lt;li&gt;[Service n°1]&lt;/li&gt;
    					&lt;li&gt;[Service n°2]&lt;/li&gt;
    					&lt;li&gt;[Service n°3]&lt;/li&gt;
    					&lt;li&gt;[Service n°4]&lt;/li&gt;
    				&lt;/ul&gt;
    				&lt;p&gt;Les services suivants ne sont pas accessible pour l’Utilisateur que s’il est membre du site (c’est-à-dire qu’ile st identifié à l’aide de ses identifiants de connexion) :&lt;/p&gt;
    				&lt;ul&gt;
    					&lt;p&gt;L’Utilisateur du site [votre site] a accès aux services suivants :&lt;/p&gt;
    					&lt;li&gt;[Service n°1]&lt;/li&gt;
    					&lt;li&gt;[Service n°2]&lt;/li&gt;
    					&lt;li&gt;[Service n°3]&lt;/li&gt;
    					&lt;li&gt;[Service n°4]&lt;/li&gt;
    				&lt;/ul&gt;
                    &lt;p&gt;Le site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.&lt;/p&gt;
        		&lt;div id=&quot;article&quot;&gt;ARTICLE 4 : Responsabilité de l’Utilisateur&lt;/div&gt;
            		&lt;p&gt;L&#039;Utilisateur est responsable des risques liés à l’utilisation de son identifiant de connexion et de son mot de passe.&lt;/p&gt;
                    &lt;p&gt;Le mot de passe de l’Utilisateur doit rester secret. En cas de divulgation de mot de passe, l’Éditeur décline toute responsabilité.&lt;/p&gt;
                    &lt;p&gt;L’Utilisateur assume l’entière responsabilité de l’utilisation qu’il fait des informations et contenus présents sur le site [votre site].&lt;/p&gt;
                    &lt;p&gt;Tout usage du service par l&#039;Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l&#039;objet d&#039;une indemnisation au profit du site.&lt;/p&gt;
                    &lt;ul&gt;
                        &lt;p&gt;Le site permet aux membres de publier sur le site :&lt;/p&gt;
                        &lt;li&gt;[Commentaires] ;&lt;/li&gt;
                        &lt;li&gt;[Oeuvres] ;&lt;/li&gt;
                        &lt;li&gt;Etc.&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;p&gt;Le membre s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification. &lt;/p&gt;
                    &lt;p&gt;En publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.&lt;/p&gt;
                    &lt;p&gt;L’Éditeur s&#039;engage toutefois à citer le membre en cas d’utilisation de  sa publication&lt;/p&gt;
        		&lt;div id=&quot;article&quot;&gt;ARTICLE 5 : Responsabilité de l’Éditeur&lt;/div&gt;
            		&lt;p&gt;Tout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.&lt;/p&gt;
                    &lt;p&gt;De même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d&#039;un tiers.&lt;/p&gt;
                    &lt;p&gt;Le site [votre site] s&#039;engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données. Toutefois, il n’apporte pas une garantie de sécurité totale.&lt;/p&gt;
                    &lt;p&gt;L’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.&lt;/p&gt;
        		&lt;div id=&quot;article&quot;&gt;ARTICLE 6 : Propriété intellectuelle&lt;/div&gt;
            		&lt;p&gt;Les contenus du site [votre site] (logos, textes, éléments graphiques, vidéos, etc.) son protégés par le droit d’auteur, en vertu du Code de la propriété intellectuelle.&lt;/p&gt;
                    &lt;p&gt;L’Utilisateur devra obtenir l’autorisation de l’éditeur du site avant toute reproduction, copie ou publication de ces différents contenus.&lt;/p&gt;
                    &lt;p&gt;Ces derniers peuvent être utilisés par les utilisateurs à des fins privées ; tout usage commercial est interdit.&lt;/p&gt;
                    &lt;p&gt;L’Utilisateur est entièrement responsable de tout contenu qu’il met en ligne et il s’engage à ne pas porter atteinte à un tiers.&lt;/p&gt;
                    &lt;p&gt;L’Éditeur du site se réserve le droit de modérer ou de supprimer librement et à tout moment les contenus mis en ligne par les utilisateurs, et ce sans justification.&lt;/p&gt;
        		&lt;div id=&quot;article&quot;&gt;ARTICLE 7 : Données personnelles&lt;/div&gt;
            		&lt;p&gt;L’Utilisateur doit obligatoirement fournir des informations personnelles pour procéder à son inscription sur le site. &lt;/p&gt;
                    &lt;p&gt;L’adresse électronique (e-mail) de l’utilisateur pourra notamment être utilisée par le site [nom de votre site] pour la communication d’informations diverses et la gestion du compte.&lt;/p&gt;
                    &lt;p&gt;[Votre site] garantie le respect de la vie privée de l’utilisateur, conformément à la loi n°78-17 du 6 janvier 1978 relative à l&#039;informatique, aux fichiers et aux libertés.&lt;/p&gt;
                    &lt;p&gt;Le site est déclaré auprès de la CNIL sous le numéro suivant : [numéro].&lt;/p&gt;
                    &lt;p&gt;En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l&#039;Utilisateur dispose d&#039;un droit d&#039;accès, de rectification, de suppression et d&#039;opposition de ses données personnelles. L&#039;Utilisateur exerce ce droit via :&lt;/p&gt;
                    &lt;ul&gt;
                        &lt;li&gt;Son espace personnel sur le site ;&lt;/li&gt;
                        &lt;li&gt;Un formulaire de contact ;&lt;/li&gt;
                        &lt;li&gt;Par mail à [adresse mail de l’administrateur] ;&lt;/li&gt;
                        &lt;li&gt;Par voie postale au [votre adresse].&lt;/li&gt;
                    &lt;/ul&gt;
        		&lt;div id=&quot;article&quot;&gt;ARTICLE 8 : Liens hypertextes&lt;/div&gt;
            		&lt;p&gt;Les domaines vers lesquels mènent les liens hypertextes présents sur le site n’engagent pas la responsabilité de l’Éditeur de [votre site], qui n’a pas de contrôle sur ces liens.&lt;/p&gt;
                    &lt;p&gt;Il est possible pour un tiers de créer un lien vers une page du site [votre site] sans autorisation expresse de l’éditeur.&lt;/p&gt;
                &lt;div id=&quot;article&quot;&gt;ARTICLE 9 : Évolution des conditions générales d’utilisation&lt;/div&gt;
                    &lt;p&gt;Le site [votre site] se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.&lt;/p&gt;
        	   &lt;div id=&quot;article&quot;&gt;ARTICLE 10 : Durée du contrat&lt;/div&gt;	
                    &lt;p&gt;La durée du présent contrat est indéterminée. Le contrat produit ses effets à l&#039;égard de l&#039;Utilisateur à compter du début de l’utilisation du service.&lt;/p&gt;
                &lt;div id=&quot;article&quot;&gt;ARTICLE 11 : Droit applicable et juridiction compétente&lt;/div&gt;
                    &lt;p&gt;Le présent contrat dépend de la législation française. &lt;/p&gt;
                    &lt;p&gt;En cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.&lt;/p&gt;');
    INSERT INTO `fichier` (`id_fichier`, `contenu`) VALUES ('2', 'groupeapp8a@gmail.com');