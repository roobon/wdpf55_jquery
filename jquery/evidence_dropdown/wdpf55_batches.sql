-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:20 AM
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
-- Table structure for table `batchinfo`
--

CREATE TABLE `batchinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batchinfo`
--

INSERT INTO `batchinfo` (`id`, `name`) VALUES
(1, 'WDPF-55'),
(2, 'WDPF-56'),
(3, 'WDPF-57'),
(4, 'WDPF-58'),
(5, 'JEE-55'),
(6, 'JEE-56'),
(7, 'GAVE-55'),
(8, 'GAVE-56');

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
  `Address` varchar(50) NOT NULL,
  `Hobbies` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Gender`, `DOB`, `Email`, `Batch`, `Address`, `Hobbies`) VALUES
(11, 'Abdur Rahim', 'Male', '1986-04-01', 'abdur@gmail.com', 1, 'Dhanmondi', 'cricket,hockey,badminton'),
(12, 'Masum', 'Male', '2023-08-08', 'masum@gmail.com', 1, 'Dhanmondi', 'Cricket'),
(13, 'Alauddin', 'Male', '2013-05-06', 'alauddin@gmail.com', 1, 'Dhanmondi', 'cricket, football'),
(14, 'Mamun', 'Male', '2023-08-16', 'mamun@gmail.com', 2, 'Bhola', 'cricket,football'),
(15, 'Shahin', 'Male', '2023-09-04', 'sahhin@gmail.com', 2, 'Dhanmondi', ''),
(16, 'Rafiq', 'Male', '2023-09-04', 'raifq@gmail.com', 3, 'Dhanmondi', ''),
(17, 'Kamal', 'Male', '2023-09-04', 'kamal@gmail.com', 3, 'Dhanmondi', ''),
(18, 'Mizan', 'Male', '2023-09-04', 'mizan@gmail.com', 4, 'Dhanmondi', ''),
(19, 'Kabir', 'Male', '2023-09-04', 'kabir@gmail.com', 4, 'Dhanmondi', ''),
(20, 'Rozoni', 'Female', '2023-09-04', 'rozoni@gmail.com', 5, 'Dhanmondi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchinfo`
--
ALTER TABLE `batchinfo`
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
-- AUTO_INCREMENT for table `batchinfo`
--
ALTER TABLE `batchinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
