-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 09:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ytshoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ytshoppingcart`
--

CREATE TABLE `ytshoppingcart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ytshoppingcart`
--

INSERT INTO `ytshoppingcart` (`id`, `name`, `image`, `price`, `discount`) VALUES
(1, 'Satin', 'C1.png', 100, 20),
(2, 'Quirky', 'c2.png', 150, 35),
(3, 'Organza', 'c3.png', 180, 30),
(4, 'BubbleGum', 'c4.png', 200, 40),
(5, 'JellyBelly', 'c5.png', 80, 10),
(6, 'Silk Crepe', 'c6.png', 200, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ytshoppingcart`
--
ALTER TABLE `ytshoppingcart`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
