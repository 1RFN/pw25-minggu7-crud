-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 14.45
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baca_nusantara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud_011`
--

CREATE TABLE `crud_011` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(150) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crud_011`
--

INSERT INTO `crud_011` (`id`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`, `harga`, `kategori`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 60000, 'Fiksi'),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Balai Pustaka', 1980, 75000, 'Sejarah'),
(4, 'Garis Waktu', 'Fiersa Besari', 'Fiersa Besari', 2019, 100000, 'Motivasi'),
(5, 'Kumpulan Cerpen', 'Tere Liye', 'Gramedia', 2018, 45000, 'Cerpen'),
(6, 'Hujan', 'Tere Liye', 'Gramedia', 2019, 70000, 'Romantis'),
(7, 'Pulang', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2012, 78000, 'Sejarah'),
(8, 'Rantau 1 Muara', 'Ayu Utami', 'Gramedia', 2003, 86000, 'Fiksi'),
(9, 'Di Tanah Lada', 'Ayu Utami', 'Gramedia', 2005, 60000, 'Drama'),
(10, 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Mizan', 2004, 110000, 'Religi'),
(11, 'The Secret', 'Rhonda Byrne', 'Gramedia', 2006, 125000, 'Self-help'),
(12, 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'Dewi Lestari', 'Gramedia', 2001, 71000, 'Fiksi'),
(13, 'Bumi', 'Tere Liye', 'Gramedia', 2013, 115000, 'Fiksi'),
(14, 'Dilan 1990', 'Pidi Baiq', 'GPU', 2014, 87000, 'Romantis'),
(15, 'Lupa-Lupa Ingat', 'Alim Mustofa', 'Erlangga', 2016, 97000, 'Fiksi'),
(17, 'Thinking, Fast, and Slow', 'Daniel Kahneman', 'Farrar, Straus and Giroux', 2011, 135000, 'Psikologi'),
(18, 'Semesta Kita', 'Irfan Jayadi', 'Gramedia Pustaka Utama', 2025, 200000, 'Novel'),
(19, 'Adolf Hitler', 'Irfan Jayadi', 'Gramedia Press', 2025, 300000, 'Sejarah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud_011`
--
ALTER TABLE `crud_011`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud_011`
--
ALTER TABLE `crud_011`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
