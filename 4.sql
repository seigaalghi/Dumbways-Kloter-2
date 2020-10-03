-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 02:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_n` int(11) NOT NULL,
  `title_n` varchar(100) DEFAULT NULL,
  `image_n` varchar(5000) DEFAULT NULL,
  `deskripsi_n` text DEFAULT NULL,
  `create_time_n` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_n`, `title_n`, `image_n`, `deskripsi_n`, `create_time_n`, `user_id`) VALUES
(2, 'Tabrak Dua Perampok Hingga Tewas, Korban Bakal Kena Pidana?', '6.jpg', 'Terjadi Tabrakan di jalan Tol.', '2020-10-01', 6),
(3, 'Korupsi Melanda Indonesia', '5.jpg', 'KPK Berhasil tangkap koruptor, operasi tangkap tangan.', '2020-09-16', 5),
(4, 'Luna Maya CLBK dengan Ariel Noah!', '4.jpg', 'Setelah lama berpisah, akhirnya celeb lunamaya dan aril noah kembali menjalin cinta.', '2020-09-30', 4),
(5, 'Politik Indonesia Memanas', '3.jpg', 'Semakin dekat dengan acara pemilu, politik indonesia semakin memanas.', '2020-08-13', 3),
(6, 'Begal Dipukuli Warga', '2.jpg', 'Terjadi kasus pembegalan di daerah grogol, pelaku begal tewas dihakimi warga.', '2020-08-04', 2),
(7, 'Penistaan Agama?', '1.jpg', 'Setelah sekian lama, penistaan agama tidak pernah dibahas, kini kembali terjadi lagi.', '2020-07-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `name_u` varchar(50) DEFAULT NULL,
  `email_u` varchar(50) DEFAULT NULL,
  `role_u` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_u`, `name_u`, `email_u`, `role_u`) VALUES
(1, 'Shinobu', 'kisssho@gmail.com', 'Wartawan'),
(2, 'Koyomi', 'araragi@gmail.com', 'Wartawan'),
(3, 'Hitagi', 'gahara@gmail.com', 'Reporter'),
(4, 'Nadeko', 'sengoku@gmail.com', 'Admin'),
(5, 'Tsubasa', 'hanekawa@gmail.com', 'User'),
(6, 'Yotsugi', 'ononoki@gmail.com', 'Chief');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_n`),
  ADD KEY `FK_User_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_User_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
