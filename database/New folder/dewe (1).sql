-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Sep 2018 pada 17.13
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atlet`
--

CREATE TABLE `atlet` (
  `id_atlet` varchar(5) NOT NULL,
  `nama_atlet` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `atlet`
--

INSERT INTO `atlet` (`id_atlet`, `nama_atlet`, `tgl_lahir`, `alamat`, `jenis_kelamin`) VALUES
('at002', 'adi', '30 jan 1999', 'bantul', 'pria'),
('at003', 'rudi', '30 jan 1999', 'jogja', 'pria'),
('at004', 'dodod', '23 des 1898', 'bantul', 'pria'),
('at005', 'oioi', '29-09-1996', 'kuwon', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejuaraan`
--

CREATE TABLE `kejuaraan` (
  `id_kejuaraan` varchar(5) NOT NULL,
  `nama_kejuaraan` varchar(50) NOT NULL,
  `tgl_kejuaraan` varchar(20) NOT NULL,
  `Tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejuaraan`
--

INSERT INTO `kejuaraan` (`id_kejuaraan`, `nama_kejuaraan`, `tgl_kejuaraan`, `Tempat`) VALUES
('kr001', 'bupati cup', '23 nov 2018', 'Sleman'),
('kr002', 'popo', '29', 'bantul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
('kr002', 'mentalkkkk', 4),
('kr003', 'skill', 9),
('kr004', 'disiplin', 7),
('kr005', 'tes', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matrik`
--

CREATE TABLE `nilai_matrik` (
  `id_matrik` int(7) NOT NULL,
  `id_atlet` varchar(5) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL,
  `nilai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_matrik`
--

INSERT INTO `nilai_matrik` (`id_matrik`, `id_atlet`, `id_kriteria`, `nilai`) VALUES
(41, '', '', 0),
(42, '', '', 0),
(43, '', '', 0),
(44, '', '', 0),
(105, 'kr004', '<br /', 1),
(106, 'kr004', '<br /', 1),
(107, 'kr004', '<br /', 1),
(108, 'kr004', '<br /', 1),
(109, 'kr005', '<br /', 1),
(110, 'kr005', '<br /', 5),
(111, 'kr005', '<br /', 1),
(112, 'kr005', '<br /', 1),
(113, 'at002', 'kr002', 1),
(114, 'at002', 'kr003', 1),
(115, 'at002', 'kr004', 1),
(116, 'at002', 'kr005', 1),
(117, 'at005', 'kr002', 4),
(118, 'at005', 'kr003', 5),
(119, 'at005', 'kr004', 3),
(120, 'at005', 'kr005', 2),
(121, 'at004', 'kr002', 2),
(122, 'at004', 'kr003', 2),
(123, 'at004', 'kr004', 3),
(124, 'at004', 'kr005', 3),
(125, 'at003', 'kr002', 3),
(126, 'at003', 'kr003', 2),
(127, 'at003', 'kr004', 3),
(128, 'at003', 'kr005', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `id_pre` int(5) NOT NULL,
  `nama_atlet` varchar(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id_atlet`);

--
-- Indexes for table `kejuaraan`
--
ALTER TABLE `kejuaraan`
  ADD PRIMARY KEY (`id_kejuaraan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  ADD PRIMARY KEY (`id_matrik`);

--
-- Indexes for table `nilai_preferensi`
--
ALTER TABLE `nilai_preferensi`
  ADD PRIMARY KEY (`id_pre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
