-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2024 pada 19.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'Jenis Usaha', 35),
(2, 'Total Pinjaman', 30),
(3, 'Periode Pinjaman', 15),
(4, 'Tunggakan', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `formulir` varchar(50) DEFAULT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `anggunan` varchar(50) NOT NULL,
  `total_pinjaman` int(11) NOT NULL,
  `periode_pinjaman` int(11) NOT NULL,
  `tunggakan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `nama`, `jenis_kelamin`, `formulir`, `jenis_usaha`, `anggunan`, `total_pinjaman`, `periode_pinjaman`, `tunggakan`) VALUES
(1, 'Waginah\r\n', 'P', 'Lengkap', 'Dagang', '', 10000000, 18, '0'),
(2, 'Sokhil Hura\r\n', 'L', 'Lengkap', 'Dagang', '', 15000000, 12, '0'),
(3, 'Lestri', 'L', 'Lengkap', 'Perkebunan', '', 15000000, 18, '0'),
(4, 'Yura', 'L', 'Lengkap', 'Dagang', '', 120000, 12, '1'),
(5, 'Irpa', 'P', 'Lengkap', 'Dagang', '', 120000, 18, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub_kriteria` varchar(100) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nama_sub_kriteria`, `bobot`) VALUES
(4, 1, 'Perkebunan', 1),
(5, 1, 'Dagang', 2),
(6, 1, 'Pertanian\n', 5),
(7, 1, 'Pertenakan\n', 4),
(8, 1, 'Jasa\n', 3),
(9, 2, '0 - 3.000.000', 1),
(10, 2, '3.000.000 - 6.000.000', 2),
(11, 2, '6.000.000 - 9.000.000', 3),
(12, 2, '9.000.000 - 12.000.000', 4),
(13, 2, '12.000.000 - 15.000.000', 5),
(14, 3, '12', 4),
(15, 3, '18', 5),
(18, 4, '0', 5),
(19, 4, '1', 3),
(20, 4, '2', 1);

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
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
