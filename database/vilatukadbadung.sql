-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Agu 2019 pada 18.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vilatukadbadung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_booking`
--

CREATE TABLE `tb_booking` (
  `ID_BOOKING` int(11) NOT NULL,
  `TANGGAL_IN` date NOT NULL,
  `TANGGAL_OUT` date NOT NULL,
  `DESC` text NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `STATUS_PESAN` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_booking`
--

INSERT INTO `tb_booking` (`ID_BOOKING`, `TANGGAL_IN`, `TANGGAL_OUT`, `DESC`, `NIK`, `STATUS_PESAN`) VALUES
(13, '2019-08-22', '2019-08-23', 'LUNAS', '', 'on'),
(14, '2019-08-23', '2019-08-24', '', '', 'on'),
(15, '2019-08-23', '2019-08-24', '', '', 'on'),
(17, '2019-08-22', '2019-08-23', '', '', 'on'),
(18, '2019-08-23', '2019-08-24', '', '', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_checkin`
--

CREATE TABLE `tb_checkin` (
  `NIK` varchar(20) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `NOMOR_TELP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_checkin`
--

INSERT INTO `tb_checkin` (`NIK`, `NAMA`, `ALAMAT`, `NOMOR_TELP`) VALUES
('', 'ani', '', '036197652');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_order_layanan`
--

CREATE TABLE `tb_detail_order_layanan` (
  `ID_DETAIL_ORDER_LAYANAN` int(11) NOT NULL,
  `ID_LAYANAN` int(11) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `ID_ORDER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_order_layanan`
--

INSERT INTO `tb_detail_order_layanan` (`ID_DETAIL_ORDER_LAYANAN`, `ID_LAYANAN`, `JUMLAH`, `ID_ORDER`) VALUES
(3, 8, 1, 7),
(4, 8, 2, 8),
(5, 8, 3, 9),
(6, 2, 1, 10),
(7, 2, 3, 11),
(8, 2, 3, 12),
(9, 6, 1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `ID_BOOKING` int(11) NOT NULL,
  `NOMOR_KAMAR` int(5) NOT NULL,
  `HARGA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_finance_income`
--

CREATE TABLE `tb_finance_income` (
  `ID_INCOME` int(5) NOT NULL,
  `NOMOR_INVOICE` varbinary(20) DEFAULT NULL,
  `JENIS_INCOME` varchar(100) DEFAULT NULL,
  `JUMLAH` varbinary(20) DEFAULT NULL,
  `TANGGAL_PEMBAYARAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_housekeeping`
--

CREATE TABLE `tb_housekeeping` (
  `ID_HOUSEKEEPING` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `JENIS_KELAMIN` enum('LAKI-LAKI','PEREMPUAN','','') NOT NULL,
  `TELP` varchar(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  `ALAMAT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_housekeeping`
--

INSERT INTO `tb_housekeeping` (`ID_HOUSEKEEPING`, `NAMA`, `EMAIL`, `JENIS_KELAMIN`, `TELP`, `USERNAME`, `PASSWORD`, `ALAMAT`) VALUES
(2, 'dewi', 'rahmasiti413@gmail.com', 'PEREMPUAN', '09876', 'rio', '123', 'jjjjj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `NOMOR_KAMAR` int(5) NOT NULL,
  `STATUS_KAMAR` enum('book','free') DEFAULT NULL,
  `HARGA` int(11) NOT NULL,
  `DESC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`NOMOR_KAMAR`, `STATUS_KAMAR`, `HARGA`, `DESC`) VALUES
(102, 'book', 0, ''),
(103, '', 0, ''),
(301, '', 0, ''),
(302, '', 0, ''),
(303, '', 0, ''),
(501, '', 0, ''),
(502, '', 0, ''),
(503, '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar_tipe`
--

CREATE TABLE `tb_kamar_tipe` (
  `ID_KAMAR_TIPE` int(5) NOT NULL,
  `NAMA_KAMAR_TIPE` varchar(50) NOT NULL,
  `HARGA_MALAM` int(10) NOT NULL,
  `KETERANGAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kamar_tipe`
--

INSERT INTO `tb_kamar_tipe` (`ID_KAMAR_TIPE`, `NAMA_KAMAR_TIPE`, `HARGA_MALAM`, `KETERANGAN`) VALUES
(12, 'Standart', 10000, 'tes'),
(14, 'Medium', 150000, 'Tipe Kamar dengan ukuran Medium'),
(15, 'Large', 250000, 'Kamar dengan tipe ukuran besar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `ID_LAYANAN` int(3) NOT NULL,
  `ID_LAYANAN_KATEGORI` int(3) DEFAULT NULL,
  `NAMA_LAYANAN` varchar(100) DEFAULT NULL,
  `SATUAN` varchar(30) DEFAULT NULL,
  `HARGA_LAYANAN` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`ID_LAYANAN`, `ID_LAYANAN_KATEGORI`, `NAMA_LAYANAN`, `SATUAN`, `HARGA_LAYANAN`) VALUES
(2, 2, 'jus', '3', 8),
(6, 1, 'choki choki', '10', 1000),
(7, 1, 'choki choki', '10', 1000),
(8, 1, 'choki choki', '10', 1000),
(9, 2, '2', '222', 2222),
(10, 3, 'air', '5', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan_kategori`
--

CREATE TABLE `tb_layanan_kategori` (
  `ID_LAYANAN_KATEGORI` int(5) NOT NULL,
  `NAMA_LAYANAN_KATEGORI` varchar(100) DEFAULT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_layanan_kategori`
--

INSERT INTO `tb_layanan_kategori` (`ID_LAYANAN_KATEGORI`, `NAMA_LAYANAN_KATEGORI`, `KETERANGAN`) VALUES
(1, 'makanan', 'suka'),
(2, 'Laundry', 'baju'),
(3, 'Minuman', 'es'),
(4, 'Peralatan', 'perabot'),
(5, 'w', 'w'),
(6, 's', 's'),
(7, 'tes', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order_layanan`
--

CREATE TABLE `tb_order_layanan` (
  `ID_ORDER` int(11) NOT NULL,
  `ID_PELANGGAN` int(11) NOT NULL,
  `TOTAL_BAYAR` int(11) NOT NULL,
  `TGL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_order_layanan`
--

INSERT INTO `tb_order_layanan` (`ID_ORDER`, `ID_PELANGGAN`, `TOTAL_BAYAR`, `TGL`) VALUES
(7, 4, 1000, '2019-08-21'),
(8, 4, 2000, '2019-08-21'),
(9, 4, 3000, '2019-08-21'),
(10, 4, 8, '2019-08-21'),
(11, 7, 24, '2019-08-22'),
(12, 7, 1024, '2019-08-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `NIK` varchar(20) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `JENIS_KELAMIN` enum('LAKI-LAKI','PEREMPUAN','','') NOT NULL,
  `TELP` varchar(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  `ALAMAT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`NIK`, `NAMA`, `EMAIL`, `JENIS_KELAMIN`, `TELP`, `USERNAME`, `PASSWORD`, `ALAMAT`) VALUES
('3', 'septi', 'rahmasiti413@gmail.com', 'LAKI-LAKI', '0361874567', 'gentong', 'air', 'eeeeee'),
('6', 'abila', 'abila122@gmail.com', 'PEREMPUAN', '09876544', 'abil', '234', 'jogja'),
('7', 'ami', 'ami123@gmail.com', 'PEREMPUAN', '036188765', 'ami', '123', 'jimbaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `ID_USER_ROLE` int(3) NOT NULL,
  `ROLE_NAME` varchar(100) DEFAULT NULL,
  `KETERANGAN` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_role`
--

INSERT INTO `tb_user_role` (`ID_USER_ROLE`, `ROLE_NAME`, `KETERANGAN`, `USERNAME`, `PASSWORD`) VALUES
(4, 'dewi', 'lallala', 'dewi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`ID_BOOKING`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `NIK_2` (`NIK`);

--
-- Indexes for table `tb_checkin`
--
ALTER TABLE `tb_checkin`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tb_detail_order_layanan`
--
ALTER TABLE `tb_detail_order_layanan`
  ADD PRIMARY KEY (`ID_DETAIL_ORDER_LAYANAN`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD KEY `ID_KAMAR` (`NOMOR_KAMAR`),
  ADD KEY `ID_BOOKING` (`ID_BOOKING`);

--
-- Indexes for table `tb_finance_income`
--
ALTER TABLE `tb_finance_income`
  ADD PRIMARY KEY (`ID_INCOME`);

--
-- Indexes for table `tb_housekeeping`
--
ALTER TABLE `tb_housekeeping`
  ADD PRIMARY KEY (`ID_HOUSEKEEPING`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`NOMOR_KAMAR`),
  ADD KEY `NOMOR_KAMAR` (`NOMOR_KAMAR`);

--
-- Indexes for table `tb_kamar_tipe`
--
ALTER TABLE `tb_kamar_tipe`
  ADD PRIMARY KEY (`ID_KAMAR_TIPE`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`ID_LAYANAN`);

--
-- Indexes for table `tb_layanan_kategori`
--
ALTER TABLE `tb_layanan_kategori`
  ADD PRIMARY KEY (`ID_LAYANAN_KATEGORI`);

--
-- Indexes for table `tb_order_layanan`
--
ALTER TABLE `tb_order_layanan`
  ADD PRIMARY KEY (`ID_ORDER`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`ID_USER_ROLE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `ID_BOOKING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_detail_order_layanan`
--
ALTER TABLE `tb_detail_order_layanan`
  MODIFY `ID_DETAIL_ORDER_LAYANAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_housekeeping`
--
ALTER TABLE `tb_housekeeping`
  MODIFY `ID_HOUSEKEEPING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kamar_tipe`
--
ALTER TABLE `tb_kamar_tipe`
  MODIFY `ID_KAMAR_TIPE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `ID_LAYANAN` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_layanan_kategori`
--
ALTER TABLE `tb_layanan_kategori`
  MODIFY `ID_LAYANAN_KATEGORI` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_order_layanan`
--
ALTER TABLE `tb_order_layanan`
  MODIFY `ID_ORDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `ID_USER_ROLE` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`ID_BOOKING`) REFERENCES `tb_booking` (`ID_BOOKING`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`NOMOR_KAMAR`) REFERENCES `tb_kamar` (`NOMOR_KAMAR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
