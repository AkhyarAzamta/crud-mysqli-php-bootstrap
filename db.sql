-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2023 at 07:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tk_paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `paud`
--

CREATE TABLE `paud` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paud`
--

INSERT INTO `paud` (`id`, `nip`, `nama`, `alamat`, `jabatan`, `jenis_kelamin`) VALUES
(1, '521537', 'Topik Hidayat', 'kp. Cicango Rt 01/01 desa pangguh kec ibun', 'Kepala Sekolah', 'Laki-Laki'),
(2, '183912', 'Cucu Mulyani', 'kp. Cisadap Rt 18/ 18 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(3, '354949', 'Puspa Faujatul Jannah', 'kp. Cikoleh Rt 2/ 2 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(4, '223011', 'Zahratunnisa', 'kp. Cipaku Rt 15/ 3 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(5, '050208', 'Nurhana Kamilah', 'kp. Cimuncang Rt 8/ 16 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`id`, `nip`, `nama`, `alamat`, `jabatan`, `jenis_kelamin`) VALUES
(1, '055559', 'Wiwin Rofi\'ahu', 'kp. Cicango Rt 01/01 desa pangguh kec ibun', 'Kepala Sekolah', 'Perempuan'),
(2, '880889', 'Nani Suryani', 'kp. Cikoleh Rt 7/ 9 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(3, '237769', 'Cucu Hayati', 'kp. Cipaku Rt 20/ 1 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(4, '546177', 'Chintya Eka Merdekawati', 'kp. Cipaku Rt 18/ 17 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(5, '017579', 'Ida Widaningsih', 'kp. Cisadap Rt 8/ 5 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paud`
--
ALTER TABLE `paud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paud`
--
ALTER TABLE `paud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;