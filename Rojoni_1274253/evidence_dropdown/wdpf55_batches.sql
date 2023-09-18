-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 07:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `batchinfo`
--

CREATE TABLE `batchinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batchinfo`
--

INSERT INTO `batchinfo` (`id`, `name`) VALUES
(1, 'wdpf-55'),
(2, 'wdpf-54'),
(3, 'wdpf-56'),
(4, 'wdpf-57'),
(5, 'wdpf-53'),
(6, 'wdpf-58'),
(7, 'wdpf-59');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Batch` smallint(6) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Gender`, `DOB`, `Email`, `Batch`, `Address`) VALUES
(11, 'Abdur Rahim', 'Male', '1986-04-01', 'abdur@gmail.com', 1, 'Dhanmondi'),
(12, 'Masum', 'Male', '2023-08-08', 'masum@gmail.com', 1, 'Dhanmondi'),
(13, 'Alauddin', 'Male', '2013-05-06', 'alauddin@gmail.com', 1, 'Dhanmondi'),
(14, 'Mamun', 'Male', '2023-08-16', 'mamun@gmail.com', 2, 'Bhola'),
(15, 'Shahin', 'Male', '2023-09-04', 'sahhin@gmail.com', 2, 'Dhanmondi'),
(16, 'Rafiq', 'Male', '2023-09-04', 'raifq@gmail.com', 3, 'Dhanmondi'),
(17, 'Kamal', 'Male', '2023-09-04', 'kamal@gmail.com', 3, 'Dhanmondi'),
(18, 'Mizan', 'Male', '2023-09-04', 'mizan@gmail.com', 4, 'Dhanmondi'),
(19, 'Kabir', 'Male', '2023-09-04', 'kabir@gmail.com', 4, 'Dhanmondi'),
(20, 'Rozoni', 'Female', '2023-09-04', 'rozoni@gmail.com', 5, 'Dhanmondi'),
(0, 'John', 'Male', '2010-06-01', 'john@example.com', 2, 'Dhanmondi'),
(0, 'Masum', 'Male', '2010-06-01', 'masum@example.com', 1, 'Dhanmondi'),
(0, 'Mizan', 'Male', '2010-06-01', 'mizan@example.com', 0, 'Dhanmondi');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Name` varchar(255) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Name`, `AGE`) VALUES
('Raju', 25),
('Rahman', 30),
('Sarmista', 27),
('Raju', 25),
('Rahman', 30),
('Sarmista', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchinfo`
--
ALTER TABLE `batchinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchinfo`
--
ALTER TABLE `batchinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
