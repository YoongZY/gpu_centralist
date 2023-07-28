-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 06:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`idjenama`, `namaJenama`) VALUES
(4, 'AMD'),
(5, 'NVIDIA'),
(6, 'Intel');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idaccount` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Namapanggilan` varchar(100) DEFAULT NULL,
  `Aras` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idaccount`, `Password`, `Namapanggilan`, `Aras`) VALUES
('1', '87654321', 'Yoong', 'PENGGUNA'),
('admin', 'admin2023', 'Admin', ''),
('hello', '00000000', 'Hello', 'PENGGUNA'),
('test', 'qwertyui', 'Test', 'PENGGUNA');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(5) NOT NULL,
  `namaProduk` varchar(150) NOT NULL,
  `idjenama` int(3) NOT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `pautanpembelian` varchar(255) DEFAULT NULL,
  `markahpenilaian` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaProduk`, `idjenama`, `harga`, `deskripsi`, `gambar`, `pautanpembelian`, `markahpenilaian`) VALUES
(15, 'GeForce RTX 4090', 5, '7400', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 2230 MHz <br> Memory Size: 24 GB <br> Memory Type: GDDR6X <br> DirectX: 12 <br> OpenGL: 4.6 <br> Release Date: 12/10/2022', '20230720_171048.jpg', 'https://www.nvidia.com/en-my/geforce/graphics-cards/40-series/rtx-4090/                                                                        ', 39087),
(16, 'GeForce RTX 4080', 5, '6300', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 2205 MHz <br> Memory Size: 16 GB <br> Memory Type: GDDR6X <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 20/09/2022', '20230720_171158.jpg', 'https://www.nvidia.com/en-my/geforce/graphics-cards/40-series/rtx-4080/                        ', 35017),
(17, 'Radeon PRO W7800', 4, '-', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 1855 MHz <br> Memory Size: 32 GB <br> Memory Type: GDDR6 <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 13/04/2023', '20230720_171935.jpg', 'NA                        ', 32146),
(18, 'GeForce RTX 4070 Ti', 5, '3959', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 2310 MHz <br> Memory Size: 12 GB <br> Memory Type: GDDR6X <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 03/01/2023', '20230720_173011.jpg', 'https://www.nvidia.com/en-my/geforce/graphics-cards/40-series/rtx-4070-4070ti/            ', 31668),
(19, 'Radeon RX 7900 XTX', 4, '1000', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 1855 MHz <br> Memory Size: 24 GB <br> Memory Type: GDDR6 <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 03/11/2022', '20230722_041002.jpg', 'https://www.amd.com/en/products/graphics/amd-radeon-rx-7900xtx            ', 31522),
(20, 'Radeon PRO W7900', 4, '18239', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 1855 MHz <br> Memory Size: 48 GB <br> Memory Type: GDDR6 <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 13/04/2023', '20230722_041833.jpg', 'https://www.amd.com/en/products/professional-graphics/amd-radeon-pro-w7900            ', 31126),
(21, 'GeForce RTX 3090 Ti', 5, '9700', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 1560 MHz <br> Memory Size: 24 GB <br> Memory Type: GDDR6X <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 27/01/2022', '20230722_042426.jpg', 'https://www.nvidia.com/en-my/geforce/graphics-cards/30-series/rtx-3090-3090ti/            ', 29824),
(22, 'Radeon RX 7900 XT', 4, '4599', 'Bus Interface: PCIe 4.0 x16 <br> Core Clock(s): 1500 MHz <br> Memory Size: 20 GB <br> Memory Type: GDDR6 <br> DirectX: 12_2 <br> OpenGL: 4.6 <br> Release Date: 03/11/2022', '20230726_063031.jpg', 'https://www.aorus.com/en-my/graphics-cards/radeon-rx-7900-xtx                        ', 29149);

-- --------------------------------------------------------

--
-- Table structure for table `rekod_pilihan`
--

CREATE TABLE `rekod_pilihan` (
  `idrekod` int(6) NOT NULL,
  `idaccount` varchar(255) DEFAULT NULL,
  `idproduk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekod_pilihan`
--

INSERT INTO `rekod_pilihan` (`idrekod`, `idaccount`, `idproduk`) VALUES
(58, NULL, 15),
(60, NULL, 15),
(59, NULL, 16),
(50, '1', 15),
(51, '1', 15),
(63, '1', 15),
(65, '1', 15),
(66, '1', 15),
(69, '1', 15),
(71, '1', 15),
(52, '1', 16),
(54, '1', 16),
(64, '1', 16),
(70, '1', 16),
(53, '1', 17),
(61, '1', 21),
(62, '1', 21),
(67, '1', 21),
(68, '1', 21),
(72, 'test', 17);

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
  MODIFY `idjenama` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rekod_pilihan`
--
ALTER TABLE `rekod_pilihan`
  MODIFY `idrekod` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  ADD CONSTRAINT `idaccount` FOREIGN KEY (`idaccount`) REFERENCES `pengguna` (`idaccount`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `idproduk` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
