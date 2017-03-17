-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.11 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van schoenmerken wordt geschreven
CREATE DATABASE IF NOT EXISTS `schoenmerken` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `schoenmerken`;


-- Structuur van  tabel schoenmerken.merken wordt geschreven
CREATE TABLE IF NOT EXISTS `merken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) DEFAULT NULL,
  `maat_38` int(11) DEFAULT NULL,
  `maat_39` int(11) DEFAULT NULL,
  `maat_40` int(11) DEFAULT NULL,
  `maat_41` int(11) DEFAULT NULL,
  `maat_42` int(11) DEFAULT NULL,
  `maat_43` int(11) DEFAULT NULL,
  `maat_44` int(11) DEFAULT NULL,
  `maat_45` int(11) DEFAULT NULL,
  `maat_46` int(11) DEFAULT NULL,
  `maat_47` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel schoenmerken.merken: 8 rows
/*!40000 ALTER TABLE `merken` DISABLE KEYS */;
INSERT INTO `merken` (`id`, `naam`, `maat_38`, `maat_39`, `maat_40`, `maat_41`, `maat_42`, `maat_43`, `maat_44`, `maat_45`, `maat_46`, `maat_47`) VALUES
	(1, 'Crocs', 30, 40, 25, 58, 15, 91, 44, 88, 12, 4),
	(2, 'Geox', 12, 45, 23, 45, 81, 23, 34, 45, 12, 7),
	(3, 'Ekko', 67, 51, 59, 18, 95, 26, 15, 24, 35, 16),
	(4, 'Nike', 245, 62, 48, 78, 48, 9, 54, 12, 13, 5),
	(5, 'Vans', 436, 99, 17, 45, 78, 28, 92, 81, 18, 7),
	(6, 'Adidas', 13, 16, 48, 52, 19, 87, 53, 51, 22, 15),
	(7, 'Birkenstock', 45, 81, 81, 53, 87, 45, 21, 38, 51, 2),
	(8, 'Daraaaaaaaaaaaa', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8);
/*!40000 ALTER TABLE `merken` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
