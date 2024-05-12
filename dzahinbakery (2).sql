-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 10:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `idDetail` int(11) NOT NULL,
  `noPesanan` int(25) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'Kue Basah'),
(3, 'Za'),
(4, 'asd');

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
  `stok` int(3) NOT NULL,
  `berat` int(11) NOT NULL,
  `deskripsi_produk` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idKategori`, `foto`, `namaProduk`, `harga`, `stok`, `berat`, `deskripsi_produk`) VALUES
(1, 1, 'roti_meses8.jpg', 'Donat', '5.000', 0, 0, 'Kudapan manis dengan perpaduan sempurna antara tekstur lembut dan empuk, serta aroma yang menggugah selera.'),
(16, 1, 'roti_blueberry3.jpg', 'Cream Bun', '5000', 11, 100, 'awds'),
(18, 2, 'Roti_coklat_keju4.jpg', 'Roti Coklat', '123', 30, 123, 'asdas'),
(19, 4, 'Roti_coklat_keju6.jpg', 'Cream Bun', '4000', 11, 12322, 'asd'),
(20, 1, 'cream-bun5.jpg', 'Donat Gula Halusa', '10000', 152, 123333, '436dsf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `idToko` int(1) NOT NULL,
  `namaToko` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`idToko`, `namaToko`, `telepon`, `alamat`, `lokasi`) VALUES
(1, 'Dzahin Bakery', '0899776655221', 'Jalan Merbau', 210);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `noPesanan` varchar(255) NOT NULL,
  `tglPesanan` date DEFAULT NULL,
  `namaPenerima` varchar(30) NOT NULL,
  `noPenerima` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kota` int(25) NOT NULL,
  `ekspedisi` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `estimasi` varchar(255) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `buktiPembayaran` varchar(255) NOT NULL,
  `statusPembayaran` int(1) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `atasNama` varchar(30) NOT NULL,
  `noResi` varchar(25) NOT NULL,
  `statusPesanan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `name`, `email`, `phone`, `address`) VALUES
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user@gmail.com', '087765431234', 'Jalan Nusa Indah II'),
(3, 'arbi', '9e4b7b4b8aee0e53dc7fe3bd7ceffdb7', 'arbi', 'arbi', '0970780', 'arbi'),
(4, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juan', 'juan', '091203190', 'Jalan'),
(5, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', 'uu', '019230123', 'uu'),
(6, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', 'uu', '019230123', 'uu'),
(7, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', 'uu', '019230123', 'uu'),
(8, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', 'uu', '019230123', 'uu'),
(9, 'uu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', 'uu', '019230123', 'uu'),
(10, 'ie', '25400724d7370b0b29c9369d9af3dd21', 'ie', 'ie', '021312093712', 'ie'),
(11, 'ie', '25400724d7370b0b29c9369d9af3dd21', 'ie', 'ie', '021312093712', 'ie'),
(12, 'lokasi', '7d5f30ab39191d89007d0264ae6db6b2', 'lokasi', 'lokasi', '123', 'lokasi'),
(13, 'jing', '43ae0add70fd1bda16d0700282cd8d2d', 'jing', 'jing', '123123', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`idDetail`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idKategori` (`idKategori`) USING BTREE;

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`idToko`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

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
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `idToko` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `tbl_kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
