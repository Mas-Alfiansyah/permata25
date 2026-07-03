-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Jun 2026 pada 04.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `kategori_id`, `slug`, `judul`, `status`, `gambar`, `isi_berita`, `tanggal_buat`) VALUES
(8, 1, 'judul_1', 'judul 1', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(9, 2, 'judul_2', 'judul 2', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(10, 4, 'judul_3', 'judul 3', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(11, 2, 'judul_4', 'judul 4', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(12, 1, 'judul_5', 'judul 5', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(13, 3, 'judul_6', 'judul 6', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(14, 2, 'judul_7', 'judul 7', 'publish', 'upload/gambar.jpg', 'isi berita', '2026-05-25 02:57:06'),
(15, 4, 'sepak-bola', 'Sepak bola', 'publish', 'qsfgwqjehf', 'kadfbksldhvf', '2026-06-19 03:41:07'),
(16, 5, 'korupsi dana mbg', 'Korupsi Dana MBG', 'publish', 'qefuwuduiwvdfdf.jpg', 'Anggaran dana APBN di korupsi oleh.....', '2026-06-26 02:09:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `slug`, `nama_kategori`, `deskripsi`, `tanggal_buat`) VALUES
(1, 'teknologi1', 'Teknologi', 'Teknologi', '2026-05-24 09:21:59'),
(2, 'bisnis', 'Busnis', 'Busnis', '2026-05-24 09:21:59'),
(3, 'hobi', 'Hobi', 'Hobi', '2026-05-24 09:21:59'),
(4, 'olahraga', 'Olahraga', 'Berita olahraga', '2026-05-24 14:55:10'),
(5, 'berita-viral', 'Berita Viral', 'Tentang berita viral lain nya', '2026-06-26 02:08:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
