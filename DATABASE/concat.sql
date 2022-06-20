-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 10:03 AM
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
(4, 27539121, 1319098029, '2022-06-02 12:28:23'),
(5, 27539121, 396084773, '2022-06-02 12:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `comment_like`
--

CREATE TABLE `comment_like` (
  `id` bigint(20) NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_like` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_like`
--

INSERT INTO `comment_like` (`id`, `comment_id`, `post_id`, `user_id`, `post_like`, `date`) VALUES
(122, 2023644923115, 1449153495, 27539121, 1, '2022-06-20 07:26:29'),
(123, 1026416097115, 1449153495, 27539121, 1, '2022-06-20 07:26:30'),
(171, 727603890115, 1449153495, 27539121, 1, '2022-06-20 08:01:27'),
(172, 1626781093115, 1449153495, 1319098029, 1, '2022-06-20 08:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `id` int(11) NOT NULL,
  `language_id` bigint(20) NOT NULL,
  `field` varchar(250) NOT NULL,
  `language` varchar(120) NOT NULL,
  `lang_cover` varchar(500) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cources`
--

INSERT INTO `cources` (`id`, `language_id`, `field`, `language`, `lang_cover`, `add_date`) VALUES
(1, 1544435530115, 'Back-end', 'HTML', 'me.png', '2022-06-18 05:41:54'),
(2, 1632457625115, 'Back-end', 'HTML', 'me.png', '2022-06-18 05:43:20'),
(3, 1648430490115, 'Front-end', 'HTML', 'me.png', '2022-06-18 06:21:07'),
(4, 2055912039115, 'Front-end', 'HTML', 'me.png', '2022-06-18 06:22:23'),
(5, 289762209115, 'Front-end', 'CSS', 'me.png', '2022-06-18 06:23:33'),
(6, 676966234115, 'Back-end', 'JavaScript', 'IMG_20220510_073314.jpg', '2022-06-18 10:46:06'),
(7, 1163467373115, 'Front-end', 'HTML', 'IMG_20220510_073314.jpg', '2022-06-18 10:48:06'),
(8, 119601228115, 'Desktop_programming', 'Visual_Basic', 'IMG_20220510_073314.jpg', '2022-06-18 11:11:29'),
(9, 1501783709115, 'Front-end', 'HTML', 'me.png', '2022-06-18 11:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `create_group`
--

CREATE TABLE `create_group` (
  `id` int(11) NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '0 for private\r\n1 for public\r\n2 Need Accept To Join',
  `visible` tinyint(4) NOT NULL DEFAULT 1,
  `group_pic` varchar(150) NOT NULL,
  `group_about` varchar(100) DEFAULT NULL,
  `group_rules` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `create_group`
--

INSERT INTO `create_group` (`id`, `admin_id`, `group_id`, `group_name`, `type`, `visible`, `group_pic`, `group_about`, `group_rules`, `date`) VALUES
(7, 27539121, 242618731114, 'First', 0, 1, 'defulte_cover.jpg', '', NULL, '2022-06-03 05:56:57'),
(8, 27539121, 2113057528114, 'Second Group', 1, 1, 'defulte_cover.jpg', '', NULL, '2022-06-03 05:58:24'),
(9, 27539121, 1753710930114, 'First', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:33:17'),
(10, 27539121, 1404427441114, 'a', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:33:45'),
(11, 27539121, 787074396114, 'a', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:33:46'),
(12, 27539121, 863057840114, 'a', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:33:55'),
(13, 27539121, 1189506501114, 'a', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:34:02'),
(14, 27539121, 347371549114, 'Ahmed', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:34:31'),
(15, 27539121, 916430527114, 'Ibrahim', 0, 1, 'defulte_cover.jpg', NULL, NULL, '2022-06-03 12:35:02');

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
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` int(11) NOT NULL,
  `group_id` bigint(11) NOT NULL,
  `group_members_id` bigint(11) NOT NULL,
  `accept` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `group_id`, `group_members_id`, `accept`) VALUES
(10, 916430527114, 396084773, 1),
(11, 916430527114, 1319098029, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_moderator`
--

CREATE TABLE `group_moderator` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `moderator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_posting`
--

CREATE TABLE `group_posting` (
  `id` bigint(20) NOT NULL,
  `group_id` bigint(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `instructor_course`
--

CREATE TABLE `instructor_course` (
  `id` int(11) NOT NULL,
  `language_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `instructor_name` varchar(100) NOT NULL,
  `course_cover` text NOT NULL,
  `course_link` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor_course`
--

INSERT INTO `instructor_course` (`id`, `language_id`, `course_id`, `instructor_name`, `course_cover`, `course_link`, `add_date`) VALUES
(1, 289762209115, 1340725115, 'Ibrahim', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 06:23:39'),
(2, 0, 1214889146115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:29:27'),
(3, 0, 2049183399115, 'as', 'me.png', 'course_path', '2022-06-18 10:29:52'),
(4, 0, 2026123498115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:30:15'),
(5, 0, 1279950702115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:31:02'),
(6, 0, 1705668428115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:31:49'),
(7, 0, 1949853538115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:35:55'),
(8, 0, 1807014277115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:37:02'),
(9, 0, 1890334647115, 'as', 'me.png', 'course_path', '2022-06-18 10:37:40'),
(10, 0, 33792255115, 'Ibrahim', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 10:38:26'),
(11, 0, 1042548287115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:39:08'),
(12, 0, 1747768078115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:39:36'),
(13, 0, 749705425115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:45:32'),
(14, 676966234115, 1341777587115, 'Ibrahim', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 10:46:12'),
(15, 0, 1608065677115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:46:29'),
(16, 0, 1748291176115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:47:50'),
(17, 1163467373115, 1979359553115, 'Ibrahim', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 10:48:11'),
(18, 0, 2034128525115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 10:48:18'),
(19, 119601228115, 1231415195115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 11:11:36'),
(20, 119601228115, 1235499933115, 'as', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 11:11:42'),
(21, 0, 1737602956115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 11:40:00'),
(22, 1501783709115, 992592680115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 11:40:40'),
(23, 1501783709115, 325137028115, 'as', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 11:40:47'),
(24, 1501783709115, 430146406115, 'Ibrahim', 'me.png', 'course_path', '2022-06-18 11:40:53'),
(25, 1501783709115, 689745215115, 'Ibrahim', 'me.png', 'https://roadmap.sh/backend', '2022-06-18 11:42:21'),
(26, 1501783709115, 1411243365115, 'Ibrahim', 'me.png', 'https://roadmap.sh/backend', '2022-06-18 11:43:28'),
(27, 1501783709115, 702593413115, 'as', 'me.png', 'https://roadmap.sh/frontend', '2022-06-18 11:44:10');

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
(1, 1319098029, '2022-06-18 14:58:07', '2022-06-19 16:57:36', 1),
(2, 396084773, '2022-06-04 11:02:35', '2022-06-04 11:04:44', 1),
(3, 27539121, '2022-05-30 23:03:04', '2022-06-20 08:03:31', 1),
(5, 2147483647, '2022-06-19 10:18:40', NULL, 1);

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
(10, 2147483647, 1319098029, 27539121, '0', 'some message', 1, 1, 0, 0, '2022-06-01 06:50:39'),
(11, 2147483647, 27539121, 1319098029, '0', 'hi hamed', 1, 1, 0, 0, '2022-06-01 06:53:10'),
(12, 2147483647, 1319098029, 27539121, '0', 'hi ibrahim 3zazy', 1, 1, 0, 0, '2022-06-01 06:53:54'),
(13, 2147483647, 27539121, 1319098029, '0', 'how are you', 1, 1, 0, 0, '2022-06-01 07:12:42'),
(14, 2147483647, 1319098029, 27539121, '0', 'fine thanks', 1, 1, 0, 0, '2022-06-01 07:13:04'),
(15, 2147483647, 1319098029, 27539121, '0', 'iam sender', 1, 1, 0, 0, '2022-06-01 07:16:05'),
(17, 2147483647, 27539121, 1319098029, '0', 'and iam recever', 1, 1, 0, 0, '2022-06-01 07:53:35'),
(18, 2147483647, 1319098029, 27539121, '0', 'zesdfjznlksdf\r\nzespdifj;', 1, 1, 0, 0, '2022-06-01 08:05:12'),
(19, 2147483647, 1319098029, 27539121, '0', 'line one\r\nline two', 1, 1, 0, 0, '2022-06-01 08:05:42'),
(20, 2147483647, 27539121, 1319098029, '0', 'some message', 1, 1, 0, 0, '2022-06-01 08:24:54'),
(21, 2147483647, 27539121, 1319098029, '0', 'hi', 1, 1, 0, 0, '2022-06-01 08:30:27'),
(22, 2147483647, 27539121, 1319098029, '0', 'some message', 1, 1, 0, 0, '2022-06-01 08:30:53'),
(23, 2147483647, 27539121, 1319098029, '0', 'test\r\n', 1, 1, 0, 0, '2022-06-01 08:31:52'),
(24, 2147483647, 27539121, 1319098029, '0', 'test 2 ', 1, 1, 0, 0, '2022-06-01 08:32:51'),
(25, 2147483647, 27539121, 1319098029, '0', 'hi', 1, 1, 0, 0, '2022-06-01 09:12:01'),
(26, 2147483647, 27539121, 1319098029, '0', 'sds', 1, 1, 0, 0, '2022-06-01 09:30:51'),
(27, 2147483647, 1319098029, 27539121, '0', 'hi', 1, 1, 0, 0, '2022-06-01 09:39:07'),
(28, 2147483647, 1319098029, 27539121, '0', 'hello', 1, 1, 0, 0, '2022-06-01 09:39:21'),
(29, 2147483647, 27539121, 1319098029, '0', 'hi', 1, 1, 0, 0, '2022-06-01 09:39:28'),
(30, 2147483647, 27539121, 1319098029, '0', 'hello', 1, 1, 0, 0, '2022-06-01 11:12:32'),
(31, 2147483647, 27539121, 1319098029, '0', 'a', 1, 1, 0, 0, '2022-06-01 11:13:40'),
(32, 2147483647, 27539121, 1319098029, '0', 'z', 1, 1, 0, 0, '2022-06-01 11:15:34'),
(51, 2147483647, 27539121, 1319098029, '0', 'q', 1, 1, 0, 0, '2022-06-01 11:27:50'),
(52, 2147483647, 27539121, 1319098029, '0', 'qweq', 1, 1, 0, 0, '2022-06-01 11:28:10'),
(53, 2147483647, 27539121, 1319098029, '0', 'aas', 1, 1, 0, 0, '2022-06-01 13:39:34'),
(54, 2147483647, 27539121, 1319098029, '0', 'qq', 1, 1, 0, 0, '2022-06-01 13:39:52'),
(55, 2147483647, 27539121, 1319098029, '0', 'ss', 1, 1, 0, 0, '2022-06-01 13:40:41'),
(56, 2147483647, 27539121, 1319098029, '0', 'new message', 1, 1, 0, 0, '2022-06-01 13:43:42'),
(57, 2147483647, 27539121, 1319098029, '0', 'send', 1, 1, 0, 0, '2022-06-01 13:43:58'),
(58, 2147483647, 27539121, 1319098029, '0', 'Hi', 1, 1, 0, 0, '2022-06-01 13:45:55'),
(59, 2147483647, 1319098029, 27539121, '0', 'hi', 1, 1, 0, 0, '2022-06-01 13:46:10'),
(60, 2147483647, 27539121, 1319098029, '0', 'how are you', 1, 1, 0, 0, '2022-06-01 13:46:18'),
(61, 2147483647, 1319098029, 27539121, '0', 'fine', 1, 1, 0, 0, '2022-06-01 13:46:38'),
(62, 2147483647, 27539121, 1319098029, '0', 'again how are you??', 1, 1, 0, 0, '2022-06-01 13:48:24'),
(63, 2147483647, 1319098029, 27539121, '0', 'fine and you', 1, 1, 0, 0, '2022-06-01 13:48:49'),
(64, 2147483647, 27539121, 1319098029, '0', 'hi', 1, 1, 0, 0, '2022-06-01 13:50:01'),
(65, 2147483647, 27539121, 1319098029, '0', 'hi again', 1, 1, 0, 0, '2022-06-01 13:50:19'),
(66, 2147483647, 27539121, 1319098029, '0', 'live chat done (*.*)', 1, 1, 0, 0, '2022-06-01 13:51:28'),
(67, 2147483647, 1319098029, 27539121, '0', 'not done yet finish it first and then we can say done >_<', 1, 1, 0, 0, '2022-06-01 13:52:46'),
(69, 2147483647, 27539121, 1319098029, '0', 'hala', 1, 1, 0, 0, '2022-06-01 16:51:35'),
(70, 2147483647, 1319098029, 27539121, '0', 'yap', 1, 1, 0, 0, '2022-06-01 17:02:16'),
(71, 2147483647, 27539121, 1319098029, '0', 'test', 1, 1, 0, 0, '2022-06-01 17:03:26'),
(72, 2147483647, 27539121, 1319098029, '0', 'another test', 1, 1, 0, 0, '2022-06-01 17:04:19'),
(73, 2147483647, 27539121, 1319098029, '0', 'another test 0', 1, 1, 0, 0, '2022-06-01 17:05:19'),
(74, 2147483647, 27539121, 1319098029, '0', 'another test 2', 1, 1, 0, 0, '2022-06-01 17:05:36'),
(75, 2147483647, 27539121, 1319098029, '0', 'another test 3', 1, 1, 0, 0, '2022-06-01 17:06:50'),
(76, 2147483647, 27539121, 1319098029, '0', 'another test 4', 1, 1, 0, 0, '2022-06-01 17:07:10'),
(77, 2147483647, 1319098029, 27539121, '0', 'another test 5', 1, 1, 0, 0, '2022-06-01 17:07:22'),
(78, 2147483647, 1319098029, 27539121, '0', 'another test 6', 1, 1, 0, 0, '2022-06-01 17:07:36'),
(79, 2147483647, 1319098029, 27539121, '0', 'another test 7', 1, 1, 0, 0, '2022-06-01 17:08:02'),
(80, 2147483647, 1319098029, 27539121, '0', 'another test 8', 1, 1, 0, 0, '2022-06-01 17:08:12'),
(81, 2147483647, 27539121, 1319098029, '0', 'go', 1, 1, 0, 0, '2022-06-01 17:45:24'),
(82, 2147483647, 27539121, 1319098029, '0', 'go 2', 1, 1, 0, 0, '2022-06-01 17:45:57'),
(83, 2147483647, 27539121, 1319098029, '0', 'that is Okay', 1, 1, 0, 0, '2022-06-01 23:34:29'),
(84, 2147483647, 1319098029, 27539121, '0', 'yap', 1, 1, 0, 0, '2022-06-01 23:35:19'),
(85, 2147483647, 27539121, 1319098029, '0', 'another test', 1, 1, 0, 0, '2022-06-01 23:56:38'),
(86, 2147483647, 1319098029, 27539121, '0', 'another test', 1, 1, 0, 0, '2022-06-02 00:00:52'),
(88, 2147483647, 396084773, 27539121, '0', 'Hi', 1, 1, 0, 0, '2022-06-02 02:40:48'),
(89, 2147483647, 27539121, 396084773, '0', 'Hi', 1, 1, 0, 0, '2022-06-02 03:16:59'),
(90, 2147483647, 396084773, 27539121, '0', 'How are you?', 1, 1, 0, 0, '2022-06-02 03:19:29'),
(91, 2147483647, 27539121, 396084773, '0', 'fine and you', 1, 1, 0, 0, '2022-06-02 03:21:26'),
(92, 2147483647, 396084773, 27539121, '0', 'fine what are you doing now &gt;!&lt;', 1, 1, 0, 0, '2022-06-02 03:22:39'),
(93, 2147483647, 27539121, 396084773, '0', 'nothing what are you doing ?', 1, 1, 0, 0, '2022-06-02 03:26:17'),
(94, 2147483647, 396084773, 27539121, '0', 'Iam chating with you ?', 1, 1, 0, 0, '2022-06-02 03:27:03'),
(95, 2147483647, 1319098029, 27539121, '0', 'ان شاء الله اخر اختبار', 1, 1, 0, 0, '2022-06-02 03:37:33'),
(96, 2147483647, 1319098029, 27539121, '0', 'ان شاء الله اخر اختبار', 1, 1, 0, 0, '2022-06-02 03:38:20'),
(97, 2147483647, 1319098029, 27539121, '0', 'بسم الله الرحمن الرحيم', 1, 1, 0, 0, '2022-06-02 03:44:11'),
(98, 2147483647, 27539121, 1319098029, '0', 'الحمد لله رب العالمين', 1, 1, 0, 0, '2022-06-02 03:49:06'),
(99, 2147483647, 27539121, 396084773, '0', 'Okay', 1, 1, 0, 0, '2022-06-02 03:53:31'),
(100, 2147483647, 396084773, 27539121, '0', 'done', 1, 1, 0, 0, '2022-06-02 11:44:17'),
(101, 2147483647, 27539121, 396084773, '0', 'بسم الله الرحمن الرحيم', 1, 1, 0, 0, '2022-06-02 11:47:28'),
(102, 2147483647, 396084773, 27539121, '0', 'الحمد لله رب العالمين', 1, 1, 0, 0, '2022-06-02 11:49:49'),
(103, 2147483647, 396084773, 27539121, '0', 'الرحمن الرحيم', 1, 1, 0, 0, '2022-06-02 11:52:01'),
(104, 2147483647, 396084773, 27539121, '0', 'مالك يوم الدين', 1, 1, 0, 0, '2022-06-02 11:54:41'),
(105, 2147483647, 396084773, 27539121, '0', 'اياك نعبد واياك نستعين', 1, 1, 0, 0, '2022-06-02 11:56:01'),
(106, 2147483647, 27539121, 27539121, '0', 'hi', 1, 1, 0, 0, '2022-06-02 12:00:00'),
(107, 2147483647, 27539121, 27539121, '0', 'hello', 1, 1, 0, 0, '2022-06-02 12:00:08'),
(108, 2147483647, 27539121, 27539121, '0', 'how are you', 1, 1, 0, 0, '2022-06-02 12:00:26'),
(109, 2147483647, 27539121, 1319098029, '0', 'الرحمن الرحيم', 1, 1, 0, 0, '2022-06-02 12:28:23'),
(110, 2147483647, 27539121, 396084773, '0', 'اهدنا الصراط المستقيم', 1, 1, 0, 0, '2022-06-02 12:29:02'),
(111, 2147483647, 27539121, 1319098029, '0', 'مالك يوم الدين', 1, 1, 0, 0, '2022-06-02 13:57:19'),
(112, 2147483647, 27539121, 396084773, '0', 'صراط الذين انعمت عليهم', 1, 1, 0, 0, '2022-06-02 15:08:59'),
(113, 2147483647, 396084773, 27539121, '0', 'غير المغضوب عليهم', 1, 1, 0, 0, '2022-06-02 16:18:55'),
(114, 2147483647, 1319098029, 27539121, '0', 'اياك نعبد واياك نستعين', 1, 1, 0, 0, '2022-06-02 16:20:00'),
(115, 2147483647, 1319098029, 27539121, '0', 'اهدنا الصراط المستقيم', 1, 0, 0, 0, '2022-06-03 12:38:19');

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
(210, 867191471, 27539121, '?', '330-3302186_open-book-clipart-png-download.png', '0', '0', 0, 0, '2022-05-31 12:41:56', 4),
(211, 1279983112, 27539121, '0', '0', '0', '0', 0, 0, '2022-06-02 12:30:53', 0),
(212, 1365025577, 27539121, 'post', '0', '0', '0', 0, 0, '2022-06-02 12:31:06', 1),
(213, 1449153495, 27539121, 'TEST &gt;_&lt;', '—Pngtree—abstract geometric shape group set_1196104.jpg', '0', '0', 0, 3, '2022-06-05 16:26:46', 4);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` bigint(20) NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `comment_id`, `post_id`, `user_id`, `post_comment`, `comment_date`) VALUES
(28, 608240413115, 1449153495, 27539121, 'qwqw', '2022-06-19 00:06:25'),
(29, 1928208936115, 1449153495, 27539121, 'asas', '2022-06-19 00:07:23'),
(33, 727603890115, 1449153495, 27539121, 'comment 1', '2022-06-19 00:07:25'),
(36, 1462990012115, 1449153495, 1319098029, 'any\r\n', '2022-06-19 00:07:43'),
(38, 1026416097115, 1449153495, 1319098029, 'comment', '2022-06-19 00:09:12'),
(39, 2023644923115, 1449153495, 1319098029, 'any', '2022-06-19 00:09:37'),
(45, 1626781093115, 1449153495, 1319098029, 'Last Comment', '2022-06-20 08:02:14');

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

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`id`, `post_id`, `user_id`, `post_like`) VALUES
(66, 867191471, 27539121, 1),
(71, 1449153495, 1319098029, 1),
(73, 0, 0, 1),
(74, 1365025577, 27539121, 1),
(75, 1279983112, 27539121, 1);

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
  `mobile_num` varchar(11) NOT NULL,
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
(16, 396084773, 'Ibrahim', 'ebrahim3zazy@gmail.com', 'Admin3', '01145452440', '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'policeofficer_man_person_polici_2846.png', 'unnamed.png', 'user', 19),
(17, 1319098029, 'hamed', 'ebrahimelazazy1@yahoo.com', 'admin1', '01094989981', '1998-01-23', '0', 'mitghamr', '0', 'Male', '0', '0', '—Pngtree—muslim man photo_6934073.png', 'background.jpg', 'user', 16),
(18, 27539121, 'Ibrahim 3zazy', 'Ibrahim3zazy@hotmail.com', 'admin1', '01145452440', '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'quran (2).png', 'cover-96.jpg', 'user', 3),
(19, 2147483647, 'i.3zazy', 'ebrahimelazazy2@yahoo.com', 'asasasas', '01045452440', '2022-06-24', '0', 'asasasas', '0', 'Male', '0', '0', 'user.png', 'background.jpg', 'user', 0);

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
-- Indexes for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_group`
--
ALTER TABLE `create_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accept` (`accept`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `group_members_id` (`group_members_id`);

--
-- Indexes for table `group_posting`
--
ALTER TABLE `group_posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contain` (`contain`);
ALTER TABLE `group_posting` ADD FULLTEXT KEY `post_content` (`post_content`);

--
-- Indexes for table `instructor_course`
--
ALTER TABLE `instructor_course`
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
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment_like`
--
ALTER TABLE `comment_like`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `create_group`
--
ALTER TABLE `create_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `group_posting`
--
ALTER TABLE `group_posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `instructor_course`
--
ALTER TABLE `instructor_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `last_seen`
--
ALTER TABLE `last_seen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
