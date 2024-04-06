-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2023 pada 08.10
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
-- Database: `mymap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `kode` int(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `kode` varchar(30) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `penduduk` int(25) NOT NULL,
  `laki` int(25) NOT NULL,
  `perempuan` int(25) NOT NULL,
  `luas` int(25) NOT NULL,
  `kepkel` int(25) NOT NULL,
  `peribadatan` int(25) NOT NULL,
  `kesehatan` int(25) NOT NULL,
  `pendidikan` int(25) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lon` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `foto` text NOT NULL,
  `icon` int(2) NOT NULL,
  `vcor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`kode`, `kelurahan`, `kecamatan`, `penduduk`, `laki`, `perempuan`, `luas`, `kepkel`, `peribadatan`, `kesehatan`, `pendidikan`, `lat`, `lon`, `file`, `foto`, `icon`, `vcor`) VALUES
('5hZggFY0T7', 'Lubuk Siam', 'Siak Hulu', 1737, 876, 861, 12000, 1000, 11, 1, 9, '0.377190', '101.467688  ', 'lubuksiam.zip', '', 1, '1.000'),
('9gXBz8Qmyx', 'Tanah Merah', 'Siak Hulu', 13117, 6595, 6522, 1096, 4693, 14, 10, 0, '0.442242', '101.476601  ', 'tanahmerah.zip', '', 1, '0.500'),
('bEe44Mc6MT', 'Desa Baru', 'Siak Hulu', 6279, 3193, 3086, 56000, 1460, 14, 3, 8, '0.419299', '101.515681  ', 'desabaru.zip', '', 1, '0.500'),
('Ct5jaeIhBq', 'Pangkalan Serik', 'Siak Hulu', 1172, 613, 559, 6500, 317, 9, 1, 3, '0.281422', '101.595620  ', 'PANGKALANSERIK.zip', '3.jpg', 1, '1.000'),
('DMce6dN50Z', 'Kapau Jaya', 'Siak Hulu', 1763, 873, 890, 16830, 459, 9, 2, 6, ' 0.303275', '101.496568 ', 'kepaujaya.zip', '2.jpg', 1, '0.885'),
('EALjlvazIK', 'Buluh Nipis', 'Siak Hulu', 1493, 769, 724, 11325, 428, 9, 0, 3, '0.327825', '101.628044  ', 'buluhnipis.zip', '', 1, '0.962'),
('h0z9Hcc4lU', 'Buluh Cina ', 'Siak Hulu', 1349, 691, 658, 6500, 395, 6, 0, 3, '0.344921', '101.513327 ', 'buluhcina.zip', '', 1, '1.000'),
('KRdgwlLfAc', 'Tanjung Balam', 'Siak Hulu', 1159, 611, 548, 3015, 290, 6, 0, 1, '0.374496', '101.485509  ', 'tanjungbalam.zip', '', 1, '0.962'),
('munAw3juIo', 'Pangkalan Baru', 'Siak Hulu', 3984, 2006, 1918, 20000, 1000, 11, 1, 9, '0.380407', '101.596567 ', 'pangkalanbaru.zip', '', 1, '0.885'),
('oUJIU8dwOY', 'Kubang Jaya', 'Siak Hulu', 10960, 5602, 5358, 6000, 2715, 11, 3, 11, '0.414097', '101.423585  ', 'kubangjaya.zip', '', 1, '0.538'),
('tqyKbz8uq2', 'Teratak Buluh', 'Siak Hulu', 4337, 2312, 2025, 1111, 1084, 17, 4, 25, '0.399682', '101.418111  ', 'teratakbuluh.zip', '', 1, '0.962'),
('WF0GXzWyFD', 'pandau jaya', 'Siak Hulu', 22890, 11896, 10994, 14274, 5404, 36, 1, 26, '0.408690', '101.465956  ', 'pandaujaya.zip', '', 1, '0.500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `unit` text NOT NULL,
  `subunit` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `level` int(1) NOT NULL,
  `kelurahan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `unit`, `subunit`, `email`, `hp`, `foto`, `status`, `level`, `kelurahan`) VALUES
('kelurahan', '123', 'ando', 'kelurahan lubuk siam', 'lubuk siam', 'ok@ok', '000', 'download (4).jpg', 1, 2, '5hZggFY0T7'),
('sayyid.dega', '5M@rethusen', 'sayyid al husain bilfagih', '-', '-', 'sayyid.dega@gmail.com', '082387925693', '-', 1, 1, ''),
('ucenklr', '5marethusen', 'ucen', 'dd', 'ddd', 'sayyid.dega@gmail.com', '123123', '1.png', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `kode` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
