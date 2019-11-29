-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 nov. 2019 à 16:18
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `goombas`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ref` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `prix` varchar(12) NOT NULL,
  `cinUtilisateur` varchar(8) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `cinUtilisateur` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `refCommande` varchar(15) NOT NULL,
  `nomProduit` varchar(15) NOT NULL,
  KEY `refCommande` (`refCommande`),
  KEY `nomProduit` (`nomProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `cinUtilisateur` varchar(8) NOT NULL,
  `contenu` text NOT NULL,
  KEY `cinUtilisateur` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `nomProduits` varchar(15) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `reduction` float NOT NULL,
  KEY `nomProduits` (`nomProduits`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `nom` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `valable` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ref` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `nbPlaces` int(100) NOT NULL,
  `description` text NOT NULL,
  `tempsDebut` varchar(8) NOT NULL,
  `tempsFin` varchar(8) NOT NULL,
  `cinUtilisateur` varchar(8) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `cinUtilisateur` (`cinUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tel` varchar(8) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `mdp` varchar(15) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`refCommande`) REFERENCES `commande` (`ref`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`nomProduit`) REFERENCES `produits` (`nom`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`nomProduits`) REFERENCES `produits` (`nom`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`cinUtilisateur`) REFERENCES `utilisateur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
