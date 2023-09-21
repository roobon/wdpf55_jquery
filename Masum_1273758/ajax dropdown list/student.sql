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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Gender`, `Email`, `Address`, `Mobile`, `Batch`) VALUES
(1, 'Kamrul Alam ', 'Male', 'kamrul@gmail.com', 'Rampura', 1920362514, 1),
(2, 'Rayan Alam ', 'Male', 'rayan@gmail.com', 'Rampura', 1920362514, 2),
(3, 'Mizanur Rahman ', 'Male', 'Mizanur@gmail.com', 'Rampura', 1920362514, 3),
(4, 'Ifran Alam ', 'Male', 'Ifran@gmail.com', 'Rampura', 1920362514, 4),
(5, 'Nishan ', 'Male', 'Nishan@gmail.com', 'Rampura', 1920362514, 5),
(6, 'Sultana Nadia ', 'Male', 'Sultana@gmail.com', 'Rampura', 1920362514, 2),
(7, 'Rukeya ', 'Male', 'Rukeya@gmail.com', 'Rampura', 1920362514, 4),
(8, 'kamrl ', 'Male', 'kalam@gmail.com', 'Rampura', 1920362514, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
