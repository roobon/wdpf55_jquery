-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 11:10 AM
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
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'abc1', 'Masum', 'masum@gmail.com', '01555', 'sdafkjhklsja'),
(3, 'abc3', 'Ikbal', 'Ikbal@gmail.com', '01555', 'sdafkjhklsja'),
(6, 'abc10', 'Mamun', 'mamun@gmail.com', '01555', 'sdafkjhklsja'),
(10, 'abc11', 'Ikbal', 'Ikbal@gmail.com', '01555', 'sdafkjhklsja'),
(11, 'abc9', 'Rojoni', 'rojoni@gmail.com', '01555', 'sdafkjhklsja'),
(12, 'abc4', 'trisha', 'trisha@gmail.com', '01555', 'sdafkjhklsja'),
(13, 'abc5', 'Alauddin', 'aladunin@gmail.com', '01555', 'sdafkjhklsja'),
(14, 'abc6', 'Imran', 'imran@gmail.com', '01555', 'sdafkjhklsja'),
(15, 'abc7', 'Shubho', 'shubho@gmail.com', '01555', 'sdafkjhklsja'),
(16, 'abc8', 'Sadid', 'sadid@gmail.com', '01555', 'sdafkjhklsja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `st_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
