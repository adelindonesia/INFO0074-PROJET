-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2021 at 08:46 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupe_72`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `GSM` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(7) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `nom`, `prenom`, `birthdate`, `GSM`, `email`, `password`) VALUES
(1, 'Hubin', 'Madeleine', '1987-04-06', '0484/938371', 'HMadel@projet.be', 'active7'),
(2, 'Marion', 'Marie', '1995-12-19', '0484/938372', 'Marion.marie@projet.be', 'fleur18'),
(3, 'Poisson', 'Veronique', '1965-08-26', '0484/938374', 'Poisson.Vero@projet.be', '123789A'),
(4, 'Gabriel', 'Henry', '1985-12-25', '0484/938376', 'Legrand@projet.be', 'machine'),
(5, 'Frank', 'Lois', '1977-06-05', '0484/938373', 'lois@projet.be', 'parcel2'),
(6, 'Laurent', 'Markus', '1996-12-18', '0484/938375', 'LaurMarkus@projet.be', '2021vie'),
(7, 'Grimbergen', 'Lydia', '1982-11-02', '0484/938378', 'Lydia@projet.be', 'moisson'),
(8, 'Ferhat', 'Joseph', '1997-04-02', '0484/938379', 'Ferhat@projet.be', 'turquie'),
(9, 'Dujardin', 'Pierre', '1952-07-12', '0484/938380', 'Du.Pierre@projet.be', 'azerty0'),
(10, 'Mael', 'Anne', '1963-03-03', '0484/938381', 'Maela@projet.be', 'qwerty8'),
(11, 'Gruyere', 'steve', '1991-09-19', '0484/938382', 'Gruyeres@projet.be', 'carbona'),
(12, 'Chanteuse', 'Maxime', '1967-10-07', '0484/938383', 'Chant.max@projet.be', 'album02'),
(13, 'Aime', 'Cesaire', '1981-05-23', '0484/938384', 'Aime.cesaire@projet.be', 'poesie'),
(14, 'Martin', 'Jacques', '1955-07-03', '0484/938385', 'Martins@projet.be', 'scoop'),
(15, 'Jacob', 'Israel', '1974-10-22', '0484/938386', 'Jacobis@projet.be', 'canaan'),
(16, 'Rigolo', 'Marceline', '2000-08-08', '0484/938387', 'Rigolo@projet.be', 'humour'),
(17, 'Annie', 'Payep', '1984-01-19', '0484/938388', 'Annie.p@projet.be', 'journal'),
(18, 'Orlando', 'Bloom', '1987-02-12', '0484/938389', 'Bloom@projet.be', 'pirates'),
(19, 'Kathryn', 'Kuhlman', '1959-06-09', '0484/938390', 'KKuhl@projet.be', 'windfir'),
(20, 'Benson', 'Osburn', '1966-07-28', '0484/938391', 'Tlos@projet.be', 'impact'),
(21, 'Monique', 'Taraji', '1988-11-12', '0484/938392', 'Monique.taraji@projet.be', 'empire'),
(22, 'Honey', 'Wilfried', '1951-06-27', '0484/938393', 'Wilfried@projet.be', 'beeswax'),
(23, 'Dena', 'Kitata', '1977-01-12', '0484/938394', 'Denakit@projet.be', 'worship'),
(24, 'Soleil', 'Isabelle', '1983-12-24', '0484/938395', 'Isabelle@projet.be', 'sunrays'),
(25, 'Wolfgang', 'Amadeus', '1998-01-01', '0484/938396', 'Wolf.Amadeus@projet.be', 'legend'),
(26, 'Raoul', 'Larsson', '1990-09-18', '0484/938397', 'RW@projet.be', 'attiek'),
(27, 'Vannessa', 'Sigrid', '2002-04-26', '0484/938398', 'Van.Sigrid@projet.be', 'raisons'),
(28, 'Ghislain', 'Francis', '1950-02-08', '0484/938399', 'GFrancis@projet.be', 'beeftek'),
(29, 'Cornet', 'Alizee', '2001-10-14', '0484/938400', 'Cornet@projet.be', 'tennis'),
(30, 'Dujardin', 'Jean', '1990-12-12', '0484/938401', 'Dujardin.Jean@projet.be', 'cinema'),
(31, 'Moulin', 'Claire', '1993-05-11', '0484/938402', 'Moulin.Claire@projet.be', 'muesli6'),
(32, 'Beau', 'Christophe', '1974-02-17', '0484/938403', 'ChristoBeau@projet.be', 'pruneau'),
(33, 'Martins', 'Jean', '1993-11-30', '0484/938404', 'Jean.Martins@projet.be', 'lavie12'),
(34, 'Renault', 'Fred', '1963-12-31', '0484/938405', 'Renault.Fred@projet.be', 'vitesse'),
(35, 'Song', 'Jocelyne', '1968-07-03', '0484/938406', 'SoJocelyne@projet.be', 'onions');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
