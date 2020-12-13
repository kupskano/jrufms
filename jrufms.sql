-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrufms`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `facility_name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `available` varchar(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `facility_name`, `firstname`, `lastname`, `username`, `email`, `available`, `date_added`, `status`) VALUES
(3, 'Quadrangle', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 05:57:32', 'active'),
(4, 'Auditorium', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:05:21', 'active'),
(5, 'Review Center (G-36)', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:18:53', 'active'),
(6, 'Student Lounge', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:19:19', 'active'),
(7, 'Tower Lounge', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:19:34', 'active'),
(8, 'University Gym', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:19:50', 'active'),
(9, 'Other Facility', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:20:04', 'active'),
(10, 'All Facilities', 'admin', 'admin', 'admin', 'admin@gmail.com', '10', '2020-12-10 06:20:51', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'inactive',
  `user_type` varchar(50) NOT NULL,
  `hash` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `confirm_password`, `email`, `date_added`, `status`, `user_type`, `hash`) VALUES
(5, 'admin', 'admin', 'admin', 'admin', '', 'admin@gmail.com', '2020-12-10 02:14:33', 'active', 'admin', ''),
(29, 'p', 'p', 'p', 'p', '', 'Maflorentina.bucoy@my.jru.edu', '2020-12-13 03:19:22', 'inactive', 'student', 'f4f6dce2f3a0f9dada0c2b5b66452017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
