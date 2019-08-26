# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.37)
# Database: booking_villa
# Generation Time: 2019-08-26 16:38:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tb_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `tb_admin` WRITE;
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `email`)
VALUES
	(1,'siti','siti','db04eb4b07e0aaf8d1d477ae342bdff9','csukarena@gmail.com'),
	(2,'rahma','rahma','b007b7d6520a7b3dcccd2a1ec2891009','sketut32@gmail.com');

/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_book
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_book`;

CREATE TABLE `tb_book` (
  `id` varchar(32) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `tgl_book` date NOT NULL,
  `bukti_bayar` varchar(128) NOT NULL,
  `id_pelanggan` int(11) unsigned NOT NULL,
  `status` enum('BARU','TERKONFIRMASI') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tb_book` WRITE;
/*!40000 ALTER TABLE `tb_book` DISABLE KEYS */;

INSERT INTO `tb_book` (`id`, `checkin`, `checkout`, `tgl_book`, `bukti_bayar`, `id_pelanggan`, `status`)
VALUES
	('12345','2019-08-26','2019-08-29','2019-08-24','',1,'BARU'),
	('201908260702051566802925',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260704441566803084',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260704571566803097',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260711491566803509',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260712291566803549',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260713191566803599',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908260714461566803686',NULL,NULL,'2019-08-26','',1,'BARU'),
	('201908261423241566829404',NULL,NULL,'2019-08-26','',1,'BARU');

/*!40000 ALTER TABLE `tb_book` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_detail_book
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_detail_book`;

CREATE TABLE `tb_detail_book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(10) unsigned NOT NULL DEFAULT '0',
  `book_id` char(32) NOT NULL,
  `tipe` enum('TAGIHAN KAMAR','LAYANAN') NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `tanggal` date NOT NULL,
  `remark` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

LOCK TABLES `tb_detail_book` WRITE;
/*!40000 ALTER TABLE `tb_detail_book` DISABLE KEYS */;

INSERT INTO `tb_detail_book` (`id`, `room_id`, `book_id`, `tipe`, `harga`, `tanggal`, `remark`)
VALUES
	(1,2,'12345','TAGIHAN KAMAR',240000.00,'2019-08-27',''),
	(2,3,'201908260712291566803549','TAGIHAN KAMAR',260000.00,'2019-08-26',''),
	(3,3,'201908260713191566803599','TAGIHAN KAMAR',260000.00,'2019-08-26',''),
	(4,3,'201908260713191566803599','TAGIHAN KAMAR',260000.00,'2019-08-26',''),
	(5,3,'201908260713191566803599','TAGIHAN KAMAR',260000.00,'2019-08-26',''),
	(6,3,'201908260713191566803599','TAGIHAN KAMAR',260000.00,'2019-08-26',''),
	(7,4,'201908260714461566803686','TAGIHAN KAMAR',230000.00,'2019-08-26',''),
	(8,4,'201908260714461566803686','TAGIHAN KAMAR',230000.00,'2019-08-27',''),
	(9,4,'201908260714461566803686','TAGIHAN KAMAR',230000.00,'2019-08-28',''),
	(10,4,'201908260714461566803686','TAGIHAN KAMAR',230000.00,'2019-08-29',''),
	(11,4,'201908260714461566803686','TAGIHAN KAMAR',230000.00,'2019-08-30',''),
	(12,2,'201908261423241566829404','TAGIHAN KAMAR',240000.00,'2019-08-26',''),
	(13,2,'201908261423241566829404','TAGIHAN KAMAR',240000.00,'2019-08-26',''),
	(14,2,'201908261423241566829404','TAGIHAN KAMAR',240000.00,'2019-08-26',''),
	(15,2,'201908261423241566829404','TAGIHAN KAMAR',240000.00,'2019-08-26',''),
	(16,2,'201908261423241566829404','TAGIHAN KAMAR',240000.00,'2019-08-26','');

/*!40000 ALTER TABLE `tb_detail_book` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_item_layanan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_item_layanan`;

CREATE TABLE `tb_item_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remark` varchar(254) DEFAULT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  `book_detail_id` int(11) NOT NULL,
  `book_id` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tb_pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL DEFAULT '0',
  `phone` varchar(14) DEFAULT NULL,
  `alamat` varchar(128) NOT NULL DEFAULT '0',
  `no_rek` varchar(128) NOT NULL DEFAULT '0',
  `img` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

LOCK TABLES `tb_pelanggan` WRITE;
/*!40000 ALTER TABLE `tb_pelanggan` DISABLE KEYS */;

INSERT INTO `tb_pelanggan` (`id`, `nama`, `email`, `phone`, `alamat`, `no_rek`, `img`)
VALUES
	(1,'Wayan Mastra','yanmastra59@gmail.com','83119304230','kjndkjwd','Wayan Mastra',NULL),
	(8,'Wayan Mastra','yanmastra59@gmail.com','83119304230','kshdiuwiud wedfhwiuegifw efiwbeiufb ','Wayan Mastra',NULL);

/*!40000 ALTER TABLE `tb_pelanggan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tb_pembayaran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_pembayaran`;

CREATE TABLE `tb_pembayaran` (
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



# Dump of table tb_room
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_room`;

CREATE TABLE `tb_room` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `no_kamar` varchar(64) NOT NULL DEFAULT '',
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  `desc` text NOT NULL,
  `img` varchar(128) DEFAULT NULL,
  `kapasitas` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `tb_room` WRITE;
/*!40000 ALTER TABLE `tb_room` DISABLE KEYS */;

INSERT INTO `tb_room` (`id`, `no_kamar`, `harga`, `desc`, `img`, `kapasitas`)
VALUES
	(2,'Standar 102',240000.00,'Kamar standar',NULL,2),
	(3,'Standar 103',260000.00,'kamar standar spesial',NULL,3),
	(4,'Standar 101',230000.00,'kamar standar',NULL,2);

/*!40000 ALTER TABLE `tb_room` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
