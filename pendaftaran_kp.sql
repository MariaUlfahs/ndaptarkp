-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 05:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_kp`
--

CREATE TABLE `form_kp` (
  `id` int(3) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `nama_ins` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `alamat_ins` varchar(100) NOT NULL,
  `anggota1` int(8) NOT NULL,
  `anggota2` int(8) NOT NULL,
  `anggota3` int(8) NOT NULL,
  `anggota4` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_kp`
--

INSERT INTO `form_kp` (`id`, `kode`, `nama_ins`, `deskripsi`, `alamat_ins`, `anggota1`, `anggota2`, `anggota3`, `anggota4`) VALUES
(2, 'iki123', 'CV. Bintag Media Informatika', 'sh', 'semarang', 15090099, 15090066, 15090078, 15090056),
(5, 'djffjh', 'jhkh', 'kjhkjh', 'jkhkjh', 15090056, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(3) NOT NULL,
  `nim` char(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jurusan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`) VALUES
(4, '15090056', 'Siti Maria Ulfah', 'Teknik Informatika'),
(10, '15090066', 'yasinta ersyaf', 'Teknik Informatika'),
(11, '15090099', 'endang sulistiani', 'Teknik Informatika'),
(14, '15090078', 'noaf', 'Teknik Informatika'),
(15, '15090077', 'uru', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'maria ulfah', 'mariaulfahs7@gmail.com', 'maria', '94aec9fbed989ece189a7e172c9cf41669050495152bc4c1dbf2a38d7fd85627'),
(2, 'uru', 'uru@gmail.com', 'uru', '9e0a7b7adc623a4eb9d6efbec4db6669917cdc3d450bc61d7281d78585b6e001'),
(3, 'ulfah', 'ulfah@gmail.com', 'ulfah', '086f7d4560618facdb76b3386c72acc71b45c3059f82b8303d03d88d5828cbc7'),
(4, 'faiq', 'faiq@gmail.com', 'faiq', '6c5f852fa737325a0907fe2afe53f05ae6a670871efc705f03112b864d944e77'),
(5, 'admin', 'admin@gmail.com', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(6, 'ul', 'ul@gmail.com', 'ul', '51db253425817abff5f9d6cb749a42d8cbb7cd4dc95128efb59d788fcc570593'),
(7, 'fa', 'fa@gmail.com', 'fa', '3097e26b7f3cbdb920765a6c3d2ba94985e465cccb0664c62cec43fdc7544670'),
(8, 'mar', 'mar@gmail.com', 'mar', '51609286fb7f6089e0a0a418355949c791e84870ae2523093ba00bb3ecff7f8e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_kp`
--
ALTER TABLE `form_kp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota1` (`anggota1`),
  ADD KEY `anggota2` (`anggota2`),
  ADD KEY `anggota3` (`anggota3`),
  ADD KEY `anggota4` (`anggota4`),
  ADD KEY `anggota1_2` (`anggota1`,`anggota2`,`anggota3`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_kp`
--
ALTER TABLE `form_kp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
