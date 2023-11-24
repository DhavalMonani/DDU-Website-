-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 08:27 PM
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
-- Database: `ddu`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `faculty_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `full_name`, `email`, `pass`, `subject`, `department`) VALUES
(1, 'Himanshu k purohit', 'hkp@gmail.com', '$2y$10$C2mMC9wUN3B6Cdzo8..53OMOC85HjkmtQqU.loyrwZWCXLdmylRN.', 'PHP', 'mca');

-- --------------------------------------------------------

--
-- Table structure for table `marks_and_attendance`
--

CREATE TABLE `marks_and_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `attendance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks_and_attendance`
--

INSERT INTO `marks_and_attendance` (`id`, `student_id`, `subject`, `session`, `marks`, `attendance`) VALUES
(4, 1, 'PHP', 'sessional2', 2, 2),
(5, 1, 'PHP', 'sessional3', 36, 16),
(7, 3, 'PHP', 'sessional2', 22, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` int(11) NOT NULL,
  `field` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `firstname`, `lastname`, `gender`, `age`, `field`, `mobile`, `email`, `birthdate`) VALUES
(1, 'Dhaval', 'Monani', 'male', 21, 'mca', '9687342376', 'dhvlmonani@gmail.com', '2002-06-24'),
(2, 'John', 'Cena', 'male', 25, 'computer_engineering', '1234567890', 'jhcn@gmail.com', '2000-02-29'),
(3, 'Mihir', 'Bachani', 'male', 22, 'mca', '0987654321', 'mihir@gmail.com', '2001-09-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `marks_and_attendance`
--
ALTER TABLE `marks_and_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks_and_attendance`
--
ALTER TABLE `marks_and_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
