-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2021 at 03:40 PM
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
-- Database: `groupe 72`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int NOT NULL AUTO_INCREMENT,
  `client_surname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `client_firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `client_sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `client_birth` date NOT NULL,
  `client_phone` varchar(10) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `Pays` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Code postal` float NOT NULL,
  `Ville` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numéro de maison/appartement` float NOT NULL,
  `client_login` varchar(50) NOT NULL,
  `client_password` varchar(50) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `item_produit` int NOT NULL,
  `item_panier` int NOT NULL,
  `item_prix_unitaire` decimal(11,2) NOT NULL,
  `item_quantity` varchar(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `itemproduit` (`item_produit`),
  KEY `itempanier` (`item_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `panier_id` int NOT NULL AUTO_INCREMENT,
  `panier_client` int NOT NULL,
  `panier_date` date NOT NULL,
  `panier_price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`panier_id`),
  KEY `panierclient` (`panier_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `produit_id` int NOT NULL AUTO_INCREMENT,
  `produit_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produit_volume` decimal(11,2) NOT NULL,
  `produit_type` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produit_country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `produit_price` decimal(11,2) NOT NULL,
  `produit_alcohol` decimal(11,2) NOT NULL,
  `produit_design` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`produit_id`, `produit_name`, `produit_volume`, `produit_type`, `produit_country`, `produit_price`, `produit_alcohol`, `produit_design`) VALUES
(12, 'Jupiler', '33.00', 'Pils blonde', 'Belgique', '1.90', '5.20', 'La Jupiler est une bière belge blonde de fermentation basse de type lager européen. Elle a été créée et fabriquée par la brasserie Piedbœuf devenue la brasserie Jupiler dans le village de Jupille-sur-Meuse, banlieue de Liège dont la bière tire son nom. \r\n'),
(13, 'Stella Artois', '25.00', 'Pils blonde', 'Belgique', '1.00', '5.20', 'La Stella Artois est une marque de bière blonde de fermentation basse de type pils brassée à la brasserie Artois à Louvain par le groupe Anheuser-Busch InBev. Ingrédients : malt, maïs, eau, houblon, levure Température idéale de service : 10 - 12°C parfois 3 °C.\r\n'),
(14, 'Duvel', '33.00', 'Triple', 'Belgique', '2.20', '8.50', 'La Duvel est une bière blonde de fermentation haute brassée par la brasserie Duvel en Belgique. Elle représente 85 % de la production de la brasserie, qui produit également les Maredsous et la Vedett. C\'est une bière de type triple, dont le titre alcoolique est de 8,5 % en volume. \r\n'),
(15, 'Westmalle', '33.00', 'Triple', 'Belgique', '2.30', '9.50', 'La Westmalle est une bière trappiste brassée depuis le XIXᵉ siècle dans le village de Westmalle de la province d\'Anvers, à l\'Abbaye cistercienne de Westmalle. La brasserie Westmalle est la plus grande brasserie trappiste de Belgique. \r\n'),
(16, 'Chimay bleue', '33.00', 'Brune', 'Belgique', '2.50', '11.30', 'La Chimay Bleue est la plus forte et la plus complexe des bières trappistes de l\'abbaye de Notre Dame de Scourmont. Elle offre un bouquet d\'épices et un nez fruité, très caractéristique de la Chimay. En bouche, elle procure une longue amertume et traduit une torréfaction prononcée. \r\n'),
(17, 'Leffe', '33.00', 'Pils blonde', 'Belgique', '2.00', '6.60', 'La Leffe ou Abbaye de Leffe est une bière belge d\'Abbaye reconnue, créée en 1240 par les chanoines de l\'ordre de Prémontré de l\'abbaye Notre-Dame de Leffe et produite par la brasserie Artois à Louvain. \r\n'),
(18, 'Maes', '33.00', 'Pils blonde', 'Belgique', '1.80', '5.20', 'La Maes est une bière belge de type pils appartenant à Alken-Maes, filiale du groupe Heineken. \r\n'),
(19, 'Val-Dieu', '33.00', 'Pils blonde', 'Belgique', '2.20', '6.00', 'C\'est une bière fraîche et légère, modérément alcoolisée avec un fort caractère convivial.  Elle se boit aussi bien en apéritif que comme digestif. Elle peut également accompagner le repas.  Elle ne dessèche pas la bouche et développe un caractère agréable et amer en conclusion.  Une fraîcheur de départ la rendra plus agréable.  Elle gardera un léger manteau blanc tout au long de la dégustation.\r\n'),
(20, 'Lindemans Kriek', '25.00', 'Lambic', 'Belgique', '1.70', '3.50', 'La kriek est une bière belge aromatisée avec des cerises acides (aussi appelées cerises Morello). Traditionnellement il s\'agit d\'une lambic, bière de fermentation spontanée, mais la dénomination n\'étant pas protégée toute bière aromatisée à la cerise peut être appelée kriek.\r\n'),
(21, 'Orval', '33.00', 'Pale ale', 'Belgique', '3.00', '6.20', 'L\'Orval est une bière à la production limitée. Elle se compose d\'eau de source, d\'orges deux rangs de printemps maltés, de houblons aromatiques et de sucre candi liquide. Elle va subir un concassage et mise en ébullition où sera rajouté le houblon. \r\n'),
(22, 'Grimbergen', '33.00', 'Quadruple', 'Belgique', '3.00', '10.00', 'Brassée à l\'origine pour célébrer les fêtes de pâques, la Grimbergen Optimo Bruno a rencontré un succès tel qu\'elle est désormais brassée tout au long de l\'année. Cette bière issue d\'une fermentation haute et qui titre tout de même 10° présente dans le verre une robe d\'un blond ambrée qui ne se pare d\'aucune mousse. \r\n'),
(23, 'Omer', '33.00', 'Pale ale', 'Belgique', '2.30', '8.00', 'La Omer Traditional Blond est une bière blonde titrée à 8% brassée par la Brasserie Bockor, brasserie située à Bellegem en Belgique et qui existe depuis 1892. \r\n'),
(24, 'Chouffe', '33.00', 'Pale ale', 'Belgique', '2.30', '8.00', 'La Chouffe est une bière blonde non filtrée, refermentée aussi bien en bouteille qu\'en fût.  Elle présente une belle mousse blanche avec de savoureuses senteurs épicées et fruitées. En bouche, la bière dévoile des touches fruitées, épicées et de coriandre.  \r\n'),
(25, 'La Trappe', '33.00', 'Pale ale', 'Pays-Bas', '2.30', '6.50', 'La Trappe Blonde est une bière trappiste à la robe blonde dorée venue des Pays-Bas. C\'est une bière agréable, pur malt, fraîche et au caractère fruité.\r\n'),
(26, 'Kwak', '33.00', 'Pale ale', 'Belgique', '2.10', '8.40', 'Conçue à l\'origine comme un breuvage pour les cochers congelés, et traditionnellement servie dans son verre original du cocher, la Kwak est l\'une des bières les plus iconiques de Belgique. Versée dans un verre, elle nous dévoile une robe ambrée avec une tête blanche et moelleuse. Cette somptueuse Belgian Strong Ale dégage des arômes de malt au caramel, avec des abricots séchés et de la prune, pour une note séduisante de sucre de demerara.\r\n'),
(27, 'Triple Karmeliet', '33.00', 'Triple', 'Belgique', '2.10', '8.40', 'La bière Tripel Karmeliet est l\'un des grands classiques des bières belges. Selon la brasserie Bosteels, la recette utilisée serait la même depuis 1679. A l\'époque, la Karmeliet était alors produite au sein de l\'abbaye carmélite de Dendermonde. Bière de fermentation haute et refermentée en bouteille, elle présentait déjà à l\'époque la particularité d\'être produite à partir de trois céréales : l\'orge, le froment et l\'avoine. C\'est d\'ailleurs de ces ingrédients qu\'elle tire son nom.\r\n'),
(28, 'Kasteel', '33.00', 'Triple', 'Belgique', '2.60', '11.00', 'Avec cette Kasteel Tripel, venez découvrir la Reine des bières Triples de Belgique. Dorée et brillante, c\'est une bière de fermentation haute et refermentée en bouteille. Malgré ses 11°, elle est particulièrement douce et raffinée.\r\n'),
(29, 'Carlsberg', '33.00', 'Pils blonde', 'Danemark', '1.50', '5.60', 'Carlsberg est une compagnie brassicole danoise. Elle est le quatrième brasseur au monde, et est présente dans près de 140 pays. Le siège social est à Valby, Copenhague. La principale bière de la compagnie est la Carlsberg, mais le groupe brasse aussi la Tuborg, ainsi que de nombreuses bières locales. \r\n'),
(30, 'Corona', '33.00', 'Lager', 'Mexique', '1.80', '4.60', 'Corona est une marque de bière lager mexicaine produite dans plusieurs brasseries du Mexique par Grupo Modelo (propriété du groupe Anheuser-Busch InBev). \r\n'),
(31, 'Heineken', '33.00', 'Lager', 'Pays-Bas', '1.90', '5.00', 'Traduit de l\'anglais-Heineken Lager Beer, ou simplement Heineken est une bière blonde pâle avec 5% d\'alcool par volume produite par la brasserie néerlandaise Heineken N.V .. La bière Heineken est vendue dans une bouteille verte avec une étoile rouge. \r\n'),
(32, 'Barbar au miel', '33.00', 'Pale ale', 'Belgique', '2.70', '8.00', 'Avec la Barbãr, remontez aux sources de l\'art brassicole ! En effet, pendant des siècles, le seul sucre connu en Europe fut le miel. Il fut donc longtemps utilisé par les brasseurs pour élaborer ce qui deviendra plus tard la bière telle que nous la connaissons aujourd\'hui. \r\n'),
(33, 'Delirium', '33.00', 'Pale ale', 'Belgique', '2.60', '8.50', 'La Delirium Tremens a été brassée pour la première fois le 26 décembre 1988. Notre équipe de brasseurs a produit cette bière à la demande des Italiens. L\'authenticité de la Delirium réside dans les 3 levures différentes qu\'elle contient ainsi que dans sa bouteille originale en terre cuite. \r\n'),
(34, 'Paix Dieu', '33.00', 'Triple', 'Belgique', '3.10', '10.00', 'Cette bière était autrefois produite à l’abbaye de Paix Dieu, où le calendrier lunaire jouait un rôle central. Afin de conserver l’âme de l’abbaye, la Brasserie s’impose la rigueur de ne brasser que par pleine lune. \r\n'),
(35, 'Bush', '33.00', 'Pale ale', 'Belgique', '2.50', '10.50', 'Elle est brassée avec le même savoir faire qui a fait la renommée de ses consoeurs et en utilisant des levures propres à la brasserie et jalousement gardées secrètes. La Bush Blonde présente dans le verre une robe d\'un jaune pâle surmontée d\'un rocher mousseux conséquent. De ce chapeau, s\'échappent des arômes à la fois maltés, fruités et épicés avec des notes céréales, de pommes et d\'agrumes, ainsi que des touches évoquant la levure et les clous de girofle. \r\n'),
(36, 'Tsingtao', '33.00', 'Pale Lager', 'Chine', '2.70', '4.70', 'Tsingtao ou Qingdao, est une entreprise brassicole en Chine implantée dans la ville de Qingdao qui produit la bière du même nom. La Tsingtao est la bière chinoise la plus connue et est exportée dans de très nombreux pays, notamment la France, grâce aux communautés chinoises. \r\n'),
(37, 'Asahi', '33.00', 'Pale Lager', 'Japon', '2.50', '5.00', 'Bière numéro un au Japon, Asahi Super Dry est issue d\'une sélection des meilleurs ingrédients. La technologie de filtration sur céramique fait de Asahi une bière sèche en bouche qui lui procure une qualité désaltérante non égalée.\r\n'),
(38, 'Sapporo', '33.00', 'Pale Lager', 'Japon', '2.80', '4.90', 'Sapporo est la plus ancienne marque de bière au Japon puisqu\'elle date de 1876. Tout commença avec Seibei Nakagawa qui quitta le Japon à 17 ans pour l\'Allemagne où il apprit le métier de brasseur, ce qu\'il met en pratique chez lui en 1876 en tant que premier maître brasseur de Sapporo. \r\n'),
(39, 'Cass', '33.00', 'Pale Lager', 'Corée du Sud', '2.60', '4.50', 'Une bouteille en verre de la fameuse bière coréenne CASS, bière blonde légère idéal pour se rafraichir lors de chaudes journées d\'été. \r\n'),
(40, 'Taiwan Beer', '33.00', 'Pale Lager', 'Taiwan', '2.30', '4.50', 'La Taïwan Beer est la première bière brassée sur l\'île de Taïwan, et aujourd\'hui la seule marque de bière notable. Cette bière est disponible à l\'export de façon confidentielle jusqu\'en 2008. Puis en décembre de cette année la brasserie obtient une licence d\'exportation vers la Chine continentale.\r\n'),
(41, 'Singha Beer', '33.00', 'Pale Lager', 'Thailande', '2.60', '5.00', 'La Singha est une bière thaïlandaise blonde. Cette lager titrant à 5° d\'alcool est la plus ancienne (créée en 1933) et la plus populaire du pays. La bière Singha est une bière de type pils à fermentation basse, conçue par la brasserie Pathumthani en Thaïlande. \r\n');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `panier` (`panier_client`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`item_produit`) REFERENCES `produit` (`produit_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`panier_id`) REFERENCES `item` (`item_panier`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
