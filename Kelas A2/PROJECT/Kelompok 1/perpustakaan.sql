-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 06:18 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_buku` varchar(8) NOT NULL,
`ID_Anggota` int(100) NOT NULL,
  `Nama_Anggota` varchar(100) NOT NULL,
  `Alamat_Anggota` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `kode_pinjam` varchar(100) NOT NULL,
  `lama_pinjam` varchar(100) NOT NULL,
  `tanggal_peminjaman` varchar(100) NOT NULL,
  `tanggal_pengembalian` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_buku`, `ID_Anggota`, `Nama_Anggota`, `Alamat_Anggota`, `no_telepon`, `kode_pinjam`, `lama_pinjam`, `tanggal_peminjaman`, `tanggal_pengembalian`) VALUES
('1', 1, 'Proton', 'Jl.Vorvo 5', '08', '01234', '7', '12-12-2015', '23-12-2015'),
('', 3, 'Neutron', 'Jl.Belibis 7', '', '', '0', '', ''),
('', 5, 'eva', 'jl perjuangan', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_buku`
--

CREATE TABLE IF NOT EXISTS `koleksi_buku` (
`id_buku` int(8) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `thn_terbit` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `koleksi_buku`
--

INSERT INTO `koleksi_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `thn_terbit`) VALUES
(1, 'Seri A Song Of Ice And Fire #2: A Clash of Kings - Peperangan Raja-raja  ', 'George RR Martin ', 'Fantasious ', 'November - 2015 '),
(2, 'Seri A Song Of Ice And Fire #1: A Game Of Thrones - Perebutan Takhta  ', 'George RR Martin ', 'Fantasious ', 'Maret - 2015 '),
(3, 'Ayat-Ayat Cinta 2 ', 'Habiburrahman El Shirazy ', 'Republika ', 'November - 2015 '),
(4, 'Bulan Terbelah Di Langit Amerika (RS)  ', 'Hanum Salsabiela Rais, Rangga Almahendra ', 'Gramedia Pustaka Utama ', 'Juni - 2014 '),
(5, 'Tiger On My Bed ', 'Christian Simamora ', 'Twigora ', 'Desember - 2015 '),
(10, 'World of Warships', 'Wargaming.net', 'GBK', '2015'),
(11, 'Maze Runner: The Scorch Trials', 'James Dashner', 'Gramedia', '2012'),
(12, 'slamet mencari cinta 2', 'lana', 'gramed', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Level` varchar(30) NOT NULL DEFAULT 'petugas'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `Level`) VALUES
(4, 'Myoko1', 'gbk222', 'gbk201211', 'petugas'),
(5, 'Yamato', 'gbk555', 'gbk201214', 'admin'),
(9, 'Tirpitz', 'gbk333', 'gbk201212', 'petugas'),
(11, 'Mogami', 'gbk444', 'gbk201213', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`ID_Anggota`), ADD KEY `nama` (`ID_Anggota`), ADD KEY `id_buku` (`id_buku`), ADD KEY `id_buku_2` (`id_buku`), ADD KEY `id_buku_3` (`id_buku`), ADD KEY `id_buku_4` (`id_buku`), ADD KEY `id_buku_5` (`id_buku`), ADD KEY `id_buku_6` (`id_buku`), ADD KEY `id_buku_7` (`id_buku`);

--
-- Indexes for table `koleksi_buku`
--
ALTER TABLE `koleksi_buku`
 ADD PRIMARY KEY (`id_buku`), ADD UNIQUE KEY `judul_4` (`judul`), ADD KEY `judul` (`judul`), ADD KEY `judul_2` (`judul`), ADD KEY `judul_3` (`judul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `ID_Anggota` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `koleksi_buku`
--
ALTER TABLE `koleksi_buku`
MODIFY `id_buku` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
