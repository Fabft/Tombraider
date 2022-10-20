-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 31 mars 2022 à 14:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddmcfg`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mdp`) VALUES
('1', 'admin', 'mcfg');

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`id`, `page`, `image`) VALUES
(1, 'album', 'Style/Images/album.png'),
(2, 'album', 'Style/Images/album1.png'),
(3, 'album', 'Style/Images/Album2.png'),
(4, 'album', 'Style/Images/Album3.png'),
(5, 'album', 'Style/Images/Album4.png'),
(6, 'album', 'Style/Images/Album5.png'),
(7, 'album', 'Style/Images/Album6.png'),
(8, 'album', 'Style/Images/Album7.png'),
(9, 'carte', 'Style/Images/carte.png'),
(10, 'carte', 'Style/Images/M.Rouge.png'),
(11, 'carte', 'Style/Images/M.Jaune.png'),
(12, 'index', 'Style/Images/Bannière.jfif'),
(13, 'index', 'Style/Images/crystal-dynamics-logo-background.png'),
(14, 'index', 'Style/Images/L.square-enix-logo-background.png'),
(15, 'index', 'Style/Images/Ligne.png'),
(16, 'index', 'Style/Images/L.logo-en.png'),
(17, 'index', '../Style/Images/Capture.png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Nom` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Nom`, `Images`, `id`) VALUES
('Arcs', '../../Style/Images/Arme.A.png', 1),
('Fusils d\'Assaut', '../../Style/Images/Arme.F-A.png', 2),
('Piolets', '../../Style/Images/Arme.P.png', 3),
('Pistolet', '../../Style/Images/Arme.P-M.png', 4),
('Fusil à Pompe', '../../Style/Images/Arme.F-P.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `Banner` varchar(100) NOT NULL,
  `Evolutions` varchar(100) NOT NULL,
  `Ameliorations` varchar(100) NOT NULL,
  `Capacites` varchar(100) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`Banner`, `Evolutions`, `Ameliorations`, `Capacites`, `id`) VALUES
('Arcs', '../../../Style/Images/Eq.Arc.png', '../../../Style/Images/Am.Arc.png', '../../../Style/Images/Ca.Arc.png', 1),
('Fusils d\'Assaut', '../../../Style/Images/Eq.Aso.png', '../../../Style/Images/Am.Aso.png', '../../../Style/Images/Ca.Aso.png', 2),
('Piolets', '../../../Style/Images/Eq.Pio.png', '../../../Style/Images/Am.Pio.png', '../../../Style/Images/Ca.Pio.png', 3),
('Pistolets', '../../../Style/Images/Eq.Pis.png', '../../../Style/Images/Am.Pis.png', '../../../Style/Images/Ca.Pis.png', 4),
('Fusils à Pompe', '../../../Style/Images/Eq.Pom.png', '../../../Style/Images/Am.Pom.png', '../../../Style/Images/Ca.Pom.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `image`, `nom`, `description`) VALUES
(1, '/Style/Images/Pers.laracroft.png', 'Lara Croft (Lara)', 'Jeune archéologue prodige et dernière descendante de la famille Croft. Lara est une jeune femme intelligente et motivée, et est vouée à un grand avenir. Elle est néanmoins en pleine crise de confiance.'),
(2, '/Style/Images/Pers.Alex%20Weiss.png', 'Alex Weiss (Alex)', 'Un jeune archéologue qui sort de la même université que Lara et Samantha. Il est secrètement amoureux de Lara.'),
(3, '/Style/Images/Pers.Conrad%20Roth.jpg', 'Conrad Roth (Roth)', 'Le mentor de Lara qui la considère comme sa propre fille, c\'est un ancien soldat d\'élite de l\'armée britannique et un proche ami de la famille Croft'),
(4, '/Style/Images/Pers.James%20Whitman.png', 'James Whitman', 'C\'est le supérieur de Lara. Le Dr. Whitman est un archéologue mondialement connu mais c\'est un homme lâche et opportuniste qui est capable de tout pour arriver à ses fins.'),
(5, '/Style/Images/Pers.Samantha%20Nishimura.png', 'Samantha Nishimura (Sam)', 'Âgée de 22 ans, elle est la meilleure amie de Lara et est diplômée dans la même université qu\'elle. D\'origine asiatique et portugaise, elle est très attachée à Lara.'),
(6, '/Style/Images/Pers.Jonah%20Maiava.png', 'Jonah Maiava (Jonah)', 'Jonah est un homme fort qui n\'hésite pas à protéger Lara quand elle en a besoin. Il est l\'un des premiers à comprendre que les tempêtes et les évènements qui sévissent sur l\'île ne sont pas naturels.'),
(7, '/Style/Images/Pers.Joslin%20Reyes.png', 'Joslin Reyes', 'C\'est une femme forte et difficilement impressionnable, elle est mère d\'une fille de quatorze-ans et a une relation amoureuse avec Roth, c\'est aussi un ex-policier. Pragmatique et rationnelle, elle est la dernière du groupe à admettre la nature surnaturelle de l\'île et des tempêtes.'),
(8, '/Style/Images/Pers.Angus%20Grimaldi.png', 'Angus Grimaldi (Grim)', 'Conducteur du navire, proche ami de la famille Croft et ancien partenaire du père de Lara.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GRANT ALL PRIVILEGES ON *.* TO `admin`@`%` IDENTIFIED BY PASSWORD '*86BC2FC87E5E31425E67B1138DE536738CA83CC8' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `bddmcfg`.* TO `admin`@`%`;