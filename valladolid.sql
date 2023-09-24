-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6689
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para valladolid
CREATE DATABASE IF NOT EXISTS `valladolid` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `valladolid`;

-- Volcando estructura para tabla valladolid.block_users
CREATE TABLE IF NOT EXISTS `block_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Volcando datos para la tabla valladolid.block_users: ~0 rows (aproximadamente)

-- Volcando estructura para tabla valladolid.mail_users
CREATE TABLE IF NOT EXISTS `mail_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Volcando datos para la tabla valladolid.mail_users: ~0 rows (aproximadamente)

-- Volcando estructura para tabla valladolid.slider_post
CREATE TABLE IF NOT EXISTS `slider_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `blank` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Volcando datos para la tabla valladolid.slider_post: ~1 rows (aproximadamente)
INSERT INTO `slider_post` (`id`, `title`, `image`, `link`, `blank`, `created_at`) VALUES
	(38, 'asdasd', 'asdasdads', 'https', 0, '2023-09-16 22:53:12');

-- Volcando estructura para tabla valladolid.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `DNI` int(9) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `id_roblox` int(11) DEFAULT NULL,
  `leones` int(11) DEFAULT 0,
  `gemas` int(11) DEFAULT 0,
  `ip` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'user',
  `premium` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Volcando datos para la tabla valladolid.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `id_user`, `DNI`, `username`, `email`, `password`, `number`, `id_roblox`, `leones`, `gemas`, `ip`, `role`, `premium`, `status`, `created_at`) VALUES
	(13, NULL, NULL, 'test', 'test@hotmail.com', '$2y$10$ALgmY0mId89as2qpEW2Z1.aT95ASiV8DkbBW/roLYnw7fozoeV0yi', NULL, NULL, 0, 0, NULL, 'user', 0, 0, '2023-09-24 20:26:55');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
