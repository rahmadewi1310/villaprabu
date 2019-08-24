-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2019 pada 15.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_villa`
--
DROP DATABASE IF EXISTS `booking_villa`;
CREATE DATABASE IF NOT EXISTS `booking_villa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking_villa`;

-- --------------------------------------------------------


CREATE TABLE `tb_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `email`) VALUES
(1, 'siti', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'csukarena@gmail.com'),
(2, '\r\nrahma', 'rahma', 'b007b7d6520a7b3dcccd2a1ec2891009', 'sketut32@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_book`
--

CREATE TABLE `tb_book` (
  `id` varchar(32) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `tgl_book` date NOT NULL,
  `bukti_bayar` varchar(128) NOT NULL,
  `id_pelanggan` int(11) UNSIGNED NOT NULL,
  `status` enum('BARU','TERKONFIRMASI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_book`
--

CREATE TABLE `tb_detail_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `book_id` char(32) NOT NULL,
  `tipe` enum('TAGIHAN KAMAR','LAYANAN') NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `tanggal` date NOT NULL,
  `remark` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_item_layanan`
--

CREATE TABLE `tb_item_layanan` (
  `id` int(11) NOT NULL,
  `remark` varchar(254) DEFAULT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  `book_detail_id` int(11) NOT NULL,
  `book_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL DEFAULT '0',
  `alamat` varchar(128) NOT NULL DEFAULT '0',
  `no_rek` varchar(128) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `tipe` enum('CASH','TRANSFER') NOT NULL,
  `bukti_transfer` varchar(128) DEFAULT NULL,
  `nomor_rekening` varchar(24) DEFAULT NULL,
  `book_id` varchar(32) NOT NULL,
  `pelanggan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE `tb_room` (
  `id` int(11) UNSIGNED NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `harga` decimal(12,2) NOT NULL DEFAULT '0.00',
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_book`
--
ALTER TABLE `tb_detail_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item_layanan`
--
ALTER TABLE `tb_item_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_detail_book`
--
ALTER TABLE `tb_detail_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item_layanan`
--
ALTER TABLE `tb_item_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;
