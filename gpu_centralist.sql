-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpu_centralist`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `idjenama` int(3) NOT NULL,
  `namaJenama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`idjenama`, `namaJenama`) VALUES
(1, 'NVIDIA'),
(2, 'Intel'),
(4, 'AMD');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idaccount` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Namapanggilan` varchar(100) DEFAULT NULL,
  `Aras` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idaccount`, `Password`, `Namapanggilan`, `Aras`) VALUES
('1', '2', 'Yoong', 'PENGGUNA'),
('admin', '12345678', 'ADMIN', ''),
('hello', '12345678', 'hello', 'PENGGUNA');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(5) NOT NULL,
  `namaProduk` varchar(150) NOT NULL,
  `idjenama` int(3) NOT NULL,
  `harga` int(10) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `pautanpembelian` varchar(255) DEFAULT NULL,
  `markahpenilaian` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaProduk`, `idjenama`, `harga`, `deskripsi`, `gambar`, `pautanpembelian`, `markahpenilaian`) VALUES
(5, 'asdsa', 4, 123, 'dadadaw', '5c4735e0a20c56ccd344f6a5873fc494jpg', 'www.21231232.com', 12),
(8, 'aaaa', 2, 30, 'saddasdad', '91f20b4ee7ce9b62c58851217f1322bcjpg', 'www.google.com', 55),
(9, 'qqq', 4, 4565, 'adasdasd', '22ca1f6feb71b8072be969a4dcbb4458jpg', 'www.youtube.com', 77);

-- --------------------------------------------------------

--
-- Table structure for table `rekod_pilihan`
--

CREATE TABLE `rekod_pilihan` (
  `idrekod` int(6) NOT NULL,
  `idaccount` varchar(255) NOT NULL,
  `idproduk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekod_pilihan`
--

INSERT INTO `rekod_pilihan` (`idrekod`, `idaccount`, `idproduk`) VALUES
(20, '1', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`idjenama`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idaccount`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `idjenama` (`idjenama`);

--
-- Indexes for table `rekod_pilihan`
--
ALTER TABLE `rekod_pilihan`
  ADD PRIMARY KEY (`idrekod`),
  ADD KEY `idaccount` (`idaccount`,`idproduk`),
  ADD KEY `idproduk` (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenama`
--
ALTER TABLE `jenama`
  MODIFY `idjenama` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekod_pilihan`
--
ALTER TABLE `rekod_pilihan`
  MODIFY `idrekod` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `idjenama` FOREIGN KEY (`idjenama`) REFERENCES `jenama` (`idjenama`);

--
-- Constraints for table `rekod_pilihan`
--
ALTER TABLE `rekod_pilihan`
  ADD CONSTRAINT `idaccount` FOREIGN KEY (`idaccount`) REFERENCES `pengguna` (`idaccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idproduk` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
