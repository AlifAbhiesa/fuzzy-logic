-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2019 at 10:45 AM
-- Server version: 10.3.17-MariaDB-0ubuntu0.19.04.1
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id` int(11) NOT NULL,
  `suhu` float DEFAULT NULL,
  `kekeruhan` float DEFAULT NULL,
  `ph` float DEFAULT NULL,
  `statusHeater` varchar(50) DEFAULT NULL,
  `statusPompa` varchar(50) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`id`, `suhu`, `kekeruhan`, `ph`, `statusHeater`, `statusPompa`, `createdAt`) VALUES
(1, 1, 1, 1, 'lama', 'lama', '2019-11-15 05:36:14'),
(2, 30, 10, 40, 'bentar', 'bentar', '2019-11-15 05:48:19'),
(6, 20, 10, 15, 'lama ', 'lama', '2019-11-20 03:35:26'),
(7, 20, 10, 5, 'lama', 'bentar', '2019-11-20 03:35:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
