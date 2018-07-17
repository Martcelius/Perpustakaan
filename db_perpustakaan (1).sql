-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 04:30 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`ID_buku` int(255) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `Pengarang` varchar(255) NOT NULL,
  `Stok` int(255) NOT NULL,
  `Tanggal_masuk` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_buku`, `Judul`, `Penerbit`, `Tahun`, `Pengarang`, `Stok`, `Tanggal_masuk`) VALUES
(34, 'qq', 'aa', '2000', 'ep', 5, '0000-00-00'),
(35, 'tr', 'qw', '2011', 'ui', 4, '2016-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID_petugas` int(255) NOT NULL,
  `Username` varchar(999) NOT NULL,
  `Password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `Nim` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_telpon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `Alamat`, `No_telpon`) VALUES
(130, 'ius', 'bandung', 0);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
`ID_peminjaman` int(255) NOT NULL,
  `ID_petugas` int(255) NOT NULL,
  `Nim` int(255) NOT NULL,
  `Jumlah` int(255) NOT NULL,
  `ID_buku` varchar(255) NOT NULL,
  `Tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_peminjaman`, `ID_petugas`, `Nim`, `Jumlah`, `ID_buku`, `Tanggal_pinjam`) VALUES
(21, 1, 130, 5, '33', '2016-11-02'),
(22, 1, 130, 4, '33', '2016-11-02'),
(23, 1, 130, 1, '34', '2015-11-16'),
(24, 1, 130, 3, '34', '0000-00-00'),
(25, 1, 130, 3, '34', '2016-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE IF NOT EXISTS `pengembalian` (
`ID_pengembalian` int(255) NOT NULL,
  `ID_peminjaman` int(255) NOT NULL,
  `Tanggal_pengembalian` date NOT NULL,
  `Denda` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`ID_pengembalian`, `ID_peminjaman`, `Tanggal_pengembalian`, `Denda`) VALUES
(4, 22, '2016-11-12', 'Rp.3000'),
(5, 21, '2016-11-12', 'Rp.3000');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `ID_petugas` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_telpon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`ID_petugas`, `Nama`, `Alamat`, `No_telpon`) VALUES
(1, 'martcel', 'jakarta', 1230000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`ID_buku`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`ID_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
 ADD PRIMARY KEY (`ID_pengembalian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`ID_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `ID_buku` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `ID_peminjaman` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
MODIFY `ID_pengembalian` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
