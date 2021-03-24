-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2021 at 06:29 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupe 72 - projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Date de naissance` varchar(50) NOT NULL,
  `Téléphone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Mot de passe` varchar(50) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `Identifiant de l'article` varchar(50) NOT NULL,
  `Quantité commandée` varchar(50) NOT NULL,
  `Prix unitaire` varchar(50) NOT NULL,
  `idpanier` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `idproduit` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Identifiant de l'article`),
  KEY `idpanier` (`idpanier`),
  KEY `idproduit` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idpanier` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date de la commande` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Prix total de la commande` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Etat de la commande` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idclient` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idpanier`),
  KEY `idclient` (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nom du produit` varchar(50) NOT NULL,
  `Poids` varchar(50) NOT NULL,
  `Prix` varchar(50) NOT NULL,
  PRIMARY KEY (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`idproduit`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`idpanier`) REFERENCES `panier` (`idpanier`);

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idproduit`) REFERENCES `item` (`Identifiant de l'article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
