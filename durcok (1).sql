-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 09:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `durcok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` enum('superadmin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'superadmin'),
('mahendra', 'db6f6da1ce3437f3d38eb05a63402d41', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(11) NOT NULL,
  `alamatWebsite` varchar(255) DEFAULT NULL,
  `nomorTelepon` varchar(15) DEFAULT NULL,
  `alamatLengkap` text DEFAULT NULL,
  `alamatLive` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `alamatWebsite`, `nomorTelepon`, `alamatLengkap`, `alamatLive`) VALUES
(1, '123', '086675543321', 'kwjqldjlkdjalksdnalsd', 'https://maps.app.goo.gl/QfQr8TJ6DtjHxh1fA');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `namaPemesan` varchar(255) NOT NULL,
  `alamatPemesan` varchar(255) NOT NULL,
  `deskripsiPesanan` longtext NOT NULL,
  `noWhatsapp` varchar(15) NOT NULL,
  `tanggalPesanan` timestamp NOT NULL DEFAULT current_timestamp(),
  `statusPesanan` varchar(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `namaPemesan`, `alamatPemesan`, `deskripsiPesanan`, `noWhatsapp`, `tanggalPesanan`, `statusPesanan`, `username`) VALUES
(1, '', '', '12313', '0877655433321', '2023-09-16 02:05:47', '1', 'admin'),
(2, '', '', '11', '0866544321', '2023-09-16 02:06:36', '1', 'admin'),
(3, '', '', '1', '1', '2023-09-16 02:06:54', NULL, 'mahendra'),
(4, '', '', '123', '123', '2023-09-22 07:56:19', NULL, 'admin'),
(5, 'Imam', '123', '123', '098876654432', '2023-09-25 00:45:06', NULL, 'mahendra'),
(6, 'novi', 'sby', '1111111111111111111111', '081231803171', '2023-09-26 01:50:14', '1', 'admin'),
(7, '5', '5', '5', '5', '2023-10-03 06:47:29', '1', 'admin'),
(8, 'Zaimtod', '11w1', 'wqe12ee', '081231803171', '2023-10-03 07:01:47', NULL, NULL),
(9, 'zaim', 'zaim', 'zaim', '+6281231803171', '2023-10-03 07:03:13', NULL, NULL),
(10, 'Zaim', 'Kontol', 'Kontolll', '6281231803171', '2023-10-03 07:04:10', NULL, NULL),
(11, 'Mahendra', 'qs', 'Kontol Ngakak', '628983627088', '2023-10-03 07:05:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `namaProduct` varchar(255) NOT NULL,
  `hargaProduct` int(11) NOT NULL,
  `diskonProduct` int(11) DEFAULT NULL,
  `deskripsiProduct` longtext NOT NULL,
  `gambarProduct` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `namaProduct`, `hargaProduct`, `diskonProduct`, `deskripsiProduct`, `gambarProduct`, `username`) VALUES
(14, '1', 10000, 30, '<p>10000</p>', 'product1694683353.jpg', 'admin'),
(15, '2', 2, NULL, '2', NULL, 'admin'),
(16, '3', 3, NULL, '3', NULL, 'mahendra'),
(17, '4', 4, 0, '4', 'product1695369945.jpg', 'mahendra'),
(18, '5', 5, 0, '545', 'product1695370181.jpeg', 'admin'),
(20, 'Test', 50000, 32, '<p>INI PRODUK</p>', 'product1695370240.jpg', 'admin'),
(21, '9', 9000, 99, '<p>9999</p>', 'default.jpg', NULL),
(22, '11', 11, 11, '<p>11</p>', 'default.jpg', NULL),
(23, '1000', 1000, 100, '<p>1000</p>', 'default.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

