-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 05:54 PM
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
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_content` varchar(10000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `videos` varchar(70) NOT NULL,
  `attached_files` varchar(70) NOT NULL,
  `comments` int(11) NOT NULL,
  `liks` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `contain` int(1) NOT NULL DEFAULT 0 COMMENT '0 for none 1 for text 2 for images 3 for videos 4 for files'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `post_id`, `user_id`, `post_content`, `image`, `videos`, `attached_files`, `comments`, `liks`, `date`, `contain`) VALUES
(190, 906572040, 396084773, 'text only', '0', '0', '0', 0, 0, '2022-05-26 12:10:26', 1),
(191, 1568711047, 396084773, 'text with image', '272052489_253758660230111_8417523194495608367_n.jpg', '0', '0', 0, 0, '2022-05-26 12:10:49', 4),
(193, 1610558597, 396084773, '0', '272052489_253758660230111_8417523194495608367_n.jpg', '0', '0', 0, 0, '2022-05-26 12:11:29', 2),
(195, 923588346, 396084773, 'my link \r\nhttp://localhost/Concat/profile.php', '0', '0', '0', 0, 0, '2022-05-26 12:19:28', 1),
(196, 1704861124, 396084773, 'WES:OIDFjOISD\r\nSDFi;oS:Edf\r\nSDfcnfJPOES:FDKc\r\nESJIDFhciOESdfklc\r\nWESDFIUhcIUWESfd\r\n]WESIODFiuSEnfdiucx', '0', '0', '0', 0, 0, '2022-05-26 12:25:33', 1),
(198, 216974817, 396084773, 'Post', 'BLOG_ganhardinheiroemcasa-arabe-670x419.png', '0', '0', 0, 0, '2022-05-26 13:08:08', 4),
(200, 38669667, 396084773, 'ode', '0', 'qq.mp4', '0', 0, 0, '2022-05-26 13:20:26', 5),
(202, 1926007098, 396084773, 'ode \r\nPosted by Ibrahim3zazy', '0', 'qq.mp4', '0', 0, 0, '2022-05-26 13:22:51', 5),
(203, 724320340, 396084773, 'cgyvbh', '0', '0', '0', 0, 0, '2022-05-26 15:32:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_doctor`
--

CREATE TABLE `sign_up_doctor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `material_study` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_employee`
--

CREATE TABLE `sign_up_employee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Job_title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(16, 396084773, 'Admin', 'ebrahim3zazy@gmail.com', 'Admin3', 1145452440, '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'images/user.png', 'user', 7);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_student`
--

CREATE TABLE `sign_up_student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enter_date` date NOT NULL DEFAULT current_timestamp(),
  `graduation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_user`
--

CREATE TABLE `sign_up_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `institution_address` varchar(80) NOT NULL,
  `employment_type` varchar(80) NOT NULL,
  `salary_range` varchar(50) NOT NULL,
  `employees_number` int(11) NOT NULL,
  `vip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contain` (`contain`);
ALTER TABLE `posting` ADD FULLTEXT KEY `post_content` (`post_content`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up_doctor`
--
ALTER TABLE `sign_up_doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `sign_up_employee`
--
ALTER TABLE `sign_up_employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `sign_up_general`
--
ALTER TABLE `sign_up_general`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `sign_up_student`
--
ALTER TABLE `sign_up_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `sign_up_user`
--
ALTER TABLE `sign_up_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up_doctor`
--
ALTER TABLE `sign_up_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up_employee`
--
ALTER TABLE `sign_up_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up_general`
--
ALTER TABLE `sign_up_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sign_up_student`
--
ALTER TABLE `sign_up_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up_user`
--
ALTER TABLE `sign_up_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
