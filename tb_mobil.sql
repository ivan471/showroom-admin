-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 15.03
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merantimotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id` int(6) NOT NULL,
  `no_polisi` char(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `warna` varchar(18) NOT NULL,
  `tahun` int(4) NOT NULL,
  `transmisi` char(2) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `masa_berlaku_stnk` date NOT NULL,
  `tanggal_input` date NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `gambar4` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kapasitas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `no_polisi`, `nama`, `merk`, `model`, `warna`, `tahun`, `transmisi`, `type`, `bahan_bakar`, `masa_berlaku_stnk`, `tanggal_input`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `harga`, `deskripsi`, `kapasitas`) VALUES
(1, 'DD254HQ', 'avansa', 'Toyota', '', 'Hitam', 2012, 'MT', 'G1', 'Bensin', '0000-00-00', '2019-04-30', '', '', '', '', 1250000000, '', '1300'),
(2, 'DD495EP', 'Avansa', 'Toyota', '', 'Hitam', 2015, 'MT', 'G1', 'Bensin', '2015-02-02', '2019-04-30', '', '', '', '', 2147483647, '', '500'),
(3, 'DD495ER', 'Avansa', 'Toyota', '', 'Hitam', 2015, 'MT', 'G1', 'Bensin', '0000-00-00', '2019-04-30', '', '', '', '', 2147483647, '', '500');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
