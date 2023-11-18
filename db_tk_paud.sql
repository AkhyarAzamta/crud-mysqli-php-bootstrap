-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2023 at 06:56 PM
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
(2, '183912', 'Cucu Mulyani', 'kp. Cisadap Rt 18/ 18 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(3, '354949', 'Puspa Faujatul Jannah', 'kp. Cikoleh Rt 2/ 2 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(4, '223011', 'Zahratunnisa', 'kp. Cipaku Rt 15/ 3 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan'),
(5, '050208', 'Nurhana Kamilahh', 'kp. Cimuncang Rt 8/ 16 desa pangguh kec ibun', 'Guru Pengajar', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `orang_tua` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nik`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `usia`, `orang_tua`, `nomor_telepon`) VALUES
(7, '1234567890', 'John Doe', '2017-05-15', 'Laki-Laki', 'Islam', 'Jl. Merdeka No. 123', 5, 'Ibu Doe', '081234567890'),
(8, '0987654321', 'Jane Doe', '2018-08-20', 'Perempuan', 'Kristen', 'Jl. Kemerdekaan No. 456', 4, 'Bapak Doe', '087654321098'),
(9, '4567890123', 'Alice Johnson', '2019-03-10', 'Perempuan', 'Hindu', 'Jl. Bahagia No. 789', 3, 'Ibu Johnson', '081234567890'),
(10, '3210987654', 'Bob Smith', '2020-11-05', 'Laki-Laki', 'Buddha', 'Jl. Sukamaju No. 101', 2, 'Bapak Smith', '087654321098'),
(11, '5678901234', 'Eva Lee', '2021-07-18', 'Perempuan', 'Konghucu', 'Jl. Damai No. 567', 1, 'Ibu Lee', '081234567890'),
(12, '2345678901', 'Michael Wang', '2017-12-25', 'Laki-Laki', 'Kristen', 'Jl. Harmoni No. 234', 4, 'Bapak Wang', '087654321098'),
(13, '8901234567', 'Sophia Tan', '2018-04-30', 'Perempuan', 'Islam', 'Jl. Perdamaian No. 890', 3, 'Ibu Tan', '081234567890'),
(14, '3456789012', 'David Chen', '2019-09-08', 'Laki-Laki', 'Hindu', 'Jl. Sejahtera No. 345', 2, 'Bapak Chen', '087654321098'),
(15, '6789012345', 'Grace Liu', '2020-06-03', 'Perempuan', 'Buddha', 'Jl. Cinta No. 678', 1, 'Ibu Liu', '081234567890'),
(16, '0123456789', 'Daniel Kim', '2017-01-12', 'Laki-Laki', 'Konghucu', 'Jl. Damai Sejahtera No. 012', 4, 'Bapak Kim', '087654321098');

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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
