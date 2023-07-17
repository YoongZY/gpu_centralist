-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 02:30 PM
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
(2, 'Intel'),
(4, 'AMD'),
(5, 'NVIDIA');

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
(9, 'qqq', 4, 4565, 'adasdasd', '22ca1f6feb71b8072be969a4dcbb4458jpg', 'www.youtube.com', 77),
(10, 'qwerty', 5, 1232, 'wqdasdas', '4193a49f26bd6e60c934a92709eff0f8jpg', 'www.youtube.com', 90),
(11, 'hello', 4, 123, 'qdwadsadsa', 'b1fc5e0efbc47c61097eb0863837fd67jpg', 'www.pornhub.com', 8);

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
(20, '1', 5),
(29, '1', 8),
(32, '1', 8),
(34, '1', 8),
(35, '1', 8),
(40, '1', 8),
(23, '1', 9),
(24, '1', 9),
(25, '1', 9),
(26, '1', 9),
(27, '1', 9),
(28, '1', 9),
(30, '1', 9),
(31, '1', 9),
(36, '1', 10),
(41, '1', 10),
(42, '1', 10),
(33, '1', 11);

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
  MODIFY `idjenama` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rekod_pilihan`
--
ALTER TABLE `rekod_pilihan`
  MODIFY `idrekod` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
