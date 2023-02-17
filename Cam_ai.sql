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


-- Dumping database structure for quanly
DROP DATABASE IF EXISTS `quanly`;
CREATE DATABASE IF NOT EXISTS `quanly` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `quanly`;

-- Dumping structure for table quanly.ban
DROP TABLE IF EXISTS `ban`;
CREATE TABLE IF NOT EXISTS `ban` (
  `mb` int NOT NULL AUTO_INCREMENT,
  `ten_ban` varchar(50) DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`mb`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanly.ban: ~9 rows (approximately)
INSERT INTO `ban` (`mb`, `ten_ban`, `level`) VALUES
	(1, 'it', 0),
	(2, 'marketing', 0),
	(3, 'sale', 0),
	(20, 'huy1', 0),
	(21, '12', 0),
	(24, 'it2', 0),
	(25, 'it1', 0),
	(29, '', 0),
	(30, '', 0);

-- Dumping structure for table quanly.lich
DROP TABLE IF EXISTS `lich`;
CREATE TABLE IF NOT EXISTS `lich` (
  `id_lich` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time_di` time NOT NULL DEFAULT '00:00:00',
  `time_ve` time NOT NULL DEFAULT '00:00:00',
  `tinh_trang` varchar(50) NOT NULL DEFAULT '0',
  `id_thuoc` int DEFAULT NULL,
  PRIMARY KEY (`id_lich`),
  KEY `id_thuoc` (`id_thuoc`),
  CONSTRAINT `id_thuoc` FOREIGN KEY (`id_thuoc`) REFERENCES `thuoc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanly.lich: ~9 rows (approximately)
INSERT INTO `lich` (`id_lich`, `date`, `time_di`, `time_ve`, `tinh_trang`, `id_thuoc`) VALUES
	(3, '2022-01-09', '14:20:00', '17:00:00', 'muộn', 6),
	(4, '2023-01-08', '08:00:03', '17:40:00', 'đúng', 6),
	(14, '2023-02-05', '08:00:00', '17:03:30', 'đúng', 22),
	(15, '2023-02-04', '00:00:00', '17:50:00', 'đúng', 6),
	(16, '2023-02-09', '07:00:00', '17:00:00', 'đúng', 21),
	(24, '2023-02-17', '01:11:11', '02:22:22', 'đúng', 24),
	(25, '2023-02-17', '11:11:00', '22:47:00', 'đúng', 21),
	(26, '2023-02-17', '11:11:00', '22:47:00', 'muộn', 21),
	(27, '2023-02-17', '11:11:00', '22:47:00', 'muộn', 21);

-- Dumping structure for table quanly.phong
DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `mp` int NOT NULL AUTO_INCREMENT,
  `ten_phong` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `m_ban` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`mp`),
  KEY `mban` (`m_ban`),
  CONSTRAINT `m_ban` FOREIGN KEY (`m_ban`) REFERENCES `ban` (`mb`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanly.phong: ~8 rows (approximately)
INSERT INTO `phong` (`mp`, `ten_phong`, `m_ban`, `level`) VALUES
	(3, '12', 1, 1),
	(6, 'Phòng 2', 2, 1),
	(8, 'it', 1, 1),
	(11, 'j', 1, 1),
	(29, 'phòng 1', 20, 1),
	(30, 'phòng 2', 24, 1),
	(31, 'huya', 3, 0),
	(32, 'nhap', 1, 1);

-- Dumping structure for table quanly.ten
DROP TABLE IF EXISTS `ten`;
CREATE TABLE IF NOT EXISTS `ten` (
  `mnv` int NOT NULL AUTO_INCREMENT,
  `tennv` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `ngay_vao` date NOT NULL,
  `tinh_trang` varchar(10) NOT NULL,
  `vai_tro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`mnv`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanly.ten: ~15 rows (approximately)
INSERT INTO `ten` (`mnv`, `tennv`, `email`, `ngay_sinh`, `ngay_vao`, `tinh_trang`, `vai_tro`) VALUES
	(1, 'huy', 'kieudanghuy.coder@gmail.com', '2023-01-08', '2023-01-09', 'Đã nghỉ', 'Admin'),
	(2, 'huy1', 'huydangkieu123@gmail.com', '1111-11-11', '2023-01-09', 'Đang Làm', 'Nhân Viên'),
	(3, 'Huy3', 'huydangkieu123@gmail.com', '2023-01-12', '2023-01-11', 'Đang Làm', 'Quản lý '),
	(4, 'bảo', 'ban111@gmail.com', '2023-01-30', '2023-01-30', 'Đang Làm', 'Nhân viên'),
	(5, 'hải', 'hai11@gamil.com', '2023-02-08', '2023-02-08', 'Đang làm', 'Quản lý '),
	(7, 'công', 'cong11@gmail.com', '2023-02-01', '2023-02-01', 'Đang làm', 'Quản lý '),
	(22, 'huy331', 'dsdsds1@gm', '1111-11-11', '1111-11-11', 'Đang Làm', 'Quản lý'),
	(28, 'Huy4', 'huy2@gmail.com', '2023-02-08', '2023-02-08', 'Nghỉ sinh', 'Nhân viên'),
	(29, 'huy331', 'huydangkieu123@gmail.com', '1111-11-11', '1111-11-11', 'Đang Làm', 'Quản lý'),
	(50, 'huy331', 'kieudanghuy.coder@gmail.com', '1111-11-11', '1111-11-11', 'Đang Làm', 'Array'),
	(51, 'huy2', 'huydangkieu123@gmail.com', '2222-02-22', '2222-02-22', 'Đang Làm', 'Array'),
	(127, 'huy1', 'huydangkieu123@gmail.com', '0011-11-11', '0001-11-11', 'Đang Làm', 'Admin'),
	(212, 'huy', '200@gmail.com', '2022-12-12', '2002-11-11', 'Đang Làm', 'nhân viên'),
	(5023, 'huy2', '0359758920@gmail', '1111-11-11', '1111-11-11', 'Đang Làm', 'Quản lý'),
	(50231, 'huy2', '0359758920@gmail', '1111-11-11', '1111-11-11', 'Đang Làm', 'Admin');

-- Dumping structure for table quanly.thuoc
DROP TABLE IF EXISTS `thuoc`;
CREATE TABLE IF NOT EXISTS `thuoc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mnv` int NOT NULL,
  `mp` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mp` (`mp`),
  KEY `mnv` (`mnv`),
  CONSTRAINT `mnv` FOREIGN KEY (`mnv`) REFERENCES `ten` (`mnv`),
  CONSTRAINT `mp` FOREIGN KEY (`mp`) REFERENCES `phong` (`mp`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table quanly.thuoc: ~8 rows (approximately)
INSERT INTO `thuoc` (`id`, `mnv`, `mp`) VALUES
	(6, 2, 3),
	(13, 3, 3),
	(21, 4, 11),
	(22, 4, 6),
	(23, 28, 6),
	(24, 51, 3),
	(25, 51, 8),
	(26, 7, 6);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
