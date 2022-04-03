-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 05:04 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concat`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_general`
--

CREATE TABLE `sign_up_general` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `birth_date` date NOT NULL DEFAULT current_timestamp(),
  `birth_address` varchar(40) NOT NULL,
  `current_address` varchar(40) NOT NULL,
  `religion` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `social_status` varchar(10) NOT NULL,
  `personal_pic` varchar(100) NOT NULL,
  `type` varchar(25) DEFAULT 'user',
  `access_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up_general`
--

INSERT INTO `sign_up_general` (`id`, `user_id`, `name`, `email`, `pass`, `mobile_num`, `birth_date`, `birth_address`, `current_address`, `religion`, `gender`, `nationality`, `social_status`, `personal_pic`, `type`, `access_num`) VALUES
(1, 0, 'Ibrahim', '0', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', '0', '0', 0),
(5, 1, 'Ibrahim', 'ebrahim3zazy@gmail.com', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', 'images/user.png', '0', 26),
(8, 2, 'Ibrahim', '3zazy@gmail.com', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', '0', '0', 0),
(10, 3, 'Ibrahim', 'zazy@gmail.com', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', '0', '', 0),
(11, 4, 'Ibrahim', 'z@gmail.com', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', '0', NULL, 1),
(12, 2125898594, 'Ibrahim', 'a@gmail.com', '01145452440', 1145452440, '0000-00-00', '0', '0', '0', 'Male', '0', '0', '0', 'user', 0),
(13, 38931059, 'Ibrahim', 'I.3zazy@gmail.com', '01145452440', 1145452440, '2000-02-01', '0', 'mit ghamr', '0', 'Male', '0', '0', '0', 'user', 0),
(14, 1366343688, 'Ibrahim', 'last@gmail.com', '01145452440', 1145452440, '2000-02-01', '0', 'mit ghamr', '0', 'Male', '0', '0', '0', 'user', 0),
(15, 1039652506, 'Ibrahim', 'test@gmail.com', '01145452440', 1145452440, '2000-02-01', '0', '01145452440', '0', 'Male', '0', '0', '0', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up_general`
--
ALTER TABLE `sign_up_general`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up_general`
--
ALTER TABLE `sign_up_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
