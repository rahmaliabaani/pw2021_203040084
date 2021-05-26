-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2021 pada 12.27
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040084`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tupperware`
--

CREATE TABLE `tupperware` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tupperware`
--

INSERT INTO `tupperware` (`id`, `gambar`, `nama`, `warna`, `harga`, `ukuran`) VALUES
(1, '1.jpg', 'Tupperware Kotak Makan Click to Go', 'Mix', 170000, 'Sedang'),
(2, '2.jpg', 'Tupperware Magnolia Canister', 'Merah', 258000, 'Kecil dan Besar'),
(3, '3.jpg', 'Tupperware Frozy Cozy High', 'Hijau', 68000, 'Kecil'),
(4, '4.jpg', 'Tupperware Tall Summer Fresh', 'Mix', 264000, 'Sedang'),
(5, '5.jpg', 'Tupperware Family Mate Square', 'Merah', 178000, 'Kecil'),
(6, '6.jpg', 'Tupperware Groovy Bottle', 'Hijau dan Ungu', 80000, 'Sedang'),
(7, '7.jpg', 'Tupperware Lunch Box Byo', 'Hitam', 176400, 'Sedang'),
(8, '8.jpg', 'Tupperware Blossom Plate', 'Mix', 175000, 'Besar'),
(9, '9.jpg', 'Tupperware Botol Susu Cutie Twee', 'Ungu', 79000, 'Kecil dan Sedang'),
(10, '10.jpg', 'Tupperware Portable Chopstick', 'Mix', 75750, 'Sedang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tupperware`
--
ALTER TABLE `tupperware`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tupperware`
--
ALTER TABLE `tupperware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
