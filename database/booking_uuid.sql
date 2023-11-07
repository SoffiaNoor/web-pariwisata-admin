-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for web_pariwisata
CREATE DATABASE IF NOT EXISTS `web_pariwisata` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `web_pariwisata`;

-- Dumping structure for table web_pariwisata.booking_uuid
CREATE TABLE IF NOT EXISTS `booking_uuid` (
  `ID` varchar(36) NOT NULL DEFAULT uuid(),
  `NIK` varchar(16) NOT NULL DEFAULT '',
  `Nama` varchar(50) NOT NULL DEFAULT '',
  `Usia` int(11) NOT NULL,
  `TanggalBooking` date NOT NULL,
  `Email` varchar(50) NOT NULL DEFAULT '',
  `NoTelpon` varchar(50) NOT NULL DEFAULT '',
  `KotaAsal` varchar(50) NOT NULL DEFAULT '',
  `Destinasi` varchar(50) NOT NULL DEFAULT '',
  `JumlahOrang` int(11) NOT NULL DEFAULT 0,
  `CreatedOn` timestamp NULL DEFAULT NULL,
  `UpdatedOn` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table web_pariwisata.booking_uuid: ~11 rows (approximately)
/*!40000 ALTER TABLE `booking_uuid` DISABLE KEYS */;
REPLACE INTO `booking_uuid` (`ID`, `NIK`, `Nama`, `Usia`, `TanggalBooking`, `Email`, `NoTelpon`, `KotaAsal`, `Destinasi`, `JumlahOrang`, `CreatedOn`, `UpdatedOn`) VALUES
	('002e7798-7d88-11ee-ba71-00ffa6327883', '4567890123456789', 'Christopher Moore', 24, '2024-02-01', 'christophermoore@gmail.com', '7890123456', 'Kediri', 'Waigeo', 5, '2023-11-07 23:09:16', '0000-00-00 00:00:00'),
	('21ecc8d4-7d88-11ee-ba71-00ffa6327883', '5678901234567890', 'Ryuhei Matsuda', 38, '2023-11-10', 'ryuheimatsuda@gmail.com', '2345678901', 'Tokyo', 'Wajag Island', 1, '2023-11-07 23:10:13', '0000-00-00 00:00:00'),
	('3e142709-7d88-11ee-ba71-00ffa6327883', '6789012345678901', 'Jennifer Lee', 32, '2023-12-09', 'jenniferlee@gmail.com', '8765432109', 'Lamongan', 'Waigeo', 1, '2023-11-07 23:11:00', '0000-00-00 00:00:00'),
	('67a13735-7d88-11ee-ba71-00ffa6327883', '7890123456789012', 'Shun Oguri', 39, '2023-11-25', 'shunoguri@gmail.com', '4567890123', 'Tokyo', 'Mansuar', 2, '2023-11-07 23:12:10', '0000-00-00 00:00:00'),
	('89d51c14-7d8c-11ee-ba71-00ffa6327883', '1122334455667788', 'Haruma Miura', 30, '2023-02-24', 'harumamiura@gmail.com', '5432109876', 'Tsuchiura', 'Waigeo', 1, '2023-11-07 23:41:45', NULL),
	('8f4f5568-7d88-11ee-ba71-00ffa6327883', '8901234567890123', 'Takeru Satoh', 34, '2023-11-30', 'takerusatoh@gmail.com', '3210987654', 'Saitama', 'Wajag Island', 2, '2023-11-07 23:13:16', '0000-00-00 00:00:00'),
	('90cf2fee-7d87-11ee-ba71-00ffa6327883', '1234567890123456', 'Takeshi Kitano', 65, '2023-10-29', 'takeshikitano@gmail.com', '1234567890', 'Tokyo', 'Wajag Island', 1, '2023-11-07 23:06:09', '0000-00-00 00:00:00'),
	('b23e5693-7d88-11ee-ba71-00ffa6327883', '9012345678901234', 'Kento Yamazaki', 29, '2023-12-29', 'kentoyamazaki@gmail.com', '1357924680', 'Tokyo', 'Waigeo', 2, '2023-11-07 23:14:15', '0000-00-00 00:00:00'),
	('b91dc911-7d87-11ee-ba71-00ffa6327883', '2345678901234567', 'Tadanobu Asano', 47, '2023-10-12', 'tadanobuasano@gmail.com', '9876543210', 'Osaka', 'Waigeo', 2, '2023-11-07 23:07:17', '0000-00-00 00:00:00'),
	('d3fbb637-7d88-11ee-ba71-00ffa6327883', '0123456789012345', 'Kentaro Sakaguchi', 32, '2024-01-16', 'kentarosakaguchi@gmail.com', '8675309124', 'Tokyo', 'Wajag Island', 2, '2023-11-07 23:15:12', '0000-00-00 00:00:00'),
	('dc094c86-7d87-11ee-ba71-00ffa6327883', '3456789012345678', 'Ken Watanabe', 62, '2023-08-09', 'kenwatanabe@gmail.com', '5551234567', 'Ube', 'Mansuar', 3, '2023-11-07 23:08:16', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `booking_uuid` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
