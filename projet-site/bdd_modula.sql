-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 08 mars 2020 à 23:36
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_modula`
--
CREATE DATABASE IF NOT EXISTS `bdd_modula` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdd_modula`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `mdp`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `rgpd` varchar(25) NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` time NOT NULL,
  `ip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `mail`, `message`, `rgpd`, `date`, `heure`, `ip`) VALUES
(3, 'titi', 'tutu', 'titi@gmail.com', 'Bonjour,\r\nje souhaiterai m’offrir le macbook le plus puisant de votre gamme.\r\nCordialement. ', 'oui', '08-03-2020', '16:46:00', '::1'),
(4, 'sousou', 'sisi', 'sousou@gmail.com', 'Bonjour,\r\nJe voudrai savoir si vous faites de la maintenances.\r\nCordialement. ', 'oui', '08-03-2020', '16:48:00', '::1'),
(5, 'tuktuk', 'tiktik', 'tuktuk@gmail.com', 'Bonjour,\r\nAvez vous des offre intéressante à me proposé.\r\nCordialement. ', 'oui', '08-03-2020', '16:51:00', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
