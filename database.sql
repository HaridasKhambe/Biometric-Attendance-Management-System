-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 06:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'GPR@123');

-- --------------------------------------------------------

--
-- Table structure for table `present_table`
--

CREATE TABLE `present_table` (
  `id` int(5) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `datee` varchar(20) NOT NULL,
  `dayy` varchar(20) NOT NULL,
  `timee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `present_table`
--

INSERT INTO `present_table` (`id`, `subject`, `datee`, `dayy`, `timee`) VALUES
(1, 'CND', '28-04-2023', 'Friday', '1'),
(2, 'CND', '28-04-2023', 'Friday', '1'),
(3, 'CND', '28-04-2023', 'Friday', '1'),
(4, 'CND', '28-04-2023', 'Friday', '1'),
(1, 'EDE', '28-04-2023', 'Friday', '4'),
(1, 'MAN', '30-04-2023', 'Sunday', '2'),
(2, 'MAN', '30-04-2023', 'Sunday', '2'),
(3, 'MAN', '30-04-2023', 'Sunday', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(5) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `enroll_no` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `roll_no`, `enroll_no`, `name`, `contact`) VALUES
(1, 3701, 2000130350, 'Gurav Riya Suresh', 8766859988),
(2, 3702, 2000130351, 'Gaonkar Payal Vinod', 9970247356),
(3, 3703, 2000130352, 'Budhe Amaan Aslam', 7057181861),
(4, 3704, 2000130356, 'Sawant Madhav Girish', 9284031626),
(5, 3705, 2000130358, 'Pawaskar Tanmay Prakash', 7057655396),
(6, 3706, 2000130359, 'Rode Nayan Rajesh', 8983894635),
(7, 3707, 2000130360, 'Kaldi Faisal Rafik', 9527714390),
(8, 3708, 2000130361, 'Dhamaskar Agyan Fakir', 7709995738),
(9, 3709, 2000130362, 'Shigwan Aditya Anant', 8805995203),
(10, 3710, 2000130363, 'Futak Pankaj Chandrakant', 8007501795);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
