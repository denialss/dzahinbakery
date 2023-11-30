-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2023 pada 01.25
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngepodst_dua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'ha', '$2y$10$SiUVHV3WXXpdezga7sx/fOaCLUiHGZeRh36IRqlysuKdwOcnWUZWu'),
(2, 'aa', '$2y$10$XvYORHi/VD/P08sHq86kUeDrBtMMPVQUrPa5ilb5Ze5lOAcwGbstm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKat` int(5) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKat`, `category_name`) VALUES
(20, 'Fantasy'),
(21, 'Comedy'),
(22, 'Horror');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_podcast`
--

CREATE TABLE `tbl_podcast` (
  `idPodcast` int(5) NOT NULL,
  `idKat` int(5) DEFAULT NULL,
  `idUser` int(5) DEFAULT NULL,
  `thumbnail` text DEFAULT NULL,
  `audio` blob DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_podcast`
--

INSERT INTO `tbl_podcast` (`idPodcast`, `idKat`, `idUser`, `thumbnail`, `audio`, `title`, `deskripsi`) VALUES
(44, 20, 10, NULL, 0x79326d6174655f636f6d5f2d5f4172636865735f417564696f5f3630735f53756d6d65725f526574726f5f526f636b5f526f79616c74795f467265655f4d75736963342e6d7033, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `email`, `phone`, `city`, `is_active`) VALUES
(9, 'aaa', 'aaa', 'hafid.hanifan123@gmail.com', 123, 'KULON PROGO', 'Y'),
(10, 'admin', 'admin', 'admin@gmail.ocm', 12345, 'KULON PROGO', 'Y'),
(11, 'dinda', '$2y$10$cYI0EFbWbNdvm3Nt4OSDcOhjJW3pSf6fTPJDo0PVeOpQOoKS3NNQ2', 'dinda@gmail.com', 123, 'Jogja', 'Y'),
(12, 'nando', '$2y$10$Ah2pO8/LhZnP6.lLXBY1ZORXAPtQIPgLhTOftkyDazOpag1TDFRO2', 'nando@gmail.com', 123, 'KULON PROGO', 'Y'),
(13, 'a', '$2y$10$Nifr7NDDq/GxJyk1TtZFjePpgpKN70oSLo7HYY6YiaJwewCtK/XQS', 'anan@gmail.com', 123, 'KULON PROGO', 'Y'),
(14, 'a', '$2y$10$bWJjJN/h6Pie9LAWH/vvGeAcq2L3m5bxxbSiJuNTjU8Y3xryPPqBa', 'hafid.hanifan123@gmail.com', 0, 'a', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKat`);

--
-- Indeks untuk tabel `tbl_podcast`
--
ALTER TABLE `tbl_podcast`
  ADD PRIMARY KEY (`idPodcast`),
  ADD UNIQUE KEY `idUser_2` (`idUser`),
  ADD KEY `idKat` (`idKat`),
  ADD KEY `idUser` (`idUser`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_podcast`
--
ALTER TABLE `tbl_podcast`
  MODIFY `idPodcast` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_podcast`
--
ALTER TABLE `tbl_podcast`
  ADD CONSTRAINT `tbl_podcast_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tbl_kategori` (`idKat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_podcast_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
