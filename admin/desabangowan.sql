-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2023 at 04:18 PM
-- Server version: 5.7.37-log
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desabangowan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `deskripsi`, `gambar`, `date`) VALUES
(1, 'testing', 'wecewv', '28f29911e48f67b46dabee954a0a6ece.png', '2023-03-25 16:13:04'),
(2, 'testing 2', 'vw vre te ', 'e6541a03ce8e0693e95fb3a21160e7e0.jpg', '2023-03-25 16:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_img`
--

CREATE TABLE `tb_img` (
  `id` int(3) NOT NULL,
  `postimage` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `isActive` int(3) NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_img`
--

INSERT INTO `tb_img` (`id`, `postimage`, `nama`, `caption`, `isActive`, `postDate`) VALUES
(1, 'f1ffe489ab14df62dfbe21fc6bb3d6ba.png', 'coba', 'coba edit', 1, '2023-03-19 10:56:17'),
(2, '191b992f93425ef8ae39850685385aed.jpg', 'coba part 2', 'coba edit lagi', 1, '2023-03-19 10:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `postimage` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `isActive` int(3) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama`, `username`, `password`, `level`) VALUES
('salma', 'admin', '$2y$10$vCr9JxroW0UBtU0NOFIsz.MFj2bPEx2o0uw3POBTCGSzO7qlvacni', 'admin'),
('santi', 'coba', '$2y$10$kP/CMha9wPbmGkYjX51Onel7jcIy7nvroatEhGrD49EoZhQzlxt.m', 'adminberita');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id`, `nama`, `lokasi`, `deskripsi`, `status_wisata`) VALUES
(2, 'testing', 'cepu', 'abc', 'nonaktif'),
(4, 'santi', 'aaaaa', 'cobain testing', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
