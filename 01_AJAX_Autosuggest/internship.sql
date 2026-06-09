-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2026 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `stud_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `mode` enum('Online','Onsite','Hybrid') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`stud_name`, `email`, `contact`, `mode`) VALUES
('Aarav Patel', 'aarav@gmail.com', '9876543210', 'Online'),
('Priya Shah', 'priya@gmail.com', '9876543211', 'Onsite'),
('Raj Mehta', 'raj@gmail.com', '9876543212', 'Hybrid'),
('Neha Joshi', 'neha@gmail.com', '9876543213', 'Online'),
('Karan Patel', 'karan@gmail.com', '9876543214', 'Onsite'),
('Riya Desai', 'riya@gmail.com', '9876543215', 'Hybrid'),
('Vivek Trivedi', 'vivek@gmail.com', '9876543216', 'Online'),
('Sneha Pandya', 'sneha@gmail.com', '9876543217', 'Onsite'),
('Yash Parmar', 'yash@gmail.com', '9876543218', 'Hybrid'),
('Mitali Shah', 'mitali@gmail.com', '9876543219', 'Online'),
('Dhruv Bhatt', 'dhruv@gmail.com', '9876543220', 'Onsite'),
('Krisha Patel', 'krisha@gmail.com', '9876543221', 'Hybrid'),
('Harsh Vora', 'harsh@gmail.com', '9876543222', 'Online'),
('Pooja Dave', 'pooja@gmail.com', '9876543223', 'Onsite'),
('Nisarg Modi', 'nisarg@gmail.com', '9876543224', 'Hybrid');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
