-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 03:02 PM
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
-- Database: `ajax_evidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_info`
--

CREATE TABLE `batch_info` (
  `Id` int(11) NOT NULL,
  `Btc_Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_info`
--

INSERT INTO `batch_info` (`Id`, `Btc_Name`) VALUES
(1, 'WDPF_55'),
(2, 'C#_55'),
(3, 'WDPF_52'),
(4, 'WDPF_48'),
(5, 'WDPF_48'),
(6, 'WDPF_52'),
(7, 'WDPF_44'),
(8, 'WDPF_55'),
(9, 'WDPF_46'),
(10, 'WDPF_40'),
(11, 'WDPF_18'),
(12, 'WDPF_35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_info`
--
ALTER TABLE `batch_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_info`
--
ALTER TABLE `batch_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
