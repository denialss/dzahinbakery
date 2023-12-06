-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 09:02 PM
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
(1, 'Kue Kering'),
(2, 'Kue Basah');

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
(1, 2, 'donat2.jpg', 'Donat', '5.000', 'Kudapan manis dengan perpaduan sempurna antara tekstur lembut dan empuk, serta aroma yang menggugah selera.', 10),
(2, 2, 'cream-bun1.jpg', 'Roti Cream', '8.000', 'Kue lembut dengan topping krim manis serta memiliki tekstur yang lembut dan creamy. Cocok untuk dinikmati sebagai camilan atau hidangan penutup.', 15),
(3, 2, 'roti_sosis.jpg', 'Roti Sosis', '10.000', 'Roti bun dengan topping sosis dan saus, memberikan citarasa gurih.', 10),
(4, 2, 'roti_keju.jpg', 'Roti Keju', '8.000', 'Roti bun dengan isian dan topping keju.', 10),
(5, 2, 'roti_blueberry1.jpg', 'Roti Blueberry', '8.000', 'Roti bun dengan isian blueberry.', 15),
(6, 2, 'Roti_coklat_keju1.jpg', 'Roti Coklat Keju', '8.000', 'Roti bun dengan isian coklat dan keju.', 10),
(7, 2, 'roti_kopi.jpg', 'Roti Kopi', '8.000', 'Roti bun dengan citarasa kopi, cocok menjadi hidangan pelengkap ketika ngopi.', 15),
(8, 2, 'roti_meses.jpg', 'Roti Coklat', '8.000', 'Roti bun dengan isian coklat.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `name`, `email`, `phone`, `address`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user@gmail.com', '087612341234', 'Jalan Nusa Indah II');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
