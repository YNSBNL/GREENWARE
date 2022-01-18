-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 jan. 2022 à 11:33
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

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
('isep', 'hugues', 'fleur', 'fleur.hugues@gmail.com', 7986532314, 'coucou cest fleur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
