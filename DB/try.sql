-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 07, 2018 at 12:07 AM
-- Server version: 10.2.14-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'adminn', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id_barang` (`id_barang`),
  KEY `id_perusahaan` (`id_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_perusahaan`, `nama_barang`, `jumlah_barang`) VALUES
(6, 42, 'Buku', 100);

-- --------------------------------------------------------

--
-- Table structure for table `bhs_pemrograman`
--

DROP TABLE IF EXISTS `bhs_pemrograman`;
CREATE TABLE IF NOT EXISTS `bhs_pemrograman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(5) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bhs_pemrograman`
--

INSERT INTO `bhs_pemrograman` (`id`, `nama`, `rating`, `status`) VALUES
(1, 'Berhasil', 79, '1'),
(2, 'Pengiriman', 30, '1'),
(3, 'Gagal', 45, '1');

-- --------------------------------------------------------

--
-- Table structure for table `diagram`
--

DROP TABLE IF EXISTS `diagram`;
CREATE TABLE IF NOT EXISTS `diagram` (
  `id_diagram` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_diagram`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagram`
--

INSERT INTO `diagram` (`id_diagram`, `status`, `total`) VALUES
(1, 'Berhasil', 0),
(2, 'Pengiriman', 0),
(3, 'Gagal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

DROP TABLE IF EXISTS `konsumen`;
CREATE TABLE IF NOT EXISTS `konsumen` (
  `id_konsumen` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohape` int(50) NOT NULL,
  `foto_profil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `username`, `nama_lengkap`, `email`, `password`, `nohape`, `foto_profil`) VALUES
(1, 'konsumen', '', 'konsumen@admin.com', '94727b16c2221c188d39993e39f39ac3', 0, NULL),
(6, 'xxx', 'xxx', 'xxedwx@f.cqwxwwsax', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 4324232, '');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_lokasi` varchar(10) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

DROP TABLE IF EXISTS `perusahaan`;
CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` int(10) NOT NULL AUTO_INCREMENT,
  `id_driver` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_perusahaan`),
  KEY `id_perusahaan` (`id_perusahaan`),
  KEY `id_driver` (`id_driver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_driver`
--

DROP TABLE IF EXISTS `profile_driver`;
CREATE TABLE IF NOT EXISTS `profile_driver` (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `foto_profile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_profile`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(50) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NOT NULL,
  `id_penjual` int(11) DEFAULT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `status_pengiriman` varchar(50) DEFAULT 'Menunggu',
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tujuan` varchar(100) NOT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `driver_status` enum('terima','belum','tolak','selesai') DEFAULT NULL,
  `lihat` enum('l','n') DEFAULT 'n',
  PRIMARY KEY (`id_transaksi`),
  KEY `nama_barang` (`id_barang`),
  KEY `transaksi_ibfk_2` (`id_driver`),
  KEY `id_pembeli` (`id_pembeli`),
  KEY `transaksi_ibfk_5` (`id_penjual`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pembeli`, `id_penjual`, `id_barang`, `jumlah_barang`, `status_pengiriman`, `tanggal`, `tanggal_update`, `tujuan`, `id_driver`, `lokasi`, `driver_status`, `lihat`) VALUES
(43, 41, 42, 6, 100, 'Selesai', '2018-07-06 20:00:00', '2018-07-06 23:42:44', 'Bogor', 37, 'Jakarta', 'selesai', 'l'),
(44, 41, 42, 6, 50, 'Selesai', '2018-07-06 23:47:06', '2018-07-06 23:57:08', 'Bandung', 37, 'Bandung', 'selesai', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohape` int(50) NOT NULL,
  `foto_profil` varchar(50) DEFAULT NULL,
  `level` enum('Admin','Perusahaan','Driver','Konsumen') NOT NULL DEFAULT 'Konsumen',
  `status` varchar(50) DEFAULT 'Ready',
  PRIMARY KEY (`id_user`),
  KEY `foto_profil` (`foto_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `nohape`, `foto_profil`, `level`, `status`) VALUES
(1, 'admin', '$2y$10$OsvSEqNI6oxDnFXBMyuF4OJhqXiU8wmqqSrUtHobumWWh2dmrPWzK', 'Administrator', 'admin@admin.com', 0, NULL, 'Admin', ''),
(2, 'perusahaan', '$2y$10$Wyowp06/6DAHcPmKbDeNc.m6f65F0moAz/E474zEJP2lB1bRI82EG', 'Perusahaan', 'perusahaan@admin.com', 0, NULL, 'Perusahaan', ''),
(3, 'driver', 'e2d45d57c7e2941b65c6ccd64af4223e', 'Driver', 'driver@admin.com', 0, NULL, 'Driver', ''),
(37, 'ricky', '$2y$10$wSF3LOXnTOGxJW1oJ/pMH.jS0SviW3i8rXe9WbGZF.VhHydzF3UN2', 'ricky sukma dewa', 'ricky@dadamu.com', 1212121212, NULL, 'Driver', 'Ready'),
(39, 'sabil', '1bd52cb319761cd63f885fd9142d66cb', 'sabil', 'sabilal0411@gmail.com', 1234567890, NULL, 'Driver', 'Ready'),
(41, 'devry12', '$2y$10$C5h5fL5MIfkhMMOJjDLJm.mc6ieJIBPuP1FpBhfjyGIzYxQticsqG', 'devry Kawiryan', 'devrykawiryan@gmail.com', 2147483647, NULL, 'Konsumen', NULL),
(42, 'raka', '$2y$10$KoW5Wa.eO3HOvhERPtdKhuEGfXcthNa9jKpNuGULn3erWOUavoNEC', 'raka rika', 'raka@gmail.com', 2147483647, NULL, 'Perusahaan', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `profile_driver`
--
ALTER TABLE `profile_driver`
  ADD CONSTRAINT `profile_driver_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_pembeli`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_penjual`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
