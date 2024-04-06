-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 03.25
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
  `rekanan` varchar(15) NOT NULL,
  `expired` varchar(30) NOT NULL,
  `diskon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itempenjualan`
--

CREATE TABLE `itempenjualan` (
  `kode` int(10) NOT NULL,
  `qr` varchar(50) NOT NULL,
  `penjualan` varchar(100) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `jual` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `payout` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payout`
--

CREATE TABLE `payout` (
  `kode` varchar(20) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `rekan` varchar(30) NOT NULL,
  `bukti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode` varchar(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `belanja` int(20) NOT NULL,
  `cara` int(2) NOT NULL,
  `tunai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indeks untuk tabel `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`kode`);

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
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `itempenjualan`
--
ALTER TABLE `itempenjualan`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
