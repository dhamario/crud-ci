-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Bulan Mei 2024 pada 13.47
-- Versi server: 5.7.33
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_coin`
--

CREATE TABLE `data_coin` (
  `id_coin` int(11) NOT NULL,
  `nama_coin` varchar(225) NOT NULL,
  `harga_entry` varchar(255) NOT NULL,
  `harga_tp` varchar(255) NOT NULL,
  `moonbag` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_coin`
--

INSERT INTO `data_coin` (`id_coin`, `nama_coin`, `harga_entry`, `harga_tp`, `moonbag`, `photo`) VALUES
(5, 'Bitcoin Dhamar', 'dwa', 'daw', '222', 'bitcoin.png'),
(14, 'Bitcoin Dhamar', 'daw', 'dwa', 'dwa', 'db1.png'),
(15, 'Bitcoin Ahsan', '2000', '5000', '100', 'Untitled.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_coin`
--
ALTER TABLE `data_coin`
  ADD PRIMARY KEY (`id_coin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_coin`
--
ALTER TABLE `data_coin`
  MODIFY `id_coin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
