-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 08:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beu`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int(4) NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `Stok` int(5) NOT NULL,
  `Foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `harga`, `Stok`, `Foto`) VALUES
(1111, 'Tangtop', 0, 30, ''),
(1112, 'Kolor', 0, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `ID_Nama` int(5) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `No_Tlpon` bigint(12) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`ID_Nama`, `Nama`, `Alamat`, `No_Tlpon`, `Password`) VALUES
(1, 'Kurmo', 'Cihanjuang', 12345678, '1234'),
(2, 'Olih', 'Katapang', 12345555, '4321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`ID_Nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
