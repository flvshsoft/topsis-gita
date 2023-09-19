-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2023 pada 07.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps_topsis_gita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(10) DEFAULT NULL,
  `nama_gejala` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(1, 'G1', 'Nafsu makan menurun'),
(2, 'G2', 'Lesu'),
(4, 'G3', 'Keluar cairan pada mata dan hidung'),
(5, 'G4', 'Terlihat kurus'),
(6, 'G5', 'Pernafasan cepat'),
(7, 'G6', 'Terjadi pembengkakan pada persendian'),
(8, 'G7', 'Bulu rontok'),
(9, 'G8', 'Susah bernafas'),
(10, 'G9', 'Demam'),
(11, 'G10', 'Susah gerak dan berdiri'),
(12, 'G11', 'Air kencing berwarna merah'),
(13, 'G12', 'Keluarnya air mata yang terus menerus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `password_hash` varchar(191) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `tanggal_akses` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password_hash`, `level_user`, `status_user`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'david', 'David', '$2y$10$iBRohfslcWGhqaUbtGBiiuz.CC0Nk8JWgMfFRyI5eUOLuSRWkiLMS', 'pimpinan', 1, '2023-06-10', '2023-05-09 03:57:53', '2023-05-09 03:57:53', '0000-00-00 00:00:00'),
(2, 'admin', 'Widia', '$2y$10$3OW71Ah1eZxY7prSazM5fuo2EeclU5maGf9TkE0JXeasBOxIsgXlS', 'admin', 1, '2023-06-10', '2023-05-09 03:59:51', '2023-05-09 03:59:51', '0000-00-00 00:00:00'),
(3, 'toko obat bina farma', 'Toko Obat Bina Farma', '$2y$10$cdc113NRvHZ8jYqDhorinNunP.d3W3i03WnplxKF.MZH...', 'pemilik', 1, '2023-06-10', '2023-06-16 05:18:31', '2023-06-16 05:18:31', '2023-06-16 05:18:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
