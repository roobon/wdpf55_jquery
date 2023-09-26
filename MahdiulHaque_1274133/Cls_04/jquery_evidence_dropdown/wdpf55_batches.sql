-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 07:52 AM
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
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batchinfo`
--

INSERT INTO `batchinfo` (`ID`, `Name`) VALUES
(1, 'WDPF_55'),
(2, 'WDPF_56'),
(3, 'WDPF_52'),
(4, 'JAVA_55'),
(5, 'NT_55'),
(6, 'NT_54'),
(7, 'WDPF_51'),
(8, 'JAVA_53'),
(10, 'GAVE_51'),
(11, 'GAVE-53'),
(12, 'GAVE-54');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `Batch` smallint(6) NOT NULL,
  `Dob` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `GENDER`, `Batch`, `Dob`, `Address`, `Email`) VALUES
(1, 'mahdi', 'male', 1, '0000-00-00', 'Malibagh', 'mahdiulh@gmail.com'),
(2, 'rakib', 'male', 1, '2023-09-12', 'Dhalpur', 'rakib@gmail.com'),
(3, 'jamal', 'male', 2, '0000-00-00', 'Khilgaon', 'jamal@gmail.com'),
(4, 'jahangir', 'male', 3, '2023-09-13', 'Dhanmondi', 'jahangir@gmail.com'),
(5, 'mizan', 'male', 4, '2013-09-18', 'Demra', 'mizan@gmail.com'),
(6, 'mamun', 'male', 5, '2023-09-13', 'paltan', 'mamunbiryani@gmail.com'),
(15, 'karim', 'male', 3, '2014-09-18', 'framgate', 'karimbhai@gmail.com'),
(25, 'Labiba', 'female', 2, '2015-09-09', 'kamalapur', 'labiba@gmail.com'),
(26, 'Jahanara', 'female', 3, '2023-09-06', 'malibagh', 'jahanara@gmail.com'),
(28, 'sadid', 'male', 5, '0000-00-00', '', ''),
(30, 'mahima', 'female', 10, '2014-09-11', 'Malibagh', 'mahima@gmail.com'),
(31, 'rahima', 'female', 12, '2015-09-03', 'golapbagh', 'rahima@gmail.com'),
(32, 'Kamal Hossain', 'male', 11, '1998-09-11', 'mirpur', 'kamal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchinfo`
--
ALTER TABLE `batchinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchinfo`
--
ALTER TABLE `batchinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
