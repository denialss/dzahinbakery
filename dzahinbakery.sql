-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 03:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzahinbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$YWxb0aViCiDVqwutLUTrzuHrgibpx6D1GxJu9YBTMIcNibvlygUvu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'Roti Bun'),
(2, 'Donat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `namaProduk` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `harga` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deskripsi_produk` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idKategori`, `foto`, `namaProduk`, `harga`, `deskripsi_produk`, `stok`) VALUES
(1, 1, 'cream-bun.jpg', 'Cream Bun', '10.000', 'Kue lembut dengan topping krim manis serta memiliki tekstur yang lembut dan creamy. Cocok untuk dinikmati sebagai camilan atau hidangan penutup.', 15),
(2, 2, 'donat.jpg', 'Donat Gula Halus', '8.000', 'Kudapan manis dengan perpaduan sempurna antara tekstur lembut dan empuk, serta aroma yang menggugah selera.', 15),
(3, 1, 'roti_blueberry.jpg', 'Roti Blueberry', '15.000', 'Roti bun dengan isian blueberry.', 10),
(4, 1, 'Roti_coklat_keju.jpg', 'Roti Coklat Keju', '15.000', 'Roti bun dengan isian coklat dan keju.', 10),
(5, 1, 'roti_keju.jpg', 'Roti Keju', '10.000', 'Roti bun dengan isian dan topping keju.', 10),
(6, 1, 'roti_kopi.jpg', 'Roti Kopi', '8.000', 'Roti bun dengan citarasa kopi, cocok menjadi hidangan pelengkap ketika ngopi.', 10),
(7, 1, 'roti_meses.jpg', 'Roti Meses', '10.000', 'Roti bun dengan isian meses lumer dan topping.', 15),
(8, 1, 'roti_sosis.jpg', 'Roti Sosis', '15.000', 'Roti bun dengan topping sosis dan saus, memberikan citarasa gurih.', 20),
(9, 1, 'kue1.jpeg', 'asd', '12312', 'asds', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `name`, `email`, `phone`, `address`) VALUES
(9, 'aaa', 'aaa', '', 'hafid.hanifan123@gmail.com', 123, 'KULON PROGO'),
(10, 'admin', 'admin', '', 'admin@gmail.ocm', 12345, 'KULON PROGO'),
(11, 'dinda', '$2y$10$cYI0EFbWbNdvm3Nt4OSDcOhjJW3pSf6fTPJDo0PVeOpQOoKS3NNQ2', '', 'dinda@gmail.com', 123, 'Jogja'),
(12, 'nando', '$2y$10$Ah2pO8/LhZnP6.lLXBY1ZORXAPtQIPgLhTOftkyDazOpag1TDFRO2', '', 'nando@gmail.com', 123, 'KULON PROGO'),
(13, 'a', '$2y$10$Nifr7NDDq/GxJyk1TtZFjePpgpKN70oSLo7HYY6YiaJwewCtK/XQS', '', 'anan@gmail.com', 123, 'KULON PROGO'),
(14, 'a', '$2y$10$bWJjJN/h6Pie9LAWH/vvGeAcq2L3m5bxxbSiJuNTjU8Y3xryPPqBa', '', 'hafid.hanifan123@gmail.com', 0, 'a'),
(15, 'a', 'a', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
