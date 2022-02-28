-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 04:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `hairstyle`
--

CREATE TABLE `hairstyle` (
  `id_hairstyle` int(11) NOT NULL,
  `nama_hairstyle` varchar(255) NOT NULL,
  `harga` decimal(65,0) NOT NULL,
  `description` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairstyle`
--

INSERT INTO `hairstyle` (`id_hairstyle`, `nama_hairstyle`, `harga`, `description`, `foto`) VALUES
(1, 'pompadour', '20000', 'model rabut 2021', 'yOCrVkSlOUjSCoLihnb8.png'),
(3, 'side part', '15000', 'mdelrambut tipis ukuran 3 cm', 'E1pRNRTxAb29C4b3ZeKm.png'),
(4, 'top knit', '17000', 'potongan rambut dengan gaya tipis di bagian samping saja', 'WuQHOuteiyrxwm5N6gMS.png'),
(5, 'undercut', '15000', 'stle ambut kebanywak orang', 'zcA4ZCPiXb69kN7RaGGV.png'),
(6, 'side part', '50000', 'dsfsdfdsfasdfdsf', 'h2rTUEjAKE8NSpFSIfZI.png'),
(7, 'undercut', '50000', 'potongan rambut dengan gaya tipis di bagian samping saja', 'ipRVuxncqUVqGmFW9xPl.png');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_shift` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `telepon`, `foto`, `id_shift`) VALUES
(1, 'fasih', 'Jl. kh moh cholil Gg III/e', '08523423423', '9dWNKTX9tc82taMGC48I.jpg', 2),
(3, 'sahrul', '635 Turkey Pen Road', '0823423423', 'e19D4bCKSXmUNKL0a6oS.png', 5),
(4, 'alvin', 'BANGKALAN', '0823423423', 'wm9cAsIEhJZWhtU29Ivn.jpg', 3),
(5, 'sahrul', 'bangbutah', '087850', 'oXS8SyRHEV6ff0PUeqEo.png', 2),
(6, 'fasih', 'Jl. kh moh cholil Gg III/e', '085336076077', 'RqVrChyGNCaYoOznoWlv.png', 3),
(7, 'asd', 'asdasdasd', '085645646', 'pj52CH1ox0XH0Fd8cDWO.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `nama_shift` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nama_shift`, `jam_mulai`, `jam_akhir`) VALUES
(2, 'siang', '13:00:00', '17:00:00'),
(3, 'malam', '19:00:00', '22:00:00'),
(5, 'pagi', '07:00:00', '11:00:00'),
(6, 'siang', '11:31:00', '14:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_karyawan` int(50) NOT NULL,
  `id_hairstyle` int(30) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL DEFAULT 'current_timestamp(5)',
  `jumlah_bayar` decimal(10,0) NOT NULL,
  `kembalian` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_karyawan`, `id_hairstyle`, `nama_pelanggan`, `tanggal`, `jumlah_bayar`, `kembalian`) VALUES
(5, 4, 1, 'fasih', '2021-02-21 18:29', '25000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'ach fasihul lisan', 'fasihullisan091966@gmail.com', '$2y$10$HL9126MOYbPuu048yKZvMOiB.aoDwjb5Op8BNbj1yTPQhBZwcWbNe', '', '2021-02-15 20:42:15', '2021-02-15 20:42:15', 1),
(2, 'sahrul', 'sahrulhidayat@yahoo.com', '$2y$10$GE9vhZv30xh0Om6Pam5ZCOwwaxO5eAO5XSal5/jWIaeHVuXzCDQmS', NULL, '2021-03-07 09:43:18', '2021-03-07 09:43:18', 2),
(3, 'fathur', 'fathurrahman@gmail.com', '$2y$10$FMlGa/J2OwdjGzClxum78eA7YSFd8LuBUSwMJxTCcXmUmaRm/Xumq', NULL, '2021-03-08 07:52:39', '2021-03-08 07:52:39', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hairstyle`
--
ALTER TABLE `hairstyle`
  ADD PRIMARY KEY (`id_hairstyle`),
  ADD KEY `nama_hairstyle` (`nama_hairstyle`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_shift` (`id_shift`),
  ADD KEY `nama_karyawan` (`nama_karyawan`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`),
  ADD KEY `nama_shift` (`nama_shift`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_hairstyle` (`id_hairstyle`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hairstyle`
--
ALTER TABLE `hairstyle`
  MODIFY `id_hairstyle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_hairstyle`) REFERENCES `hairstyle` (`id_hairstyle`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
