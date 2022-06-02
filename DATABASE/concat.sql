-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 05:51 AM
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
-- Table structure for table `chating`
--

CREATE TABLE `chating` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `chat_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chating`
--

INSERT INTO `chating` (`id`, `sender_id`, `receiver_id`, `chat_time`) VALUES
(1, 27539121, 396084773, '2022-06-02 03:26:17'),
(2, 1319098029, 27539121, '2022-06-02 03:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `my_user_id` int(11) NOT NULL,
  `freind_user_id` int(11) NOT NULL,
  `statue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `my_user_id`, `freind_user_id`, `statue`) VALUES
(50, 1319098029, 27539121, 'friend'),
(51, 396084773, 27539121, 'friend');

-- --------------------------------------------------------

--
-- Table structure for table `last_seen`
--

CREATE TABLE `last_seen` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `last_seen`
--

INSERT INTO `last_seen` (`id`, `user_id`, `login_time`, `last_seen`, `active`) VALUES
(1, 1319098029, '2022-06-01 06:49:48', '2022-06-02 03:51:52', 1),
(2, 396084773, '2022-06-01 23:48:15', '2022-06-02 03:48:35', 1),
(3, 27539121, '2022-05-30 23:03:04', '2022-06-02 03:51:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `file` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `received` tinyint(1) NOT NULL DEFAULT 0,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `delete_sender` int(1) NOT NULL DEFAULT 0,
  `delete_receiver` int(1) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg_id`, `sender_id`, `receiver_id`, `file`, `message`, `received`, `seen`, `delete_sender`, `delete_receiver`, `time`) VALUES
(10, 2147483647, 1319098029, 27539121, '0', 'some message', 0, 1, 0, 0, '2022-06-01 06:50:39'),
(11, 2147483647, 27539121, 1319098029, '0', 'hi hamed', 0, 1, 0, 0, '2022-06-01 06:53:10'),
(12, 2147483647, 1319098029, 27539121, '0', 'hi ibrahim 3zazy', 0, 1, 0, 0, '2022-06-01 06:53:54'),
(13, 2147483647, 27539121, 1319098029, '0', 'how are you', 0, 1, 0, 0, '2022-06-01 07:12:42'),
(14, 2147483647, 1319098029, 27539121, '0', 'fine thanks', 0, 1, 0, 0, '2022-06-01 07:13:04'),
(15, 2147483647, 1319098029, 27539121, '0', 'iam sender', 0, 1, 0, 0, '2022-06-01 07:16:05'),
(17, 2147483647, 27539121, 1319098029, '0', 'and iam recever', 0, 1, 0, 0, '2022-06-01 07:53:35'),
(18, 2147483647, 1319098029, 27539121, '0', 'zesdfjznlksdf\r\nzespdifj;', 0, 1, 0, 0, '2022-06-01 08:05:12'),
(19, 2147483647, 1319098029, 27539121, '0', 'line one\r\nline two', 0, 1, 0, 0, '2022-06-01 08:05:42'),
(20, 2147483647, 27539121, 1319098029, '0', 'some message', 0, 1, 0, 0, '2022-06-01 08:24:54'),
(21, 2147483647, 27539121, 1319098029, '0', 'hi', 0, 1, 0, 0, '2022-06-01 08:30:27'),
(22, 2147483647, 27539121, 1319098029, '0', 'some message', 0, 1, 0, 0, '2022-06-01 08:30:53'),
(23, 2147483647, 27539121, 1319098029, '0', 'test\r\n', 0, 1, 0, 0, '2022-06-01 08:31:52'),
(24, 2147483647, 27539121, 1319098029, '0', 'test 2 ', 0, 1, 0, 0, '2022-06-01 08:32:51'),
(25, 2147483647, 27539121, 1319098029, '0', 'hi', 0, 1, 0, 0, '2022-06-01 09:12:01'),
(26, 2147483647, 27539121, 1319098029, '0', 'sds', 0, 1, 0, 0, '2022-06-01 09:30:51'),
(27, 2147483647, 1319098029, 27539121, '0', 'hi', 0, 1, 0, 0, '2022-06-01 09:39:07'),
(28, 2147483647, 1319098029, 27539121, '0', 'hello', 0, 1, 0, 0, '2022-06-01 09:39:21'),
(29, 2147483647, 27539121, 1319098029, '0', 'hi', 0, 1, 0, 0, '2022-06-01 09:39:28'),
(30, 2147483647, 27539121, 1319098029, '0', 'hello', 0, 1, 0, 0, '2022-06-01 11:12:32'),
(31, 2147483647, 27539121, 1319098029, '0', 'a', 0, 1, 0, 0, '2022-06-01 11:13:40'),
(32, 2147483647, 27539121, 1319098029, '0', 'z', 0, 1, 0, 0, '2022-06-01 11:15:34'),
(51, 2147483647, 27539121, 1319098029, '0', 'q', 0, 1, 0, 0, '2022-06-01 11:27:50'),
(52, 2147483647, 27539121, 1319098029, '0', 'qweq', 0, 1, 0, 0, '2022-06-01 11:28:10'),
(53, 2147483647, 27539121, 1319098029, '0', 'aas', 0, 1, 0, 0, '2022-06-01 13:39:34'),
(54, 2147483647, 27539121, 1319098029, '0', 'qq', 0, 1, 0, 0, '2022-06-01 13:39:52'),
(55, 2147483647, 27539121, 1319098029, '0', 'ss', 0, 1, 0, 0, '2022-06-01 13:40:41'),
(56, 2147483647, 27539121, 1319098029, '0', 'new message', 0, 1, 0, 0, '2022-06-01 13:43:42'),
(57, 2147483647, 27539121, 1319098029, '0', 'send', 0, 1, 0, 0, '2022-06-01 13:43:58'),
(58, 2147483647, 27539121, 1319098029, '0', 'Hi', 0, 1, 0, 0, '2022-06-01 13:45:55'),
(59, 2147483647, 1319098029, 27539121, '0', 'hi', 0, 1, 0, 0, '2022-06-01 13:46:10'),
(60, 2147483647, 27539121, 1319098029, '0', 'how are you', 0, 1, 0, 0, '2022-06-01 13:46:18'),
(61, 2147483647, 1319098029, 27539121, '0', 'fine', 0, 1, 0, 0, '2022-06-01 13:46:38'),
(62, 2147483647, 27539121, 1319098029, '0', 'again how are you??', 0, 1, 0, 0, '2022-06-01 13:48:24'),
(63, 2147483647, 1319098029, 27539121, '0', 'fine and you', 0, 1, 0, 0, '2022-06-01 13:48:49'),
(64, 2147483647, 27539121, 1319098029, '0', 'hi', 0, 1, 0, 0, '2022-06-01 13:50:01'),
(65, 2147483647, 27539121, 1319098029, '0', 'hi again', 0, 1, 0, 0, '2022-06-01 13:50:19'),
(66, 2147483647, 27539121, 1319098029, '0', 'live chat done (*.*)', 0, 1, 0, 0, '2022-06-01 13:51:28'),
(67, 2147483647, 1319098029, 27539121, '0', 'not done yet finish it first and then we can say done >_<', 0, 1, 0, 0, '2022-06-01 13:52:46'),
(69, 2147483647, 27539121, 1319098029, '0', 'hala', 0, 1, 0, 0, '2022-06-01 16:51:35'),
(70, 2147483647, 1319098029, 27539121, '0', 'yap', 0, 1, 0, 0, '2022-06-01 17:02:16'),
(71, 2147483647, 27539121, 1319098029, '0', 'test', 0, 1, 0, 0, '2022-06-01 17:03:26'),
(72, 2147483647, 27539121, 1319098029, '0', 'another test', 0, 1, 0, 0, '2022-06-01 17:04:19'),
(73, 2147483647, 27539121, 1319098029, '0', 'another test 0', 0, 1, 0, 0, '2022-06-01 17:05:19'),
(74, 2147483647, 27539121, 1319098029, '0', 'another test 2', 0, 1, 0, 0, '2022-06-01 17:05:36'),
(75, 2147483647, 27539121, 1319098029, '0', 'another test 3', 0, 1, 0, 0, '2022-06-01 17:06:50'),
(76, 2147483647, 27539121, 1319098029, '0', 'another test 4', 0, 1, 0, 0, '2022-06-01 17:07:10'),
(77, 2147483647, 1319098029, 27539121, '0', 'another test 5', 0, 1, 0, 0, '2022-06-01 17:07:22'),
(78, 2147483647, 1319098029, 27539121, '0', 'another test 6', 0, 1, 0, 0, '2022-06-01 17:07:36'),
(79, 2147483647, 1319098029, 27539121, '0', 'another test 7', 0, 1, 0, 0, '2022-06-01 17:08:02'),
(80, 2147483647, 1319098029, 27539121, '0', 'another test 8', 0, 1, 0, 0, '2022-06-01 17:08:12'),
(81, 2147483647, 27539121, 1319098029, '0', 'go', 0, 1, 0, 0, '2022-06-01 17:45:24'),
(82, 2147483647, 27539121, 1319098029, '0', 'go 2', 0, 1, 0, 0, '2022-06-01 17:45:57'),
(83, 2147483647, 27539121, 1319098029, '0', 'that is Okay', 0, 1, 0, 0, '2022-06-01 23:34:29'),
(84, 2147483647, 1319098029, 27539121, '0', 'yap', 0, 1, 0, 0, '2022-06-01 23:35:19'),
(85, 2147483647, 27539121, 1319098029, '0', 'another test', 0, 1, 0, 0, '2022-06-01 23:56:38'),
(86, 2147483647, 1319098029, 27539121, '0', 'another test', 0, 1, 0, 0, '2022-06-02 00:00:52'),
(88, 2147483647, 396084773, 27539121, '0', 'Hi', 0, 1, 0, 0, '2022-06-02 02:40:48'),
(89, 2147483647, 27539121, 396084773, '0', 'Hi', 0, 1, 0, 0, '2022-06-02 03:16:59'),
(90, 2147483647, 396084773, 27539121, '0', 'How are you?', 0, 1, 0, 0, '2022-06-02 03:19:29'),
(91, 2147483647, 27539121, 396084773, '0', 'fine and you', 0, 1, 0, 0, '2022-06-02 03:21:26'),
(92, 2147483647, 396084773, 27539121, '0', 'fine what are you doing now &gt;!&lt;', 0, 1, 0, 0, '2022-06-02 03:22:39'),
(93, 2147483647, 27539121, 396084773, '0', 'nothing what are you doing ?', 0, 1, 0, 0, '2022-06-02 03:26:17'),
(94, 2147483647, 396084773, 27539121, '0', 'Iam chating with you ?', 0, 0, 0, 0, '2022-06-02 03:27:03'),
(95, 2147483647, 1319098029, 27539121, '0', 'ان شاء الله اخر اختبار', 0, 1, 0, 0, '2022-06-02 03:37:33'),
(96, 2147483647, 1319098029, 27539121, '0', 'ان شاء الله اخر اختبار', 0, 1, 0, 0, '2022-06-02 03:38:20'),
(97, 2147483647, 1319098029, 27539121, '0', 'بسم الله الرحمن الرحيم', 0, 1, 0, 0, '2022-06-02 03:44:11'),
(98, 2147483647, 27539121, 1319098029, '0', 'الحمد لله رب العالمين', 0, 1, 0, 0, '2022-06-02 03:49:06');

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
(205, 510124601, 1319098029, 'مهارات التواصل', '98-bdee5aمهارات-التواصل.webp', '0', '0', 0, 0, '2022-05-28 08:26:05', 4),
(206, 2016586050, 1319098029, 'Posted By Ibrahim 3zazy', '0', '0', '0', 0, 0, '2022-05-30 05:27:59', 1),
(208, 1828395452, 1319098029, '0', '0', '0', '0', 0, 0, '2022-05-30 20:31:13', 0),
(209, 994494778, 1319098029, '0', '0', '0', '0', 0, 0, '2022-05-30 20:32:04', 0),
(210, 867191471, 27539121, '?', '330-3302186_open-book-clipart-png-download.png', '0', '0', 0, 0, '2022-05-31 12:41:56', 4);

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_like` int(1) NOT NULL
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
  `cover_pic` text NOT NULL,
  `type` varchar(25) DEFAULT 'user',
  `access_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up_general`
--

INSERT INTO `sign_up_general` (`id`, `user_id`, `name`, `email`, `pass`, `mobile_num`, `birth_date`, `birth_address`, `current_address`, `religion`, `gender`, `nationality`, `social_status`, `personal_pic`, `cover_pic`, `type`, `access_num`) VALUES
(16, 396084773, 'Ibrahim', 'ebrahim3zazy@gmail.com', 'Admin3', 1145452440, '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'policeofficer_man_person_polici_2846.png', 'unnamed.png', 'user', 16),
(17, 1319098029, 'hamed', 'ebrahimelazazy1@yahoo.com', 'admin1', 1094989981, '1998-01-23', '0', 'mitghamr', '0', 'Male', '0', '0', '—Pngtree—muslim man photo_6934073.png', 'background.jpg', 'user', 11),
(18, 27539121, 'Ibrahim 3zazy', 'Ibrahim3zazy@hotmail.com', 'admin1', 1145452440, '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'quran (2).png', 'cover-96.jpg', 'user', 3);

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
-- Indexes for table `chating`
--
ALTER TABLE `chating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_seen`
--
ALTER TABLE `last_seen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `file` (`file`),
  ADD KEY `message` (`message`(1024));

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
-- AUTO_INCREMENT for table `chating`
--
ALTER TABLE `chating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `last_seen`
--
ALTER TABLE `last_seen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
