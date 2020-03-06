-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour tp_loto
CREATE DATABASE IF NOT EXISTS `tp_loto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tp_loto`;

-- Listage de la structure de la table tp_loto. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(1024) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table tp_loto.admin : ~0 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `login`, `password`) VALUES
	(1, 'admin', 'macron');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table tp_loto. equipes
CREATE TABLE IF NOT EXISTS `equipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Listage des données de la table tp_loto.equipes : ~8 rows (environ)
/*!40000 ALTER TABLE `equipes` DISABLE KEYS */;
INSERT INTO `equipes` (`id`, `Nom`) VALUES
	(1, 'OM'),
	(2, 'PSG'),
	(3, 'TFC'),
	(4, 'FC LIMOGES'),
	(5, 'FC ROUBAIX'),
	(6, 'FC LILLE'),
	(7, 'ST-ETIENNES'),
	(8, 'DIJON');
/*!40000 ALTER TABLE `equipes` ENABLE KEYS */;

-- Listage de la structure de la table tp_loto. matchs_futurs
CREATE TABLE IF NOT EXISTS `matchs_futurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eq1` int(11) DEFAULT NULL,
  `eq2` int(11) DEFAULT NULL,
  `dateMatch` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table tp_loto.matchs_futurs : ~2 rows (environ)
/*!40000 ALTER TABLE `matchs_futurs` DISABLE KEYS */;
INSERT INTO `matchs_futurs` (`id`, `eq1`, `eq2`, `dateMatch`) VALUES
	(1, 4, 5, '2020-06-06'),
	(2, 2, 6, '2020-05-16');
/*!40000 ALTER TABLE `matchs_futurs` ENABLE KEYS */;

-- Listage de la structure de la table tp_loto. matchs_passes
CREATE TABLE IF NOT EXISTS `matchs_passes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eq1` int(11) NOT NULL DEFAULT '0',
  `eq2` int(11) NOT NULL DEFAULT '0',
  `dateMatch` date DEFAULT NULL,
  `resultat` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table tp_loto.matchs_passes : ~3 rows (environ)
/*!40000 ALTER TABLE `matchs_passes` DISABLE KEYS */;
INSERT INTO `matchs_passes` (`id`, `eq1`, `eq2`, `dateMatch`, `resultat`) VALUES
	(1, 1, 7, '2019-04-16', '2'),
	(2, 2, 4, '2019-03-07', 'N'),
	(3, 3, 5, '2020-02-20', '1');
/*!40000 ALTER TABLE `matchs_passes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
