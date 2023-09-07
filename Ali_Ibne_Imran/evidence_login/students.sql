-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 08:24 AM
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
-- Database: `idb_bisew_wdpf55`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Batch` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Hobbies` varchar(50) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `Name`, `Gender`, `Batch`, `Address`, `Hobbies`, `Dob`, `Email`) VALUES
(1, 'Ali Ibne Imran', 'Male', 'Round 55', 'Nandipara', 'Cricket,Football', '2017-09-19', 'aliibneimran1996@gmail.com'),
(2, 'Sakib', 'Male', 'Round 55', 'Rampura', 'Football', '2023-08-15', 'sakib@gmail.com'),
(8, 'Rahim Mia', 'Male', 'Round 54', 'Mirpur', 'Football,Batminton', '2023-08-10', 'rahim@gmail.com'),
(9, 'Masum Hossain', 'Male', 'Round 55', 'Rapmpura', 'Cricket,Football', '2023-08-18', 'masum@gmail.com'),
(11, 'Nadia Jaman', 'Female', 'Round 55', 'Narayangonj', 'Batminton', '2023-08-25', 'nadia@gmail.com'),
(12, 'kurkure', 'male', '55', 'mirpur', 'cricket', '0000-00-00', 'idbg@gmail.com'),
(13, 'Albert Einstain', 'Male', 'Round 55', 'gulisthan', 'Football', '2023-08-08', 'albert@gmail.com');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `after_student_insert` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO students_audit
 SET student_id = NEW.st_id,
     student_name = NEW.Name,
     action = 'insert'
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_students_delete` AFTER DELETE ON `students` FOR EACH ROW INSERT INTO students_audit
 SET action = 'delete',
     student_id = OLD.st_id,
     student_name = OLD.Name
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_students_update` AFTER UPDATE ON `students` FOR EACH ROW INSERT INTO students_audit
 SET action = 'update',
     student_id = OLD.st_id,
     student_name = OLD.Name
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
