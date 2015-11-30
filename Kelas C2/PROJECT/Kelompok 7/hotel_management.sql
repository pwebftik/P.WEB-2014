-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 09:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` char(2) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `harga_perhari` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `no_kamar` int(3) NOT NULL,
  `id_barang` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `total_bayar` int(20) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `no_kamar` int(3) NOT NULL,
  `lantai` int(1) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nomor_pegawai` char(5) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gaji` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
`no_pesan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `no_kamar` int(3) NOT NULL,
  `lama_hari` int(5) DEFAULT '1',
  `cek_in` int(5) DEFAULT '1',
  `total_bayar` int(20) NOT NULL,
  `tgl_pesan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tambah_barang`
--

CREATE TABLE IF NOT EXISTS `tambah_barang` (
  `no_pesan` int(11) NOT NULL,
  `id_barang` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` char(10) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_biasa`
--

CREATE TABLE IF NOT EXISTS `user_biasa` (
  `id_user` char(10) DEFAULT NULL,
`id` int(11) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_pegawai`
--

CREATE TABLE IF NOT EXISTS `user_pegawai` (
  `id_user` char(10) NOT NULL,
  `nomor_pegawai` char(5) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_pemilik`
--

CREATE TABLE IF NOT EXISTS `user_pemilik` (
  `id_user` char(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
 ADD KEY `no_kamar` (`no_kamar`), ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id` (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`nomor_pegawai`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`no_pesan`), ADD KEY `id` (`id`), ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
 ADD KEY `no_pesan` (`no_pesan`), ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_biasa`
--
ALTER TABLE `user_biasa`
 ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
 ADD KEY `id_user` (`id_user`), ADD KEY `nomor_pegawai` (`nomor_pegawai`);

--
-- Indexes for table `user_pemilik`
--
ALTER TABLE `user_pemilik`
 ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `no_pesan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_biasa`
--
ALTER TABLE `user_biasa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_barang`
--
ALTER TABLE `data_barang`
ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`),
ADD CONSTRAINT `data_barang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
ADD CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_biasa` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_biasa` (`id`),
ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
ADD CONSTRAINT `tambah_barang_ibfk_1` FOREIGN KEY (`no_pesan`) REFERENCES `pesanan` (`no_pesan`),
ADD CONSTRAINT `tambah_barang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `user_biasa`
--
ALTER TABLE `user_biasa`
ADD CONSTRAINT `user_biasa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
ADD CONSTRAINT `user_pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
ADD CONSTRAINT `user_pegawai_ibfk_2` FOREIGN KEY (`nomor_pegawai`) REFERENCES `pegawai` (`nomor_pegawai`);

--
-- Constraints for table `user_pemilik`
--
ALTER TABLE `user_pemilik`
ADD CONSTRAINT `user_pemilik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
