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


-- Dumping database structure for cam_ai
DROP DATABASE IF EXISTS `cam_ai`;
CREATE DATABASE IF NOT EXISTS `cam_ai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cam_ai`;

-- Dumping structure for table cam_ai.company
DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_company` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cam_ai.company: ~6 rows (approximately)
DELETE FROM `company`;
INSERT INTO `company` (`id`, `name_company`, `level`) VALUES
	(1, 'it', 0),
	(2, 'marketing', 0),
	(3, 'sale', 0),
	(20, 'kinh doang', 1),
	(24, 'it2', 0),
	(25, 'it1', 0);

-- Dumping structure for table cam_ai.timekeeping
DROP TABLE IF EXISTS `timekeeping`;
CREATE TABLE IF NOT EXISTS `timekeeping` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time_now` time NOT NULL DEFAULT '00:00:00',
  `time_out` time NOT NULL DEFAULT '00:00:00',
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `id_belong` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_belong` (`id_belong`) USING BTREE,
  CONSTRAINT `FK_timekeeping_belong` FOREIGN KEY (`id_belong`) REFERENCES `belong` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cam_ai.timekeeping: ~13 rows (approximately)
DELETE FROM `timekeeping`;
INSERT INTO `timekeeping` (`id`, `date`, `time_now`, `time_out`, `role`, `id_belong`) VALUES
	(3, '2022-01-09', '14:20:00', '17:00:00', 'muộn', 6),
	(4, '2023-01-08', '08:00:03', '17:40:00', 'đúng', 6),
	(14, '2023-02-05', '08:00:00', '17:03:30', 'đúng', 22),
	(15, '2023-02-04', '00:00:00', '17:50:00', 'đúng', 6),
	(24, '2023-02-17', '01:11:11', '02:22:22', 'đúng', 24),
	(28, '2023-02-18', '08:00:00', '00:00:00', 'đi đúng h', 13),
	(29, '2023-02-18', '08:00:00', '00:00:00', 'đi đúng h', 13),
	(30, '2023-02-19', '08:30:00', '17:30:00', 'đi đúng ngày', 13),
	(34, '2023-02-18', '00:00:00', '00:00:00', 'nghỉ', 22),
	(35, '2023-02-18', '00:00:00', '00:00:00', 'nghỉ', 22),
	(36, '2023-02-18', '00:00:00', '00:00:00', 'nghỉ', 22),
	(37, '2023-02-18', '11:11:00', '14:22:00', 'muộn', 22),
	(38, '2023-02-18', '11:11:00', '14:22:00', 'muộn', 22);

-- Dumping structure for table cam_ai.room
DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_room` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_company` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `mcompany` (`id_company`) USING BTREE,
  CONSTRAINT `m_company` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cam_ai.room: ~10 rows (approximately)
DELETE FROM `room`;
INSERT INTO `room` (`id`, `name_room`, `id_company`, `level`) VALUES
	(1, 'phòng nhân sự', 2, 1),
	(3, '12', 1, 1),
	(6, 'Phòng 2', 2, 1),
	(8, 'it', 1, 1),
	(29, 'phòng 1', 20, 1),
	(30, 'phòng 2', 24, 1),
	(31, 'huya', 3, 0),
	(32, 'phòng hành trính', 1, 1),
	(33, 'phòng 1', 2, 1),
	(34, 'phát triển', 20, 1);

-- Dumping structure for table cam_ai.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `date_job_receive` date NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cam_ai.user: ~12 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `fullname`, `email`, `date_birth`, `date_job_receive`, `status`, `role`) VALUES
	(1, 'huy', 'kieudanghuy.coder@gmail.com', '2023-01-08', '2023-01-09', 'Đã nghỉ', 'Admin'),
	(2, 'huy1', 'huydangkieu123@gmail.com', '1111-11-11', '2023-01-09', 'Đang Làm', 'Nhân Viên'),
	(3, 'Huy3', 'huydangkieu123@gmail.com', '2023-01-12', '2023-01-11', 'Đang Làm', 'Quản lý '),
	(4, 'bảo', 'company111@gmail.com', '2023-01-30', '2023-01-30', 'Đang Làm', 'Nhân viên'),
	(5, 'hải', 'hai11@gamil.com', '2023-02-08', '2023-02-08', 'Đang làm', 'Quản lý '),
	(7, 'công', 'cong11@gmail.com', '2023-02-01', '2023-02-01', 'Đang làm', 'Quản lý '),
	(8, 'Nguyễn văn vậy', 'ngva@gmial.com', '2002-12-12', '2022-12-11', 'Đã Nghỉ', 'Nhân Viên'),
	(22, 'huy331', 'dsdsds1@gm', '1111-11-11', '1111-11-11', 'Đang Làm', 'Quản lý'),
	(28, 'Nguyễn văn b', 'ngva@gmial.com', '2002-12-12', '2022-12-11', 'Đang làm', 'Nhân Viên'),
	(29, 'huy331', 'huydangkieu123@gmail.com', '1111-11-11', '1111-11-11', 'Đang Làm', 'Quản lý'),
	(50, 'huy331', 'kieudanghuy.coder@gmail.com', '1111-11-11', '1111-11-11', 'Đang Làm', 'Array'),
	(51, 'huy2', 'huydangkieu123@gmail.com', '2222-02-22', '2222-02-22', 'Đang Làm', 'Array');

-- Dumping structure for table cam_ai.belong
DROP TABLE IF EXISTS `belong`;
CREATE TABLE IF NOT EXISTS `belong` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_staff` int NOT NULL,
  `id_room` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mp` (`id_room`) USING BTREE,
  KEY `mnv` (`id_staff`) USING BTREE,
  CONSTRAINT `FK_belong_room` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`),
  CONSTRAINT `FK_belong_user` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cam_ai.belong: ~6 rows (approximately)
DELETE FROM `belong`;
INSERT INTO `belong` (`id`, `id_staff`, `id_room`) VALUES
	(6, 2, 3),
	(13, 3, 3),
	(22, 4, 6),
	(24, 51, 3),
	(25, 51, 8),
	(26, 7, 6);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
