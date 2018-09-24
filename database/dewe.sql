-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Sep 2018 pada 15.37
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
('kr002', 'adi', '30 jan 1999', 'bantul', 'pria'),
('kr003', 'rudi', '30 jan 1999', 'jogja', 'pria'),
('kr004', 'dodod', '23 des 1898', 'bantul', 'pria');

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
('kr001', 'bupati cup', '23 nov 2018', 'Sleman');

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
('kr004', 'disiplin', 7);

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
(22, 'kr002', '', 0),
(23, 'kr002', '', 0),
(24, 'kr002', '', 0);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
