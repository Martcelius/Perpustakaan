-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 05:06 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perpustakaan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`ID_buku` int(255) NOT NULL,
  `Judul` varchar(999) NOT NULL,
  `Penerbit` varchar(999) NOT NULL,
  `Tahun` varchar(999) NOT NULL,
  `Pengarang` varchar(999) NOT NULL,
  `Stok` int(255) NOT NULL,
  `Tanggal_masuk` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_buku`, `Judul`, `Penerbit`, `Tahun`, `Pengarang`, `Stok`, `Tanggal_masuk`) VALUES
(3, 'cs', 'uu', '2011', 'oo', 10, '2016-11-03'),
(4, 'CI', 'ol', '2011', 'qq', 6, '2016-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE IF NOT EXISTS `denda` (
  `Judul` varchar(999) NOT NULL,
  `Nim` int(255) NOT NULL,
  `Tanggal_pinjam` date NOT NULL,
  `Tanggal_kembali` date NOT NULL,
  `Denda` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`Judul`, `Nim`, `Tanggal_pinjam`, `Tanggal_kembali`, `Denda`) VALUES
('impal ', 130, '2016-11-17', '2016-11-17', 'Rp.0'),
('iml ', 130, '2016-11-17', '2016-11-17', 'Rp.0'),
('jarkom ', 130, '2016-11-17', '2016-11-17', 'Rp.0');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `Nim` int(255) NOT NULL,
  `Nama` varchar(999) NOT NULL,
  `Alamat` varchar(999) NOT NULL,
  `No_telpon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nim`, `Nama`, `Alamat`, `No_telpon`) VALUES
(130, 'martcel', 'bandung', 12);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
`ID_petugas` int(255) NOT NULL,
  `NamaP` varchar(999) NOT NULL,
  `Alamat` varchar(999) NOT NULL,
  `No_telponP` int(255) NOT NULL,
  `Username` varchar(999) NOT NULL,
  `Password` varchar(999) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`ID_petugas`, `NamaP`, `Alamat`, `No_telponP`, `Username`, `Password`) VALUES
(1, 'Budi', 'pbb', 21, 'budi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`ID_transaksi` int(255) NOT NULL,
  `ID_petugas` int(255) NOT NULL,
  `Nim` int(255) NOT NULL,
  `Jumlah` int(255) NOT NULL,
  `ID_buku` int(255) NOT NULL,
  `Judul` varchar(999) NOT NULL,
  `Tanggal_pinjam` date NOT NULL,
  `Tanggal_kembali` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_transaksi`, `ID_petugas`, `Nim`, `Jumlah`, `ID_buku`, `Judul`, `Tanggal_pinjam`, `Tanggal_kembali`, `Status`) VALUES
(2, 1, 130, 1, 2, 'jarkom', '2016-11-18', '0000-00-00', 'Dipinjam'),
(4, 1, 130, 3, 4, 'ci', '2016-11-18', '0000-00-00', 'Dipinjam');

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
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`ID_petugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`ID_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `ID_buku` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
MODIFY `ID_petugas` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `ID_transaksi` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
