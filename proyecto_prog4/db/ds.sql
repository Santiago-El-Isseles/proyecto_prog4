-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2025 at 07:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `nombreyapellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nota` varchar(1000) NOT NULL,
  `fechanota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nombreyapellido`, `email`, `nota`, `fechanota`) VALUES
(1, 'artorias', 'ejemplo@hotmail.com', 'buenaso', '01/10/2001'),
(2, 'ejemplo', 'prueba@prueba.com', 'sis', 'ok'),
(3, 'asd', 'Ejemeplo@ejemplo.com', '123', '2025-06-25 10:03:20'),
(4, 'asd', 'asd@asd.com', '123', '2025-06-25 10:03:37'),
(5, 'asd', 'asd@asd.com', '123', '2025-06-25 10:04:03'),
(6, 'ad', 'das@asd.copm', 'ad', '2025-06-25 10:04:55'),
(7, 'ad', 'das@asd.copm', 'ad', '2025-06-25 10:05:01'),
(8, 'ad', 'das@asd.copm', 'ad', '2025-06-25 10:06:12'),
(9, 'asd', 'asd@asd.com', '123', '2025-06-25 10:06:24'),
(10, 'asd', 'asd@asd.com', '123', '2025-06-25 10:07:38'),
(11, 'ejemploo', 'awa@awa.com', '123', '2025-06-25 10:08:25'),
(12, '123', 'asd@asd.com', '123', '25/06/2025 10:17:45'),
(13, 'aw', 'asd@asd.com', 'asd2', '25/06/2025 10:18:01'),
(14, 'asd', 'asd@asd.com', 'funciona\"', '25/06/2025 10:22:51'),
(15, 'aasd', 'awa@awa.com', 'ytuyty', '25/06/2025 10:23:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
