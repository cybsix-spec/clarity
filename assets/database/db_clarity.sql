-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_clarity
CREATE DATABASE IF NOT EXISTS `db_clarity` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_clarity`;

-- Dumping structure for table db_clarity.infos
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `href` varchar(225) NOT NULL,
  `label` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.infos: ~3 rows (approximately)
INSERT INTO `infos` (`id`, `href`, `label`) VALUES
	(1, '#about', 'About Us'),
	(2, '#products', 'Our Product'),
	(3, '#footer', 'Contact Us');

-- Dumping structure for table db_clarity.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `url` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.menus: ~3 rows (approximately)
INSERT INTO `menus` (`id`, `label`, `url`) VALUES
	(1, 'ABOUT', '#'),
	(2, 'PRODUCT', 'index.php#product'),
	(3, 'CONTACT', '#');

-- Dumping structure for table db_clarity.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(50) NOT NULL,
  `capsule` int NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.products: ~3 rows (approximately)
INSERT INTO `products` (`id`, `name_product`, `capsule`, `price`, `image`) VALUES
	(1, 'Super Antioxidant', 60, '$16.00', 'assets/img/supplement-1 1.png'),
	(2, 'Super Antioxidant', 60, '$16.00', 'assets/img/supplement-1 1.png'),
	(3, 'Super Antioxidant', 60, '$16.00', 'assets/img/supplement-1 1.png');

-- Dumping structure for table db_clarity.service
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `href` varchar(255) NOT NULL,
  `label` varchar(225) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.service: ~4 rows (approximately)
INSERT INTO `service` (`id`, `href`, `label`, `class`) VALUES
	(1, '#', 'Privacy Policy', 'No class'),
	(2, '#', 'Terms & Conditions', 'No class'),
	(3, '#', 'Legal <br> Support', 'legal'),
	(4, '#', 'Legal Support', 'legal-mobile');

-- Dumping structure for table db_clarity.social
CREATE TABLE IF NOT EXISTS `social` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `href` varchar(225) NOT NULL,
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.social: ~3 rows (approximately)
INSERT INTO `social` (`id`, `image`, `href`, `alt`) VALUES
	(1, 'assets/img/ig.svg', 'https://instagram.com', 'instagram'),
	(2, 'assets/img/twit.svg', 'https://twitter.com', 'twitter'),
	(3, 'assets/img/fb.svg', 'https://facebook.com', 'facebook');

-- Dumping structure for table db_clarity.target_buyer
CREATE TABLE IF NOT EXISTS `target_buyer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `title` varchar(225) NOT NULL,
  `descript` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.target_buyer: ~2 rows (approximately)
INSERT INTO `target_buyer` (`id`, `class`, `title`, `descript`) VALUES
	(1, 'are-left', 'Young Active People', 'We offer supplement that can give you more energy boost'),
	(2, 'are-right', 'Elderly', 'We offer supplement to keep your body fit and healthy aging');

-- Dumping structure for table db_clarity.why
CREATE TABLE IF NOT EXISTS `why` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descript` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_clarity.why: ~3 rows (approximately)
INSERT INTO `why` (`id`, `image`, `alt`, `title`, `descript`) VALUES
	(1, 'assets/img/37.svg', 'Quality Icon', 'Perfect Quality', 'We grow, farm, and bottle the finest olive products you can find.'),
	(2, 'assets/img/9.svg', 'Price Icon', 'Best Price Offers', 'The price is very affordable among similar product.'),
	(3, 'assets/img/14.svg', 'Natural Icon', '100% Natural', 'Harvested from the finest olive trees that deliver health benefits.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
