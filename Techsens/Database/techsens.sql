-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 jan. 2022 à 16:46
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `techsens`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'khsa', 'admini'),
(2, 'aula', 'azerty123'),
(3, 'yobe', 'agadir555');

-- --------------------------------------------------------

--
-- Structure de la table `aide`
--

CREATE TABLE `aide` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contacts_details`
--

CREATE TABLE `contacts_details` (
  `Society` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `Commentaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts_details`
--

INSERT INTO `contacts_details` (`Society`, `LastName`, `FirstName`, `email`, `phone`, `Commentaire`) VALUES
('isep', 'lales', 'audrey', '0761393781', 0, ''),
('isep', 'lales', 'audrey', 'audrey.lales@gmail.com', 761393781, ''),
('isep', 'botuli', 'scottie', 'scottie.botuli@gmail.com', 759684231, ''),
('gggg', 'eeee', 'dnnf', 'vffghgh@hhhh', 788878, 'aaaaaaaaaaaaaaaa'),
('isep', 'abc', 'def', 'audrey.lales@gmail.com', 761393781, ''),
('tesla', 'azertyuiop', 'qsdfgh', 'audrey.lales@gmail.com', 869542381, 'je nai plus accès à mon compte'),
('isep', 'azertyuiop', 'azertyu', 'audrey.lales@gmail.com', 865923471, 'coucou'),
('isep', 'hugues', 'fleur', 'fleur.hugues@gmail.com', 7986532314, 'coucou cest fleur'),
('aaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', 252555, 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(1, 'Comment m\'associer à vous pour devenir partenaire ? ', 'Contactez-nous sur la page dédiée à cela pour que l\'on puisse vous présenter nos prestations en détail.'),
(2, 'Comment actualiser les données de mon tableau pour avoir de nouvelles données sur mon capteur ? ', 'Appuyiez simplement sur le bouton \"Rafraichir\" en haut du tableau et vous aurez de nouvelles données associées à votre capteur'),
(1, 'Comment m\'associer à vous pour devenir partenaire ? ', 'Contactez-nous sur la page dédiée à cela pour que l\'on puisse vous présenter nos prestations en détail.'),
(2, 'Comment actualiser les données de mon tableau pour avoir de nouvelles données sur mon capteur ? ', 'Appuyiez simplement sur le bouton \"Rafraichir\" en haut du tableau et vous aurez de nouvelles données associées à votre capteur');

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

CREATE TABLE `gestion` (
  `role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gestion`
--

INSERT INTO `gestion` (`role`, `username`, `password`) VALUES
(1, 'auwa', 'dyonisios2000'),
(2, 'scbo', 'tvl54'),
(3, 'juga', 'ddass58');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `nom`, `email`, `message`) VALUES
(1, 'polo', 'polo@polo.com', 'ca marche pas aidez moi svp ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `prenom`, `nom`, `telephone`) VALUES
(7, 'ololo', 'alolol', 'nume566@gmail.com', 'olooof', 'aapo', 205256214),
(8, 'mod6587', 'dfffvcde', 'poldfu@gmail.com', 'paul', 'dupuit', 25847169),
(7, 'ololo', 'alolol', 'nume566@gmail.com', 'olooof', 'aapo', 205256214),
(8, 'mod6587', 'dfffvcde', 'poldfu@gmail.com', 'paul', 'dupuit', 25847169),
(1, 'oper54', 'passport55', 'opel.technics@opel.com', 'Martin', 'Dubois', 654696356),
(2, 'ratp75', 'metro6', 'ratp.paris@sncf.com', 'Catherine', 'Guillard', 655498621),
(1, 'oper54', 'passport55', 'opel.technics@opel.com', 'Martin', 'Dubois', 654696356),
(2, 'ratp75', 'metro6', 'ratp.paris@sncf.com', 'Catherine', 'Guillard', 655498621);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aide`
--
ALTER TABLE `aide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aide`
--
ALTER TABLE `aide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
