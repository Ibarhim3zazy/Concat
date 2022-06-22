-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:52 PM
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
(172, 1626781093115, 1449153495, 1319098029, 1, '2022-06-20 08:02:17'),
(173, 2023644923115, 1449153495, 1319098029, 1, '2022-06-20 09:50:29'),
(174, 1471494165115, 1365025577, 396084773, 1, '2022-06-20 17:07:06');

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
(4, 2055912039115, 'Front-end', 'HTML', 'html.jpg', '2022-06-18 06:22:23'),
(5, 289762209115, 'Front-end', 'CSS', 'me.png', '2022-06-18 06:23:33'),
(6, 676966234115, 'Back-end', 'JavaScript', 'IMG_20220510_073314.jpg', '2022-06-18 10:46:06'),
(8, 119601228115, 'Desktop_programming', 'Visual_Basic', 'IMG_20220510_073314.jpg', '2022-06-18 11:11:29'),
(12, 1167046645115, 'Front-end', 'JavaScript', 'me.png', '2022-06-22 01:10:39'),
(13, 380702928115, 'Android', 'Kotlin', 'koltin.png', '2022-06-22 03:18:30');

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
(51, 396084773, 27539121, 'friend'),
(52, 1319098029, 27539121, 'friend');

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

--
-- Dumping data for table `group_posting`
--

INSERT INTO `group_posting` (`id`, `group_id`, `post_id`, `user_id`, `post_content`, `image`, `videos`, `attached_files`, `comments`, `liks`, `date`, `contain`) VALUES
(215, 916430527114, 2012694685, 27539121, 'asdasd', '0', '0', '0', 0, 0, '2022-06-22 09:29:32', 1),
(216, 916430527114, 631981100, 27539121, 'Hello', '0', '0', '0', 0, 0, '2022-06-22 09:30:04', 1),
(217, 916430527114, 1835857305, 27539121, 'Hi', '0', '0', '0', 0, 0, '2022-06-22 09:31:56', 1),
(218, 916430527114, 114696075, 27539121, 'as', '0', '0', '0', 0, 0, '2022-06-22 09:41:34', 1),
(221, 916430527114, 115018091, 27539121, 'Hi', '272052489_253758660230111_8417523194495608367_n.jpg', '0', '0', 0, 0, '2022-06-22 09:49:09', 2),
(222, 916430527114, 1250920720, 27539121, 'sad', '272052489_253758660230111_8417523194495608367_n.jpg', '0', '0', 0, 0, '2022-06-22 09:52:08', 2),
(226, 916430527114, 424911975, 396084773, 'Hello', 'backsearch1.jpg', '0', '0', 0, 0, '2022-06-22 10:43:20', 4),
(227, 916430527114, 322670483, 396084773, 'Hi', '0', '0', '0', 0, 0, '2022-06-22 10:43:26', 1),
(228, 916430527114, 1057363761, 396084773, 'post', '0', 'استغلال مساحة.MP4', '0', 0, 0, '2022-06-22 10:48:10', 5);

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
(23, 1501783709115, 325137028115, 'as', 'IMG_20220510_073314.jpg', 'course_path', '2022-06-18 11:40:47'),
(25, 1501783709115, 689745215115, 'Ibrahim', 'me.png', 'https://roadmap.sh/backend', '2022-06-18 11:42:21'),
(26, 1501783709115, 1411243365115, 'Ibrahim', 'me.png', 'https://roadmap.sh/backend', '2022-06-18 11:43:28'),
(27, 1501783709115, 702593413115, 'as', 'me.png', 'https://roadmap.sh/frontend', '2022-06-18 11:44:10'),
(29, 380702928115, 1525251968115, 'Ibrahim', 'CSS.jpeg', 'https://roadmap.sh/frontend', '2022-06-22 04:14:15'),
(30, 380702928115, 2036219012115, 'El-zero', 'js.png', 'https://roadmap.sh/frontend', '2022-06-22 04:24:54'),
(31, 380702928115, 362262094115, 'El-zero', 'nmlogo.jpg', 'https://roadmap.sh/frontend', '2022-06-22 04:26:11'),
(32, 380702928115, 518921897115, 'El-zero', 'html.jpg', 'https://roadmap.sh/frontend', '2022-06-22 04:28:40'),
(33, 380702928115, 202587648115, 'El-zero', 'koltin.png', 'https://roadmap.sh/frontend', '2022-06-22 04:29:17'),
(34, 1544435530115, 1753600161115, 'Ibrahim', 'Arrow-down.svg.png', 'wsadfghjk.,mjnhgf', '2022-06-22 04:43:38'),
(35, 289762209115, 299153701115, 'Ibrahim', 'CSS.jpeg', 'https://roadmap.sh/frontend', '2022-06-22 04:44:15'),
(36, 289762209115, 1390377908115, 'El-zero', 'CSS.jpeg', 'https://roadmap.sh/frontend', '2022-06-22 05:04:57');

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
(1, 1319098029, '2022-06-20 16:10:08', '2022-06-22 10:52:01', 1),
(2, 396084773, '2022-06-20 16:11:43', '2022-06-22 10:52:02', 1),
(3, 27539121, '2022-06-22 05:19:21', '2022-06-22 10:52:02', 1),
(5, 2147483647, '2022-06-19 10:18:40', '2022-06-21 06:41:59', 1),
(6, 2147483647, '2022-06-20 16:11:05', '2022-06-21 06:41:59', 1),
(7, 2147483647, '2022-06-20 19:30:07', '2022-06-21 06:41:59', 1);

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
(213, 1449153495, 27539121, 'TEST &gt;_&lt;', '—Pngtree—abstract geometric shape group set_1196104.jpg', '0', '0', 0, 3, '2022-06-05 16:26:46', 4),
(214, 899664875, 396084773, 'TEST POST', '0', '0', '0', 0, 0, '2022-06-20 16:12:00', 1),
(216, 239576901, 27539121, 'hello', '0', '0', '0', 0, 0, '2022-06-22 09:11:29', 1),
(217, 1454988300, 27539121, 'hello', '0', '0', '0', 0, 0, '2022-06-22 09:12:41', 1),
(218, 3477283, 27539121, 'qwertyhj', '0', '0', '0', 0, 0, '2022-06-22 09:21:46', 1),
(219, 1733500648, 27539121, 'asdasd', '0', '0', '0', 0, 0, '2022-06-22 09:28:13', 1),
(220, 960701942, 27539121, 'asdasd', '0', '0', '0', 0, 0, '2022-06-22 09:29:07', 1),
(221, 1651081674, 27539121, 'asdasd', '0', '0', '0', 0, 0, '2022-06-22 09:29:32', 1),
(222, 272524129, 27539121, 'Hello', '0', '0', '0', 0, 0, '2022-06-22 09:30:04', 1),
(223, 584294393, 27539121, 'Hi', '0', '0', '0', 0, 0, '2022-06-22 09:31:56', 1),
(224, 1892941012, 27539121, 'as', '0', '0', '0', 0, 0, '2022-06-22 09:41:34', 1),
(225, 1726829556, 27539121, 'asdasd', 'me.png', '', '0', 0, 0, '2022-06-22 09:42:10', 5),
(226, 212724357, 27539121, 'Post Video', '', 'استغلال مساحة.MP4', '0', 0, 0, '2022-06-22 09:44:05', 5),
(227, 472224920, 27539121, 'Hi', '272052489_253758660230111_8417523194495608367_n.jpg', '', '0', 0, 0, '2022-06-22 09:49:09', 5),
(228, 794620743, 27539121, 'sad', '272052489_253758660230111_8417523194495608367_n.jpg', '', '0', 0, 0, '2022-06-22 09:52:08', 5),
(229, 1550176983, 27539121, 'Posting', '272052489_253758660230111_8417523194495608367_n.jpg', '', '0', 0, 0, '2022-06-22 09:52:54', 5),
(230, 268219487, 27539121, 'Hi', '', '', '0', 0, 0, '2022-06-22 10:14:22', 5),
(231, 290815670, 396084773, 'Hi', '', '', '0', 0, 0, '2022-06-22 10:24:26', 5),
(232, 656638048, 396084773, 'Hello', 'backsearch1.jpg', '', '0', 0, 0, '2022-06-22 10:43:20', 5),
(233, 98041957, 396084773, 'Hi', '', '', '0', 0, 0, '2022-06-22 10:43:26', 5),
(234, 986539877, 396084773, 'post', '', 'استغلال مساحة.MP4', '0', 0, 0, '2022-06-22 10:48:10', 5);

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
(45, 1626781093115, 1449153495, 1319098029, 'Last Comment', '2022-06-20 08:02:14'),
(46, 1397980318115, 899664875, 27539121, 'nice', '2022-06-20 16:12:28'),
(47, 349176773115, 0, 396084773, 'wesd', '2022-06-20 16:19:24'),
(48, 1471494165115, 1365025577, 396084773, 'awsd;olsad', '2022-06-20 17:06:53'),
(49, 1949652619115, 899664875, 27539121, 'hi', '2022-06-20 19:13:14'),
(50, 313976231115, 899664875, 27539121, 'hello', '2022-06-20 19:13:55'),
(51, 808099111115, 899664875, 27539121, 'hala', '2022-06-20 19:14:48'),
(52, 1927220562115, 899664875, 27539121, 'Ibrahim', '2022-06-20 19:15:04'),
(53, 1121930464115, 899664875, 27539121, 'Elsayed', '2022-06-20 19:15:10'),
(54, 710435933115, 899664875, 27539121, 'Mohamed', '2022-06-20 19:15:20'),
(55, 1145347068115, 1449153495, 27539121, 'Hi', '2022-06-20 19:17:48'),
(56, 1750081299115, 899664875, 27539121, '3zazy', '2022-06-20 19:19:07'),
(57, 1539360800115, 994494778, 27539121, 'Hi', '2022-06-20 19:19:32');

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
(75, 1279983112, 27539121, 1),
(78, 923588346, 27539121, 1),
(79, 899664875, 27539121, 1),
(80, 1449153495, 396084773, 1);

-- --------------------------------------------------------

--
-- Table structure for table `road_map`
--

CREATE TABLE `road_map` (
  `id` int(11) NOT NULL,
  `field` varchar(250) NOT NULL,
  `roadmap_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `road_map`
--

INSERT INTO `road_map` (`id`, `field`, `roadmap_link`) VALUES
(1, 'Android', 'https://roadmap.sh/android'),
(2, 'Front-end', 'https://roadmap.sh/frontend');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_doctor`
--

CREATE TABLE `sign_up_doctor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Colleage_id` varchar(100) NOT NULL,
  `degree` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up_doctor`
--

INSERT INTO `sign_up_doctor` (`id`, `user_id`, `Colleage_id`, `degree`) VALUES
(1, 396084773, '1018588832', NULL),
(6, 1319098029, '1018588832', NULL);

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
(16, 396084773, 'Ibrahim', 'ebrahim3zazy@gmail.com', 'Admin3', '01145452440', '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'policeofficer_man_person_polici_2846.png', 'unnamed.png', 'prof', 20),
(17, 1319098029, 'hamed', 'ebrahimelazazy1@yahoo.com', 'admin1', '01094989981', '1998-01-23', '0', 'mitghamr', '0', 'Male', '0', '0', '—Pngtree—muslim man photo_6934073.png', 'background.jpg', 'Student', 17),
(18, 27539121, 'Ibrahim 3zazy', 'Ibrahim3zazy@hotmail.com', 'admin1', '01145452440', '2000-02-01', '0', 'Mit Ghamr', '0', 'Male', '0', '0', 'quran (2).png', 'cover-96.jpg', 'user', 5),
(19, 2147483647, 'i.3zazy', 'ebrahimelazazy2@yahoo.com', 'asasasas', '01045452440', '2022-06-24', '0', 'asasasas', '0', 'Male', '0', '0', 'user.png', 'background.jpg', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_student`
--

CREATE TABLE `sign_up_student` (
  `id` int(11) NOT NULL,
  `Colleage_id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enter_date` date DEFAULT NULL,
  `graduation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sign_up_student`
--

INSERT INTO `sign_up_student` (`id`, `Colleage_id`, `user_id`, `enter_date`, `graduation_date`) VALUES
(1, '1319098029', 1018588832, NULL, NULL);

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
-- Indexes for table `road_map`
--
ALTER TABLE `road_map`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `create_group`
--
ALTER TABLE `create_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `group_posting`
--
ALTER TABLE `group_posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `instructor_course`
--
ALTER TABLE `instructor_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `last_seen`
--
ALTER TABLE `last_seen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `road_map`
--
ALTER TABLE `road_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sign_up_doctor`
--
ALTER TABLE `sign_up_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sign_up_user`
--
ALTER TABLE `sign_up_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
