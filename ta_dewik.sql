-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for booking_villa
DROP DATABASE IF EXISTS `booking_villa`;
CREATE DATABASE IF NOT EXISTS `booking_villa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `booking_villa`;

-- Dumping structure for table booking_villa.tb_admin
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_book
DROP TABLE IF EXISTS `tb_book`;
CREATE TABLE IF NOT EXISTS `tb_book` (
  `id` varchar(32) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `tgl_book` date NOT NULL,
  `bukti_bayar` varchar(128) NOT NULL,
  `id_pelanggan` int(11) unsigned NOT NULL,
  `status` enum('BARU','TERKONFIRMASI') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_detail_book
DROP TABLE IF EXISTS `tb_detail_book`;
CREATE TABLE IF NOT EXISTS `tb_detail_book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(10) unsigned NOT NULL DEFAULT '0',
  `book_id` char(32) NOT NULL,
  `tipe` enum('TAGIHAN KAMAR','LAYANAN') NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `tanggal` date NOT NULL,
  `remark` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_item_layanan
DROP TABLE IF EXISTS `tb_item_layanan`;
CREATE TABLE IF NOT EXISTS `tb_item_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remark` varchar(254) DEFAULT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  `book_detail_id` int(11) NOT NULL,
  `book_id` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_pelanggan
DROP TABLE IF EXISTS `tb_pelanggan`;
CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL DEFAULT '0',
  `alamat` varchar(128) NOT NULL DEFAULT '0',
  `no_rek` varchar(128) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_pembayaran
DROP TABLE IF EXISTS `tb_pembayaran`;
CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `tipe` enum('CASH','TRANSFER') NOT NULL,
  `bukti_transfer` varchar(128) DEFAULT NULL,
  `nomor_rekening` varchar(24) DEFAULT NULL,
  `book_id` varchar(32) NOT NULL,
  `pelanggan_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table booking_villa.tb_room
DROP TABLE IF EXISTS `tb_room`;
CREATE TABLE IF NOT EXISTS `tb_room` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
