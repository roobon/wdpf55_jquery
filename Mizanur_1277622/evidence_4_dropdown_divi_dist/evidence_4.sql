-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 09:14 AM
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
-- Database: `evidence_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `division`) VALUES
(1, 'Dhaka', '1'),
(2, 'Narayanganj', '1'),
(3, 'Faridpur', '1'),
(4, 'Narsingdi', '1'),
(5, 'Shariatpur ', '1'),
(6, 'Kishoreganj', '1'),
(7, 'Barisal', '2'),
(8, 'Patuakhali', '2'),
(9, 'Barguna', '2'),
(10, 'Pirojpur', '2'),
(11, 'Bhola ', '2'),
(12, 'Chittagong', '3'),
(13, 'Cox,s Bazar', '3'),
(14, 'Rangamati', '3'),
(15, 'Bandarban', '3'),
(16, 'Khagrachhari', '3'),
(17, 'Khulna', '4'),
(18, 'Bagherhat', '4'),
(19, 'Sathkhira', '4'),
(20, 'Jessore', '4'),
(21, 'Magura', '4'),
(22, 'Rajshahi', '5'),
(23, 'Natore', '5'),
(24, 'Sirajganj', '5'),
(25, 'Pabna', '5'),
(26, 'Chapainawabganj', '5'),
(27, 'Rangpur', '6'),
(28, 'Gaibandha', '6'),
(29, 'Nilphamari', '6'),
(30, 'Kurigram', '6'),
(31, 'Lalmonirhat', '6'),
(32, 'Mymensingh', '7'),
(33, 'Jamalpur', '7'),
(34, 'Netrokona', '7'),
(35, 'Sherpur', '7'),
(36, 'Sylhet', '8'),
(37, 'Habiganj', '8'),
(38, 'Moulvibazar', '8'),
(39, 'Sunamganj ', '8');

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
(2, 'Barisal'),
(3, 'Chattogram'),
(4, 'Khulna'),
(5, 'Rajshahi'),
(6, 'Rangpur'),
(7, 'Mymensingh '),
(8, 'Sylhet');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
