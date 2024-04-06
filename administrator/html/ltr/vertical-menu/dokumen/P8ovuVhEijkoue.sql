-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 09.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`, `nama`) VALUES
('ucenklr', '5marethusen', 1, 'sayid al husain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode` int(10) NOT NULL,
  `gambar` text NOT NULL,
  `nama` text NOT NULL,
  `harga` varchar(20) NOT NULL,
  `rekanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `gambar`, `nama`, `harga`, `rekanan`) VALUES
(2, 'Screenshot_1.png', 'Milna', '15000', 'sayyid.dega'),
(4, 'Screenshot_11.png', 'Nestle', '25000', 'sayyid.dega'),
(5, 'hhhfre.png', 'Milkita', '1000', 'sayyid.dega');

-- --------------------------------------------------------

--
-- Struktur dari tabel `itempenjualan`
--

CREATE TABLE `itempenjualan` (
  `kode` int(100) NOT NULL,
  `qr` varchar(50) NOT NULL,
  `penjualan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `itempenjualan`
--

INSERT INTO `itempenjualan` (`kode`, `qr`, `penjualan`) VALUES
(13, '1566855224', 14),
(14, '1566855224', 15),
(15, '21212121', 15),
(16, '21212121', 15),
(17, '21212121', 15),
(18, '2255879878978974446', 15),
(19, '121515151', 16),
(20, '	555666699', 16),
(21, '555666699', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode` int(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `belanja` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`kode`, `tanggal`, `belanja`) VALUES
(15, '20-12-2022', 85000),
(16, '20-12-2022', 16000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `qty`
--

CREATE TABLE `qty` (
  `qr` varchar(50) NOT NULL,
  `barang` int(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `qty`
--

INSERT INTO `qty` (`qr`, `barang`, `tanggal`, `status`) VALUES
('121515151', 2, '20-12-2022', 2),
('12321', 2, '20-12-2022', 1),
('151515151158151', 2, '20-12-2022', 1),
('151515815818811', 2, '20-12-2022', 1),
('1566855224', 2, '20-12-2022', 2),
('21212121', 2, '20-12-2022', 2),
('2255879878978974446', 4, '20-12-2022', 2),
('25515552', 2, '20-12-2022', 2),
('255222', 2, '20-12-2022', 1),
('555666699', 5, '20-12-2022', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekanan`
--

CREATE TABLE `rekanan` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `cp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekanan`
--

INSERT INTO `rekanan` (`username`, `password`, `nama`, `alamat`, `cp`) VALUES
('sayyid.dega', '5marethusen', 'sayyid al husain', 'jl durian', '082387925693');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `rekanan` (`rekanan`);

--
-- Indeks untuk tabel `itempenjualan`
--
ALTER TABLE `itempenjualan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `qr` (`qr`),
  ADD KEY `penjualan` (`penjualan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `qty`
--
ALTER TABLE `qty`
  ADD PRIMARY KEY (`qr`),
  ADD KEY `barang` (`barang`),
  ADD KEY `barang_2` (`barang`);

--
-- Indeks untuk tabel `rekanan`
--
ALTER TABLE `rekanan`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `itempenjualan`
--
ALTER TABLE `itempenjualan`
  MODIFY `kode` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `kode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
