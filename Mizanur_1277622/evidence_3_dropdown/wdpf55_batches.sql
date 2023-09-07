-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:22 AM
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
-- Database: `wdpf55_batches`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_info`
--

CREATE TABLE `batch_info` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_info`
--

INSERT INTO `batch_info` (`id`, `name`) VALUES
(1, 'WDPF-55'),
(2, 'WDPF-54'),
(3, 'GAVE-53'),
(4, 'JEE-52'),
(5, 'WDPF-51'),
(6, 'GAVE-55'),
(7, 'JEE-54'),
(8, 'JEE-53');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Batch` tinyint(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Batch`, `Name`, `Phone`, `Email`) VALUES
(101, 1, 'Mizanur Rahman', '01768139923', 'mizanur1326@gmail.com'),
(102, 1, 'Mehedi Hasan', '0168741', 'mehedi@gmail.com'),
(103, 2, 'Ikbal Hossain', '456', 'ikbal@gmail.com'),
(104, 3, 'Imran', '963', 'imran@g.com'),
(105, 4, 'Mahadiul ', '852', 'maha@g.com'),
(106, 5, 'Hasnain Sadid', '741', 'sadid@hub.com'),
(107, 4, 'Mamun or Rasid', '159', 'mamun@sovapoti.com'),
(108, 6, 'Masum Hossain', '753', 'masum@gmail.com'),
(109, 6, 'K. A Rayhan', '489', 'rayhan@gmail.com'),
(110, 7, 'Aladin', '941', 'aladin@gmail.com'),
(111, 7, 'Sifat Rojoni', '359', 'rojoni@gmail.com'),
(112, 8, 'Nadia Trisha', '761', 'nadia@g.com'),
(113, 8, 'Sakib', '493', 'sakib@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_info`
--
ALTER TABLE `batch_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_info`
--
ALTER TABLE `batch_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
