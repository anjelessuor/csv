-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 27 Avril 2017 à 15:31
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `centresocialvauban`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `activities_id` int(5) UNSIGNED NOT NULL,
  `activities_title` varchar(150) NOT NULL,
  `activities_description` text NOT NULL,
  `activities_3to5` int(2) NOT NULL,
  `activities_6to12` int(2) NOT NULL,
  `activities_12to16` int(2) NOT NULL,
  `activities_16to25` int(2) NOT NULL,
  `activities_adults` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`activities_id`, `activities_title`, `activities_description`, `activities_3to5`, `activities_6to12`, `activities_12to16`, `activities_16to25`, `activities_adults`) VALUES
(1, 'Mercerdi', 'Des animateurs qualifiés proposent un large choix d’activités : grands jeux (plein air ou intérieur), des projets et découverte nature, des activités manuelles : manipulation de la pâte à sel, création de masque, de porte clé et de cadre, peinture et décoration d’intérieur, etc. Mais aussi, des sorties (art, culture et loisirs) seront organisées sur Lille et ses environs.\r\nCentre de la petite enfance au 12 Place de l’Arbonnoise.\r\nL’accueil du Mercredi se fait de 8h30 à 17h30', 1, 0, 0, 0, 0),
(2, 'Mercredi', 'Comme pour le secteur Petite Enfance, des animateurs qualifiés proposent un large choix d’activités : grands jeux (plein air ou intérieur), des projets et découverte nature, des activités manuelles : manipulation d’argile, peinture et décoration d’intérieur, création d’accessoires sportifs, etc. Mais aussi, des sorties (art, culture et loisirs) sur Lille et ses environs.\r\nCentre social de Vauban-Esquermes au 77 rue Philippe-Laurent Roland à Lille.\r\nL’accueil du Mercredi se fait de 8h30 à 17h30', 0, 1, 0, 0, 0),
(3, 'Lundi', 'l’association Vivre Ensemble à Esquermes vous propose un Atelier voix de 19h à 21h.', 0, 0, 0, 0, 1),
(4, 'Mardi', 'la référente famille met en place des permanences administratives au sein du centre social de 9h à 12h', 0, 0, 0, 0, 1),
(5, 'Mardi', 'Egalement, un bénévole met en avant ses compétences de peintre de 13h30 à 17h afin que vous puissiez développer vos capacités artistiques', 0, 0, 0, 0, 1),
(6, 'Mardi', 'Enfin, l’association Gym Lille propose des cours de sport (Fitness, renforcement musculaire) de 18h30 à 19h30.', 0, 0, 0, 0, 1),
(7, 'Mercredi', 'L’association l’AMAP vous accueille pour une vente de légumes, fruits, œufs, soupes fraiches et pain de 17h30 à 20h30.\r\n', 0, 0, 0, 0, 1),
(8, 'Jeudi', 'un Café initiative habitants est organisé de 9h à 10h. Vous pourrez alors échanger vos idées pour le développement du centre social. \r\n', 0, 0, 0, 0, 1),
(9, 'Jeudi', 'Aussi, un bénévole met en avant sa pratique du Tai-chi de 12h30 à 13h30 pour un moment de détente. ', 0, 0, 0, 0, 1),
(10, 'Jeudi', 'Enfin, une coach sportive vous propose du Fitness de 18h30 à 19h30 afin de passer un agréable moment.', 0, 0, 0, 0, 1),
(11, 'Vendredi', 'l’association les chantiers de l’inédit propose des ateliers de théâtre pour les enfants de 17h30 à 19h30 et pour les adultes de 19h30 à 21h30.\r\n', 0, 0, 0, 0, 1),
(12, 'Vendredi', 'l’association les chantiers de l’inédit propose des ateliers de théâtre pour les enfants de 17h30 à 19h30 et pour les adultes de 19h30 à 21h30.', 1, 1, 0, 0, 0),
(13, 'Mercredi', 'Un mercredi sur deux, un atelier culinaire est mis en place avec les jeunes.\r\nL’autre mercredi, une activité sportive, culturelle ou artistique sera proposée.\r\n', 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ages`
--

CREATE TABLE `ages` (
  `ages_id` int(2) UNSIGNED NOT NULL,
  `ages_name` varchar(50) NOT NULL,
  `ages_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ages`
--

INSERT INTO `ages` (`ages_id`, `ages_name`, `ages_description`) VALUES
(1, '3to5', 'Le secteur petite enfance développe des accueils de loisirs sans hébergement (ALSH) tous les mercredis et pendant toutes les vacances scolaires pour les enfants de 3 à 5 ans. \r\nUne fiche d’inscription et une fiche sanitaire devront être remplies pour que vos enfants puissent participer aux ALSH.'),
(2, '6to12', 'Le secteur enfance développe des accueils de loisirs sans hébergement (ALSH) tous les mercredis et pendant toutes les vacances scolaires pour les enfants de 6 à 12 ans. \r\nAussi un accompagnement à la scolarité est mis en place tous les jours de la semaine sauf le mercredi.'),
(3, '12to16', 'Le secteur jeune accompagne les 12-16 ans en développant des projets avec eux ; mais aussi en mettant en place diverses activités les mercredis et durant les vacances scolaires. \r\nUn accompagnement à la scolarité est proposé aux jeunes de la 6ème à la Terminale. Un suivi est effectué avec le collège Levi Strauss, du quartier de Vauban-Esquermes.'),
(4, '16to25', 'Ce secteur développe différentes activités pour les adultes et les familles afin de favoriser la parentalité et le vivre ensemble. '),
(5, 'adults', 'Ce secteur développe différentes activités pour les adultes et les familles afin de favoriser la parentalité et le vivre ensemble. ');

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

CREATE TABLE `config` (
  `config_id` int(2) UNSIGNED NOT NULL,
  `config_sitename` varchar(150) NOT NULL,
  `config_address` varchar(150) NOT NULL,
  `config_phone` varchar(150) NOT NULL,
  `config_email` varchar(150) NOT NULL,
  `config_facebook` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `config`
--

INSERT INTO `config` (`config_id`, `config_sitename`, `config_address`, `config_phone`, `config_email`, `config_facebook`) VALUES
(1, 'Centre Social Vauban', '77 rue Philippe-Laurent Roland, Lille', '03.20.03.94.16', 'csvaubanesquermes@gmail.com', 'https://fr-fr.facebook.com/Centre-Social-Vauban-Esquermes-77-1807869302770177/');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `documents_id` int(5) UNSIGNED NOT NULL,
  `documents_name` varchar(150) NOT NULL,
  `documents_description` text NOT NULL,
  `documents_document` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `events_id` int(5) UNSIGNED NOT NULL,
  `events_title` varchar(150) NOT NULL,
  `events_description` text NOT NULL,
  `events_localization` varchar(150) NOT NULL,
  `events_hours` varchar(150) NOT NULL,
  `events_image` varchar(255) NOT NULL,
  `events_3to5` int(2) NOT NULL,
  `events_6to12` int(2) NOT NULL,
  `events_12to16` int(2) NOT NULL,
  `events_16to25` int(2) NOT NULL,
  `events_adults` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`events_id`, `events_title`, `events_description`, `events_localization`, `events_hours`, `events_image`, `events_3to5`, `events_6to12`, `events_12to16`, `events_16to25`, `events_adults`) VALUES
(2, 'coucou', 'fs', '', '', '', 0, 0, 0, 0, 0),
(3, 'steven', 'e', 'e', 'e', 'e', 0, 0, 0, 0, 0),
(4, 'rrrr', 'rrrr', 'rrr', 'rrr', 'rrrr', 0, 0, 0, 0, 0),
(5, 's', 's', 's', 'sss', 's', 0, 0, 0, 0, 0),
(6, 'r', 'r', 'r', 'r', 'r', 0, 0, 0, 0, 0),
(7, 'e', 'e', 'e', 'e', 'e', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `holidays_activities`
--

CREATE TABLE `holidays_activities` (
  `h_activities_id` int(5) UNSIGNED NOT NULL,
  `h_activities_title` varchar(150) NOT NULL,
  `h_activities_description` text NOT NULL,
  `h_activities_dates` varchar(150) NOT NULL,
  `h_activities_localization` varchar(150) NOT NULL,
  `h_activities_image` varchar(255) NOT NULL,
  `h_activities_hours` varchar(150) NOT NULL,
  `h_activities_price` varchar(150) NOT NULL,
  `h_activities_3to5` int(2) NOT NULL,
  `h_activities_6to12` int(2) NOT NULL,
  `h_activities_12to16` int(2) NOT NULL,
  `h_activities_16to25` int(2) NOT NULL,
  `h_activities_adults` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `holidays_activities`
--

INSERT INTO `holidays_activities` (`h_activities_id`, `h_activities_title`, `h_activities_description`, `h_activities_dates`, `h_activities_localization`, `h_activities_image`, `h_activities_hours`, `h_activities_price`, `h_activities_3to5`, `h_activities_6to12`, `h_activities_12to16`, `h_activities_16to25`, `h_activities_adults`) VALUES
(1, 'Mercredi', ' Semblable aux mercredis, diverses activités seront proposées aux enfants durant les vacances scolaires.\r\nLes ALSH des vacances scolaires se font au centre de la petite enfance au 12 Place de l’Arbonnoise à Lille ; du Lundi au Vendredi de 8h30 à 17h30.', '', '', '', '', 'Se rapprocher de l\'organisateur', 1, 0, 0, 0, 0),
(3, 'Stages sportifs', 'En plus des activités proposées le mercredi, des stages sportifs : initiation à la boxe pourront être proposés aux enfants durant les vacances scolaires. Ces stages s’effectueront avec notre partenaire le « Boxing club des Bois-Blancs ». \r\nAussi, des minis-camps seront organisés durant les grandes vacances scolaires. \r\nLes ALSH des vacances scolaires a lieu du lundi au vendredi de 8h30 à 17h30 au centre social de Vauban-Esquermes. ', '', '', '', '', '', 0, 1, 0, 0, 0),
(4, 'Vacances', 'Des activités sont proposées durant toutes les vacances scolaires, les jeunes pourront se renseigner directement auprès de l’animateur(rice). \r\nAussi, des projets « séjour » pourront être organisés avec jeunes durant les grandes vacances scolaires. Ils devront alors être acteurs de leur séjour. Pour cela, des autofinancements devront être mis place par les jeunes et l’accompagnant(e). \r\n\r\n-> Que ce soit les mercredis ou pendant les vacances scolaires, les inscriptions devront se faire directement auprès de l’animateur(rice). Le tarif varie en fonction de l’activité ou du projet d’animation.', '', '', '', '', '', 0, 0, 1, 0, 0),
(5, 'Vacances', 'Durant les vacances scolaires, des sorties familles seront proposées aux adhérents du centre social de Vauban-Esquermes. \r\nLes inscriptions se feront directement auprès de la référente famille ; et le tarif sera fixé en fonction des sorties.', '', '', '', '', '', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `partners_id` int(5) UNSIGNED NOT NULL,
  `partners_name` varchar(150) NOT NULL,
  `partners_description` text NOT NULL,
  `partners_image` varchar(150) NOT NULL,
  `partners_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `presentation_id` int(2) UNSIGNED NOT NULL,
  `presentation_name` varchar(150) NOT NULL,
  `presentation_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `presentation`
--

INSERT INTO `presentation` (`presentation_id`, `presentation_name`, `presentation_description`) VALUES
(1, 'Accueil', 'Définition d’un centre social :  C’est un foyer d’initiatives porté par des habitants associés, appuyés par des professionnels. Sa mission est de définir et de mettre en œuvre un projet de développement social pour l’ensemble de la population du territoire de Vauban-Esquermes, tout en respectant les valeurs fondatrices.\r\n\r\n-> mettre un lien avec la charte des Centres Sociaux et Socio-Culturels de France (http://www.centresocial-chemille.asso.fr/wp-content/uploads/2014/01/Charte-des-centres-sociaux-et-socioculturels-de-France.pdf)'),
(2, 'Présentation', 'Les horaires d’ouverture du centre sont 9h à 12h et de 14h à 19h.\r\nPour pouvoir participer aux activités, il faut être adhérent au centre social. Pour cela, vous pouvez retirer une fiche d’inscription à l’accueil ou télécharger et remplir le fichier en cliquant sur ce lien\r\nL’adhésion est de 12 euros par famille. \r\nCependant, pour certaines activités, un complément de tarif pourra être demandé (exemple : piscine -> 0.50 centimes).'),
(3, 'Nos valeurs', 'La Laïcité est une valeur liée au respect mutuel, elle implique de lutter contre toute atteinte à l’intégrité et à la dignité des personnes. La mise en vie de cette valeur se traduit par l’accueil de tous les enfants et jeunes quelles que soient leur origine, leur culture, leur croyance et cela sans discrimination. \r\nLa Citoyenneté nécessite que la personne soit reconnue membre d’une société et qu’elle puisse participer activement à ses projets. Reconnaître la citoyenneté des mineurs, c’est reconnaitre leur capacité à l’exercice de droits et de devoirs. Il est nécessaire de favoriser la participation des enfants et des jeunes, les adultes doivent les accompagner. \r\nLe Vivre Ensemble c’est reconnaitre et respecter tous les individus dans leur singularité mais aussi dans leur dimension sociale. La mixité enrichit le vivre ensemble. Il est important d’apprendre aux enfants et aux jeunes à vivre ensemble et de promouvoir des notions telles que le plaisir, la convivialité, la solidarité, le partage, indispensables au « bien vivre ensemble ». \r\nL’Education doit être partagée par l’ensemble des co-éducateurs : les parents qui sont les premiers éducateurs, les enseignants, les intervenants dans les loisirs de l’enfant. Les différentes actions éducatives avec leurs spécificités doivent être complémentaires. L’éducation participe à la transmission de savoirs, au partage des connaissances, au développement et à l’épanouissement de l’enfant. Elle doit lui permettre de grandir. » \r\nNotre association s’inscrit aussi dans le mouvement de l’éducation populaire. '),
(4, 'Nos missions', '...'),
(5, 'Nos sites', 'https://fr-fr.facebook.com/Centre-Social-Vauban-Esquermes-77-1807869302770177/');

-- --------------------------------------------------------

--
-- Structure de la table `school_help`
--

CREATE TABLE `school_help` (
  `school_id` int(5) UNSIGNED NOT NULL,
  `school_title` varchar(150) NOT NULL,
  `school_description` text NOT NULL,
  `school_3to5` int(2) NOT NULL,
  `school_6to12` int(2) NOT NULL,
  `school_12to16` int(2) NOT NULL,
  `school_16to25` int(2) NOT NULL,
  `school_adults` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_firstname` varchar(100) DEFAULT NULL,
  `user_lastname` varchar(100) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_status`) VALUES
(11, 'fuck', 'php', 'fuckphp@sql.com', '$2y$10$DYERRaeZLiujvDlKClLoG.f/msqiBsugCWjnG8cVW8vQ6YoBYlkhC', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activities_id`);

--
-- Index pour la table `ages`
--
ALTER TABLE `ages`
  ADD PRIMARY KEY (`ages_id`);

--
-- Index pour la table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`documents_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Index pour la table `holidays_activities`
--
ALTER TABLE `holidays_activities`
  ADD PRIMARY KEY (`h_activities_id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partners_id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`presentation_id`);

--
-- Index pour la table `school_help`
--
ALTER TABLE `school_help`
  ADD PRIMARY KEY (`school_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `activities_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `ages`
--
ALTER TABLE `ages`
  MODIFY `ages_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `documents_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `holidays_activities`
--
ALTER TABLE `holidays_activities`
  MODIFY `h_activities_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `partners_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `presentation_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `school_help`
--
ALTER TABLE `school_help`
  MODIFY `school_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
