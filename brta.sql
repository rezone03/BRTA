-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 07:06 PM
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
-- Database: `brta`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `name` varchar(255) NOT NULL,
  `nid_no` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `vehicle_chassis_no` varchar(255) NOT NULL,
  `present_addr` varchar(255) NOT NULL,
  `permanent_addr` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `nid_softcopy` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`name`, `nid_no`, `vehicle_no`, `vehicle_chassis_no`, `present_addr`, `permanent_addr`, `profile_pic`, `nid_softcopy`, `id`, `email`) VALUES
('Md. Ashiqur Rahman', 'sdf', 'sdf', 'dsf', 'BBDD', 'PREEF', './uploads/ashiqur35-3162@diu.edu.bd.jpg', './uploads/ashiqur35-3162@diu.edu.bd.pdf', 1, 'ashiqur35-3162@diu.edu.bd'),
('Md. Ashiqur Rahman', 'sdf', 'sdf', 'dsf', 'BBDD', 'PREEF', './uploads/ashiqur35-3163@diu.edu.bd.jpg', './uploads/ashiqur35-3163@diu.edu.bd.pdf', 2, 'ashiqur35-3163@diu.edu.bd'),
('Banna', 'sdf', 'sdf', 'dsf', 'BBDD', 'PREEF', './uploads/ashiqur35-3165@diu.edu.bd.png', './uploads/ashiqur35-3165@diu.edu.bd.pdf', 3, 'ashiqur35-3165@diu.edu.bd');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`email`) VALUES
('fgfgf@gmail.com'),
('ashiqur35-3162@diu.edu.bd'),
('ashik@gmail.com'),
('404offensec@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
