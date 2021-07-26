-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 10:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_kasrt`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kas`
--

CREATE TABLE `data_kas` (
  `idKas` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kas`
--

INSERT INTO `data_kas` (`idKas`, `keterangan`, `tanggal`, `jumlah`, `jenis`) VALUES
(30000001, 'Beli Printer L5190', '2021-07-01', '3750000', 'keluar'),
(30000002, 'Iuran warga mingguan', '2021-07-01', '5900000', 'masuk'),
(30000003, 'iuran warga bulanan', '2021-07-03', '7800000', 'masuk'),
(30000004, 'pembelian dispenser', '2021-07-04', '560000', 'keluar'),
(30000005, 'pembelian atk', '2021-07-04', '100000', 'keluar'),
(30000006, 'Lomba agustus', '2021-07-14', '3000000', 'keluar');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `idWarga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`idWarga`, `nik`, `nama`, `jekel`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
(1, '3202051708920005', 'Slamet Riyadi', 'laki-laki', 'Banyumas', '1992-08-17', 'Cilincing, Jakarta Utara'),
(3, '1230981802950001', 'Solihin', 'laki-laki', 'Lampung', '1995-02-10', 'bekasi utara'),
(4, '1230981002960006', 'Ani', 'perempuan', 'Lampung utara', '1996-02-10', 'bekasi utara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `img` varchar(50) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `username`, `password`, `img`, `is_active`, `role_id`, `email`) VALUES
(3, 'Admin', 'admin', '$2y$10$KS39PG5WxGeTym5guXKYb.8lN8R4Ad.Os3w5H3PubSZDw8QFGfWJS', 'avatar.png', 1, 1, 'admin@admin.com'),
(4, 'Solihin', 'solihin', '$2y$10$FfpRaMiJBSKr14wNEQWozOzmmyktkozFErthDLfNPNzJHWD8mSaqS', 'avatar.png', 1, 2, ''),
(5, 'Ani', 'bendahara', '$2y$10$heGLICwNC7IBwvx8rQrxS.W3M1WnwoEke7y2ANwmaLESpeSzAtHne', 'avatar.png', 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'RT'),
(3, 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kas`
--
ALTER TABLE `data_kas`
  ADD PRIMARY KEY (`idKas`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`idWarga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kas`
--
ALTER TABLE `data_kas`
  MODIFY `idKas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30000007;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `idWarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
