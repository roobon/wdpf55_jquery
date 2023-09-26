-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divition_district`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `divid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `divid`) VALUES
(1, 'mirpur', 1),
(2, 'Raypur', 2),
(3, 'Dhanmondi', 1),
(4, 'Kakrail', 1),
(5, 'Dhanmondi', 1),
(6, 'Kakrail', 1),
(7, 'Mohammadpur', 1),
(8, 'Uttora', 1),
(9, 'Azimpur', 1),
(10, 'Chadpur', 2),
(11, 'Cummilla', 2),
(12, 'Chadpur', 2),
(13, 'Cummilla', 2),
(14, 'Rangamati', 2),
(15, 'Khagrachori', 2),
(16, 'Feni', 2),
(17, 'Noakhali', 2),
(18, 'Natore', 3),
(19, 'kustia', 3),
(20, 'Natore', 3),
(21, 'kustia', 3),
(22, 'Rajbari', 3),
(23, 'Naoga', 3),
(24, 'Bogura', 3),
(25, 'joypurhat', 3),
(26, 'Bagherhat', 4),
(27, 'Narail', 4),
(28, 'Bagherhat', 4),
(29, 'Narail', 4),
(30, 'Meherpur', 4),
(31, 'jessore', 4);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Chitagong'),
(3, 'Rajsahi'),
(4, 'Khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
