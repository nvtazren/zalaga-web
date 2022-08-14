-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 11:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zalaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `gambar_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_gambar` varchar(20) NOT NULL,
  `harga` float(8,2) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `subharga` float NOT NULL,
  `id_kategori_undangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `gambar_barang`, `nama_barang`, `kode_gambar`, `harga`, `id_discount`, `subharga`, `id_kategori_undangan`) VALUES
(1, 'R11.jpeg', 'Rizki seri 11', 'R11', 1800.00, 0, 0, 1),
(2, 'R12.jpeg', 'Rizki seri 12', 'R12', 1800.00, 1, 900, 1),
(3, 'R13.JPEG', 'Rizki seri 13', 'R13', 1800.00, 1, 900, 1),
(4, 'R14.JPEG', 'Rizki seri 14', 'R14', 2000.00, 1, 1000, 1),
(5, '15.JPEG', 'Rizki seri 15', 'R15', 2000.00, 2, 1800, 1),
(6, '16.JPEG', 'Rizki seri 16', 'R16', 1600.00, 0, 1600, 1),
(8, '18.JPEG', 'Rizki seri 18', 'R18', 1600.00, 0, 1600, 1),
(9, '19.JPG', 'Rizki seri 19', 'R19', 2000.00, 0, 2000, 1),
(10, '20.JPG', 'Rizki seri 20', 'R20', 2000.00, 0, 2000, 1),
(11, '342.JPG', 'Rayya seri 342', 'R342', 2000.00, 1, 1000, 2),
(12, '343.JPG', 'Rayya seri 343', 'R343', 2000.00, 0, 2000, 2),
(13, '344.JPG', 'Rayya seri 344', 'R344', 2000.00, 0, 2000, 2),
(14, '345.JPG', 'Rayya seri 345', 'R345', 2200.00, 1, 1100, 2),
(15, '346.JPG', 'Rayya seri 346', 'R346', 2200.00, 0, 2200, 2),
(16, '347.JPG', 'Rayya seri 347', 'R347', 2200.00, 1, 1100, 2),
(17, '192.JPG', 'Salma Seri 192', 'S192', 2000.00, 0, 2000, 3),
(18, '193.JPG', 'Salma seri 193', 'S193', 2000.00, 0, 2000, 3),
(19, '194.JPG', 'Salma seri 194', 'S194', 2200.00, 1, 1100, 3),
(20, '195.JPG', 'Salma seri 195', 'S195', 2200.00, 0, 2000, 3),
(21, '196.JPG', 'Salma seri 196', 'S196', 2200.00, 1, 1100, 3),
(22, '62.JPEG', 'Cantik seri 62', 'C62', 1800.00, 0, 1800, 4),
(23, '63.JPEG', 'Cantik Seri 63', 'C63', 2000.00, 1, 1000, 4),
(24, '64.JPEG', 'Cantik seri 64', 'C64', 2000.00, 0, 2000, 4),
(25, '65.JPEG', 'Cantik seri 65', 'C65', 2000.00, 0, 2000, 4),
(26, '66.JPEG', 'Cantik seri 66', 'C66', 2000.00, 1, 1000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga` float(8,2) NOT NULL,
  `sub_harga` float(8,2) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id_discount`, `discount`) VALUES
(1, 0.5),
(2, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_undangan`
--

CREATE TABLE `kategori_undangan` (
  `id_kategori_undangan` int(11) NOT NULL,
  `nama_kategori_undangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_undangan`
--

INSERT INTO `kategori_undangan` (`id_kategori_undangan`, `nama_kategori_undangan`) VALUES
(1, 'Rizki'),
(2, 'Rayya'),
(3, 'Salma'),
(4, 'Cantik');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `no_telp`, `email`, `username`, `alamat`, `password`) VALUES
(1, 'Firmansyah P', '082219334300', 'firman.jka@gmail.com', 'firmansyahp', 'SBY', 'firmanjka5'),
(5, 'Gita Agraini', '081235475521', 'gitaagraini@gmail.co', 'gitaagraini', 'SBY', 'gita23');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `biaya_ongkir` float(8,2) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  `biro_pengiriman` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `biaya_ongkir`, `nama_kota`, `biro_pengiriman`) VALUES
(1, 10000.00, 'Surabaya', 'JNT'),
(2, 10000.00, 'Sidoarjo', 'JNT'),
(3, 12000.00, 'Gresik', 'JNT'),
(4, 15000.00, 'Mojokerto', 'JNT'),
(5, 20000.00, 'Malang', 'JNT'),
(6, 12000.00, 'Lamongan', 'JNT');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `norek_pengirim` varchar(20) NOT NULL,
  `bank_pengirim` char(20) NOT NULL,
  `bank_tujuan` char(20) NOT NULL,
  `nominal` float(8,2) NOT NULL,
  `tgl_pembayaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat_penerima` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `total_harga` float(8,2) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `no_resi` varchar(20) NOT NULL,
  `via` char(20) NOT NULL,
  `tgl_pengiriman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Indexes for table `kategori_undangan`
--
ALTER TABLE `kategori_undangan`
  ADD PRIMARY KEY (`id_kategori_undangan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_undangan`
--
ALTER TABLE `kategori_undangan`
  MODIFY `id_kategori_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
