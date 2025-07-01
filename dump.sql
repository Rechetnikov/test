/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` (`id`, `name`, `price`, `img`) VALUES
	(1, 'Процессор', '400', '/img/proc.jpg');
INSERT INTO `goods` (`id`, `name`, `price`, `img`) VALUES
	(2, 'Материнская плата', '100000', '/img/mater.jpg');
INSERT INTO `goods` (`id`, `name`, `price`, `img`) VALUES
	(3, 'Блок питания', '5000', '/img/bloc.jpg');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(2, 'Artem', 'mari-nek15@mail.ru', 'Pdu44.12');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(5, 'cx16079', 'Test@mail.ru', 'test');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(6, 'cx16079', 'Test@mail.ru', 'test');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(7, 'test', 'test@test', 'test');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(8, 'test', 'test@test', 'test');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(9, 'NewUser', 'test@test', '123');
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(10, 'test', 'test@test', '123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
