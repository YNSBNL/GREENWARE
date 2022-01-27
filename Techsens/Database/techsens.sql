-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 jan. 2022 à 21:25
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

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
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'khsa', 'admini'),
(2, 'yobe', 'admini2'),
(3, 'aula', 'admini3'),
(4, 'auwa', 'admini4'),
(5, 'juga', 'admini5'),
(6, 'scbo', 'admini6');

-- --------------------------------------------------------

--
-- Structure de la table `aide`
--

CREATE TABLE `aide` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aide`
--

INSERT INTO `aide` (`id`, `texte`) VALUES
(0, 'svsvqv'),
(0, 'test'),
(0, 'dz');

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
('isep', 'bjkbnjko', 'bnjkbnjk', 'njnn.llooj@gmail.com', 0, 'kjjn'),
('aaaaaaaaaa', 'aaaaa', 'aaaaa', 'asa.ADad@gmail.com', 0, 'zdafzazf'),
('qqqqqq', 'qqq', 'qq', 'audrey.lales@gmail.com', 0, 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`) VALUES
(1, 'Comment m\'associer à vous pour devenir partenaire ?', 'Contactez-nous sur la page dédiée à cela pour que l\'on puisse vous présenter nos prestations en détail.'),
(2, 'Comment actualiser les données de mon tableau pour avoir de nouvelles données sur mon capteur ?', 'Appuyiez simplement sur le bouton \"Rafraichir\" en haut du tableau et vous aurez de nouvelles données associées à votre capteur');

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

CREATE TABLE `gestion` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gestion`
--

INSERT INTO `gestion` (`id`, `username`, `password`) VALUES
(1, 'sncf38', 'grenoble');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(19) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `prenom`, `nom`, `telephone`) VALUES
(1, 'ratp75', 'metro6', 'ratp@gmail.com', 'Catherine', 'Guillouard', 677881234),
(2, 'g7taxi', 'mercedes75', 'g7taxi@gmail.com', 'Nicolas', 'Rousselet', 722312675);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
