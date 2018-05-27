-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 11:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maha`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_`
--

CREATE TABLE `data_` (
  `nim` char(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_`
--

INSERT INTO `data_` (`nim`, `nama`, `alamat`, `tempat_lahir`, `tanggal`, `gender`, `prodi`) VALUES
('16090034', 'Zaenal Abidin', 'Kota lama banget', 'Ketapang', '1997-12-31', 'L', 'D4 Teknik Informatika'),
('16090082', 'Dwi Aji Apriyadi', 'Kota Baru 8 No. 30 rt 3 rw 20 Brebes, Jawa Tengah', 'Ketapang, Kalimantan Barat', '1997-04-19', 'L', 'D4 Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_`
--
ALTER TABLE `data_`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
