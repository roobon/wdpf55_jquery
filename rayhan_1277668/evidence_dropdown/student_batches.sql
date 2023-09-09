-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_batches`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_info`
--

CREATE TABLE `batch_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch_info`
--

INSERT INTO `batch_info` (`id`, `name`) VALUES
(1, 'WDPF_55'),
(2, 'WDPF_54'),
(3, 'WDPF_53'),
(4, 'WDPF_52'),
(5, 'JAVA_54'),
(6, 'JAVA_53'),
(7, 'JAVA_52'),
(8, 'Python_54'),
(9, 'Python_53'),
(10, 'Python_52');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Gender`, `DOB`, `Email`, `Batch`, `Address`, `Hobbies`) VALUES
(1, 'MD Alauddin', 'Male', '1995-03-30', 'alauddin@gmail.com', 2, 'south,khilgaon', 'Traveling,sports'),
(12, 'Masum', 'Male', '2023-08-03', 'masum@gmail.com', 2, 'jatrabari', 'coding'),
(13, 'Alauddin', 'Male', '2010-01-23', 'ala@uddin.com', 3, 'very near', 'walking'),
(14, 'ALAUDDIN2', 'Male', '2023-08-03', 'alauddin@222.com', 3, 'laskjfl;sadjf;lkjfaslksd;fjla', 'cricket,footbal'),
(15, 'Hosne Ara', 'Female', '2023-08-03', 'hosnemasum@gmail.com', 4, 'asdasdasd', 'coding'),
(16, 'Kabir sing', 'Male', '2023-08-03', 'hosnemasum@gmail.com', 4, 'asdasdasd', 'coding'),
(17, 'AMir khan', 'Male', '2023-08-03', 'hosnemasum@gmail.com', 4, 'asdasdasd', 'coding'),
(18, 'Karina Kppor', 'Female', '2023-08-03', 'hosnemasum@gmail.com', 5, 'asdasdasd', 'coding'),
(19, 'Rajia sultana', 'Female', '2023-08-03', 'hosnemasum@gmail.com', 5, 'asdasdasd', 'coding'),
(20, 'Jinia Shefa', 'Female', '2023-08-03', 'hosnemasum@gmail.com', 6, 'asdasdasd', 'coding'),
(21, 'Roamna', 'Female', '2023-08-03', 'hosnemasum@gmail.com', 6, 'asdasdasd', 'coding');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_batches`
-- (See below for the actual view)
--
CREATE TABLE `student_batches` (
`id` int(11)
,`Subject` varchar(50)
,`student_name` varchar(30)
,`Batch` smallint(6)
);

-- --------------------------------------------------------

--
-- Structure for view `student_batches`
--
DROP TABLE IF EXISTS `student_batches`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_batches`  AS SELECT `batch_info`.`id` AS `id`, `batch_info`.`name` AS `Subject`, `students`.`Name` AS `student_name`, `students`.`Batch` AS `Batch` FROM (`batch_info` join `students`) WHERE `students`.`Batch` = `batch_info`.`id``id`  ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
