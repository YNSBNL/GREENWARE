-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 jan. 2022 à 16:13
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
-- Structure de la table `addutilisateur`
--

CREATE TABLE `addutilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'khsa', 'admini');

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
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `message`) VALUES
(0, ''),
(0, 'aaaaaaa'),
(0, 'comment se connecter ? vous entrez votre id et mdp'),
(0, 'azzzzzzzzzzzzz'),
(0, 'comment se connecter ? vous entrez votre id et mdp'),
(0, 'azzzzzzzzzzzzzzzzzrff'),
(0, 'wwwiiiiiw');

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
  `telephone` int(10) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `prenom`, `nom`, `telephone`, `role`) VALUES
(1, 'lol123', 'motdepasse', 'dddd@dddd.f', 'ddddd', 'ffff', 55555, 1),
(2, 'lol', 'lolol', 'effed', 'dfdfd', 'fggg', 222, 2),
(0, 'ouibj', 'polo123', '', '', '', 0, 0),
(0, 'augustin', 'wztine', '', '', '', 0, 0),
(0, 'yapa', 'lappa', '', '', '', 0, 0),
(0, 'al', 'aooo', '', '', '', 0, 0);

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
