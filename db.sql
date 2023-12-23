-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2023 at 07:25 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u429746143_freelancingjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(225) NOT NULL,
  `Email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `profile` varchar(255) DEFAULT '/img/profile/profile-3.webp',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Email`, `password`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'amin@gmail.com', 'Admin123', '/img/profile/profile-3.webp', '2023-07-12 09:11:48', '0000-00-00 00:00:00'),
(2, 'mishra74881@gmail.com', 'admin', 'img/img_1690535801.jpeg', '2023-07-28 09:16:41', '2023-07-28 09:16:41'),
(3, 'picruit.pioneer@gmail.com', 'admin@123', 'img/img_1693311494.jpg', '2023-08-29 12:18:14', '2023-08-29 12:18:14'),
(4, 'mishra74@gmail.com', 'admin', '/img/profile/profile-3.webp', '2023-07-12 09:11:57', '2023-06-19 07:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(225) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `start_date` varchar(10) DEFAULT NULL,
  `end_date` varchar(10) DEFAULT NULL,
  `file` varchar(225) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `start_date`, `end_date`, `file`, `status`, `usertype`, `price`, `created_at`, `updated_at`) VALUES
(34, 'new ads', '2023-12-15', '2023-12-16', 'https://team.picruit.com/images/1702545162.jpg', 1, 'blogs', '500', '2023-12-14 09:31:15', '2023-12-14 09:31:15'),
(35, 'Tuition', '2023-12-15', '2023-12-15', 'https://team.picruit.com/images/1702546257.webp', 1, 'blogs', '500', '2023-12-14 09:31:11', '2023-12-14 09:31:11'),
(38, 'mohit', '2023-12-17', '2024-12-12', 'https://team.picruit.com/images/1702755040.webp', 1, 'find_job', '800', '2023-12-16 19:31:54', '2023-12-16 19:31:54'),
(39, 'mohit', '2023-12-17', '2024-12-12', 'https://team.picruit.com/images/1702755382.webp', 1, 'footer', '800', '2023-12-16 19:36:32', '2023-12-16 19:36:32'),
(40, 'mohit', '2023-12-17', '2024-12-12', 'https://team.picruit.com/images/1702755612.webp', 1, 'footer', '800', '2023-12-16 19:40:21', '2023-12-16 19:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(225) NOT NULL,
  `ads_name` varchar(225) NOT NULL,
  `poster` varchar(225) NOT NULL,
  `duration` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `offer_free` varchar(255) DEFAULT NULL,
  `privacy` varchar(255) DEFAULT NULL,
  `canteach` varchar(255) DEFAULT NULL,
  `alang` varchar(500) DEFAULT NULL,
  `subject` varchar(2550) DEFAULT NULL,
  `segment` varchar(2550) DEFAULT NULL,
  `fees` varchar(255) DEFAULT NULL,
  `asell` varchar(200) DEFAULT NULL,
  `killvideo` varchar(255) DEFAULT NULL,
  `experienceofforeign` varchar(255) DEFAULT NULL,
  `aref` varchar(500) DEFAULT NULL,
  `aproject` varchar(500) DEFAULT NULL,
  `agovtype` varchar(500) DEFAULT NULL,
  `aregfee` varchar(500) DEFAULT NULL,
  `arefnm` varchar(500) DEFAULT NULL,
  `arefph` varchar(500) DEFAULT NULL,
  `acerti` varchar(250) DEFAULT NULL,
  `agovtid` varchar(250) DEFAULT NULL,
  `aqualif` varchar(250) DEFAULT NULL,
  `aphoto` varchar(250) DEFAULT NULL,
  `aterm` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `offer_free`, `privacy`, `canteach`, `alang`, `subject`, `segment`, `fees`, `asell`, `killvideo`, `experienceofforeign`, `aref`, `aproject`, `agovtype`, `aregfee`, `arefnm`, `arefph`, `acerti`, `agovtid`, `aqualif`, `aphoto`, `aterm`, `created_at`, `updated_at`) VALUES
(1, '39', NULL, 'Show email,Show both', 'Offline at on place,Offline at student\'s place', 'Bengali,Business English', 'Legal Studies,Physical Education,Physics,Psychology#dCET,dIIT JEE Advanced,dJECA Exam,dMathematics,dPhysics', 'Class 11 - 12,Engineering Entrance & IITJEE', '5445,5535', 'Yes', '1679931529.png', '23434gdfg', '1', 'rdrgd', 'Passport', 'rtype1', NULL, NULL, '1679931529.png', '1679931529.png', '1679931529.png', '1679931529.png', '1679931529.jpg', '2023-03-27 10:08:49', '2023-03-27 10:08:49'),
(2, '43', NULL, 'Show both,Tagline of profile', 'Offline at on place,Offline at student\'s place', 'Assamese,English,Hindi', 'Banking & Finance,Chemistry,Computer Science,Economics,Fashion Study#dEAMCET,dIIT JEE Advanced,dJECA Exam,dJELET,dMCA Entrance', 'Class 11 - 12,Engineering Entrance & IITJEE', '34,243454', 'No', '1679933516.png', 'drrtf', '1', 'fdbv', 'Voter card', 'rtype1', 'fxdfg,vgdfg', '233454,325434535', '1679933516.png', '1679933516.png', '1679933516.png', '1679933516.png', '1679933516.png', '2023-03-27 10:41:56', '2023-03-27 10:41:56'),
(3, '59', NULL, 'Show mobile no,Show email,Show both,Tagline of profile', 'Online,Offline at on place,Offline at student\'s place,Assignments', 'English,Hindi', 'Business Economics#Business Mathematics', 'Class 11 - 12', '5000', 'Yes', '1693632226.mp4', '2 years', NULL, 'no', 'Aadhar card', 'rtype1', NULL, NULL, '1693632227.pdf', '1693632227.jpeg', '1693632227.pdf', '1693632227.jpeg', '1693632227.docx', '2023-09-02 05:23:47', '2023-09-02 05:23:47'),
(4, '185', NULL, 'Show mobile no,Show email,Show both,Tagline of profile', 'Online,Offline at on place,Offline at student\'s place,Assignments', 'English', 'BA Tuition#Bio-medical#BMS Tuition#BTTM', 'Choose Your Option', '', 'Yes', NULL, 'mojhih', NULL, NULL, 'Select a id type', 'rtype1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-21 18:51:14', '2023-12-21 18:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `mediafile` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `rating` int(200) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `name`, `title`, `body`, `mediafile`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(78, '49', 'Niraj', 'test', '<p><span style=\"color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This code should correctly toggle the password visibility when the eye icon is clicked. It includes Font Awesome for the eye icons, styles the eye icon position within the password field, and uses JavaScript to toggle between hiding and showing the password text. Make sure you have a stable internet connection to load the Font Awesome library and icons properly. If you\'re hosting it locally, ensure the paths are correct.</span></p>', 'img/img_1702448842.webp', '1', 2, '2023-12-13 06:27:22', '2023-12-20 05:56:12'),
(80, '123', 'niraj', 'MBA Program', '<p><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space-collapse: preserve;\">No recruiting process is perfect, despite what some might claim. Many of us use Boolean logic to sift through resumes. As an aspiring Industrial/Organizational Psychologist I believe in understanding the candidate\'s motivations, not just their resume keywords.</span></p>', 'img/img_1703072078.png', '1', 0, '2023-12-20 11:34:38', '2023-12-20 11:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `candiate_models`
--

CREATE TABLE `candiate_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apply_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `jobpost_id` varchar(255) DEFAULT NULL,
  `body` varchar(255) NOT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `for` varchar(255) NOT NULL,
  `apply_status` varchar(255) NOT NULL DEFAULT '1',
  `approve` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candiate_models`
--

INSERT INTO `candiate_models` (`id`, `apply_id`, `job_id`, `jobpost_id`, `body`, `resume`, `for`, `apply_status`, `approve`, `created_at`, `updated_at`) VALUES
(1, '41', '3', '40', 'dxfdxfxdf', 'files/file_1680515859.pdf', '3', '0', 1, '2023-04-03 04:27:40', '2023-07-06 07:54:08'),
(2, '38', '1', '39', 'study', NULL, '2', '0', 1, '2023-04-20 01:53:20', '2023-07-06 08:47:07'),
(5, '57', '3', '40', '435354', 'files/file_1687258101.pdf', '1', '1', 1, '2023-06-20 10:48:21', '2023-07-06 08:47:10'),
(6, '57', '98', '54', '5434', 'files/file_1687259599.pdf', '323', '1', 1, '2023-06-20 11:13:19', '2023-07-29 10:23:22'),
(8, '465', '4', '45', 'fdsmf', NULL, '3746', '1', 1, '2023-06-23 09:22:11', '2023-08-02 06:20:27'),
(9, '465', '5', '45', 'gfhfhjhgjg\r\ngjjhghjg', 'files/file_1687512535.png', '3746', '1', 0, '2023-06-23 09:28:55', '2023-06-23 09:28:55'),
(10, '465', '4', '45', 'jhufuyf', 'files/file_1687518929.txt', '3746', '1', 0, '2023-06-23 11:15:29', '2023-06-23 11:15:29'),
(11, '465', '16', NULL, 'i have 10 years experience in webeveloper', 'files/file_1688207050.pdf', '3746', '1', 0, '2023-07-01 10:24:10', '2023-07-01 10:24:10'),
(12, '57', '16', NULL, 'i have more than 10 years experiencce in web developerment', 'files/file_1688207599.pdf', '3746', '1', 0, '2023-07-01 10:33:19', '2023-07-01 10:33:19'),
(13, '57', '12', NULL, 'i need a job for any type', 'files/file_1688208348.pdf', '3746', '0', 0, '2023-07-01 10:45:48', '2023-07-05 11:15:15'),
(14, '12', '16', NULL, 'sjklhkljl', 'files/file_1688212201.pdf', '3746', '0', 0, '2023-07-01 11:50:01', '2023-07-05 11:15:09'),
(15, '12', '22', NULL, 'I\'m experienced operations assistant. I\'m looking for a job and if you have any vacancy according to my skills that mentioned on my cv .kindly let me know and revert back and you can also call me on this no 7710564314..', 'files/file_1690429191.pdf', '3746', '1', 0, '2023-07-27 03:39:51', '2023-07-27 03:39:51'),
(16, '12', '16', NULL, 'i want to get professional job', 'files/file_1690960815.pdf', '3746', '1', 1, '2023-08-02 07:20:15', '2023-08-17 09:26:45'),
(17, '79', '24', NULL, 'i need job', 'files/file_1691758109.png', '3746', '1', 0, '2023-08-11 12:48:29', '2023-08-11 12:48:29'),
(18, '100', '22', NULL, 'Resume', 'files/file_1691849528.doc', '3746', '1', 0, '2023-08-12 14:12:08', '2023-08-12 14:12:08'),
(19, '115', '23', NULL, 'Im interested this job', 'files/file_1691854247.jpg', '3746', '1', 0, '2023-08-12 15:30:47', '2023-08-12 15:30:47'),
(20, '115', '23', NULL, 'Im interested this job this is my contact number 9915014500 my HR experience 10 years', 'files/file_1692097586.jpg', '3746', '1', 0, '2023-08-15 11:06:26', '2023-08-15 11:06:26'),
(21, '59', '24', NULL, 'bvgjg', NULL, '3746', '1', 0, '2023-08-16 11:07:53', '2023-08-16 11:07:53'),
(22, '59', '24', NULL, 'kjjk', NULL, '3746', '1', 0, '2023-08-17 09:07:04', '2023-08-17 09:07:04'),
(23, '54', '24', NULL, 'wow', NULL, '3746', '1', 0, '2023-08-17 10:20:56', '2023-08-17 10:20:56'),
(24, '54', '24', NULL, 'k', NULL, '3746', '1', 0, '2023-08-17 10:21:29', '2023-08-17 10:21:29'),
(25, '59', '24', NULL, 'werefew', NULL, '3746', '1', 0, '2023-08-17 12:51:24', '2023-08-17 12:51:24'),
(26, '57', '24', NULL, 'mnnm', NULL, '3746', '1', 0, '2023-08-19 07:15:56', '2023-08-19 07:15:56'),
(27, '119', '26', NULL, 'i need job', NULL, '3746', '1', 0, '2023-09-02 08:43:58', '2023-09-02 08:43:58'),
(28, '150', '16', NULL, 'Currently pursuing B.E. CSE , having a enough experience in web development and design, content writer.', NULL, '3746', '1', 0, '2023-11-25 10:05:33', '2023-11-25 10:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chatbots`
--

CREATE TABLE `chatbots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `incoming_user_id` varchar(255) DEFAULT NULL,
  `outgoing_user_id` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `incoming_user_id_img` varchar(500) DEFAULT NULL,
  `outgoing_user_id_img` varchar(500) DEFAULT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `incoming_user_id`, `outgoing_user_id`, `message`, `incoming_user_id_img`, `outgoing_user_id_img`, `status`, `created_at`, `updated_at`) VALUES
(89, '45', '49', 'hi', '{\"id\":45,\"name\":\"Niraj Mishra\",\"email\":\"softgenics.neeraj@gmail.com\",\"username\":null,\"emailvery\":null,\"email_verified_at\":null,\"google_id\":\"101848665586074795206\",\"myref\":\"8991098a\",\"created_at\":\"2023-05-30T09:56:46.000000Z\",\"updated_at\":\"2023-07-11T11:35:51.000000Z\",\"mobile_no\":\"1\",\"category\":\"1\",\"status\":1,\"login_at\":null,\"last_seen\":\"2023-07-11 11:35:51\"}', NULL, '0', '2023-07-11 12:10:03', '2023-07-11 12:10:03'),
(90, '45', '54', 'hi', '{\"id\":45,\"name\":\"Niraj Mishra\",\"email\":\"softgenics.neeraj@gmail.com\",\"username\":null,\"emailvery\":null,\"email_verified_at\":null,\"google_id\":\"101848665586074795206\",\"myref\":\"8991098a\",\"created_at\":\"2023-05-30T09:56:46.000000Z\",\"updated_at\":\"2023-07-11T11:35:51.000000Z\",\"mobile_no\":\"1\",\"category\":\"1\",\"status\":1,\"login_at\":null,\"last_seen\":\"2023-07-11 11:35:51\"}', NULL, '1', '2023-07-11 12:11:37', '2023-07-11 12:16:54'),
(91, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:13:57', '2023-07-11 12:16:54'),
(92, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:16:24', '2023-07-11 12:16:54'),
(93, '54', '45', 'hi', 'img/img_1688808965.png', NULL, '1', '2023-07-11 12:16:59', '2023-07-11 12:17:00'),
(94, '45', '60', 'Hi', 'img/img_1687588037.avif', NULL, '0', '2023-07-11 12:21:34', '2023-07-11 12:21:34'),
(95, '45', '59', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:21:58', '2023-07-19 08:37:53'),
(96, '45', '54', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:23:07', '2023-07-11 12:23:08'),
(97, '45', '54', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:23:31', '2023-07-11 12:23:42'),
(98, '45', '54', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:23:42', '2023-07-11 12:24:42'),
(99, '45', '54', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:25:46', '2023-07-11 12:26:42'),
(100, '45', '54', 'Hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:26:57', '2023-07-11 12:27:42'),
(101, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:27:11', '2023-07-11 12:27:42'),
(102, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:27:35', '2023-07-11 12:27:42'),
(103, '54', '45', 'Hi', 'img/img_1688808965.png', NULL, '1', '2023-07-11 12:29:21', '2023-07-11 12:29:21'),
(104, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:29:50', '2023-07-11 12:29:50'),
(105, '54', '45', 'Hi', 'img/img_1688808965.png', NULL, '1', '2023-07-11 12:32:02', '2023-07-11 12:32:03'),
(106, '45', '54', 'hi', 'img/img_1687588037.avif', NULL, '1', '2023-07-11 12:32:33', '2023-07-11 12:32:33'),
(107, '54', '45', 'hi', 'img/img_1688808965.png', NULL, '1', '2023-07-11 12:38:26', '2023-07-11 12:38:42'),
(108, '54', '58', 'Hi', 'img/img_1688808965.png', NULL, '0', '2023-07-11 13:21:52', '2023-07-11 13:21:52'),
(109, '54', '45', 'Hi', 'img/img_1688808965.png', NULL, '1', '2023-07-11 13:22:20', '2023-07-17 09:59:01'),
(110, '54', '45', 'Hi', 'img/img_1688808965.png', NULL, '1', '2023-07-13 16:39:50', '2023-07-17 09:59:01'),
(111, '59', '45', 'hi', 'img/img_1689755764.jpeg', NULL, '0', '2023-07-19 08:38:09', '2023-07-19 08:38:09'),
(112, '59', '48', 'hi', 'img/img_1689755764.jpeg', NULL, '0', '2023-07-19 08:38:30', '2023-07-19 08:38:30'),
(113, '59', '79', 'hi', 'img/img_1690357172.jpg', NULL, '1', '2023-08-01 06:04:10', '2023-08-01 06:05:50'),
(114, '59', '54', 'hi', 'img/img_1690357172.jpg', NULL, '0', '2023-08-01 06:05:13', '2023-08-01 06:05:13'),
(115, '79', '59', 'hi', 'img/img_1690783925.png', NULL, '1', '2023-08-01 06:05:59', '2023-08-01 06:06:09'),
(116, '59', '79', 'hi', 'img/img_1690357172.jpg', NULL, '1', '2023-08-01 06:06:15', '2023-08-01 06:06:16'),
(117, '79', '59', 'hi', 'img/img_1690783925.png', NULL, '1', '2023-08-01 06:06:25', '2023-08-01 06:06:25'),
(118, '57', '63', 'hi', 'img/img_1687589515.png', NULL, '0', '2023-08-19 07:24:16', '2023-08-19 07:24:16'),
(119, '124', '48', 'hi', 'img/img_1693218037.png', NULL, '0', '2023-08-28 10:21:01', '2023-08-28 10:21:01'),
(120, '124', '59', 'hi how are you', 'img/img_1693218037.png', NULL, '1', '2023-08-28 10:23:08', '2023-08-28 10:23:41'),
(121, '59', '124', 'fine', 'img/img_1690357172.jpg', NULL, '1', '2023-08-28 10:23:54', '2023-08-28 10:23:54'),
(122, '59', '124', 'hi\'', 'img/img_1690357172.jpg', NULL, '1', '2023-08-28 11:03:41', '2023-08-28 11:04:14'),
(123, '123', '127', 'hi', 'img/img_1693311814.jpg', NULL, '1', '2023-08-29 12:23:55', '2023-09-04 10:36:28'),
(124, '123', '127', 'hi', 'img/img_1693311814.jpg', NULL, '1', '2023-09-04 10:30:21', '2023-09-04 10:36:28'),
(125, '127', '123', 'Hi', 'img/img_1693306480.png', NULL, '1', '2023-09-04 10:36:39', '2023-09-04 10:36:40'),
(126, '123', '127', 'hi', 'img/img_1693311814.jpg', NULL, '1', '2023-09-04 10:41:08', '2023-09-04 10:41:36'),
(127, '127', '123', 'how are', 'img/img_1693306480.png', NULL, '1', '2023-09-04 10:41:46', '2023-09-04 10:41:47'),
(128, '123', 'null', 'dhjs', 'img/img_1693311814.jpg', NULL, '0', '2023-10-25 08:47:15', '2023-10-25 08:47:15'),
(129, '123', '59', 'hi', 'img/img_1693311814.jpg', NULL, '1', '2023-10-28 07:36:07', '2023-10-28 07:38:23'),
(130, '123', '121', 'hi', 'img/img_1693311814.jpg', NULL, '0', '2023-10-28 07:36:29', '2023-10-28 07:36:29'),
(131, '123', '121', 'hi', 'img/img_1693311814.jpg', NULL, '0', '2023-10-28 07:36:42', '2023-10-28 07:36:42'),
(132, '123', '142', 'hi', 'img/img_1693311814.jpg', NULL, '0', '2023-10-28 07:37:36', '2023-10-28 07:37:36'),
(133, '59', '123', 'hi', 'img/img_1690357172.jpg', NULL, '1', '2023-10-28 07:38:28', '2023-10-28 07:38:47'),
(134, '123', '59', 'hlo', 'img/img_1693311814.jpg', NULL, '1', '2023-10-28 07:38:58', '2023-10-28 07:38:59'),
(135, '149', '44', 'hi', 'img/img_1700905120.jpg', NULL, '0', '2023-12-10 16:30:06', '2023-12-10 16:30:06'),
(136, '149', '44', 'hi', 'img/img_1700905120.jpg', NULL, '0', '2023-12-10 16:30:06', '2023-12-10 16:30:06'),
(137, '149', '44', 'hi', 'img/img_1700905120.jpg', NULL, '0', '2023-12-10 16:30:06', '2023-12-10 16:30:06'),
(138, '149', '44', 'hi', 'img/img_1700905120.jpg', NULL, '0', '2023-12-10 16:30:07', '2023-12-10 16:30:07'),
(139, '123', 'null', 'hi', 'img/img_1700037696.jpg', NULL, '0', '2023-12-12 11:28:16', '2023-12-12 11:28:16'),
(140, '123', '44', 'hi', 'img/img_1700037696.jpg', NULL, '0', '2023-12-12 11:28:24', '2023-12-12 11:28:24'),
(141, '123', '44', 'hi', 'img/img_1700037696.jpg', NULL, '0', '2023-12-12 11:28:44', '2023-12-12 11:28:44'),
(142, '123', '58', 'hi', 'img/img_1700037696.jpg', NULL, '0', '2023-12-12 11:29:11', '2023-12-12 11:29:11'),
(143, '123', '59', 'hi', 'img/img_1700037696.jpg', NULL, '1', '2023-12-12 11:30:22', '2023-12-12 11:33:06'),
(144, '123', 'null', 'Hi', 'img/img_1700037696.jpg', NULL, '0', '2023-12-12 11:32:12', '2023-12-12 11:32:12'),
(145, '123', '59', 'Hi', 'img/img_1700037696.jpg', NULL, '1', '2023-12-12 11:32:38', '2023-12-12 11:33:06'),
(146, '59', '123', 'hi', 'img/img_1690357172.jpg', NULL, '1', '2023-12-12 11:33:27', '2023-12-12 11:33:27'),
(147, '123', '59', 'Kya ho rha', 'img/img_1700037696.jpg', NULL, '1', '2023-12-12 11:33:39', '2023-12-12 11:33:39'),
(148, '59', '123', 'kuchh nhi', 'img/img_1690357172.jpg', NULL, '1', '2023-12-12 11:33:49', '2023-12-12 11:33:49'),
(149, '123', '59', 'Hlo', 'img/img_1700037696.jpg', NULL, '1', '2023-12-12 11:35:58', '2023-12-12 11:35:59'),
(150, '123', '59', 'Hlo', 'img/img_1700037696.jpg', NULL, '1', '2023-12-12 11:36:11', '2023-12-12 11:36:12'),
(151, '123', '49', 'Hi', 'img/img_1700037696.jpg', NULL, '1', '2023-12-13 11:32:58', '2023-12-13 11:33:01'),
(152, '123', '49', 'How to', 'img/img_1700037696.jpg', NULL, '1', '2023-12-13 11:33:10', '2023-12-13 11:33:10'),
(153, '49', '123', 'hi', 'img/img_1691398406.png', NULL, '1', '2023-12-13 11:33:23', '2023-12-13 11:33:23'),
(154, '123', '49', 'How to work', 'img/img_1700037696.jpg', NULL, '1', '2023-12-13 11:34:12', '2023-12-13 11:34:13'),
(155, '49', '123', 'working process \nis :', 'img/img_1691398406.png', NULL, '1', '2023-12-13 11:35:02', '2023-12-13 11:35:02'),
(156, '149', '44', 'hello', 'img/img_1700905120.jpg', NULL, '0', '2023-12-15 10:23:34', '2023-12-15 10:23:34'),
(157, '149', '59', 'Hello', 'img/img_1700905120.jpg', NULL, '0', '2023-12-17 17:36:59', '2023-12-17 17:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `blog_id` int(200) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `user_name`, `body`, `status`, `created_at`, `updated_at`) VALUES
(5, '39', 9, 'samadrit', 'good', '1', '2023-03-20 04:50:26', '2023-03-20 04:50:26'),
(6, '1', 9, NULL, 'good', '1', '2023-05-23 06:35:32', '2023-05-23 06:35:32'),
(7, '1', 9, NULL, 'nhhkj', '1', '2023-05-23 06:37:44', '2023-05-23 06:37:44'),
(8, '1', 9, 'admin', 'hi', '1', '2023-05-23 06:38:58', '2023-05-23 06:38:58'),
(9, '1', 8, 'admin', 'good', '1', '2023-05-23 07:04:14', '2023-05-23 07:04:14'),
(10, '1', 9, 'admin', 'hi', '1', '2023-05-23 07:17:53', '2023-05-23 07:17:53'),
(11, '1', 9, 'admin', 'very good', '1', '2023-05-23 07:18:49', '2023-05-23 07:18:49'),
(12, '1', 9, 'admin', 'very good', '1', '2023-05-23 07:19:29', '2023-05-23 07:19:29'),
(13, '1', 9, 'admin', 'jkl', '1', '2023-05-23 07:19:39', '2023-05-23 07:19:39'),
(14, '1', 9, 'admin', 'jhk', '1', '2023-05-23 07:20:15', '2023-05-23 07:20:15'),
(15, '1', 7, 'admin', 'gjh', '1', '2023-05-24 06:22:35', '2023-05-24 06:22:35'),
(16, '1', 5, 'admin', 'good', '1', '2023-05-25 01:26:23', '2023-05-25 01:26:23'),
(17, '1', 8, 'admin', 'hi', '1', '2023-05-25 02:38:04', '2023-05-25 02:38:04'),
(18, '43', 9, 'NIRAJ MISHRA', 'good', '1', '2023-05-25 12:46:02', '2023-05-25 12:46:02'),
(19, '1', 8, 'admin', 'good', '1', '2023-05-29 10:58:10', '2023-05-29 10:58:10'),
(20, '1', 9, 'admin', 'hi', '1', '2023-05-30 09:48:41', '2023-05-30 09:48:41'),
(21, '1', 19, 'admin', 'good', '1', '2023-05-31 10:30:13', '2023-05-31 10:30:13'),
(22, '45', 21, 'Niraj Mishra', 'good', '1', '2023-06-03 10:20:47', '2023-06-03 10:20:47'),
(23, '46', 22, 'Apoorv Kumar', NULL, '1', '2023-06-03 12:21:56', '2023-06-03 12:21:56'),
(24, '1', 19, 'admin', 'good', '1', '2023-06-05 11:12:34', '2023-06-05 11:12:34'),
(25, '1', 19, 'admin', 'very', '1', '2023-06-05 11:13:33', '2023-06-05 11:13:33'),
(26, '45', 9, 'Niraj Mishra', 'jhjh', '1', '2023-06-06 10:19:16', '2023-06-06 10:19:16'),
(27, '1', 8, 'admin', 'good', '1', '2023-06-06 10:19:30', '2023-06-06 10:19:30'),
(28, '1', 23, 'admin', 'good  job', '1', '2023-06-08 09:56:15', '2023-06-08 09:56:15'),
(29, '45', 23, 'Niraj Mishra', 'greate', '1', '2023-06-08 09:57:11', '2023-06-08 09:57:11'),
(30, '45', 25, 'Niraj Mishra', 'good', '1', '2023-06-23 11:37:15', '2023-06-23 11:37:15'),
(31, '45', 26, 'Niraj Mishra', 'best', '1', '2023-06-23 11:41:37', '2023-06-23 11:41:37'),
(37, '54', 50, 'NIRAJ MISHRA', 'good', '1', '2023-07-14 11:41:39', '2023-07-14 11:41:39'),
(38, '54', 50, 'NIRAJ MISHRA', NULL, '1', '2023-07-14 11:53:59', '2023-07-14 11:53:59'),
(42, '1', 59, 'admin', 'Ok', '1', '2023-08-26 06:01:54', '2023-08-26 06:01:54'),
(43, '1', 58, 'admin', 'good', '1', '2023-08-26 07:19:33', '2023-08-26 07:19:33'),
(44, '1', 75, 'admin', 'good', '1', '2023-08-26 07:20:46', '2023-08-26 07:20:46'),
(45, '123', 58, 'Niraj Mishra', 'hi', '1', '2023-08-26 11:28:37', '2023-08-26 11:28:37'),
(46, '126', 75, 'Nokhalera', 'ok', '1', '2023-08-28 11:00:45', '2023-08-28 11:00:45'),
(47, '59', 76, 'gulshan kumari', 'good', '1', '2023-08-29 12:14:45', '2023-08-29 12:14:45'),
(49, '49', 78, 'Picruit pioneer', 'good', '1', '2023-12-13 06:28:11', '2023-12-13 06:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `educationaldetailjobseeks`
--

CREATE TABLE `educationaldetailjobseeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `Qualification` varchar(255) DEFAULT NULL,
  `University` varchar(255) DEFAULT NULL,
  `yrs_of_passing` varchar(255) DEFAULT NULL,
  `Certificate_id` varchar(255) DEFAULT NULL,
  `Qualificationdocument` varchar(255) DEFAULT NULL,
  `Idproofdocument` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educationaldetailjobseeks`
--

INSERT INTO `educationaldetailjobseeks` (`id`, `user_id`, `Qualification`, `University`, `yrs_of_passing`, `Certificate_id`, `Qualificationdocument`, `Idproofdocument`, `document`, `created_at`, `updated_at`) VALUES
(1, NULL, 'BSC', 'ARYBHATT University', '2023', 'Aadhar CARD', '1679989077.png', '1679989077.png', '1679989077.png', '2023-03-28 13:38:35', '2023-03-28 14:37:57'),
(2, '45', 'BTECH', 'Choose Your Option', 'Choose Your Option', 'Choose Your Option', '1680093545.png', '1680093545.png', '1680093545.png', '2023-03-29 13:21:23', '2023-03-29 19:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `email_stores`
--

CREATE TABLE `email_stores` (
  `id` int(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_stores`
--

INSERT INTO `email_stores` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mishra74881@gmail.com', '2023-08-25 12:23:31', '2023-08-25 12:23:31'),
(2, 'mishra7@gmail.com', '2023-08-26 05:30:32', '2023-08-26 05:30:32'),
(3, 'softgenics.private@gmail.com', '2023-09-09 05:30:41', '2023-09-09 05:30:41'),
(4, 'subhasish.samaddar@techcrista.com', '2023-09-16 15:04:05', '2023-09-16 15:04:05'),
(5, 'incnv@gmail.com', '2023-10-23 17:08:53', '2023-10-23 17:08:53'),
(6, 'dEeRcm.hbdpmwq@spinapp.bar', '2023-10-24 00:05:14', '2023-10-24 00:05:14'),
(7, 'jFSlQR.pwjmthc@pointel.xyz', '2023-11-19 19:56:02', '2023-11-19 19:56:02'),
(8, 'pak.00xp.13rf@pf.com', '2023-11-26 13:38:42', '2023-11-26 13:38:42'),
(9, 'UMjWxk.tbhmj@spinapp.bar', '2023-11-27 10:36:25', '2023-11-27 10:36:25'),
(10, 'm261264369@gmail.com', '2023-12-03 12:00:35', '2023-12-03 12:00:35'),
(11, 'm26124369@gmail.com', '2023-12-03 12:01:28', '2023-12-03 12:01:28'),
(12, 'REKsmE.qhbmjjh@brasswire.me', '2023-12-03 22:56:33', '2023-12-03 22:56:33'),
(13, 'PUkKOv.qchmdbc@rightbliss.beauty', '2023-12-05 20:36:38', '2023-12-05 20:36:38'),
(14, 'mishra74881@gmail.com', '2023-12-11 08:21:41', '2023-12-11 08:21:41'),
(15, 'UoUivX.cbmwhtb@scranch.shop', '2023-12-12 10:52:15', '2023-12-12 10:52:15'),
(16, 'mishra74881@gmail.com', '2023-12-12 11:45:21', '2023-12-12 11:45:21'),
(17, 'nikhilupadhyay097@gmail.com', '2023-12-13 12:05:43', '2023-12-13 12:05:43'),
(18, 'nikhilupadhyay097@gmail.com', '2023-12-13 12:05:58', '2023-12-13 12:05:58'),
(19, 'Bnbn@gmail.com', '2023-12-13 20:31:02', '2023-12-13 20:31:02'),
(20, 'Jgjh@', '2023-12-14 09:35:13', '2023-12-14 09:35:13'),
(21, 'Mohitdutta0407@gmail.com', '2023-12-15 08:21:49', '2023-12-15 08:21:49'),
(22, 'nikhilupadhyay097@gmail.com', '2023-12-15 08:36:27', '2023-12-15 08:36:27'),
(23, 'nikhilupadhyay097@gmail.cm', '2023-12-17 12:14:30', '2023-12-17 12:14:30'),
(24, 'ajxjBw.bhdpmdp@tarboosh.shop', '2023-12-18 14:57:02', '2023-12-18 14:57:02'),
(25, 'dsSFhC.bqhcjwq@virilia.life', '2023-12-21 23:17:30', '2023-12-21 23:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `enewjobs`
--

CREATE TABLE `enewjobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(225) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `minsalary` int(100) DEFAULT NULL,
  `maxsalary` int(225) DEFAULT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  `job_detail` varchar(5000) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enewjobs`
--

INSERT INTO `enewjobs` (`id`, `user_id`, `title`, `date`, `minsalary`, `maxsalary`, `start_time`, `end_time`, `job_detail`, `location`, `status`, `created_at`, `updated_at`) VALUES
(6, 54, 'change', '2023-06-23', 34733, NULL, '15:49', '17:48', 'kjdsahfkjhsjk', 'Patna', 0, '2023-06-22 10:18:52', '2023-06-27 09:13:23'),
(7, 54, 'change', '2023-06-28', 50000, NULL, '11:34', '00:34', 'this job for ..........................................', 'Patna', 0, '2023-06-26 05:05:31', '2023-06-27 09:14:54'),
(9, 47, 'Office coordinator', '2023-06-28', 12000, NULL, '09:00', '18:00', 'Handling office work', 'Ludhiana', 1, '2023-06-26 11:55:04', '2023-06-26 11:55:04'),
(10, 47, 'Office coordinator', '2023-06-28', 12000, NULL, '09:00', '18:00', 'Handling office work', 'Ludhiana', 1, '2023-06-26 11:55:28', '2023-06-26 11:55:28'),
(11, 47, 'Office coordinator', '2023-06-28', 12000, NULL, '09:00', '18:00', 'Handling office work', 'Ludhiana', 1, '2023-06-26 11:57:21', '2023-06-26 11:57:21'),
(12, 47, 'coordinator', '2023-06-29', 10000, NULL, '22:00', '23:00', 'Handling office work', 'Ludhiana', 1, '2023-06-26 12:21:26', '2023-06-26 12:21:26'),
(13, 54, 'change', '2023-06-27', 6000, NULL, '19:15', '18:20', 'kjdsahfkjhsjk', 'Patna', 0, '2023-06-26 12:46:12', '2023-06-27 09:15:51'),
(14, 54, 'change', '2023-06-27', 7000, NULL, '19:19', '19:19', 'this job for ..........................................', 'Patna', 0, '2023-06-26 12:49:34', '2023-06-30 11:14:21'),
(15, 44, 'Graphic designer', '2023-06-29', 3000, NULL, '09:00', '13:00', 'Required experienced graphic designer for clothing brand', 'Ludhiana , Punjab', 0, '2023-06-29 07:13:25', '2023-06-30 11:23:24'),
(16, 54, 'web developer', '2023-07-08', 40000, NULL, '10:45', '17:08', 'this job for ..........................................', 'Delhi', 1, '2023-07-01 05:14:56', '2023-07-04 11:37:55'),
(17, 44, 'Graphic designer', '2023-07-05', 6000, NULL, '09:00', '13:00', 'Required experienced graphic designer for clothing brand', 'Ludhiana , Punjab', 0, '2023-07-03 06:13:21', '2023-07-06 07:28:56'),
(18, 44, 'Office coordinator', '2023-07-05', 12000, NULL, '09:00', '15:00', '1. Required experienced office coordinator for educational consultancy.', 'Ludhiana , Punjab', 1, '2023-07-04 11:10:41', '2023-07-04 11:12:15'),
(21, 54, 'web developer', '2023-07-08', 80000, NULL, '17:28', '15:29', 'any things', 'kanpur', 0, '2023-07-06 09:59:42', '2023-07-10 10:24:22'),
(22, 47, 'supervisor', '2023-07-08', 50000, NULL, '16:18', '16:19', 'handling office responsibilities', 'Ludhiana', 1, '2023-07-07 10:49:38', '2023-07-07 10:49:38'),
(23, 1, 'new job for  hr', '2023-07-22', 80000, NULL, '13:30', '12:34', 'sdlfjlsj\r\nlkdslf\r\n\r\nfdslkjflkssf\r\n\r\ndslkkjf', 'patna', 1, '2023-07-21 07:00:45', '2023-07-21 07:00:45'),
(24, 96, 'Tutor', '2023-08-05', 10000, NULL, '16:00', '18:00', 'Required experienced teacher for 11th grade physics', 'Ludhiana , Punjab', 1, '2023-08-05 08:09:08', '2023-08-05 08:09:08'),
(25, 121, 'Software Developer', '2023-08-25', 25000, NULL, '10:00', '06:30', 'Require PHP, MYSQL  , Javascript Knowledge For Software', 'ludhiana', 1, '2023-08-25 05:54:53', '2023-08-25 05:54:53'),
(26, 121, 'Software Sales And Implementer', '2023-08-25', 15000, NULL, '10:00', '06:30', 'ERP Accounts And CRM Software Sale And Implement', 'ludhiana', 1, '2023-08-25 05:56:17', '2023-08-25 05:56:17'),
(27, 127, 'web develop', '2023-09-21', 5000, 20000, '09:59', '17:37', 'this job for any one can apply', 'patna', 1, '2023-09-20 07:08:24', '2023-09-20 07:08:24'),
(28, 127, 'accounting', '2023-09-21', NULL, NULL, '16:12', '20:12', 'this is for only', 'Patna', 1, '2023-09-20 08:43:48', '2023-09-20 08:43:48'),
(29, 127, 'Mecup', '2023-09-21', 8000, 50000, '16:20', '19:23', 'This job for only girl', 'Patna', 1, '2023-09-20 08:50:24', '2023-09-20 08:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `eposts`
--

CREATE TABLE `eposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `segment` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `schedule` varchar(500) DEFAULT NULL,
  `no_open` varchar(500) DEFAULT NULL,
  `min_max` varchar(500) DEFAULT NULL,
  `other` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `resume` varchar(500) DEFAULT NULL,
  `posted_by` varchar(500) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eposts`
--

INSERT INTO `eposts` (`id`, `user_id`, `title`, `segment`, `mode`, `address`, `type`, `schedule`, `no_open`, `min_max`, `other`, `description`, `resume`, `posted_by`, `status`, `created_at`, `updated_at`) VALUES
(1, '40', 'name', 'dff', 'offline', 'esfsef', 'Part Time', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-03-23 14:32:52', '2023-03-23 14:32:52'),
(2, '40', 'szczsdc', 'zxc c', 'online', 'work from home', 'Freelancer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-03-23 14:33:04', '2023-03-23 14:33:04'),
(3, '40', 'ddc', 'zcc', 'offline', 'zdvczdvc', 'Part Time', 'Day', '5', '5241,5415', 'dc', 'czdczc', 'No', 'acdzc', '0', '2023-03-25 06:52:56', '2023-03-25 06:52:56'),
(4, '40', 'dddc', 'zcc', 'offline', 'zdvczdvc', 'Part Time', 'Day', '5', '5241,5415', 'dc', 'czdczc', 'No', 'acdzc', '1', '2023-03-25 06:52:56', '2023-03-25 06:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `eprofiles`
--

CREATE TABLE `eprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cphone` varchar(255) DEFAULT NULL,
  `cemail` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cem_no` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `pincode` int(225) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `docs` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eprofiles`
--

INSERT INTO `eprofiles` (`id`, `user_id`, `cname`, `cphone`, `cemail`, `name`, `phone`, `cem_no`, `designation`, `industry`, `location`, `pincode`, `description`, `docs`, `status`, `created_at`, `updated_at`) VALUES
(1, '40', 'SAM', '07980372546', 'tsama209@gmail.com', 'samadrit das', '07980372546', '25-70', 'xdvcxdv', 'industry 4', '700127', 0, 'srfrsdf', '1679484256.pdf', '0', '2023-03-22 05:54:16', '2023-03-22 05:54:16'),
(7, '54', 'Niraj', NULL, 'mishra74881@gmail.com', 'Niraj', '546465465', '1-10', 'tre', 'industry 1', NULL, 802214, 'gvfg', NULL, '0', '2023-07-10 05:52:53', '2023-08-09 12:30:38'),
(8, '44', 'deep', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-08-07 08:35:54', '2023-08-07 08:35:54'),
(9, '47', 'pioneer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-08-19 09:14:28', '2023-08-19 09:14:28'),
(10, '121', 'Mummy Software Corp.', '8427096201', 'sales@mummysoftware.com', 'Sagar', '8427096201', '1-10', 'Manager', 'industry 1', 'Ludhiana', NULL, 'I.T Industry', NULL, '0', '2023-08-25 05:53:24', '2023-08-25 05:53:24'),
(11, '127', 'Niraj', '4464656', 'mishra74881@gmail.com', 'Niraj', '+918709345226', '11-23', NULL, 'industry 1', 'Patna', 802214, 'ghf', NULL, '0', '2023-08-29 10:54:48', '2023-12-21 10:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feel_frees`
--

CREATE TABLE `feel_frees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `yourrequest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feel_frees`
--

INSERT INTO `feel_frees` (`id`, `name`, `number`, `email`, `yourrequest`, `created_at`, `updated_at`) VALUES
(1, 'niraj', '723547', 'mishra74881@gmial.com', 'jiowjoi', '2023-07-19 11:49:10', '2023-07-19 11:49:10'),
(2, 'dheeraj', '64765474454', 'mish@gmail.com', 'i have to add', '2023-07-19 12:08:11', '2023-07-19 12:08:11'),
(3, 'Niraj', '08709345226', 'mishra74881@gmial.com', 'this new request', '2023-07-21 09:01:20', '2023-07-21 09:01:20'),
(4, 'deep', '09779427205', 'dshikha0502@gmail.com', 'Please let me know what are the charges', '2023-07-26 09:44:26', '2023-07-26 09:44:26'),
(5, 'RobertGlals', NULL, 'alfredegov@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2023-08-06 22:42:09', '2023-08-06 22:42:09'),
(6, 'Akashdeep Singh', '9915014500', 'giftygill828@gmail.com', 'Im interested HR job my 10years experience so tell me HR job', '2023-08-15 11:10:02', '2023-08-15 11:10:02'),
(7, 'ScottPap', NULL, 'WILLIAMBARFIELD@BELLSOUTH.NET', 'GET 3100 HIGH QUALITY BACKLINKS AND RANK TOP 10 GOOGLE http://3100-backlinks-6152.oha-chatbot.xyz/exclusive', '2023-08-30 17:56:38', '2023-08-30 17:56:38'),
(8, 'Kanishka sharma', '9351435953', 'sharmakanishka323@gmail.com', 'Freecanler', '2023-08-31 16:32:35', '2023-08-31 16:32:35'),
(9, 'Douglasraimb', NULL, 'annino.consul@virgilio.it', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://forex-2041.elisou.com/exclusive', '2023-09-01 20:50:15', '2023-09-01 20:50:15'),
(10, 'niraj', '08709345226', 'mishr74881@gmail.com', 'wow', '2023-09-09 05:29:04', '2023-09-09 05:29:04'),
(11, 'RobertExova', NULL, 'busbroderk@hotmail.com', 'ARCHIVAL INDECENT PHOTOS OF NAKED KIM KARDASHIAN - 34 PHOTOS http://naked-kim-81171.igspeedster.com/site', '2023-09-09 06:02:24', '2023-09-09 06:02:24'),
(12, 'PhilGlals', NULL, 'draikkimr976@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2023-09-22 19:29:01', '2023-09-22 19:29:01'),
(13, 'Sergioalutt', NULL, 't1mar@me.com', 'ATTENTION! You have been credited $24,356.82 for 364 days. Urgently confirm the transaction http://withdrawal-money-611811.lovepks.com/bank', '2023-09-23 19:17:22', '2023-09-23 19:17:22'),
(14, 'honey', '9653945747', 'picruitldh@gmail.com', 'hi', '2023-09-28 09:59:25', '2023-09-28 09:59:25'),
(15, 'RonaldVeits', NULL, 'omartari602@gmail.com', 'ATTENTION! QUICK INCOME OF EXACTLY $1000 PER DAY IN CRYPTOCURRENCY http://the-819972.reditunion.com/click', '2023-09-29 06:23:02', '2023-09-29 06:23:02'),
(16, 'ErnestSeice', NULL, 'cupif@yahoo.fr', 'URGENT! The private AI application brings in a profit of more than $1000 per day. Limited offer http://trade-ai-318712.outlawtat.com/trade', '2023-10-05 21:11:23', '2023-10-05 21:11:23'),
(17, 'Anshu', '7347222300', 'anshumanshoor@gmail.com', 'Teacher', '2023-10-09 13:28:09', '2023-10-09 13:28:09'),
(18, 'RobertGlals', NULL, 'alfredegov@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2023-10-16 12:30:29', '2023-10-16 12:30:29'),
(19, 'Lavina Fabinyi', '52-23-66-42', 'lavina.fabinyi@gmail.com', 'want to get an alert when your website is down? then use our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HmMMe?picruit.com   for more info', '2023-10-21 18:21:57', '2023-10-21 18:21:57'),
(20, 'Delila Forehand', '(71) 5029-3716', 'delila.forehand@googlemail.com', 'want to get an alert when your website is down? then signup to our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HM1Fg?picruit.com   for more info', '2023-10-22 17:19:01', '2023-10-22 17:19:01'),
(21, 'test', '8765432456', 'incnv@gmail.com', 'job', '2023-10-23 16:35:49', '2023-10-23 16:35:49'),
(22, '1', '1', 'KLMSMH.hbdpmcb@spinapp.bar', 'KJdpJljhyuRWYUdpjUXyFtHYjI', '2023-10-24 00:05:12', '2023-10-24 00:05:12'),
(23, 'HRM Bah Mbi', NULL, 'hrhmbambi@gmail.com', 'Attn. Director, \r\n \r\nWe are interested in your products. Please contact us if your company can handle a bulk supply of your products to Cameroon. \r\nPlease send your reply to bahmbi3@aghemfondom.com \r\n \r\nHRM Bah Mbi', '2023-10-24 05:16:01', '2023-10-24 05:16:01'),
(24, 'CharlesHef', NULL, 'yasen.krasen.13+73758@mail.ru', 'Nguheidjiwfefhei ijiwdwjurFEJDKWIJFEIF аоушвцшургаруш ШОРГПГОШРГРПГОГРГ iryuieoieifegjejj bvncehfedjiehfu picruit.com', '2023-10-24 18:54:45', '2023-10-24 18:54:45'),
(25, 'Niraj', '08709345226', 'mishra74881@gmial.com', 'my query', '2023-10-26 11:29:44', '2023-10-26 11:29:44'),
(26, 'Samuelzer', NULL, 'nikki.pensa@gmail.com', 'Special Alert: Funds Arrive in Your Account http://cashcowexpress-665342.tranformacaodigital.com/money', '2023-10-31 06:19:09', '2023-10-31 06:19:09'),
(27, 'RobertFug', NULL, 'johnbob111@hotmail.com', 'URGENTLY! YOUR EARNINGS WERE $45,800.98. YOU NEED TO WITHDRAW YOUR EARNINGS WITHIN 24 HOURS http://withdrawspeedlanewaypathzoom-2306583.haighhouse.com/page?061', '2023-11-06 07:05:28', '2023-11-06 07:05:28'),
(28, '1', '1', 'aUUwjX.pwjmtqj@pointel.xyz', 'FoubdafbSlljJScdahSnAFuTmqDJv', '2023-11-19 19:55:56', '2023-11-19 19:55:56'),
(29, '1', '1', 'qHWiQO.tbhpm@spinapp.bar', 'Kamryn Fry', '2023-11-27 10:36:21', '2023-11-27 10:36:21'),
(30, 'aaa', 'qqqq', 'aaaaaa@ff.comaaa', '333333333333333333333333333', '2023-11-28 13:45:00', '2023-11-28 13:45:00'),
(31, 'Manjinder kaur', '7087802641', 'm26124369@gmail.com', 'Students  teach. Primary class', '2023-12-03 11:56:14', '2023-12-03 11:56:14'),
(32, 'Manjinder kaur', '7087802641', 'm26124369@gmail.com', 'Students  teach for Primary class', '2023-12-03 11:58:53', '2023-12-03 11:58:53'),
(33, '1', '1', 'hehXzo.qhbwmmc@brasswire.me', 'Henrik Richardson', '2023-12-03 22:56:31', '2023-12-03 22:56:31'),
(34, '1', '1', 'DklOyp.qchmdbh@rightbliss.beauty', 'Zen Simpson', '2023-12-05 20:36:36', '2023-12-05 20:36:36'),
(35, 'BrianblanD', NULL, 'kendallmatthews3@gmail.com', 'GAMEDEV: CREATE A COOL GAME IN 10 MINUTES AND EARN $1,000,000 https://ps3ego.de/?wptouch_switch=desktop&redirect=https%3A%2F%2Fshoppy.gg%2Fproduct%2FsdrduvV%3F2897', '2023-12-08 16:43:52', '2023-12-08 16:43:52'),
(36, 'James Momo', NULL, 'jamesmomo1973@gmail.com', 'Attn. Director, \r\n \r\nWe are interested in your products and line of business. \r\n \r\nPlease do not hesitate to contact us if you will need a financial partner/investor. \r\n \r\nKindly send reply to info@itaconsultancy.net \r\n \r\nRegards, \r\n \r\nJames Momo', '2023-12-11 10:35:45', '2023-12-11 10:35:45'),
(37, 'Thomasecomb', NULL, 'exchangeaibot@proton.me', 'Enter the Trust Wallet giveaway and win up to $750,000 and NFT vouchers! Just go to the official giveaway page at https://trustgiveawayse.com/trust connect your wallet and receive a guaranteed prize. Good luck!', '2023-12-12 01:06:16', '2023-12-12 01:06:16'),
(38, '1', '1', 'YJaWKw.cbmwhhp@scranch.shop', 'jcWEhUufKKRSjzWDjbtqNt', '2023-12-12 10:52:13', '2023-12-12 10:52:13'),
(39, 'Davidapene', NULL, 'jeremy_goal@hotmail.fr', 'CRYPTOCURRENCY LOVE: $1000 DAILY TO TRANSFORM YOUR CAUSE https://www.axxeva.ch/?redirectToDomain=https%3A%2F%2Ftelegra.ph%2Fmng-12-12%3F9560 \r\nseedehoodedia Sloleeffese  lamiimicy', '2023-12-12 11:47:10', '2023-12-12 11:47:10'),
(40, 'niraj', '9898796798678', 'picruit.pioneer@gmail.com', 'i have problem', '2023-12-13 06:03:07', '2023-12-13 06:03:07'),
(41, 'nik', '913117', 'nik@gmail.com', 'uiui', '2023-12-15 15:21:51', '2023-12-15 15:21:51'),
(42, 'Ni', '987654', 't@gmail.com', 'Hello', '2023-12-17 12:16:21', '2023-12-17 12:16:21'),
(43, '1', '1', 'JEtozW.bhdpmhb@tarboosh.shop', 'JOKFbLMXtRmXsvYAmEflyAixfD', '2023-12-18 14:56:53', '2023-12-18 14:56:53'),
(44, '1', '1', 'qfjVbY.bqhcjcp@virilia.life', 'Miles Peterson', '2023-12-21 23:17:28', '2023-12-21 23:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `finels`
--

CREATE TABLE `finels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `provide_ref_student` varchar(255) DEFAULT NULL,
  `any_other_details` varchar(255) DEFAULT NULL,
  `done_assigment` varchar(255) DEFAULT NULL,
  `verify_certificate` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) DEFAULT NULL,
  `id_proof` varchar(255) DEFAULT NULL,
  `highest_qualification_proof` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `foreign_experience` varchar(255) DEFAULT NULL,
  `t&C_pdf` varchar(255) DEFAULT NULL,
  `reg_fee` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `globleassignments`
--

CREATE TABLE `globleassignments` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `assignment` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `assingmenet_file` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `globleassignments`
--

INSERT INTO `globleassignments` (`id`, `user_id`, `title`, `assignment`, `date`, `assingmenet_file`, `created_at`, `updated_at`) VALUES
(8, 12, 'mca part 2', 'paper 1', '2023-09-26', 'img/MCA_Part-II_Examination Programme-2023.pdf', '2023-09-25 06:13:20', '2023-09-25 06:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `googlemaps`
--

CREATE TABLE `googlemaps` (
  `id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `lat` varchar(225) NOT NULL,
  `lng` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `googlemaps`
--

INSERT INTO `googlemaps` (`id`, `user_id`, `lat`, `lng`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, '25.5941', '85.1376', 1, '2023-07-18 10:43:03', NULL),
(2, 3, '20.593683', '78.962883', 2, '2023-07-18 10:43:03', NULL),
(3, 4, '20.593683', '78.962883', 1, '2023-07-18 11:23:18', NULL),
(4, 45, '25.6102015', '85.1280013', 1, '2023-07-19 06:18:55', '2023-07-19 06:35:12'),
(5, 57, '25.5765493', '85.1427507', 1, '2023-07-19 06:48:26', '2023-07-19 09:13:36'),
(6, 58, '25.4517168', '85.0525801', 1, '2023-07-19 09:21:58', '2023-07-19 09:21:58'),
(7, 54, '0', '0', 1, '2023-07-27 09:15:03', '2023-07-31 05:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobshikharprofiles`
--

CREATE TABLE `jobshikharprofiles` (
  `user_id` int(225) DEFAULT NULL,
  `country` varchar(225) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `qualification` varchar(225) DEFAULT NULL,
  `psname` varchar(225) DEFAULT NULL,
  `aera` varchar(225) DEFAULT NULL,
  `pincode` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `whatappno` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `id` int(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobshikharprofiles`
--

INSERT INTO `jobshikharprofiles` (`user_id`, `country`, `state`, `city`, `name`, `qualification`, `psname`, `aera`, `pincode`, `address`, `whatappno`, `gender`, `dob`, `id`, `created_at`, `updated_at`) VALUES
(57, 'India', 'BIHAR', 'BekarGanj', 'Niraj kumar', 'MCA', NULL, NULL, '8000187', 'hasnd akdhak', '827348254', 'male', NULL, 1, '2023-07-31 08:45:13', '2023-07-31 08:45:13'),
(119, 'India', 'Bihar', 'patna', 'Niraj', 'BCA', NULL, NULL, '800020', 'fsadjkfs', '8709345226', 'male', NULL, 2, '2023-09-02 08:15:32', '2023-09-02 08:15:32'),
(150, 'India', 'Madhya Pradesh', 'Gwalior', 'Nikhil Upadhyay', 'B.E. CSE', NULL, NULL, '474001', 'Gwalior, M.P.', '9131186313', 'Male', NULL, 3, '2023-11-25 10:01:20', '2023-11-25 10:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `blog_id` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(64, 'amin', '29', '2023-08-29 12:02:28', '2023-08-29 12:02:28'),
(65, 'amin', '29', '2023-08-29 12:02:32', '2023-08-29 12:02:32'),
(66, 'amin', '29', '2023-08-29 12:02:35', '2023-08-29 12:02:35'),
(67, 'amin', '29', '2023-08-29 12:04:26', '2023-08-29 12:04:26'),
(68, 'amin', '29', '2023-08-29 12:04:29', '2023-08-29 12:04:29'),
(69, 'amin', '29', '2023-08-29 12:04:33', '2023-08-29 12:04:33'),
(70, 'amin', '29', '2023-08-29 12:06:04', '2023-08-29 12:06:04'),
(71, 'amin', '29', '2023-08-29 12:06:08', '2023-08-29 12:06:08'),
(72, 'amin', '47', '2023-08-29 12:11:46', '2023-08-29 12:11:46'),
(73, 'amin', '47', '2023-08-29 12:11:59', '2023-08-29 12:11:59'),
(74, 'amin', '47', '2023-08-29 12:12:30', '2023-08-29 12:12:30'),
(75, '127', '76', '2023-08-29 12:14:15', '2023-08-29 12:14:15'),
(76, '59', '76', '2023-08-29 12:14:32', '2023-08-29 12:14:32'),
(77, '1', '75', '2023-09-05 08:08:12', '2023-09-05 08:08:12'),
(78, '1', '59', '2023-09-05 08:18:49', '2023-09-05 08:18:49'),
(79, '1', '77', '2023-11-06 07:23:06', '2023-11-06 07:23:06'),
(80, '49', '78', '2023-12-13 06:27:55', '2023-12-13 06:27:55'),
(81, '123', '78', '2023-12-20 05:56:14', '2023-12-20 05:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `linkedstudents`
--

CREATE TABLE `linkedstudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` varchar(255) DEFAULT NULL,
  `tutor_id` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linked_tutors`
--

CREATE TABLE `linked_tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` varchar(255) DEFAULT NULL,
  `std_id` varchar(255) DEFAULT NULL,
  `tuition_id` int(225) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linked_tutors`
--

INSERT INTO `linked_tutors` (`id`, `tutor_id`, `std_id`, `tuition_id`, `discription`, `doc`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 0, NULL, NULL, NULL, '2023-08-16 07:43:44', '2023-08-16 07:43:44'),
(2, NULL, NULL, 0, 'nbvfkhjgfhj', NULL, NULL, '2023-08-16 08:28:08', '2023-08-16 08:28:08'),
(3, '59', '20', 0, 'niraj', NULL, NULL, '2023-08-16 09:44:24', '2023-08-16 09:44:24'),
(4, '59', '20', 0, 'kjgkjgkgkhj', NULL, '0', '2023-08-16 09:47:26', '2023-08-16 09:47:26'),
(5, '59', '20', 0, 'kjgkjgkgkhj', NULL, '0', '2023-08-16 09:52:20', '2023-08-16 09:52:20'),
(6, '59', '20', 0, 'kjgkjgkgkhj', NULL, '0', '2023-08-16 09:56:36', '2023-08-16 09:56:36'),
(7, '59', '16', 0, 'fufdghfhfhg', NULL, '0', '2023-08-16 09:57:04', '2023-08-16 09:57:04'),
(8, '59', '16', 0, 'fufdghfhfhg', NULL, '0', '2023-08-16 10:00:38', '2023-08-16 10:00:38'),
(9, '59', '20', 0, 'iutguy', NULL, '0', '2023-08-16 10:02:13', '2023-08-16 10:02:13'),
(10, '59', '20', 0, 'gghjgj', NULL, '0', '2023-08-16 10:03:41', '2023-08-16 10:03:41'),
(11, '59', '20', 0, 'jhgfhfu', NULL, '0', '2023-08-16 10:05:31', '2023-08-16 10:05:31'),
(12, '59', '15', 0, 'jhgu', NULL, '0', '2023-08-16 10:05:43', '2023-08-16 10:05:43'),
(13, '59', '58', 15, 'good', NULL, '0', '2023-08-16 10:40:45', '2023-08-16 10:40:45'),
(14, '59', '92', 20, 'good jlkjl', NULL, '0', '2023-08-16 11:03:14', '2023-08-16 11:03:14'),
(15, '59', '58', 14, 'mffhg', NULL, '0', '2023-08-17 09:06:29', '2023-08-17 09:06:29'),
(16, '59', '92', 20, 'sfswf', NULL, '0', '2023-08-17 12:51:34', '2023-08-17 12:51:34'),
(17, '59', '92', 20, 'wtewf', NULL, '0', '2023-08-17 12:51:46', '2023-08-17 12:51:46'),
(18, '59', '58', 16, 'sfsd', NULL, '0', '2023-08-17 12:51:53', '2023-08-17 12:51:53'),
(19, '59', '52', 21, 'i need one tuition', NULL, '0', '2023-09-26 11:44:44', '2023-09-26 11:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `linkings`
--

CREATE TABLE `linkings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hierarchy1` varchar(255) NOT NULL,
  `hierarchy2` varchar(255) NOT NULL,
  `h1name` varchar(255) NOT NULL,
  `h2name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linkings`
--

INSERT INTO `linkings` (`id`, `hierarchy1`, `hierarchy2`, `h1name`, `h2name`, `status`, `created_at`, `updated_at`) VALUES
(1, '49', '45', 'samadrit', 'sam', '0', '2023-03-22 05:20:32', '2023-03-22 05:20:38'),
(2, '37', '38', 'Niraj mishra', 'sam', '0', '2023-03-22 05:20:32', '2023-03-22 05:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `profile`, `usertype`, `email`, `email_verified_at`, `location`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(42, 'Lisa Jackson', NULL, '2', 'mishra74881@gmail.com', NULL, 'kankarbagh', 'admin', NULL, '2023-09-26 10:11:23', '2023-09-26 10:11:23'),
(43, 'Niraj', 'img/img_1702289676.png', '2', 'mishra123@gmail.com', NULL, 'kankarbagh', 'Niraj@123', NULL, '2023-09-26 10:55:33', '2023-12-11 10:14:36'),
(48, 'Lisa Jackson', NULL, '2', 'mehjh@lisajackson.com', NULL, 'patna', 'Niraj@123', NULL, '2023-11-01 12:21:56', '2023-11-01 12:21:56'),
(49, 'Niraj mishra', NULL, '1', 'me34546@lisajackson.com', NULL, 'jhgjhfgsfd hgfyfhggfuy', 'Niraj@111', NULL, '2023-11-01 12:42:05', '2023-11-01 12:42:05'),
(52, 'Lisa Jackson', NULL, '1', 'me12345@lisajackson.com', NULL, 'kankarbagh', 'admin@123', NULL, '2023-11-06 05:01:44', '2023-11-06 05:01:44'),
(53, 'niraj', 'img/img_1702614923.webp', '1', 'employee@gmail.com', NULL, 'kankarbagh', 'Niraj@123', NULL, '2023-11-06 07:12:53', '2023-12-15 04:35:23'),
(54, 'nikhil', NULL, '2', 'nikhilupadhyay097@gmail.com', NULL, 'gwalior', 'nikhil@11', NULL, '2023-11-28 14:54:56', '2023-11-28 14:54:56'),
(55, 'mohit dutta', 'img/img_1702497530.png', '2', 'mohitdutta0407@gmail.com', NULL, 'ludhiana', 'mohit@11', NULL, '2023-12-07 04:54:09', '2023-12-13 19:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `sdate` varchar(225) NOT NULL,
  `edate` varchar(10) NOT NULL,
  `dicount` varchar(16) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `sdate`, `edate`, `dicount`, `code`, `status`, `category`, `created_at`, `updated_at`) VALUES
(5, 'Niraj', '2023-05-25', '2023-05-26', '40', 'hRiKbZKY', 1, '2', '2023-05-24 03:28:04', '2023-05-24 03:28:04'),
(6, 'Niraj', '2023-05-26', '2023-05-25', '15', 'D38jhIq7', 1, '3', '2023-05-24 07:02:15', '2023-05-24 07:02:15'),
(7, 'mishra', '2023-05-26', '2023-06-03', '35', 'MGfnjplE', 1, '1', '2023-05-24 07:13:27', '2023-05-24 07:13:27'),
(9, 'new Ads', '2023-09-04', '2023-09-06', '70', 'eDOGVUho', 0, '2', '2023-09-04 06:27:40', '2023-09-04 06:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `mediafile` varchar(255) DEFAULT NULL,
  `about_media` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `user_id`, `title`, `category`, `mediafile`, `about_media`, `created_at`, `updated_at`) VALUES
(20, '59', 'pdf', 'engineering', '1695622745.pdf', 'This is pdf for all first year of', '2023-09-25 06:19:05', '2023-09-25 06:19:05'),
(21, '59', 'video', 'engineering', '1702634961.mp4', 'fdfgffd', '2023-12-15 10:09:21', '2023-12-15 10:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mediafile` varchar(255) NOT NULL,
  `about_media` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_22_112317_add_google_id_column', 2),
(6, '2023_02_23_055201_add_new_fields_users', 2),
(7, '2023_02_23_055816_create_user_otps_table', 2),
(8, '2023_03_01_111920_create_profile_table', 3),
(9, '2023_03_02_092555_create_category_table', 4),
(10, '2023_03_02_094324_create_profile_pic_table', 5),
(11, '2023_03_04_101615_create_media_table', 6),
(12, '2023_03_19_154115_create_blogs_table', 7),
(13, '2023_03_20_084456_create_comments_table', 8),
(14, '2023_03_10_103209_create_tickets_table', 9),
(15, '2023_03_14_091438_create_srequirements_table', 10),
(16, '2023_03_15_111833_create_chatbots_table', 11),
(17, '2023_03_16_070336_create_personalinfos_table', 11),
(18, '2023_03_17_100947_create__qualifications_table', 11),
(19, '2023_03_18_050331_create_applications_table', 12),
(20, '2023_03_18_051736_create_finels_table', 13),
(21, '2023_03_22_042834_create_linking_table', 13),
(22, '2023_03_22_081943_create_eprofile_table', 14),
(23, '2023_03_23_192633_create_eposts_table', 15),
(24, '2023_03_28_142708_create_chats_table', 16),
(25, '2023_04_03_064252_create_applycations', 17),
(26, '2023_04_20_083601_create_ratings_table', 17),
(27, '2023_04_24_051613_create_mails_table', 18),
(28, '2023_04_25_052517_create_manager_table', 19),
(29, '2023_05_20_074553_create_visits_table', 20),
(30, '2023_07_13_090752_create_time_calculations_table', 21),
(31, '2023_07_19_112529_create_feelfrees_table', 22),
(32, '2023_08_10_104159_create_news_table', 23),
(33, '2023_08_10_115110_create_linked_tutors_table', 24),
(34, '2023_08_10_115251_create_linkedstudents_table', 24),
(35, '2023_08_18_113100_create_savetution_table', 25),
(36, '2023_08_18_113257_create_savejob_table', 25),
(37, '2023_08_22_102431_create_solve_questions_table', 26),
(38, '2023_08_22_103427_create_solution_table', 27),
(39, '2023_08_25_120510_create__email_stores_table', 28),
(40, '2023_08_29_065625_create_savetutors_table', 29),
(41, '2023_08_30_084934_create_recentchecked_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(5, '79', 'एलवीएम3-एम4-चंद्रयान-3 मिशन: 23 अगस्त, 2023 को भा.मा.स. 17:20 बजे से स', '<p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">20 अगस्त, 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">लैंडर मॉड्यूल 25 किमी x 134 किमी कक्षा में है। पावर्ड डिसेंट 23 अगस्त, 2023 को लगभग 1745 बजे शुरू होने की उम्मीद है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">19 अगस्त 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">लैंडर मॉड्यूल चंद्रमा के चारों ओर 113 किमी x 157 किमी की कक्षा में है। दूसरी डी-बूस्टिंग की योजना 20 अगस्त, 2023 को बनाई गई है</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">अगस्त 17, 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">लैंडर माड्यूल सफलतापूर्वक नोदन मॉड्यूल से अलग हुआ, गति कम करने की प्रक्रिया 18 अगस्त 2023 को निर्धारित है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">अगस्त 16, 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">16 अगस्त, 2023 को युक्तिचालन के बाद अंतरिक्ष यान 153 किमी x 163 किमी की कक्षा में है</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">अगस्त 14, 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">मिशन कक्षा वृत्ताकारीकरण चरण में है। अंतरिक्ष यान 151 किमी x 179 किमी कक्षा में है</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">09 अगस्त 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">9 अगस्त, 2023 को किए गए एक युक्तिचालन के बाद चंद्रयान -3 की कक्षा घटकर 174 किमी x 1437 किमी हो गई है</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">06 अगस्त 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">एलबीएन#2 सफलतापूर्वक पूरा हो गया है। अंतरिक्ष यान चंद्रमा के चारों ओर 170 किमी x 4313 किमी की कक्षा में है</span></div></div></center><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\"><a href=\"https://www.isro.gov.in/ISRO_HINDI/Ch3_Video_Lunar_Orbit_Insertion.html\" style=\"color: rgb(6, 53, 122);\">चंद्रयान-3 वीडियो: चंद्र कक्षा में प्रवेश के दौरान चंद्रयान-3 द्वारा देखा गया चंद्रमा</a></span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">05 अगस्त 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">चंद्रयान-3 सफलतापूर्वक चंद्रमा की कक्षा में स्थापित हो गया है। जैसा कि पूर्वनियोजित था, कक्षा 164 किमी x 18074 किमी हासिल की गई।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">01 अगस्त 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">अंतरिक्ष यान को ट्रांसलूनर कक्षा में स्थापित किया गया है। हासिल की गई कक्षा 288 किमी x 369328 किमी है। चंद्र-कक्षा सम्मिलन (एलओआई) की योजना 5 अगस्त, 2023 को बनाई गई है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">25 जुलाई 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">25 जुलाई, 2023 को कक्षा बढ़ाने की प्रक्रिया का प्रदर्शन किया गया। अगली फायरिंग (ट्रांसलूनर इंजेक्शन), 1 अगस्त, 2023 के लिए योजना बनाई गई है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">22 जुलाई 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">चौथा कक्षा-उत्थान युक्तिचालन (पृथ्वी-बाउंड पेरिगी फायरिंग) पूरा हो गया है। अंतरिक्ष यान अब 71351 किमी x 233 किमी की कक्षा में है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">17 जुलाई 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">दूसरा कक्षा-उन्नयन युक्तिचालन का प्रदर्शन किया गया। अंतरिक्ष यान अब 41603 किमी x 226 किमी कक्षा में है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">15 जुलाई 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">पहला कक्षा-उन्नयन युक्तिचालन (पृथ्वी-संबद्ध फायरिंग-1) इस्ट्रैक/इसरो, बेंगलुरु में सफलतापूर्वक किया गया है। अंतरिक्ष यान अब 41762 किमी x 173 किमी कक्षा में है।</span></div></div></center><p class=\"pageContent\" style=\"margin-bottom: 1rem; font-size: 16px; text-align: justify; color: rgb(0, 0, 0); font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"font-weight: bolder;\">14 जुलाई 2023</span></p><center style=\"font-family: Helvetica, &quot;Verdana Arial&quot;, sans-serif; font-size: 16px; background-color: rgb(253, 253, 253);\"><div style=\"width: auto; font-size: 17px; color: rgb(255, 255, 255); background: rgb(104, 199, 223); padding: 5px; margin-bottom: 5px;\"><div style=\"color: rgb(8, 8, 8);\"><span style=\"font-weight: bolder;\">एलवीएम3 एम4 वाहन ने चंद्रयान-3 को सफलतापूर्वक कक्षा में प्रक्षेपित किया। चंद्रयान-3 ने अपनी सटीक कक्षा में चंद्रमा की यात्रा शुरू कर दी है। अंतरिक्ष यान का स्वास्थ्य सामान्य है।</span></div></div></center>', '2023-08-24 10:12:13', '2023-08-24 10:12:13'),
(6, '79', 'ATC officer ‘off-rostered’ after two Vistara flights avert crash at De', '<div class=\"o-story-list__heading\" style=\"margin-bottom: 5px; padding-bottom: 8px; border-bottom: 1px dotted rgb(18, 34, 65); font-size: 16px; vertical-align: baseline; font-weight: 700; font-family: Roboto, sans-serif; text-transform: uppercase; position: relative;\">MOST READ</div><div class=\"o-story-num\" style=\"font-size: 16px; vertical-align: baseline; font-family: &quot;Droid Serif&quot;, serif;\"><div class=\"o-story-num__title\" style=\"padding-top: 10px; padding-bottom: 10px; border-bottom: 1px dotted rgb(18, 34, 65); vertical-align: baseline; display: flex;\"><span class=\"story-num\" style=\"margin-right: 12px; padding-top: 2px; font-size: 32px; vertical-align: baseline; font-style: italic; color: rgb(216, 2, 2); font-weight: 700; transition: all 0.5s ease-out 0s;\">1</span><a data-device=\"Desktop\" data-event-category=\"Most Read\" class=\"o-story-num-content click-event\" id=\"IE_Jetpack_Read_Most1\" href=\"https://indianexpress.com/article/technology/science/isro-chandrayaan-3-live-8904107/\" rel=\"noopener\" target=\"_blank\" style=\"vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; bottom: 0px; color: rgb(62, 62, 62); display: block; font-weight: 400; line-height: 20px;\">Chandrayaan-3 landing live updates: Rover Pragyan rolls out near Moon’s south pole</a></div><div class=\"o-story-num__title\" style=\"padding-top: 10px; padding-bottom: 10px; border-bottom: 1px dotted rgb(18, 34, 65); vertical-align: baseline; display: flex;\"><span class=\"story-num\" style=\"margin-right: 12px; padding-top: 2px; font-size: 32px; vertical-align: baseline; font-style: italic; color: rgb(216, 2, 2); font-weight: 700; transition: all 0.5s ease-out 0s;\">2</span><a data-device=\"Desktop\" data-event-category=\"Most Read\" class=\"o-story-num-content click-event\" id=\"IE_Jetpack_Read_Most2\" href=\"https://indianexpress.com/article/sports/chess/chess-world-cup-2023-final-live-updates-praggnanandhaa-vs-carlsen-8903516/\" rel=\"noopener\" target=\"_blank\" style=\"vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; bottom: 0px; color: rgb(62, 62, 62); display: block; font-weight: 400; line-height: 20px;\">Chess World Cup 2023 Final As It Happened: Praggnanandhaa and Magnus Carlsen agree to draw after 30 moves</a></div><div class=\"o-moretext show-more\" style=\"vertical-align: baseline; transition: all 0.5s ease-out 0s;\"><div class=\"o-story-num__title\" style=\"padding-top: 10px; padding-bottom: 10px; border-bottom: 1px dotted rgb(18, 34, 65); vertical-align: baseline; display: flex;\"><span class=\"story-num\" style=\"margin-right: 12px; padding-top: 2px; font-size: 32px; vertical-align: baseline; font-style: italic; color: rgb(216, 2, 2); font-weight: 700; transition: all 0.5s ease-out 0s;\">3</span><a data-device=\"Desktop\" data-event-category=\"Most Read\" class=\"o-story-num-content click-event\" id=\"IE_Jetpack_Read_Most3\" href=\"https://indianexpress.com/article/india/chandrayaan-3-landing-chennai-techie-fires-up-his-laptop-8904352/\" rel=\"noopener\" target=\"_blank\" style=\"vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; bottom: 0px; color: rgb(62, 62, 62); display: block; font-weight: 400; line-height: 20px;\">Ahead of Chandrayaan-3 landing, Chennai techie who located lander debris in 2019 fires up his laptop</a></div><div class=\"o-story-num__title\" style=\"padding-top: 10px; padding-bottom: 10px; border-bottom: 1px dotted rgb(18, 34, 65); vertical-align: baseline; display: flex;\"><span class=\"story-num\" style=\"margin-right: 12px; padding-top: 2px; font-size: 32px; vertical-align: baseline; font-style: italic; color: rgb(216, 2, 2); font-weight: 700; transition: all 0.5s ease-out 0s;\">4</span><a data-device=\"Desktop\" data-event-category=\"Most Read\" class=\"o-story-num-content click-event\" id=\"IE_Jetpack_Read_Most4\" href=\"https://indianexpress.com/article/sports/chess/praggnanandhaa-vs-magnus-carlsen-after-two-draws-how-will-the-chess-world-cup-final-be-decided-8906285/\" rel=\"noopener\" target=\"_blank\" style=\"vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; bottom: 0px; color: rgb(62, 62, 62); display: block; font-weight: 400; line-height: 20px;\">Praggnanandhaa vs Magnus Carlsen: After two draws how will the Chess World Cup final be decided?</a></div><div class=\"o-story-num__title\" style=\"padding-top: 10px; padding-bottom: 10px; border-bottom: 1px dotted rgb(18, 34, 65); vertical-align: baseline; display: flex;\"><span class=\"story-num\" style=\"margin-right: 12px; padding-top: 2px; font-size: 32px; vertical-align: baseline; font-style: italic; color: rgb(216, 2, 2); font-weight: 700; transition: all 0.5s ease-out 0s;\">5</span><a data-device=\"Desktop\" data-event-category=\"Most Read\" class=\"o-story-num-content click-event\" id=\"IE_Jetpack_Read_Most5\" href=\"https://indianexpress.com/article/sports/cricket/india-vs-ireland-live-score-3rd-t20-ind-vs-ire-third-t20-scorecard-updates-at-the-village-dublin-8905574/\" rel=\"noopener\" target=\"_blank\" style=\"vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; bottom: 0px; color: rgb(216, 2, 2); display: block; font-weight: 400; line-height: 20px;\">India vs Ireland, 3rd T20 Highlights: Match called off due to rain, India win series 2-0</a></div></div></div>', '2023-08-24 10:15:39', '2023-08-24 10:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(225) NOT NULL,
  `user_id` int(225) DEFAULT NULL,
  `payment_id` varchar(225) DEFAULT NULL,
  `order_id` varchar(200) DEFAULT NULL,
  `amount` int(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `payment_id`, `order_id`, `amount`, `created_at`, `updated_at`) VALUES
(8, 54, 'pay_MOiLrrfcCpJAIN', NULL, 500, '2023-08-11 09:37:50', '2023-08-11 09:37:50'),
(9, 54, 'pay_MOj0DCUBOtEOOy', NULL, 1999, '2023-08-11 10:16:02', '2023-08-11 10:16:02'),
(10, 54, 'pay_MOjelbJTfOYgNA', NULL, 697, '2023-08-11 10:54:34', '2023-08-11 10:54:34'),
(11, 123, '5234', NULL, 100, '2023-08-30 08:30:01', '2023-08-30 08:30:01'),
(12, 123, '5234', NULL, 100, '2023-08-30 08:31:23', '2023-08-30 08:31:23'),
(13, 123, 'pay_MWDNsJOqjF0ULE', NULL, 100, '2023-08-30 08:32:16', '2023-08-30 08:32:16'),
(14, 123, 'pay_MWDQWSQWcb2fP4', NULL, 100, '2023-08-30 08:34:46', '2023-08-30 08:34:46'),
(15, 123, 'pay_MWEQzY7qkoz2q0', NULL, 100, '2023-08-30 09:34:06', '2023-08-30 09:34:06'),
(16, 123, 'pay_MWESmZ5ZNjh4Xq', NULL, 100, '2023-08-30 09:35:36', '2023-08-30 09:35:36'),
(17, 123, 'pay_MWEU6iyovfUrWd', NULL, 100, '2023-08-30 09:36:51', '2023-08-30 09:36:51'),
(18, 123, 'pay_MWFUaQRd5wIQvl', NULL, 100, '2023-08-30 10:36:01', '2023-08-30 10:36:01'),
(19, 123, 'pay_MWFWLkuR7jdNLE', NULL, 100, '2023-08-30 10:37:41', '2023-08-30 10:37:41'),
(20, 123, 'pay_MWFZ6Wjn9GVCtn', NULL, 100, '2023-08-30 10:40:17', '2023-08-30 10:40:17'),
(21, 123, 'pay_MWFhHKGkoMOtLi', NULL, 100, '2023-08-30 10:48:01', '2023-08-30 10:48:01'),
(22, 123, 'pay_MWFyprEEFWBlxh', NULL, 100, '2023-08-30 11:04:39', '2023-08-30 11:04:39'),
(23, 123, 'pay_MWG3ZnCB2WoWe0', NULL, 100, '2023-08-30 11:09:07', '2023-08-30 11:09:07'),
(24, 123, 'pay_MWG50clmBwV4Qx', NULL, 100, '2023-08-30 11:10:30', '2023-08-30 11:10:30'),
(25, 123, 'pay_MWGLlC1FOyj8AO', NULL, 100, '2023-08-30 11:26:21', '2023-08-30 11:26:21'),
(26, 123, 'pay_MWGS94MCIfgdmc', NULL, 100, '2023-08-30 11:32:25', '2023-08-30 11:32:25'),
(27, 123, 'pay_MWGuJ1Y9Y4aKoW', NULL, 100, '2023-08-30 11:59:09', '2023-08-30 11:59:09'),
(28, 123, 'pay_MWGvY9EwfRtUWh', NULL, 100, '2023-08-30 12:00:14', '2023-08-30 12:00:14'),
(29, 123, 'pay_MXLyFDSMwnvVaS', NULL, 100, '2023-09-02 05:35:16', '2023-09-02 05:35:16'),
(30, 123, 'pay_MXSM5Uie6SsOj9', NULL, 100, '2023-09-02 11:50:00', '2023-09-02 11:50:00'),
(31, 123, 'pay_MeAria1Uu15iRU', NULL, 100, '2023-09-19 11:16:28', '2023-09-19 11:16:28'),
(32, 123, 'pay_MeB3xBavhajkeQ', NULL, 100, '2023-09-19 11:28:03', '2023-09-19 11:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `persanal_infos`
--

CREATE TABLE `persanal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persanal_infos`
--

INSERT INTO `persanal_infos` (`id`, `user_id`, `f_name`, `l_name`, `email`, `number`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `area`, `created_at`, `updated_at`) VALUES
(1, '43', 'chandan', 'kumar', 'mishra74881@gmial.com', '53487598347', '2023-04-07', 'Male', 'katifacoty kankarbagh', 'IN', 'Bihar', 'Falakata', '800920', 'hi', '2023-03-16 05:24:07', '2023-03-16 07:16:31'),
(3, '49', 'Niraj kumar', 'Mishra', NULL, NULL, NULL, 'Male', '320-L,model town', 'India', 'Andhra Prade', NULL, '3424', 'hghjg', '2023-05-31 09:46:07', '2023-08-17 09:35:03'),
(4, '45', 'niraj kumar', 'mishra', 'mishra74881@gmial.com', '8709345226', '2023-06-11', 'male', 'fgdgdfdfsg', 'India', 'Andhra Pradesh', 'Indpur community development block', NULL, 'kankarbagh', '2023-06-02 09:13:49', '2023-06-06 05:14:23'),
(5, '59', 'sweta', 'raj', NULL, '47523667', '2023-07-20', 'male', 'kankarbagh', 'Choose Your Option', 'Andhra Pradesh', 'Aistala', NULL, 'kankarbagh', '2023-07-19 08:21:07', '2023-12-21 10:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfos`
--

CREATE TABLE `personalinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personalinfos`
--

INSERT INTO `personalinfos` (`id`, `user_id`, `f_name`, `l_name`, `email`, `number`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `area`, `created_at`, `updated_at`) VALUES
(1, '23', 'raj', 'choudhary', 'softgenic.raj@gmail', '9191306534', '5/10/1997', 'male', 'patna', 'india', 'bihar', 'patna', '804453', 'parsa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `aera` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `whatappno` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profilejobseekers`
--

CREATE TABLE `profilejobseekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profilejobseekers`
--

INSERT INTO `profilejobseekers` (`id`, `user_id`, `f_name`, `l_name`, `email`, `number`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `area`, `created_at`, `updated_at`) VALUES
(1, NULL, 'sdfs', 'dsfsd', 'sdfsd@gmail.com', '45345334234', '2023-03-01', 'Male', 'xcvsdv', 'AZ', 'Karnataka', 'Bagnan', '34234', 'dssdfs', '2023-03-27 19:00:50', '2023-03-29 11:56:59'),
(2, '45', 'sdfsdf', 'sdfd', 'ravikant89211@gmail.com', '4534', '2023-03-01', 'Choose Your Option', 'rtete', 'IN', 'Bihar', 'Paikpara', '8005', NULL, '2023-03-29 12:06:02', '2023-03-29 19:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `psname` varchar(225) DEFAULT NULL,
  `aera` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `whatappno` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `country`, `state`, `city`, `name`, `psname`, `aera`, `pincode`, `address`, `whatappno`, `gender`, `dob`, `created_at`, `updated_at`) VALUES
(2, '38', 'Empty', 'Bihar', 'Patna', 'R k', 'Empty', 'Empty', '2343325', 'ghfhgdfgdsfg gjh gjghjh', '2435464', NULL, NULL, '2023-03-10 04:00:42', '2023-05-22 04:53:48'),
(4, '36', 'London', 'bihar', 'patna', 'Niraj', 'null', NULL, '800920', 'katifacoty kankarbagh', '8709345226', NULL, NULL, '2023-03-14 02:04:18', '2023-03-14 02:15:47'),
(5, '52', 'India', 'bihar', 'Patna', 'Pioneer', 'hi this', NULL, '6578643', 'kankarbagh', '53644764', 'Male', NULL, '2023-05-31 09:44:21', '2023-08-19 09:46:59'),
(6, '54', 'Empty', 'Empty', 'patna', 'Niraj', 'fkjhdskjf', NULL, NULL, 'sjkflkjsf', '7834637', NULL, NULL, '2023-06-08 10:27:45', '2023-06-08 10:27:45'),
(14, '49', 'Patna', 'Empty', NULL, 'Picruit pioneer', 'Empty', 'Empty', 'Empty', 'Empty', 'Empty', NULL, NULL, '2023-06-12 08:15:27', '2023-06-12 08:30:07'),
(15, '45', 'India', 'Bihar', 'patna', 'Niraj kumar', 'Empty', NULL, '800021', 'kankarbagh patna', '2346872', 'Male', NULL, '2023-06-24 06:25:42', '2023-07-19 06:35:12'),
(16, '57', 'Empty', 'Empty', 'Empty', 'Niraj', 'Empty', NULL, NULL, 'dsnfd', 'Empty', NULL, NULL, '2023-06-26 02:16:56', '2023-06-26 05:08:37'),
(17, '62', 'India', 'Punjab', 'Ludhiana', 'Deep Choudhary', 'hsshksb', NULL, '141002', 'Empty', 'Empty', 'female', NULL, '2023-07-06 07:12:29', '2023-08-07 08:56:58'),
(18, '61', 'India', 'Bihar', 'Patna', 'Gaurav', 'kksn', NULL, '800020', 'Patna India', '9279364446', NULL, NULL, '2023-07-08 09:40:13', '2023-07-08 09:40:13'),
(19, '58', 'India', 'bihar', 'patna', 'Raj Choudhary', 'Raj Kumar Choudhary', NULL, '804453', 'patna', '9110189245', NULL, NULL, '2023-07-19 09:21:58', '2023-07-19 09:21:58'),
(20, '79', 'India', 'bihar', 'patna', 'Niraj', 'kjhkjhk', NULL, '800020', 'jhgjhfgsfd hgfyfhggfuy', '7687687687', NULL, NULL, '2023-07-31 06:02:37', '2023-07-31 06:04:34'),
(21, '124', 'Empty', 'Empty', 'patna', 'Niraj', 'Empty', NULL, NULL, 'Empty', 'Empty', NULL, NULL, '2023-08-29 10:50:32', '2023-08-29 10:51:17'),
(22, '123', 'India', 'Bihar', 'Patna', 'Niraj kumar', 'chandan', NULL, '800020', 'rotas bihar', '8709345226', NULL, NULL, '2023-08-29 12:23:25', '2023-12-20 06:28:15'),
(23, '128', 'Empty', 'Empty', 'Empty', 'sweta', 'Empty', NULL, NULL, 'Empty', 'Empty', NULL, NULL, '2023-09-02 12:09:32', '2023-09-02 12:09:32'),
(24, '142', 'India', 'Punjab', 'Mohali', 'Kanu', 'Monika', NULL, '140301', 'Empty', '8219509042', NULL, NULL, '2023-10-28 06:32:02', '2023-10-28 06:32:02'),
(25, '149', 'India', 'Pradesh', NULL, 'Nikhil Upadhyay', 'Nikhil', NULL, '4740013434', 'MP', '913118', NULL, NULL, '2023-11-25 09:36:59', '2023-12-22 10:37:04'),
(26, '152', 'Empty', 'nnnnnnn', 'nnnnnn', 'aaaa', 'Empty', NULL, '000000', 'Empty', '88888888888888', NULL, NULL, '2023-11-28 13:35:43', '2023-11-28 13:50:33'),
(27, '185', 'India', 'punjab', 'ludhiana', 'mohit', 'anil dutaa', NULL, '141001', '3201,st.no.5', '8427065786', NULL, NULL, '2023-12-16 16:07:09', '2023-12-16 16:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pics`
--

CREATE TABLE `profile_pics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_pics`
--

INSERT INTO `profile_pics` (`id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '38', 'img/img_1678429144.jpg', '2023-03-09 02:48:01', '2023-03-10 00:49:04'),
(2, '43', 'img/img_1685018693.png', '2023-03-13 06:03:26', '2023-05-25 12:44:53'),
(3, '37', 'img/img_1679471077.jpg', '2023-03-07 10:41:27', '2023-03-09 02:39:18'),
(4, '39', 'img/img_1678710435.jpg', '2023-03-13 06:56:21', '2023-03-13 06:57:15'),
(5, '40', 'img/img_1679471077.jpg', '2023-03-22 02:14:37', '2023-03-22 02:14:37'),
(6, '54', 'img/img_1688808965.png', '2023-06-02 06:30:02', '2023-07-08 09:36:05'),
(7, '45', 'img/img_1687588037.avif', '2023-06-02 09:56:46', '2023-06-24 06:27:17'),
(8, '57', 'img/img_1687589515.png', '2023-06-24 06:51:55', '2023-06-24 06:51:55'),
(9, '49', 'img/img_1691398406.png', '2023-06-30 16:12:23', '2023-08-07 08:53:26'),
(10, '59', 'img/img_1690357172.jpg', '2023-07-05 09:14:45', '2023-07-26 07:39:32'),
(11, '60', 'img/img_1688558413.jpg', '2023-07-05 12:00:13', '2023-07-05 12:00:13'),
(12, '58', 'img/img_1689758419.png', '2023-07-19 09:20:19', '2023-07-19 09:20:19'),
(13, '76', 'img/img_1690609268.png', '2023-07-29 05:41:08', '2023-07-29 05:41:08'),
(14, '79', 'img/img_1690783925.png', '2023-07-31 06:12:05', '2023-07-31 06:12:05'),
(15, '62', 'img/img_1691398661.jpeg', '2023-08-07 08:57:27', '2023-08-07 08:57:41'),
(16, '124', 'img/img_1693218037.png', '2023-08-28 10:20:37', '2023-08-28 10:20:37'),
(17, '127', 'img/img_1693306480.png', '2023-08-29 10:54:40', '2023-08-29 10:54:40'),
(18, '123', 'img/img_1700037696.jpg', '2023-08-29 12:23:34', '2023-11-15 08:41:36'),
(19, '149', 'img/img_1700905120.jpg', '2023-11-25 09:38:40', '2023-11-25 09:38:40'),
(20, '150', 'img/img_1700906276.jpg', '2023-11-25 09:57:56', '2023-11-25 09:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `Stream` varchar(255) DEFAULT NULL,
  `University` varchar(255) DEFAULT NULL,
  `Exprienceoffline` varchar(255) DEFAULT NULL,
  `Exprienceonline` varchar(255) DEFAULT NULL,
  `Specialachievements` varchar(255) DEFAULT NULL,
  `Anyotherdetails` varchar(255) DEFAULT NULL,
  `AboutProject` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `user_id`, `Stream`, `University`, `Exprienceoffline`, `Exprienceonline`, `Specialachievements`, `Anyotherdetails`, `AboutProject`, `document`, `created_at`, `updated_at`) VALUES
(1, '43', 'Development', '$5000 - $10000', '$5000 - $10000', '$5000 - $10000', 'no', NULL, 'good', '1679052653.jpeg', '2023-03-17 05:49:58', '2023-03-17 06:00:53'),
(2, '39', 'Desiging', '$5000 - $10000', 'Less then $5000', 'Less then $5000', 'dvffdg', NULL, 'dxvdxd', '1679982403.png', '2023-03-28 00:16:43', '2023-03-28 00:16:43'),
(3, '49', 'Desiging', 'Less then $5000', 'Less then $5000', '$5000 - $10000', 'fjslf', NULL, 'fds,mfn,', '1686311751.png', '2023-06-09 11:55:51', '2023-06-09 11:55:51'),
(4, '59', 'MCA', 'magadh', '2', '3', 'nojhfhf', NULL, 'orweyiur', '1690873032.png', '2023-08-01 06:57:12', '2023-09-25 06:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(50) NOT NULL,
  `by_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `rating` int(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `by_id`, `user_id`, `rating`, `description`, `created_at`, `updated_at`) VALUES
(1, 75, 44, 5, 'good', '2023-06-26 09:48:50', '2023-08-29 09:36:48'),
(2, 335, 43, 3, 'fggghgergtgqrhynt', '2023-06-26 09:49:47', '2023-06-26 09:49:47'),
(3, 64, 3445, 4, 'gsfdDSferDBGNH', '2023-06-26 09:49:47', '2023-06-26 09:49:47'),
(4, 453, 1324, 5, 'DFEWFRRGFFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 256, 980, 4, 'vfdfdfsdfdsf', '2023-06-26 10:03:55', '2023-06-26 10:03:55'),
(28, 18, 32, 5, 'hgj', '2023-06-28 04:51:17', '2023-06-28 04:51:17'),
(29, 18, 36, 3, 'good', '2023-06-28 04:58:37', '2023-06-28 04:58:37'),
(30, 45, 75, 5, 'good', '2023-06-29 07:38:08', '2023-06-29 07:38:08'),
(31, 45, 1, 2, 'gjh', '2023-06-29 11:34:44', '2023-06-29 11:53:35'),
(32, 45, 31, 3, 'hgdy', '2023-06-29 11:58:54', '2023-06-29 12:03:27'),
(33, 45, 32, 3, 'very good', '2023-06-29 12:07:42', '2023-06-29 12:24:35'),
(34, 45, 39, 4, 'good', '2023-06-29 12:17:48', '2023-06-29 12:17:48'),
(35, 45, 30, 5, 'M,SDDG,', '2023-06-30 09:28:37', '2023-06-30 09:28:37'),
(36, 57, 5, 1, 'world best company', '2023-07-01 07:19:35', '2023-07-01 07:19:35'),
(37, 57, 36, 4, 'bmh', '2023-07-01 07:20:32', '2023-07-01 09:47:00'),
(38, 45, 34, 2, 'good', '2023-07-17 09:53:51', '2023-07-17 09:53:51'),
(39, 79, 39, 1, 'good', '2023-08-03 07:38:32', '2023-08-03 07:38:32'),
(40, 79, 43, 5, 'good', '2023-08-03 07:39:14', '2023-08-03 07:39:14'),
(41, 79, 40, 3, 'zsddsf', '2023-08-03 07:39:55', '2023-08-03 07:39:55'),
(42, 79, 41, 5, 'good', '2023-08-03 07:40:30', '2023-08-03 07:40:30'),
(43, 79, 42, 4, 'vzxcv', '2023-08-03 08:25:44', '2023-08-03 08:25:44'),
(44, 54, 57, 5, 'good', '2023-08-04 06:30:42', '2023-08-08 10:50:52'),
(45, 54, 44, 5, 'good', '2023-08-04 06:31:02', '2023-08-08 10:47:55'),
(46, 62, 39, 5, 'Very qualified teacher', '2023-08-08 08:05:08', '2023-08-08 08:05:08'),
(47, 123, 43, 5, 'good', '2023-08-29 09:33:08', '2023-11-14 05:43:36'),
(48, 123, 59, 2, 'good', '2023-09-02 10:12:09', '2023-11-14 05:38:44'),
(49, 119, 26, 1, '[object Object]', '2023-09-02 12:17:20', '2023-09-02 12:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `recentcheckeds`
--

CREATE TABLE `recentcheckeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `checked_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recentcheckeds`
--

INSERT INTO `recentcheckeds` (`id`, `user_id`, `checked_id`, `created_at`, `updated_at`) VALUES
(1, NULL, '43', '2023-08-30 09:35:36', '2023-08-30 09:35:36'),
(2, '123', '43', '2023-08-30 09:36:51', '2023-08-30 09:36:51'),
(3, '123', '43', '2023-08-30 10:36:01', '2023-08-30 10:36:01'),
(4, '123', '43', '2023-08-30 10:37:41', '2023-08-30 10:37:41'),
(5, '123', '43', '2023-08-30 10:40:17', '2023-08-30 10:40:17'),
(6, '123', '43', '2023-08-30 10:48:01', '2023-08-30 10:48:01'),
(7, '123', '43', '2023-08-30 11:04:39', '2023-08-30 11:04:39'),
(8, '123', '43', '2023-08-30 11:09:07', '2023-08-30 11:09:07'),
(9, '123', '43', '2023-08-30 11:10:30', '2023-08-30 11:10:30'),
(10, '123', '43', '2023-08-30 11:26:21', '2023-08-30 11:26:21'),
(11, '123', '43', '2023-08-30 11:32:25', '2023-08-30 11:32:25'),
(12, '123', '43', '2023-08-30 11:59:09', '2023-08-30 11:59:09'),
(13, '123', '43', '2023-08-30 12:00:14', '2023-08-30 12:00:14'),
(14, '123', '59', '2023-09-02 05:35:16', '2023-09-02 05:35:16'),
(15, '123', '59', '2023-09-02 11:50:00', '2023-09-02 11:50:00'),
(16, '123', '59', '2023-09-19 11:16:28', '2023-09-19 11:16:28'),
(17, '123', '59', '2023-09-19 11:28:03', '2023-09-19 11:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `recodes`
--

CREATE TABLE `recodes` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `task` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recodes`
--

INSERT INTO `recodes` (`id`, `name`, `user_id`, `task`, `date`, `created_at`, `updated_at`) VALUES
(2, 'niraj', 33, 'this is raaz', '2023-05-02', '2023-05-31 11:10:20', '2023-06-01 00:26:43'),
(3, 'abhi', 44, 'this is lllllll', '2023-05-03', '2023-05-31 11:10:20', '2023-06-06 06:01:10'),
(5, 'raaz', 66, 'this is your task hh', '2023-06-09', '2023-06-01 00:19:59', '2023-06-01 00:25:48'),
(6, 'abhi raj', 90, 'you are', '2023-06-24', '2023-06-01 00:21:27', '2023-06-01 00:25:09'),
(7, 'priynka', 33, 'this is your task', '2023-06-02', '2023-06-01 00:27:26', '2023-06-01 00:27:26'),
(8, 'akshay kumar', 12, '4WQFRwgtrEGT', '2023-06-17', '2023-06-01 00:28:49', '2023-06-01 00:28:49'),
(9, 'Ravi kant', 13, 'this is your task', '2023-06-02', '2023-06-01 00:29:02', '2023-06-01 00:29:02'),
(10, 'softgenics', 14, 'this is my task', '2023-06-10', '2023-06-01 00:29:21', '2023-06-01 00:29:21'),
(11, 'users', 16, 'this is your task', '2023-06-28', '2023-06-01 00:29:39', '2023-06-01 00:29:39'),
(12, 'Ravi kant', 22, '4WQFRwgtrEGT', '2023-06-27', '2023-06-01 00:29:54', '2023-06-01 00:29:54'),
(13, 'subham', 23, 'this is your task', '2023-06-17', '2023-06-01 00:30:19', '2023-06-01 00:30:19'),
(14, 'ravi subham', 24, '4WQFRwgtrEGT', '2023-06-26', '2023-06-01 00:30:43', '2023-06-01 00:30:43'),
(15, 'anu', 31, 'this is your task', '2023-06-11', '2023-06-01 01:06:19', '2023-06-01 01:06:19'),
(17, 'Ravi kant', 90, 'ryuuiljhdsxvcnmxbnxjsthrtart', '2023-06-10', '2023-06-05 04:15:25', '2023-06-05 04:15:25'),
(18, 'raj', 66, 'this is your task', '2023-06-03', '2023-06-06 05:49:16', '2023-06-06 05:49:16'),
(19, 'Ravi kant', 30, 'this is your task', '2023-06-02', '2023-06-08 02:53:35', '2023-06-08 02:53:52'),
(20, 'ravi', 44, 'this is your task', '2023-06-14', '2023-06-08 05:09:19', '2023-06-08 05:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(225) NOT NULL,
  `referral_id` varchar(225) NOT NULL,
  `referral_by` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `savejobs`
--

CREATE TABLE `savejobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `emp_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `savejobs`
--

INSERT INTO `savejobs` (`id`, `user_id`, `job_id`, `emp_id`, `created_at`, `updated_at`) VALUES
(8, '57', '18', '44', '2023-08-24 12:12:42', '2023-08-24 12:12:42'),
(9, '57', '16', '54', '2023-08-24 12:12:58', '2023-08-24 12:12:58'),
(10, '57', '10', '47', '2023-08-24 12:29:20', '2023-08-24 12:29:20'),
(11, '125', '25', '121', '2023-08-27 04:46:10', '2023-08-27 04:46:10'),
(12, '119', '26', '121', '2023-09-02 08:43:17', '2023-09-02 08:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `savetutions`
--

CREATE TABLE `savetutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `tuetion_id` varchar(255) DEFAULT NULL,
  `std_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `savetutions`
--

INSERT INTO `savetutions` (`id`, `user_id`, `tuetion_id`, `std_id`, `created_at`, `updated_at`) VALUES
(1, '59', '21', '52', '2023-08-26 11:10:53', '2023-08-26 11:10:53'),
(2, '59', '19', '1', '2023-08-26 11:10:57', '2023-08-26 11:10:57'),
(3, '59', '15', '58', '2023-09-02 11:58:57', '2023-09-02 11:58:57'),
(4, '49', '12', '45', '2023-12-13 09:03:13', '2023-12-13 09:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `savetutors`
--

CREATE TABLE `savetutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `tutor_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `savetutors`
--

INSERT INTO `savetutors` (`id`, `user_id`, `tutor_id`, `created_at`, `updated_at`) VALUES
(4, '123', '43', '2023-08-29 08:19:10', '2023-08-29 08:19:10'),
(5, '123', '49', '2023-08-29 08:36:44', '2023-08-29 08:36:44'),
(6, '123', '59', '2023-08-29 08:36:47', '2023-08-29 08:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `send_mails`
--

CREATE TABLE `send_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `usermail` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_mails`
--

INSERT INTO `send_mails` (`id`, `subject`, `usermail`, `body`, `document`, `created_at`, `updated_at`) VALUES
(9, 'helo', 'mishra74881@gmial.com', NULL, NULL, '2023-04-25 06:22:20', '2023-04-25 06:22:20'),
(10, 'helo', 'mishra74881@gmial.com', NULL, NULL, '2023-04-25 06:23:23', '2023-04-25 06:23:23'),
(11, 'helo', 'mishra74881@gmial.com', NULL, NULL, '2023-04-25 06:27:27', '2023-04-25 06:27:27'),
(12, 'helo', 'mishra74881@gmail.com', NULL, NULL, '2023-04-25 06:27:58', '2023-04-25 06:27:58'),
(13, 'test', 'mishra74881@gmial.com', NULL, NULL, '2023-04-25 06:50:36', '2023-04-25 06:50:36'),
(14, 'any thing', 'mishra74881@gmial.com', 'fsdkljfkjsdflkds', NULL, '2023-04-25 06:52:52', '2023-04-25 06:52:52'),
(15, 'test', 'mishra74881@gmial.com', 'fdsjfksd', NULL, '2023-04-29 05:15:00', '2023-04-29 05:15:00'),
(16, 'test', 'mishra74881@gmail.com', 'fdsjfksd', NULL, '2023-04-29 05:15:21', '2023-04-29 05:15:21'),
(17, 'TEST', 'mishra74881@gmail.com', 'hi this is jdsljflsjflsf s\r\n\r\nkfjsjkjs\r\n\\\r\nklfls', NULL, '2023-05-05 02:14:01', '2023-05-05 02:14:01'),
(18, 'khkjh', 'mishra74881@gmail.com', 'kjlkjlkj', NULL, '2023-05-19 00:57:33', '2023-05-19 00:57:33'),
(19, 'test', 'mishra74881@gmail.com', 'hi this my first message', NULL, '2023-05-22 05:06:19', '2023-05-22 05:06:19'),
(20, 'For testing', 'pioneeracademyldh@gmail.com', 'Welcome', NULL, '2023-05-22 05:11:30', '2023-05-22 05:11:30'),
(21, 'hi this', 'mishra74881@gmail.com', 'Niraj', NULL, '2023-05-22 05:35:28', '2023-05-22 05:35:28'),
(22, 'study', 'mishra74881@gmail.com', 'hi this india', NULL, '2023-07-08 06:55:37', '2023-07-08 06:55:37'),
(23, 'morning', 'mishra74881@gmail.com', 'kjfshfkjhsj', NULL, '2023-07-08 06:57:54', '2023-07-08 06:57:54'),
(24, 'morning', 'mishra74881@gmail.com', 'kjfshfkjhsj', NULL, '2023-07-08 06:58:54', '2023-07-08 06:58:54'),
(25, 'test', 'mishra74881@gmail.com', NULL, NULL, '2023-07-10 06:32:41', '2023-07-10 06:32:41'),
(26, 'physics', 'mishra74881@gmail.com', NULL, NULL, '2023-07-10 06:38:28', '2023-07-10 06:38:28'),
(27, 'test', 'dshikha0502@gmail.com', 'hii', NULL, '2023-08-28 04:11:17', '2023-08-28 04:11:17'),
(28, 'test', 'dshikha0502@gmail.com', 'hii', NULL, '2023-08-28 04:11:18', '2023-08-28 04:11:18'),
(29, 'test', 'mish@gmail.com', 'jyiutrfituy', NULL, '2023-09-02 12:38:30', '2023-09-02 12:38:30'),
(30, 'test', 'mish@gmail.com', 'jyiutrfituy', NULL, '2023-09-02 12:38:32', '2023-09-02 12:38:32'),
(31, 'testing', 'softgenics.private@gmail.com', 'testing', NULL, '2023-09-02 12:39:24', '2023-09-02 12:39:24'),
(32, 'test', 'mishra74881@gmail.com', 'hi i am going to check', NULL, '2023-10-25 08:20:36', '2023-10-25 08:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mediafile` varchar(255) DEFAULT NULL,
  `aboutProblem` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solve_questions`
--

CREATE TABLE `solve_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mediafile` varchar(255) DEFAULT NULL,
  `aboutProblem` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solve_questions`
--

INSERT INTO `solve_questions` (`id`, `sname`, `user_id`, `title`, `mediafile`, `aboutProblem`, `created_at`, `updated_at`) VALUES
(1, 'Niraj', NULL, 'vbj', 'img/img_1692706020.png', 'mngfh', '2023-08-22 12:07:00', '2023-08-22 12:07:00'),
(2, 'Niraj', '79', 'vbj', 'img/img_1692706106.png', 'mngfh', '2023-08-22 12:08:26', '2023-08-22 12:08:26'),
(3, 'Niraj', '79', 'math', 'img/img_1692857260.png', 'gfhhkj', '2023-08-24 06:07:40', '2023-08-24 06:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `srequirements`
--

CREATE TABLE `srequirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `etime` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mode` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `srequirements`
--

INSERT INTO `srequirements` (`id`, `user_id`, `s_name`, `date`, `rate`, `stime`, `etime`, `notes`, `pincode`, `class`, `city`, `subject`, `mode`, `created_at`, `updated_at`) VALUES
(10, '45', 'Prince', '2023-06-25', '8990', '16:46', '16:47', 'jkfehkjfhkwjhfkjsaddkfs', '6578643', 'Class 11', 'Mumbai', 'Biology', 'Online', '2023-06-24 11:15:23', '2023-06-24 11:15:23'),
(12, '45', 'rag', '2023-06-28', '69000', '00:56', '10:57', 'Need 2 years  experience', '800020', 'Class 3', 'Mumbai', 'Physics', 'Online', '2023-06-27 05:26:32', '2023-06-27 05:26:32'),
(13, '45', 'Niraj', '2023-06-22', '8000', '15:32', '13:33', 'niraj', '802214', 'class 1', 'Rohtas', 'physics', 'Online', '2023-06-28 08:03:04', '2023-06-28 08:03:04'),
(14, '58', 'raj', '2023-07-04', '100', '00:04', '01:04', 'tjyj', '804453', 'mca', 'Patna', 'computer', 'Online', '2023-07-04 05:34:51', '2023-07-04 05:34:51'),
(15, '58', 'niraj', '2023-07-05', '120', '02:05', '03:05', 'fggfh', '804453', 'mca', 'Patna', 'computer', 'Online', '2023-07-04 05:36:06', '2023-07-04 05:36:06'),
(16, '58', 'pratikesh', '2023-07-11', '800', '03:06', '04:07', 'hjkjk', '812001', 'bsc', 'Bhagalpur', 'shipping', 'Offline', '2023-07-04 05:38:01', '2023-07-04 05:38:01'),
(20, '92', 'Smitha', '2023-08-05', '400', '13:00', '14:00', 'required online teacher for General Maths', '560101', '6th', 'Bangalore', 'Maths', 'Online', '2023-08-05 07:08:07', '2023-08-05 07:08:07'),
(21, '52', 'pioneer', '2023-08-20', '500', '13:00', '14:00', 'required experienced faculty for GATE', '141001', 'Competitive', 'Ludhiana', 'Mechanical', 'Online', '2023-08-19 09:41:37', '2023-08-19 09:41:37'),
(22, '1', 'Suvrat', '2023-10-10', '2', '16:00', '06:00', 'Need teacher  c language', '141014', '12', 'Ludhiana', 'C', NULL, '2023-10-09 06:12:57', '2023-10-09 06:12:57'),
(23, '149', 'XYZ', '2001-12-10', '500', '20:00', '10:00', 'hello these are my notes', '140412', '10th', 'Mohali', 'Maths', 'Online', '2023-12-19 18:45:19', '2023-12-19 18:45:19'),
(24, '123', 'Niraj', '2023-12-13', '200', '18:10', '19:10', 'Need 2 years  experience', '800020', 'class 1', 'Patna', 'computer', 'Online', '2023-12-20 11:41:44', '2023-12-20 11:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `submit_user_details`
--

CREATE TABLE `submit_user_details` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_user_details`
--

INSERT INTO `submit_user_details` (`id`, `name`, `surname`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'shaket', 'singh', 'raaz02256@gmail.com', 'www.picrit.com', '2023-06-24 04:24:35', '2023-06-24 04:24:35'),
(2, 'Niraj', 'fjdks', 'kljsdl@gmail.com', 'fjslkj', '2023-06-24 10:16:07', '2023-06-24 10:16:07'),
(3, 'nfkjasd', 'fois', 'lijds@gmial.pcm', 'kjasdl', '2023-06-24 10:19:49', '2023-06-24 10:19:49'),
(4, 'njdsk', 'fksj', 'jfklsdjk@gai', 'jdksfjk', '2023-06-24 10:23:13', '2023-06-24 10:23:13'),
(5, 'cd', 'rj', 'dhamijachetan3@gmail.com', 'www.picruit.com', '2023-07-10 08:42:24', '2023-07-10 08:42:24'),
(6, 'Apurva Shrivastava', '7009836119', 'apurvashrivastava80768@gmail.com', 'Edu& Advertising', '2023-07-18 09:08:00', '2023-07-18 09:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(225) NOT NULL,
  `zone` varchar(20) DEFAULT NULL,
  `plan` varchar(100) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `validity` varchar(16) DEFAULT NULL,
  `required` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `zone`, `plan`, `price`, `validity`, `required`, `created_at`, `updated_at`) VALUES
(24, 'Student', 'Unlimited', '1500', '3', '6', '2023-07-13 11:48:25', '2023-07-13 11:48:25'),
(25, 'Teacher', 'Basic', '199', '10', '5', '2023-07-13 11:48:50', '2023-07-13 11:48:50'),
(26, 'Employee', 'Basic', '199', '3', '10', '2023-07-13 11:49:28', '2023-07-13 11:49:28'),
(27, 'Teacher', 'Professional', '697', '10', '5', '2023-07-13 11:50:59', '2023-07-14 09:21:22'),
(28, 'Student', 'Basic', '299', '10', '5', '2023-07-13 11:51:27', '2023-07-14 09:17:44'),
(30, 'Teacher', 'Unlimited', '1999', '10', '5', '2023-07-13 11:53:01', '2023-07-13 11:53:01'),
(31, 'Employee', 'Professional', '500', '10', '6', '2023-07-13 11:53:31', '2023-07-13 11:53:31'),
(32, 'Employee', 'Unlimited', '1100', '10', '6', '2023-07-13 11:54:01', '2023-07-13 11:54:01'),
(33, 'Student', 'Professional', '599', '10', '5', '2023-07-13 11:51:27', '2023-07-14 09:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(225) NOT NULL,
  `user_id` varchar(225) DEFAULT NULL,
  `join_id` varchar(20) DEFAULT NULL,
  `bonus` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `join_id`, `bonus`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '32', '36', '10', 'fsds@gmail.com', NULL, '2023-05-23 09:24:57', '2023-05-23 14:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `reply_name` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `ticket`, `name`, `reply`, `reply_name`, `created_at`, `updated_at`) VALUES
(1, '45', 'my fisrt query', 'Niraj', NULL, 'Admin', '2023-06-15 06:26:44', '2023-08-19 12:12:39'),
(2, '45', 'mjhkjhs', 'Niraj', 'good', 'Admin', '2023-06-15 06:29:29', '2023-06-15 06:29:29'),
(3, '45', 'dfge', NULL, NULL, NULL, '2023-06-15 07:06:21', '2023-06-15 07:06:21'),
(4, '45', 'hi this my q', NULL, NULL, NULL, '2023-06-15 08:50:41', '2023-06-15 08:50:41'),
(5, '45', 'good', NULL, NULL, NULL, '2023-06-28 10:52:35', '2023-06-28 10:52:35'),
(6, '45', 'hjh', NULL, NULL, NULL, '2023-06-28 11:15:22', '2023-06-28 11:15:22'),
(7, '45', 'good', NULL, NULL, NULL, '2023-06-28 11:23:55', '2023-06-28 11:23:55'),
(8, '45', 'fdsjfkh', NULL, NULL, NULL, '2023-06-28 11:24:01', '2023-06-28 11:24:01'),
(9, '45', 'fnlsdl', NULL, NULL, NULL, '2023-06-28 11:24:09', '2023-06-28 11:24:09'),
(10, '45', 's,adm,fnk', NULL, NULL, NULL, '2023-06-28 11:24:45', '2023-06-28 11:24:45'),
(11, '45', 'elktkjle', NULL, NULL, NULL, '2023-06-28 11:24:50', '2023-06-28 11:24:50'),
(12, '45', 'fdsf', NULL, NULL, NULL, '2023-06-28 11:26:54', '2023-06-28 11:26:54'),
(13, '45', 'sdfs', NULL, NULL, NULL, '2023-06-28 11:27:30', '2023-06-28 11:27:30'),
(14, '45', 'uytuy', NULL, NULL, NULL, '2023-06-28 11:28:03', '2023-06-28 11:28:03'),
(15, '45', 'jkhhj', NULL, NULL, NULL, '2023-06-28 11:28:36', '2023-06-28 11:28:36'),
(16, '45', 'jhgh', NULL, NULL, NULL, '2023-06-28 11:28:54', '2023-06-28 11:28:54'),
(17, '45', 'hi this', NULL, NULL, NULL, '2023-06-29 05:45:49', '2023-06-29 05:45:49'),
(18, '45', 'i need some help to working in this site', NULL, NULL, NULL, '2023-06-29 06:03:06', '2023-06-29 06:03:06'),
(19, '45', 'hi i have question for working', NULL, 'ok you may ask', 'admin', '2023-06-29 06:09:04', '2023-06-29 06:09:04'),
(20, '44', 'hii', NULL, NULL, NULL, '2023-06-29 07:05:42', '2023-06-29 07:05:42'),
(21, '49', 'hi', NULL, NULL, NULL, '2023-06-30 16:27:23', '2023-06-30 16:27:23'),
(22, '57', 'good', NULL, NULL, NULL, '2023-07-01 06:40:56', '2023-07-01 06:40:56'),
(23, '58', 'tyjhhjmmj', NULL, 'good', NULL, '2023-07-03 10:59:30', '2023-07-03 11:13:59'),
(24, '54', 'hi', NULL, NULL, NULL, '2023-07-06 08:40:20', '2023-07-06 08:40:20'),
(25, '76', 'hi', NULL, 'hi this is admin', NULL, '2023-07-29 09:55:20', '2023-07-29 09:58:57'),
(26, '123', 'g', NULL, NULL, NULL, '2023-08-30 11:51:19', '2023-08-30 11:51:19'),
(27, '152', 'kkkkkkkkkkkkkkkkk', NULL, NULL, NULL, '2023-11-28 13:54:55', '2023-11-28 13:54:55'),
(28, '149', 'how to get the contact of tutors', NULL, NULL, NULL, '2023-12-10 17:05:25', '2023-12-10 17:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `time_calculations`
--

CREATE TABLE `time_calculations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_calculations`
--

INSERT INTO `time_calculations` (`id`, `user_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(4, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 10:34:52', '2023-07-13 10:34:52'),
(5, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 10:40:17', '2023-07-13 10:40:17'),
(6, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 10:47:44', '2023-07-13 10:47:44'),
(7, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 10:47:44', '2023-07-13 10:47:44'),
(8, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:04:23', '2023-07-13 11:04:23'),
(9, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:04:54', '2023-07-13 11:04:54'),
(10, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:04:56', '2023-07-13 11:04:56'),
(11, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:15:01', '2023-07-13 11:15:01'),
(12, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:16:40', '2023-07-13 11:16:40'),
(13, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:17:16', '2023-07-13 11:17:16'),
(14, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:19:13', '2023-07-13 11:19:13'),
(15, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:22:06', '2023-07-13 11:22:06'),
(16, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:22:32', '2023-07-13 11:22:32'),
(17, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:23:24', '2023-07-13 11:23:24'),
(18, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:28:51', '2023-07-13 11:28:51'),
(19, '59', '2023-07-13 10:21:45', NULL, '2023-07-13 11:30:31', '2023-07-13 11:30:31'),
(20, '58', '2023-07-13 12:20:44', NULL, '2023-07-13 12:20:58', '2023-07-13 12:20:58'),
(21, '45', '2023-07-14 05:15:17', NULL, '2023-07-14 05:15:25', '2023-07-14 05:15:25'),
(22, '59', '2023-07-14 05:17:17', NULL, '2023-07-14 05:18:09', '2023-07-14 05:18:09'),
(23, '54', '2023-07-14 04:58:49', NULL, '2023-07-14 05:20:28', '2023-07-14 05:20:28'),
(24, '54', '2023-07-14 04:58:49', NULL, '2023-07-14 05:21:14', '2023-07-14 05:21:14'),
(25, NULL, '0000-00-00 00:00:00', NULL, '2023-07-14 05:47:58', '2023-07-14 05:47:58'),
(26, NULL, '0000-00-00 00:00:00', NULL, '2023-07-14 06:23:24', '2023-07-14 06:23:24'),
(27, '48', '2023-07-14 06:41:39', NULL, '2023-07-14 06:42:46', '2023-07-14 06:42:46'),
(28, '48', '2023-07-14 06:42:54', NULL, '2023-07-14 07:46:07', '2023-07-14 07:46:07'),
(29, '54', '2023-07-14 10:45:52', NULL, '2023-07-14 12:01:18', '2023-07-14 12:01:18'),
(30, '64', NULL, NULL, '2023-07-15 09:17:19', '2023-07-15 09:17:19'),
(31, '64', '2023-07-15 09:17:23', NULL, '2023-07-15 09:19:49', '2023-07-15 09:19:49'),
(32, '58', '2023-07-15 05:12:51', NULL, '2023-07-15 11:13:36', '2023-07-15 11:13:36'),
(33, '54', '2023-07-17 06:58:03', NULL, '2023-07-17 08:49:37', '2023-07-17 08:49:37'),
(34, '54', '2023-07-17 06:58:03', NULL, '2023-07-17 08:51:43', '2023-07-17 08:51:43'),
(35, '54', '2023-07-17 06:58:03', NULL, '2023-07-17 09:40:53', '2023-07-17 09:40:53'),
(36, '54', '2023-07-17 06:58:03', NULL, '2023-07-17 11:07:55', '2023-07-17 11:07:55'),
(37, '63', '2023-07-18 05:51:39', NULL, '2023-07-18 05:58:01', '2023-07-18 05:58:01'),
(38, '54', '2023-07-19 06:44:24', NULL, '2023-07-19 06:45:03', '2023-07-19 06:45:03'),
(39, '54', '2023-07-19 09:12:58', NULL, '2023-07-19 09:13:17', '2023-07-19 09:13:17'),
(40, NULL, '0000-00-00 00:00:00', NULL, '2023-07-19 09:41:14', '2023-07-19 09:41:14'),
(41, '45', '2023-07-19 10:03:53', NULL, '2023-07-19 10:08:28', '2023-07-19 10:08:28'),
(42, '54', '2023-07-19 09:41:17', NULL, '2023-07-19 10:55:13', '2023-07-19 10:55:13'),
(43, '54', '2023-07-21 09:12:16', NULL, '2023-07-21 09:54:06', '2023-07-21 09:54:06'),
(44, '54', '2023-07-26 07:17:40', NULL, '2023-07-26 07:18:06', '2023-07-26 07:18:06'),
(45, '59', '2023-07-26 07:18:37', NULL, '2023-07-26 08:09:08', '2023-07-26 08:09:08'),
(46, '45', '2023-07-26 07:12:41', NULL, '2023-07-26 08:52:50', '2023-07-26 08:52:50'),
(47, '44', '2023-07-26 09:36:31', NULL, '2023-07-26 09:42:56', '2023-07-26 09:42:56'),
(48, '54', '2023-07-27 07:08:15', NULL, '2023-07-27 07:12:41', '2023-07-27 07:12:41'),
(49, NULL, '0000-00-00 00:00:00', NULL, '2023-07-27 08:57:33', '2023-07-27 08:57:33'),
(50, '76', NULL, NULL, '2023-07-29 05:40:44', '2023-07-29 05:40:44'),
(51, '76', '2023-07-29 05:40:47', NULL, '2023-07-29 05:41:25', '2023-07-29 05:41:25'),
(52, '44', '2023-07-29 08:59:48', NULL, '2023-07-29 09:05:45', '2023-07-29 09:05:45'),
(53, '49', '2023-07-29 09:05:52', NULL, '2023-07-29 09:06:40', '2023-07-29 09:06:40'),
(54, '49', '2023-07-29 09:05:52', NULL, '2023-07-29 09:06:50', '2023-07-29 09:06:50'),
(55, '49', '2023-07-29 09:05:52', NULL, '2023-07-29 09:07:03', '2023-07-29 09:07:03'),
(56, '62', '2023-07-29 09:09:06', NULL, '2023-07-29 09:11:33', '2023-07-29 09:11:33'),
(57, '54', '2023-07-29 09:49:55', NULL, '2023-07-29 09:50:04', '2023-07-29 09:50:04'),
(58, '76', '2023-07-29 09:42:24', NULL, '2023-07-29 10:06:32', '2023-07-29 10:06:32'),
(59, NULL, '0000-00-00 00:00:00', NULL, '2023-07-29 10:17:21', '2023-07-29 10:17:21'),
(60, '79', '2023-07-29 10:12:14', NULL, '2023-07-29 10:51:14', '2023-07-29 10:51:14'),
(61, '59', '2023-07-29 10:53:07', NULL, '2023-07-29 10:54:39', '2023-07-29 10:54:39'),
(62, '54', '2023-07-31 05:27:29', NULL, '2023-07-31 05:52:04', '2023-07-31 05:52:04'),
(63, '54', '2023-07-31 05:27:29', NULL, '2023-07-31 07:10:44', '2023-07-31 07:10:44'),
(64, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:18:33', '2023-07-31 07:18:33'),
(65, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:19:20', '2023-07-31 07:19:20'),
(66, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:19:32', '2023-07-31 07:19:32'),
(67, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:21:30', '2023-07-31 07:21:30'),
(68, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:22:11', '2023-07-31 07:22:11'),
(69, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:22:19', '2023-07-31 07:22:19'),
(70, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:25:57', '2023-07-31 07:25:57'),
(71, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:26:28', '2023-07-31 07:26:28'),
(72, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:31:51', '2023-07-31 07:31:51'),
(73, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:32:03', '2023-07-31 07:32:03'),
(74, '54', '2023-07-31 07:11:34', NULL, '2023-07-31 07:40:35', '2023-07-31 07:40:35'),
(75, '54', '2023-07-31 08:36:02', NULL, '2023-07-31 08:41:32', '2023-07-31 08:41:32'),
(76, '54', '2023-07-31 08:36:02', NULL, '2023-07-31 08:44:15', '2023-07-31 08:44:15'),
(77, '54', '2023-07-31 08:36:02', NULL, '2023-07-31 08:44:48', '2023-07-31 08:44:48'),
(78, '54', '2023-07-31 08:50:57', NULL, '2023-07-31 09:46:20', '2023-07-31 09:46:20'),
(79, '54', '2023-08-02 05:48:42', NULL, '2023-08-02 07:24:00', '2023-08-02 07:24:00'),
(80, '54', '2023-08-02 05:48:42', NULL, '2023-08-02 07:33:12', '2023-08-02 07:33:12'),
(81, '54', '2023-08-02 05:48:42', NULL, '2023-08-02 07:35:01', '2023-08-02 07:35:01'),
(82, '54', '2023-08-02 05:48:42', NULL, '2023-08-02 07:36:57', '2023-08-02 07:36:57'),
(83, '59', '2023-08-02 07:25:24', NULL, '2023-08-02 09:14:57', '2023-08-02 09:14:57'),
(84, '59', '2023-08-02 07:25:24', NULL, '2023-08-02 09:16:27', '2023-08-02 09:16:27'),
(85, '54', '2023-08-02 05:48:42', NULL, '2023-08-02 10:36:38', '2023-08-02 10:36:38'),
(86, '59', '2023-08-03 07:17:11', NULL, '2023-08-03 07:20:54', '2023-08-03 07:20:54'),
(87, '59', '2023-08-03 07:17:11', NULL, '2023-08-03 07:32:29', '2023-08-03 07:32:29'),
(88, NULL, '0000-00-00 00:00:00', NULL, '2023-08-05 07:08:21', '2023-08-05 07:08:21'),
(89, NULL, '0000-00-00 00:00:00', NULL, '2023-08-05 07:14:26', '2023-08-05 07:14:26'),
(90, NULL, '0000-00-00 00:00:00', NULL, '2023-08-05 07:19:55', '2023-08-05 07:19:55'),
(91, NULL, '0000-00-00 00:00:00', NULL, '2023-08-05 08:05:02', '2023-08-05 08:05:02'),
(92, '44', '2023-08-07 08:35:43', NULL, '2023-08-07 08:36:22', '2023-08-07 08:36:22'),
(93, '44', '2023-08-07 08:44:33', NULL, '2023-08-07 08:51:19', '2023-08-07 08:51:19'),
(94, '49', '2023-08-07 08:51:25', NULL, '2023-08-07 08:54:52', '2023-08-07 08:54:52'),
(95, '49', '2023-08-07 08:51:25', NULL, '2023-08-07 08:56:19', '2023-08-07 08:56:19'),
(96, '52', '2023-08-08 07:57:30', NULL, '2023-08-08 07:57:39', '2023-08-08 07:57:39'),
(97, '54', '2023-08-08 08:20:57', NULL, '2023-08-08 08:25:18', '2023-08-08 08:25:18'),
(98, '54', '2023-08-08 10:51:40', NULL, '2023-08-08 10:54:22', '2023-08-08 10:54:22'),
(99, NULL, '0000-00-00 00:00:00', NULL, '2023-08-08 12:00:42', '2023-08-08 12:00:42'),
(100, '59', '2023-08-09 06:08:40', NULL, '2023-08-09 10:04:40', '2023-08-09 10:04:40'),
(101, '59', '2023-08-09 06:08:40', NULL, '2023-08-09 11:27:46', '2023-08-09 11:27:46'),
(102, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 06:41:45', '2023-08-11 06:41:45'),
(103, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 06:44:13', '2023-08-11 06:44:13'),
(104, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 06:44:49', '2023-08-11 06:44:49'),
(105, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 07:13:55', '2023-08-11 07:13:55'),
(106, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 07:17:32', '2023-08-11 07:17:32'),
(107, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 07:21:11', '2023-08-11 07:21:11'),
(108, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 07:39:49', '2023-08-11 07:39:49'),
(109, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:08:20', '2023-08-11 09:08:20'),
(110, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:37:52', '2023-08-11 09:37:52'),
(111, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:47:41', '2023-08-11 09:47:41'),
(112, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:49:52', '2023-08-11 09:49:52'),
(113, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:56:52', '2023-08-11 09:56:52'),
(114, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 09:57:19', '2023-08-11 09:57:19'),
(115, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 10:10:18', '2023-08-11 10:10:18'),
(116, '54', '2023-08-11 06:36:31', NULL, '2023-08-11 10:54:37', '2023-08-11 10:54:37'),
(117, '79', '2023-08-11 12:42:55', NULL, '2023-08-11 12:46:55', '2023-08-11 12:46:55'),
(118, '52', '2023-08-12 09:56:14', NULL, '2023-08-12 10:01:54', '2023-08-12 10:01:54'),
(119, '79', '2023-08-16 10:55:46', NULL, '2023-08-16 10:56:31', '2023-08-16 10:56:31'),
(120, '79', '2023-08-16 10:55:46', NULL, '2023-08-16 12:56:19', '2023-08-16 12:56:19'),
(121, '79', '2023-08-16 10:55:46', NULL, '2023-08-16 12:58:19', '2023-08-16 12:58:19'),
(122, '59', '2023-08-17 09:06:02', NULL, '2023-08-17 09:16:23', '2023-08-17 09:16:23'),
(123, '79', '2023-08-18 05:27:04', NULL, '2023-08-18 06:22:03', '2023-08-18 06:22:03'),
(124, NULL, '0000-00-00 00:00:00', NULL, '2023-08-18 06:22:40', '2023-08-18 06:22:40'),
(125, '79', '2023-08-18 06:26:21', NULL, '2023-08-18 06:26:32', '2023-08-18 06:26:32'),
(126, NULL, '0000-00-00 00:00:00', NULL, '2023-08-18 06:31:58', '2023-08-18 06:31:58'),
(127, NULL, '0000-00-00 00:00:00', NULL, '2023-08-18 06:33:08', '2023-08-18 06:33:08'),
(128, NULL, '0000-00-00 00:00:00', NULL, '2023-08-18 07:12:32', '2023-08-18 07:12:32'),
(129, '59', '2023-08-18 07:21:34', NULL, '2023-08-18 08:39:31', '2023-08-18 08:39:31'),
(130, '119', '2023-08-18 08:41:47', NULL, '2023-08-18 08:59:04', '2023-08-18 08:59:04'),
(131, '54', '2023-08-19 06:58:02', NULL, '2023-08-19 07:01:50', '2023-08-19 07:01:50'),
(132, '54', '2023-08-19 06:58:02', NULL, '2023-08-19 07:04:38', '2023-08-19 07:04:38'),
(133, '54', '2023-08-19 07:09:01', NULL, '2023-08-19 07:15:26', '2023-08-19 07:15:26'),
(134, NULL, '0000-00-00 00:00:00', NULL, '2023-08-19 07:29:20', '2023-08-19 07:29:20'),
(135, '59', '2023-08-19 10:06:06', NULL, '2023-08-19 10:06:20', '2023-08-19 10:06:20'),
(136, NULL, '0000-00-00 00:00:00', NULL, '2023-08-19 10:07:48', '2023-08-19 10:07:48'),
(137, '79', '2023-08-19 10:09:30', NULL, '2023-08-19 10:14:22', '2023-08-19 10:14:22'),
(138, '79', '2023-08-19 10:16:35', NULL, '2023-08-19 11:19:46', '2023-08-19 11:19:46'),
(139, '79', '2023-08-21 08:50:21', NULL, '2023-08-21 08:59:20', '2023-08-21 08:59:20'),
(140, NULL, '0000-00-00 00:00:00', NULL, '2023-08-21 12:33:40', '2023-08-21 12:33:40'),
(141, '79', '2023-08-21 12:33:43', NULL, '2023-08-21 12:37:27', '2023-08-21 12:37:27'),
(142, '54', '2023-08-24 08:58:51', NULL, '2023-08-24 10:27:34', '2023-08-24 10:27:34'),
(143, '49', '2023-08-26 06:06:06', NULL, '2023-08-26 06:06:56', '2023-08-26 06:06:56'),
(144, '49', '2023-08-26 06:06:06', NULL, '2023-08-26 06:07:12', '2023-08-26 06:07:12'),
(145, '44', '2023-08-26 06:07:18', NULL, '2023-08-26 06:08:58', '2023-08-26 06:08:58'),
(146, '54', '2023-08-26 06:56:46', NULL, '2023-08-26 06:57:49', '2023-08-26 06:57:49'),
(147, '44', '2023-08-26 06:16:51', NULL, '2023-08-26 08:18:48', '2023-08-26 08:18:48'),
(148, '59', '2023-08-26 11:03:13', NULL, '2023-08-26 11:58:41', '2023-08-26 11:58:41'),
(149, '124', NULL, NULL, '2023-08-26 12:08:22', '2023-08-26 12:08:22'),
(150, '125', NULL, NULL, '2023-08-27 04:34:32', '2023-08-27 04:34:32'),
(151, '125', NULL, NULL, '2023-08-27 04:35:32', '2023-08-27 04:35:32'),
(152, '125', NULL, NULL, '2023-08-27 04:46:50', '2023-08-27 04:46:50'),
(153, '123', '2023-08-29 07:24:10', NULL, '2023-08-29 10:32:24', '2023-08-29 10:32:24'),
(154, '124', '2023-08-29 10:50:18', NULL, '2023-08-29 10:52:58', '2023-08-29 10:52:58'),
(155, '127', NULL, NULL, '2023-08-29 12:26:40', '2023-08-29 12:26:40'),
(156, '123', '2023-08-29 07:24:10', NULL, '2023-08-29 13:00:57', '2023-08-29 13:00:57'),
(157, NULL, '0000-00-00 00:00:00', NULL, '2023-09-02 11:56:41', '2023-09-02 11:56:41'),
(158, '59', '2023-09-02 11:56:47', NULL, '2023-09-02 12:16:21', '2023-09-02 12:16:21'),
(159, NULL, '0000-00-00 00:00:00', NULL, '2023-09-02 12:20:45', '2023-09-02 12:20:45'),
(160, '128', '2023-09-02 12:08:26', NULL, '2023-09-02 12:20:55', '2023-09-02 12:20:55'),
(161, '59', '2023-09-04 10:35:26', NULL, '2023-09-04 10:35:34', '2023-09-04 10:35:34'),
(162, '123', '2023-09-04 10:20:51', NULL, '2023-09-04 10:42:05', '2023-09-04 10:42:05'),
(163, '127', '2023-09-04 10:38:54', NULL, '2023-09-04 10:42:30', '2023-09-04 10:42:30'),
(164, '123', '2023-09-04 10:20:51', NULL, '2023-09-04 13:00:41', '2023-09-04 13:00:41'),
(165, '127', '2023-09-06 08:20:13', NULL, '2023-09-06 08:20:18', '2023-09-06 08:20:18'),
(166, '132', NULL, NULL, '2023-09-08 17:14:42', '2023-09-08 17:14:42'),
(167, '132', NULL, NULL, '2023-09-08 17:20:35', '2023-09-08 17:20:35'),
(168, '133', NULL, NULL, '2023-09-10 15:25:36', '2023-09-10 15:25:36'),
(169, '133', NULL, NULL, '2023-09-10 15:25:41', '2023-09-10 15:25:41'),
(170, '133', NULL, NULL, '2023-09-10 15:29:10', '2023-09-10 15:29:10'),
(171, '133', NULL, NULL, '2023-09-10 15:29:22', '2023-09-10 15:29:22'),
(172, '133', NULL, NULL, '2023-09-10 15:33:36', '2023-09-10 15:33:36'),
(173, '133', NULL, NULL, '2023-09-10 15:33:41', '2023-09-10 15:33:41'),
(174, '133', NULL, NULL, '2023-09-10 15:33:45', '2023-09-10 15:33:45'),
(175, '133', NULL, NULL, '2023-09-10 15:39:37', '2023-09-10 15:39:37'),
(176, '133', NULL, NULL, '2023-09-10 15:39:47', '2023-09-10 15:39:47'),
(177, '58', '2023-09-19 06:36:23', NULL, '2023-09-19 06:37:01', '2023-09-19 06:37:01'),
(178, '59', '2023-09-25 06:15:36', NULL, '2023-09-25 06:19:16', '2023-09-25 06:19:16'),
(179, '59', '2023-09-25 06:15:36', NULL, '2023-09-25 06:19:36', '2023-09-25 06:19:36'),
(180, '59', '2023-09-28 05:51:43', NULL, '2023-09-28 05:51:57', '2023-09-28 05:51:57'),
(181, '123', '2023-09-28 06:50:47', NULL, '2023-09-28 07:34:46', '2023-09-28 07:34:46'),
(182, '123', '2023-10-28 05:59:58', NULL, '2023-10-28 07:32:13', '2023-10-28 07:32:13'),
(183, '123', '2023-10-28 07:33:45', NULL, '2023-10-28 07:33:48', '2023-10-28 07:33:48'),
(184, '59', '2023-10-28 06:00:31', NULL, '2023-10-28 11:55:02', '2023-10-28 11:55:02'),
(185, '127', '2023-10-30 12:45:55', NULL, '2023-10-30 12:46:17', '2023-10-30 12:46:17'),
(186, '49', '2023-10-30 12:47:41', NULL, '2023-10-30 12:47:56', '2023-10-30 12:47:56'),
(187, '49', '2023-10-30 12:47:41', NULL, '2023-10-30 12:57:08', '2023-10-30 12:57:08'),
(188, '123', '2023-10-30 12:56:36', NULL, '2023-10-30 12:58:01', '2023-10-30 12:58:01'),
(189, '123', '2023-11-15 11:00:13', NULL, '2023-11-15 11:00:20', '2023-11-15 11:00:20'),
(190, NULL, '0000-00-00 00:00:00', NULL, '2023-11-15 11:54:57', '2023-11-15 11:54:57'),
(191, '148', '2023-11-24 13:04:56', NULL, '2023-11-24 13:12:05', '2023-11-24 13:12:05'),
(192, '148', '2023-11-24 13:19:13', NULL, '2023-11-24 13:32:44', '2023-11-24 13:32:44'),
(193, '149', '2023-11-25 09:42:08', NULL, '2023-11-25 09:42:22', '2023-11-25 09:42:22'),
(194, '149', '2023-11-25 09:42:27', NULL, '2023-11-25 09:43:01', '2023-11-25 09:43:01'),
(195, '152', NULL, NULL, '2023-11-28 13:36:51', '2023-11-28 13:36:51'),
(196, '123', '2023-12-09 06:51:33', NULL, '2023-12-09 06:53:36', '2023-12-09 06:53:36'),
(197, NULL, '0000-00-00 00:00:00', NULL, '2023-12-11 12:13:58', '2023-12-11 12:13:58'),
(198, '123', '2023-12-12 11:31:45', NULL, '2023-12-12 11:41:31', '2023-12-12 11:41:31'),
(199, '123', '2023-12-12 11:41:41', NULL, '2023-12-12 11:42:22', '2023-12-12 11:42:22'),
(200, '49', '2023-12-13 04:46:23', NULL, '2023-12-13 05:10:53', '2023-12-13 05:10:53'),
(201, '49', '2023-12-13 06:25:36', NULL, '2023-12-13 12:00:31', '2023-12-13 12:00:31'),
(202, '59', '2023-12-15 10:08:22', NULL, '2023-12-15 10:12:57', '2023-12-15 10:12:57'),
(203, '149', '2023-12-15 08:35:27', NULL, '2023-12-15 10:24:52', '2023-12-15 10:24:52'),
(204, '149', '2023-12-15 08:35:27', NULL, '2023-12-15 10:30:17', '2023-12-15 10:30:17'),
(205, '123', '2023-12-16 05:11:40', NULL, '2023-12-16 08:34:46', '2023-12-16 08:34:46'),
(206, '149', '2023-12-17 16:24:52', NULL, '2023-12-17 17:57:22', '2023-12-17 17:57:22'),
(207, '149', '2023-12-17 17:57:45', NULL, '2023-12-17 17:58:15', '2023-12-17 17:58:15'),
(208, '127', '2023-12-20 05:05:44', NULL, '2023-12-20 05:06:08', '2023-12-20 05:06:08'),
(209, '123', '2023-12-20 05:06:20', NULL, '2023-12-20 06:28:21', '2023-12-20 06:28:21'),
(210, '123', '2023-12-20 11:15:47', NULL, '2023-12-20 12:02:19', '2023-12-20 12:02:19'),
(211, '123', '2023-12-20 11:15:47', NULL, '2023-12-20 12:02:19', '2023-12-20 12:02:19'),
(212, '123', '2023-12-21 10:00:44', NULL, '2023-12-21 12:02:54', '2023-12-21 12:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `emailvery` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `google_id` varchar(225) DEFAULT NULL,
  `facebook_id` varchar(225) DEFAULT NULL,
  `myref` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `insta_id` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `emailvery`, `email_verified_at`, `password`, `remember_token`, `google_id`, `facebook_id`, `myref`, `created_at`, `updated_at`, `mobile_no`, `category`, `status`, `login_at`, `start_at`, `last_seen`, `insta_id`) VALUES
(44, 'Shikha Chaudhary', 'dshikha0502@gmail.com', NULL, NULL, NULL, NULL, NULL, '115929248309846525567', NULL, '802b79a1', '2023-05-25 16:02:03', '2023-09-10 15:25:44', NULL, '3', NULL, '2023-09-10 15:25:44', '2023-09-10 15:22:05', '2023-08-26 08:18:48', NULL),
(47, 'PIONEER ACADEMY', 'pioneeracademyldh@gmail.com', NULL, NULL, NULL, '$2y$10$JrseJjFc6pLfJsUrajxtW.HwxctxJXFbJ7gb7712Og.0NazN5AYCG', NULL, '101270515148808111859', NULL, '7b7128b7', '2023-05-30 10:05:45', '2023-08-19 09:16:46', NULL, '3', NULL, '2023-08-19 09:16:46', '2023-08-19 09:04:32', NULL, NULL),
(49, 'Picruit pioneer', 'picruit.pioneer@gmail.com', NULL, NULL, NULL, NULL, NULL, '102467319875815710439', NULL, '12289982', '2023-05-30 10:33:36', '2023-12-13 12:00:31', NULL, '2', 0, '2023-12-13 12:00:31', '2023-12-13 06:25:36', '2023-12-13 12:00:31', NULL),
(50, 'Softgenics Shubham', 'softgenics.shubham@gmail.com', NULL, NULL, NULL, NULL, NULL, '112438337554869256003', NULL, '2011771b', '2023-05-30 11:46:29', '2023-05-30 11:46:47', NULL, '4', NULL, NULL, NULL, NULL, NULL),
(51, 'Softgenics Private Limited', 'softgenics.private@gmail.com', NULL, NULL, NULL, NULL, NULL, '110692603327778934665', NULL, 'a778201b', '2023-05-31 05:05:53', '2023-07-06 06:15:33', NULL, '1', NULL, NULL, NULL, NULL, NULL),
(52, 'Pioneer Academy2', 'pioneerfoundationldh@gmail.com', NULL, NULL, NULL, NULL, NULL, '113165755606213239401', NULL, '7119b8b1', '2023-05-31 09:43:57', '2023-08-19 09:46:59', NULL, '1', NULL, '2023-08-19 09:46:59', '2023-08-19 09:37:23', '2023-08-12 10:01:54', NULL),
(53, 'Raj Choudhary', 'raaz02256@gmail.com', NULL, NULL, NULL, NULL, NULL, '103160207873456685448', NULL, '18829a18', '2023-05-31 11:10:19', '2023-06-24 11:40:54', NULL, '1', NULL, NULL, NULL, NULL, NULL),
(55, 'Softgenics Training', 'softgenics.training@gmail.com', NULL, NULL, NULL, NULL, NULL, '118283489906433951066', NULL, NULL, '2023-06-08 10:19:46', '2023-06-08 10:19:54', NULL, '3', NULL, NULL, NULL, NULL, NULL),
(56, 'Ravi Kumar', 'ravikumar198726@gmail.com', NULL, NULL, NULL, NULL, NULL, '113535888171756638547', NULL, NULL, '2023-06-16 12:26:23', '2023-06-16 12:27:12', NULL, '4', NULL, NULL, NULL, NULL, NULL),
(58, 'Raj Choudhary', 'softgenic.raj143@gmail.com', NULL, NULL, NULL, NULL, NULL, '101474643719971580014', NULL, NULL, '2023-06-30 09:25:37', '2023-09-19 06:37:01', NULL, '1', NULL, NULL, '2023-09-19 06:36:23', '2023-09-19 06:37:01', NULL),
(59, 'gulshan kumari', 'mishr74881@gmail.com', NULL, NULL, NULL, NULL, NULL, '118376745712913615278', NULL, NULL, '2023-07-01 11:57:57', '2023-12-21 10:22:24', NULL, '2', 1, '2023-12-21 10:22:24', '2023-12-21 10:22:07', '2023-12-15 10:12:57', NULL),
(60, 'pratikesh kumar', 'stylishpratikesh@gmail.com', NULL, NULL, NULL, NULL, NULL, '112097109724445658333', NULL, NULL, '2023-07-05 11:55:27', '2023-07-05 11:55:27', NULL, '1', NULL, NULL, NULL, NULL, NULL),
(61, 'Gaurav kumar', 'softgenics.gaurav@gmail.com', NULL, NULL, NULL, NULL, NULL, '114188788124777478260', NULL, NULL, '2023-07-06 05:34:31', '2023-07-06 05:34:42', NULL, '1', NULL, NULL, NULL, NULL, NULL),
(63, 'Ravi K', 'ravikant892123@gmail.com', NULL, NULL, NULL, NULL, NULL, '106586495900266496036', NULL, NULL, '2023-07-11 06:01:26', '2023-07-18 05:58:01', NULL, '1', NULL, NULL, '2023-07-18 05:51:39', '2023-07-18 05:58:01', NULL),
(64, 'Neha Singh', 'softgenics.nehasin@gmail.com', NULL, NULL, NULL, NULL, NULL, '106937278751473699454', NULL, NULL, '2023-07-15 09:05:44', '2023-07-15 09:19:49', NULL, '3', NULL, NULL, '2023-07-15 09:17:23', '2023-07-15 09:19:49', NULL),
(65, NULL, 'mishra741@gmail.com', 'niraj@123', NULL, NULL, '$2y$10$0D7URAikmTD.onNfqQC8ruHB.clHO8MGym7u.cOl6F.cU56hPerRK', NULL, NULL, NULL, NULL, '2023-07-17 11:08:36', '2023-07-17 11:09:09', NULL, NULL, NULL, '2023-07-17 11:09:09', NULL, NULL, NULL),
(66, 'Niraj', 'mishra123@gmail.com', 'raginiraj@123', NULL, NULL, 'Niraj@123', NULL, NULL, NULL, NULL, '2023-07-22 07:45:58', '2023-07-22 07:45:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Niraj', 'mishra74881@gmial.com', 'Niraj@1255', NULL, NULL, 'Niraj', NULL, NULL, NULL, NULL, '2023-07-22 08:29:10', '2023-07-22 08:29:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Baba Kedoll', 'alicemacron123@gmail.com', NULL, NULL, NULL, NULL, NULL, '100591926434733639448', NULL, NULL, '2023-07-26 06:19:18', '2023-07-26 06:21:24', NULL, NULL, NULL, '2023-07-26 06:21:24', NULL, NULL, NULL),
(77, NULL, NULL, 'nkm12', 1, NULL, '$2y$10$spFBVAcVRvN3ljSWCiKTB.rxj9zk7KtgNsHL4yOgx9ONSU6wotgf.', NULL, NULL, NULL, NULL, '2023-07-29 07:19:44', '2023-07-29 07:19:44', NULL, 'Choose...', NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, 'admin', 1, NULL, '$2y$10$S9xrK9uljbA/NHF/u5yytuTPLHUPwg.h3WQNqx4V1g9u8QFBVwlZ6', NULL, NULL, NULL, NULL, '2023-07-29 07:22:35', '2023-07-29 07:22:35', NULL, '3', NULL, NULL, NULL, NULL, NULL),
(80, NULL, 'al.b.ertha.n.s.h.i.n.49@gmail.com', 'Pfiefjwdjwihdwjdiwjdwh гпругшовшырваувапцовцврц аоувацвошцвргцр jedfjisfeufhuhdwdiwjdwisfuediudiywfuw ьвцыволоыоцпарыойырцпв udwhudwsfueufywudiadwuf picruit.com', NULL, NULL, '$2y$10$ZhPL69VZQ18t4SEcgJ8DF.apHExQ8Y8l0ajFcY/F6KbRxc5hxoKaq', NULL, NULL, NULL, NULL, '2023-08-01 21:09:05', '2023-08-01 21:09:12', NULL, NULL, NULL, '2023-08-01 21:09:12', NULL, NULL, NULL),
(120, NULL, 'ceo@cwservices.co.in', 'cogentwebservices@gmail.com', NULL, NULL, '$2y$10$/PwR7tcbYZKc7QfQJn2B/eMMLZmeQ4YrCfFFfntoClaHZxlMlP/cy', NULL, NULL, NULL, NULL, '2023-08-23 08:12:28', '2023-08-23 08:12:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'Manjit singh sethi', 'sales.mummysoftware@gmail.com', NULL, NULL, NULL, NULL, NULL, '111387592099382375822', NULL, NULL, '2023-08-25 05:51:45', '2023-08-25 09:59:16', NULL, '3', NULL, '2023-08-25 09:59:16', '2023-08-25 08:27:29', NULL, NULL),
(122, NULL, NULL, 'nkm1212', 1, NULL, '$2y$10$aF0anTVKs5jdGKOoablRRuj9tFt3avQHAw98f/.OUV7XTpOT1X6zi', NULL, NULL, NULL, NULL, '2023-08-26 09:05:44', '2023-08-26 09:05:44', NULL, '3', NULL, NULL, NULL, NULL, NULL),
(123, 'Niraj Mishra', 'softgenics.neeraj@gmail.com', NULL, NULL, NULL, NULL, NULL, '101848665586074795206', NULL, NULL, '2023-08-26 11:26:22', '2023-12-22 04:15:17', NULL, '1', NULL, '2023-12-22 04:15:17', '2023-12-22 04:14:37', '2023-12-21 12:02:54', NULL),
(126, NULL, 'ekhalera@gmail.com', 'Nokhalera', 1, NULL, '$2y$10$818iy8icP10k..Ls5QPsku8ccbaDuMPkPi3vckqJ02vwDhxcFgAcK', NULL, NULL, NULL, '1a09a099', '2023-08-28 10:57:41', '2023-08-28 11:03:47', NULL, NULL, NULL, '2023-08-28 11:03:47', '2023-08-28 11:00:11', NULL, NULL),
(127, 'NIRAJ MISHRA', 'mishra74881@gmail.com', NULL, NULL, NULL, NULL, NULL, '100527713977745158553', NULL, NULL, '2023-08-29 10:54:07', '2023-12-22 04:14:07', NULL, '3', NULL, '2023-12-22 04:14:07', '2023-12-22 04:14:03', '2023-12-20 05:06:08', NULL),
(129, NULL, 'test@yopmail.com', 'test', NULL, NULL, '$2y$10$fxv9vNCIU9Aa1jyvLYuh8ex5uEt7Rm/usCNEek8J1tpm/xhvtGKEq', NULL, NULL, NULL, NULL, '2023-09-03 08:23:34', '2023-09-03 08:28:41', NULL, NULL, NULL, '2023-09-03 08:28:41', NULL, NULL, NULL),
(130, NULL, 'phpdevtest258@gmail.com', 'Testphpdev', NULL, '2023-09-03 12:25:54', '$2y$10$87BPOGjUe9j.DAi2fmY5uOWGpc4gfUO8TDA0qVTX8ADXedbdxrOta', NULL, NULL, NULL, NULL, '2023-09-03 12:23:25', '2023-09-03 12:27:03', NULL, NULL, NULL, '2023-09-03 12:27:03', NULL, NULL, NULL),
(131, NULL, 'testpioneer@yopmail.com', 'testuser', NULL, '2023-09-03 12:31:28', '$2y$10$ym8i78gGNzn.FUsjUwh3Munp1qn.EIEBLhy7I6EqPgfk.P55Ir/kG', NULL, NULL, NULL, NULL, '2023-09-03 12:31:10', '2023-09-03 12:33:17', NULL, NULL, NULL, '2023-09-03 12:33:17', NULL, NULL, NULL),
(132, 'apps expert', 'appsexpert22@gmail.com', NULL, NULL, NULL, NULL, NULL, '104600451194539101134', NULL, NULL, '2023-09-08 17:13:41', '2023-09-08 18:27:00', NULL, '4', NULL, '2023-09-08 18:27:00', NULL, '2023-09-08 17:20:35', NULL),
(133, 'Sunny Mehra', 'sunnymehra8139@gmail.com', NULL, NULL, NULL, NULL, NULL, '103982376945943502388', NULL, NULL, '2023-09-10 15:19:29', '2023-09-10 15:40:34', NULL, '1', NULL, '2023-09-10 15:40:34', NULL, '2023-09-10 15:39:47', NULL),
(134, NULL, 'raheena6000@gmail.com', 'Raheena', NULL, NULL, '$2y$10$gXRxZn8D6DpFZOjLpOeXNuIT0bzwVY7fu8xrPj/7AKe8C2aOj.SVu', NULL, NULL, NULL, NULL, '2023-09-14 09:13:43', '2023-09-14 09:19:35', NULL, NULL, NULL, '2023-09-14 09:19:35', '2023-09-14 09:15:53', NULL, NULL),
(135, 'Dilpreet Saimbhi', 'kaurd3589@gmail.com', NULL, NULL, NULL, NULL, NULL, '117936421299871770423', NULL, NULL, '2023-09-20 12:02:04', '2023-09-20 12:03:40', NULL, NULL, NULL, '2023-09-20 12:03:40', NULL, NULL, NULL),
(136, NULL, 'vishnumahajan08@gmail.com', 'Vishnu', NULL, NULL, '$2y$10$YbprnMXVdkGcT.wFmnhWc.GQOT.cO2tN8KtorPGWJpDCcIYWSZXAO', NULL, NULL, NULL, NULL, '2023-10-05 09:26:12', '2023-10-05 09:26:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'Anshu man', 'anshumanshoor@gmail.com', NULL, NULL, NULL, NULL, NULL, '106787740828193365423', NULL, NULL, '2023-10-18 13:51:39', '2023-10-18 13:52:18', NULL, NULL, NULL, '2023-10-18 13:52:18', NULL, NULL, NULL),
(140, NULL, 'aPfqLC.hbdpmww@spinapp.bar', 'hhTKjsQsEXvJU', NULL, NULL, '$2y$10$uySQ2BLNq2ie2mYeboMwBuw0H.JuO/aI8tG/ElWWYwUrQZxhyEKMm', NULL, NULL, NULL, NULL, '2023-10-24 00:05:21', '2023-10-24 00:05:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'operations hmg', 'operations.hmgdigital@gmail.com', NULL, NULL, NULL, NULL, NULL, '108843799216602183021', NULL, NULL, '2023-10-25 10:37:47', '2023-10-25 10:44:17', NULL, NULL, NULL, '2023-10-25 10:44:17', NULL, NULL, NULL),
(142, 'kanishka handa', 'kanishkahanda.9@gmail.com', NULL, NULL, NULL, NULL, NULL, '104582319472719943017', NULL, NULL, '2023-10-28 06:29:48', '2023-10-28 07:46:53', NULL, '1', NULL, '2023-10-28 07:46:53', '2023-10-28 06:37:52', NULL, NULL),
(143, 'Niraj Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 04:33:28', '2023-11-03 04:34:02', NULL, NULL, NULL, '2023-11-03 04:34:02', NULL, NULL, NULL),
(144, 'Niraj Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 04:34:03', '2023-11-03 04:35:02', NULL, NULL, NULL, '2023-11-03 04:35:02', NULL, NULL, NULL),
(145, NULL, 'FBuOuS.pwjmtbm@pointel.xyz', 'zcWmaWnixmJ', NULL, NULL, '$2y$10$hgplVz6yuSJ0.dYAB67H..jC/U.gU4FJUN7z.5Gz5K5oywXChca9O', NULL, NULL, NULL, NULL, '2023-11-19 19:56:15', '2023-11-19 19:56:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, NULL, 'palak87@live.com', 'XEzomyvQrxFQz', NULL, NULL, '$2y$10$O5ftydN.sw/XsDIN4.iBAuwnaaCWE86NUN3ISqFQj7qLHRatyxaQi', NULL, NULL, NULL, NULL, '2023-11-19 23:56:48', '2023-11-19 23:56:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'Niraj Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-22 05:14:22', '2023-11-22 05:14:22', NULL, NULL, NULL, '2023-11-22 05:14:22', NULL, NULL, NULL),
(148, 'vasu', 'vasu49780@gmail.com', NULL, NULL, NULL, NULL, NULL, '110013128281281708846', NULL, NULL, '2023-11-24 13:02:16', '2023-11-24 13:46:13', NULL, NULL, NULL, '2023-11-24 13:46:13', '2023-11-24 13:46:13', '2023-11-24 13:32:44', NULL),
(149, 'Nikhil Upadhyay', 'nikhilupadhyay097@gmail.com', NULL, NULL, NULL, NULL, NULL, '111808986840998867928', NULL, NULL, '2023-11-25 09:34:50', '2023-12-22 10:37:11', NULL, '1', NULL, '2023-12-22 10:37:11', '2023-12-22 10:32:51', '2023-12-17 17:58:15', NULL),
(150, NULL, 'unikhil1216@gmail.com', 'Nikhil23', NULL, NULL, '$2y$10$Ebd7a.AzHzb0EujTBRiKcOB5fawvnxQzq6C3WZsZhOmF5idt9HizK', NULL, NULL, NULL, NULL, '2023-11-25 09:45:26', '2023-12-14 11:51:58', NULL, '4', NULL, '2023-12-14 11:51:58', '2023-12-14 11:51:58', NULL, NULL),
(151, NULL, 'XjJSKs.tbhmm@spinapp.bar', 'XjJSKs.tbhmm', NULL, NULL, '$2y$10$Y/GyqLjavDKGla5GlY/cpO9GRc/ah8eF228wndh.YWUna4MD74yMi', NULL, NULL, NULL, NULL, '2023-11-27 10:36:29', '2023-11-27 10:36:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'Dr. Shashi Bhushan', 'hunter7250988434@gmail.com', NULL, NULL, NULL, NULL, NULL, '110398577951301867681', NULL, NULL, '2023-11-28 13:33:50', '2023-11-28 14:18:46', NULL, '1', NULL, '2023-11-28 14:18:46', '2023-11-28 13:46:11', '2023-11-28 13:36:51', NULL),
(153, NULL, 'vishal@google.com', 'Username', NULL, NULL, '$2y$10$6ERS/B.PtS1xytrRP4aQn.Hf14NoQ.TnF2bmbJMiAjnGLKrNec4Z6', NULL, NULL, NULL, NULL, '2023-11-28 13:41:09', '2023-11-28 13:46:11', NULL, NULL, NULL, '2023-11-28 13:46:11', NULL, NULL, NULL),
(154, 'Manjinder kaur', 'm26124369@gmail.com', NULL, NULL, NULL, NULL, NULL, '106014955140304690065', NULL, NULL, '2023-12-03 11:59:40', '2023-12-03 12:03:42', NULL, NULL, NULL, '2023-12-03 12:03:42', '2023-12-03 12:03:42', NULL, NULL),
(155, NULL, 'aFtsbX.qhbmjqc@brasswire.me', 'aFtsbX.qhbmjqc', NULL, NULL, '$2y$10$hpQc/AQsF1OMUNG6i0LlyODgfofCmxKGvFTF3ouTQpKI4KMSCBQh.', NULL, NULL, NULL, NULL, '2023-12-03 22:56:35', '2023-12-03 22:56:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, NULL, 'vYqBoj.qchmdcd@rightbliss.beauty', 'vYqBoj.qchmdcd', NULL, NULL, '$2y$10$LNZTmU7DO1rW7iH4u2n/d.21oUYsoxs55A/MVIu8/h2KxS1H3WDZy', NULL, NULL, NULL, NULL, '2023-12-05 20:36:40', '2023-12-05 20:36:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, NULL, 'amgleeson7@hotmail.com', 'amgleeson7', NULL, NULL, '$2y$10$qVW.jAYfkw3/CHIMQtoDZuQMGwCxgjSDZjgBAkT4knFRHTi52bCwe', NULL, NULL, NULL, NULL, '2023-12-05 20:44:46', '2023-12-05 20:44:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, NULL, 'jessyenik9112@gmail.com', 'jessyenik9112', NULL, NULL, '$2y$10$udKVJe34KEETZZecX1tyfOq5Fd5iGfeAWK9y3b.qfGqaVmJFpKT3K', NULL, NULL, NULL, NULL, '2023-12-06 00:55:02', '2023-12-06 00:55:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, NULL, 'zach.fabry@bulkfluidsystems.com', 'zach.fabry', NULL, NULL, '$2y$10$Jj.Vzg9pcCnAdGP3yXG8eO85gTupT7w23zFSL2gRRFiS.uHlXe6.a', NULL, NULL, NULL, NULL, '2023-12-06 04:28:42', '2023-12-06 04:28:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, NULL, 'green9866@rogers.com', 'green9866', NULL, NULL, '$2y$10$RsIG3xz7Huwet.QFlORbWujgOLnlh8pTeD5VReuriHtmqNMIPCvBS', NULL, NULL, NULL, NULL, '2023-12-06 12:31:36', '2023-12-06 12:31:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, NULL, 'michelle@hultine.com', 'michelle', NULL, NULL, '$2y$10$KMw8g/DT0CcykcPzTdWyLeEDpgzW4s0139BuJLeK.M9cbmTD/s8dC', NULL, NULL, NULL, NULL, '2023-12-06 15:08:09', '2023-12-06 15:08:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, NULL, 'sing2910nh@hotmail.com', 'sing2910nh', NULL, NULL, '$2y$10$v4OnkGXcwFz9mYqpLNbJSedjjQ.fHHuW3GG0k.0FiICS1iNPnBWL6', NULL, NULL, NULL, NULL, '2023-12-06 18:54:01', '2023-12-06 18:54:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, NULL, 'smartins.blackstone@gmail.com', 'smartins.blackstone', NULL, NULL, '$2y$10$3RQI84QYv82I5jxpKDjJ9ewRC4Z5CJlc2DQ.LQ24kcjId9PHfyzbO', NULL, NULL, NULL, NULL, '2023-12-06 23:01:59', '2023-12-06 23:01:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, NULL, 'shreeta@hotmail.co.uk', 'shreeta', NULL, NULL, '$2y$10$hXuCzWY3FfXJ2vGokmKg5uXUQ0i/ndysOC6PEFKZdJZVVfXsVfViS', NULL, NULL, NULL, NULL, '2023-12-07 02:27:21', '2023-12-07 02:27:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, NULL, 'clintsmith@a1termitepc.com', 'clintsmith', NULL, NULL, '$2y$10$N/6OyqPYaVfLITOAIGomoe3Ta6zAndGpkOG/iVjpVzW7p0DfbiwrW', NULL, NULL, NULL, NULL, '2023-12-07 17:48:21', '2023-12-07 17:48:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, NULL, 'david@jyleelaw.com', 'david', NULL, NULL, '$2y$10$yZd/ycQlQ1pRTvhPjkTrr.NTHLkpoa4sBxVsWdE2TbgP.FXf5fGXO', NULL, NULL, NULL, NULL, '2023-12-07 21:08:20', '2023-12-07 21:08:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, NULL, 'donald.treadwell@gmail.com', 'donald.treadwell', NULL, NULL, '$2y$10$KEnsD5qAtg9OBcLpF5Y44OJKQrbZEC1/nVawuwGdhFioenmFQMsoy', NULL, NULL, NULL, NULL, '2023-12-07 23:49:24', '2023-12-07 23:49:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, NULL, 'michael.tambaoan@verizonwireless.com', 'michael.tambaoan', NULL, NULL, '$2y$10$/GOJXke4E5hOQD4gT.hhXO7rzcH3cbBdc.FGGgiD8BaakIuXsKJpO', NULL, NULL, NULL, NULL, '2023-12-08 08:19:35', '2023-12-08 08:19:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, NULL, 'spiausainc@gmail.com', 'spiausainc', NULL, NULL, '$2y$10$y4kZ0NBFyfQCY4hi3AxG0e7iak/mUpGAbRuGoyziKz3qb17292myC', NULL, NULL, NULL, NULL, '2023-12-08 12:19:27', '2023-12-08 12:19:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, NULL, 'kiracyegiz@gmail.com', 'kiracyegiz', NULL, NULL, '$2y$10$a7fYkGls9pcoWD0lLfKhGezWtcLLR.PLWcoN4WLuYvfdes5nfro.C', NULL, NULL, NULL, NULL, '2023-12-08 17:14:31', '2023-12-08 17:14:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, NULL, 'jJTJkQ.cbmwhdq@scranch.shop', 'vBjyeLYOcC', NULL, NULL, '$2y$10$BuHCekTFs2YD.ziOnBH7TuQGq4G7npWURvhYgIk7ZDxobBZgAnGNe', NULL, NULL, NULL, NULL, '2023-12-12 10:52:17', '2023-12-12 10:52:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, NULL, 'philippe.tixier1@club-internet.fr', 'kOrolwrseXXrqki', NULL, NULL, '$2y$10$SeT5lfZ3FW2CzsWLAwLWju9tWV9wSyJegCwkyWBuZZrtuyzUpojNO', NULL, NULL, NULL, NULL, '2023-12-12 13:37:18', '2023-12-12 13:37:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, NULL, 'marieb@studyhair.com', 'DJvOUlXkyc', NULL, NULL, '$2y$10$3peEAIk8Nuung/VAcdVFUO6JZwGJ0arHZjqaHRf6mPxRrVRyRYWOK', NULL, NULL, NULL, NULL, '2023-12-12 16:30:53', '2023-12-12 16:30:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, NULL, 'heathc@reyffelectric.com', 'ialjMfvVSqFNIWOJ', NULL, NULL, '$2y$10$Xbfa1Me3yj.lvG0Yoyqzrew4SceHeakNjxb8kVvFRMv4j6uL9Kupa', NULL, NULL, NULL, NULL, '2023-12-12 19:20:26', '2023-12-12 19:20:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, NULL, 'papillion@mrhandyman.com', 'isXpdJTDo', NULL, NULL, '$2y$10$oBAIfzhk8VV/5DrYuW9taOg13vgjvl3SacobkMKIyP3.l0Y2gsoou', NULL, NULL, NULL, NULL, '2023-12-13 14:50:05', '2023-12-13 14:50:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, NULL, 'viviserianni@gmail.com', 'ouuWXYHewCIl', NULL, NULL, '$2y$10$oMoNLGlM2/3x9M36Nkky5.s6iCKgiEeZLzrKAx0zNuww4zeIDQVpO', NULL, NULL, NULL, NULL, '2023-12-13 22:30:33', '2023-12-13 22:30:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, NULL, 'rcfd10@hotmail.com', 'SCehXXQdWyOHOAA', 1, NULL, '$2y$10$54anFG8r6sYl/6hWcxe6iuLLUB/RwTbqTXfmX8vv/zTG1PWp26HtC', NULL, NULL, NULL, 'bb18ab0b', '2023-12-14 03:11:44', '2023-12-14 12:49:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, NULL, '8159@pcexpertservices.com', 'jURSbxUDVJPSNXy', NULL, NULL, '$2y$10$S1B6NqC990fkbOcNx1ZCquQjYndGtfoApF0eS/uXUnNAklNE36p/u', NULL, NULL, NULL, NULL, '2023-12-14 07:44:32', '2023-12-14 07:44:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, NULL, 'thera.medcof@gmail.com', 'knNTiJqLBfDWp', NULL, NULL, '$2y$10$q4FZfcgto46sixMXujZJo.k4n9BirFEMmeMxAsLgCRsu1v8MBpnPa', NULL, NULL, NULL, NULL, '2023-12-14 13:42:09', '2023-12-14 13:42:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, NULL, 'timsplasha@googlemail.com', 'ozxKSbyQyIXfJj', NULL, NULL, '$2y$10$txMwtINWRa0d5e4tAE6EyuhANJ8RPeOEvj5FR4jNGNvjxSiURB2yq', NULL, NULL, NULL, NULL, '2023-12-14 17:45:20', '2023-12-14 17:45:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'Mohit dutta', 'mohitdutta0407@gmail.com', NULL, NULL, NULL, NULL, NULL, '104427904033750870574', NULL, NULL, '2023-12-15 13:17:35', '2023-12-15 13:20:47', NULL, NULL, NULL, '2023-12-15 13:20:47', NULL, NULL, NULL),
(182, NULL, 'dwigginsfamily2@gmail.com', 'BcUpRYJyqqUTlr', NULL, NULL, '$2y$10$m8aTHP2CsdLMUuR2.CiKMujBZBf7GxHMoLCbhGQFZ3QkXRLEL5xPe', NULL, NULL, NULL, NULL, '2023-12-16 04:48:07', '2023-12-16 04:48:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'Niraj Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-16 09:46:59', '2023-12-16 09:51:11', NULL, NULL, NULL, '2023-12-16 09:51:11', NULL, NULL, NULL),
(184, 'Niraj Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-16 09:48:14', '2023-12-16 09:48:22', NULL, NULL, NULL, '2023-12-16 09:48:22', NULL, NULL, NULL),
(185, 'devlop gram', 'devlopergram@gmail.com', NULL, NULL, NULL, NULL, NULL, '110893029143142801861', NULL, NULL, '2023-12-16 15:50:33', '2023-12-21 19:17:47', NULL, '2', NULL, '2023-12-21 19:17:47', '2023-12-21 18:52:39', NULL, NULL),
(186, NULL, 'JsUwxR.bhdpmcm@tarboosh.shop', 'vmjjjCAmRjB', NULL, NULL, '$2y$10$GM/Rqo14TQT8j0ZqoP/U0ur92TP/vS77wwT0Kr3UCaFFTyN2va1lO', NULL, NULL, NULL, NULL, '2023-12-18 14:57:11', '2023-12-18 14:57:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, NULL, 'jimmysharpe@certifiedenergyinc.com', 'sVuxthcsEcnpUoNF', NULL, NULL, '$2y$10$mBf2K7Rv9UsHF7W7.Wppd.oJsJlD3/GVWuthrWcTrIbiFF8tDi8d.', NULL, NULL, NULL, NULL, '2023-12-20 02:42:40', '2023-12-20 02:42:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, NULL, 'nadiatolede@me.com', 'xluyKLEzJVVvNqeY', NULL, NULL, '$2y$10$ZyZAGWCK5vrO.zgxFD7YcuHcCwJgnrQ6QJnSNmY0mllNmnCeFIKl.', NULL, NULL, NULL, NULL, '2023-12-20 03:16:53', '2023-12-20 03:16:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, NULL, 'pajohnso@ncsu.edu', 'mINeVjVTVAJ', NULL, NULL, '$2y$10$mMC8JMtyb.T2HMleF/8jx.9O1ItvMZWEBrvFnoYXzJqIF.JXzZeOi', NULL, NULL, NULL, NULL, '2023-12-20 04:14:59', '2023-12-20 04:14:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, NULL, 'cjohnson@gbssllc.com', 'JEPaaeiWXXy', NULL, NULL, '$2y$10$8R8MT1ZUmhVBNmUYhFNjguTdN2.SyQbjeVMkDhWfaVT81YtXXXTxq', NULL, NULL, NULL, NULL, '2023-12-20 04:46:31', '2023-12-20 04:46:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, NULL, 'btuckerheatingandair@gmail.com', 'YnCmrNEiNsCfROA', NULL, NULL, '$2y$10$zUDzNCfNxj2tudGyZG6v0OYs6cLlusN9JtNK7TeCk..eDtUt1OQ32', NULL, NULL, NULL, NULL, '2023-12-20 05:41:27', '2023-12-20 05:41:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, NULL, 'e.30@hotmail.fr', 'nvUrczRrDaiU', NULL, NULL, '$2y$10$G1QVnVYqfsxZMs3M3zFzA.WqM4CTEwZFiG/dcKzVeNB7aHSRnN7eO', NULL, NULL, NULL, NULL, '2023-12-20 23:09:57', '2023-12-20 23:09:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, NULL, 'AjbsEY.bqhcjwm@virilia.life', 'AjbsEY.bqhcjwm', NULL, NULL, '$2y$10$/PkqajxJVeRuqUdbnPdnAO8v24UwSWXcLF2NvBQK6E4tYa37UDsQm', NULL, NULL, NULL, NULL, '2023-12-21 23:17:32', '2023-12-21 23:17:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, NULL, 'laramespence@gmail.com', 'laramespence', NULL, NULL, '$2y$10$KVKx5XFeBTbbmwIntkseae.ElDgxW6wd/3mP7K3n3/E9T/n8QkQ5.', NULL, NULL, NULL, NULL, '2023-12-21 23:19:43', '2023-12-21 23:19:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, NULL, 'ifuentes@cfhgroup.com', 'ifuentes', NULL, NULL, '$2y$10$3a8DpzHNv/SoEWaoN2hAFe5VrBvAe0eeWCCkZmIxOAFLkGQzmRb1q', NULL, NULL, NULL, NULL, '2023-12-22 02:39:51', '2023-12-22 02:39:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, NULL, 'tacel75@gmail.com', 'tacel75', NULL, NULL, '$2y$10$edv394gDF7zjSbjdMA9E/u1uzjNI7zd9cDuNAYHGWuFk0Pu.6ZrD2', NULL, NULL, NULL, NULL, '2023-12-22 20:51:07', '2023-12-22 20:51:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, NULL, 'barney@btuckerhvac.com', 'barney', NULL, NULL, '$2y$10$tGbTzbhAsRatp.YY99LpP.Bce3qoO4r5fYBgoiZa44w64MqLTlG4a', NULL, NULL, NULL, NULL, '2023-12-23 00:22:40', '2023-12-23 00:22:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, NULL, 'raedzuhair@yahoo.com', 'raedzuhair', NULL, NULL, '$2y$10$XdyevOt.2gMpr29Yf1hMiePt6FaBnGcuJ7jzLIDfR8PIrBGqyUWD2', NULL, NULL, NULL, NULL, '2023-12-23 02:54:33', '2023-12-23 02:54:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_otps`
--

CREATE TABLE `user_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_otps`
--

INSERT INTO `user_otps` (`id`, `user_id`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 1, '524414', '2023-02-23 02:08:54', '2023-02-23 02:01:41', '2023-02-23 02:08:54'),
(2, 1, '316476', '2023-02-23 02:15:18', '2023-02-23 02:14:19', '2023-02-23 02:15:18'),
(3, 1, '158875', '2023-02-23 02:26:58', '2023-02-23 02:16:58', '2023-02-23 02:16:58'),
(4, 1, '191055', '2023-02-23 02:56:48', '2023-02-23 02:46:48', '2023-02-23 02:46:48'),
(5, 1, '967096', '2023-02-23 03:07:30', '2023-02-23 02:57:30', '2023-02-23 02:57:30'),
(6, 17, '340317', '2023-02-25 00:02:33', '2023-02-25 00:01:27', '2023-02-25 00:02:33'),
(7, 17, '948793', '2023-02-25 00:20:08', '2023-02-25 00:19:41', '2023-02-25 00:20:08'),
(8, 17, '250167', '2023-02-25 00:26:26', '2023-02-25 00:25:43', '2023-02-25 00:26:26'),
(9, 17, '308561', '2023-02-25 01:44:37', '2023-02-25 01:43:47', '2023-02-25 01:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primary_key` varchar(255) NOT NULL,
  `secondary_key` varchar(255) DEFAULT NULL,
  `score` bigint(20) UNSIGNED NOT NULL,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`list`)),
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workingjobseekers`
--

CREATE TABLE `workingjobseekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `Working` varchar(255) DEFAULT NULL,
  `Segment` varchar(255) DEFAULT NULL,
  `available_Start_Date` varchar(255) DEFAULT NULL,
  `Experienced` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `Cover_Letter` varchar(255) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Schedule` varchar(255) DEFAULT NULL,
  `no_of_openingjob` varchar(255) DEFAULT NULL,
  `minsalary` int(11) DEFAULT NULL,
  `maxsalary` int(11) DEFAULT NULL,
  `benifit` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `availableresume` varchar(255) DEFAULT NULL,
  `Posted_By` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workingjobseekers`
--

INSERT INTO `workingjobseekers` (`id`, `user_id`, `Working`, `Segment`, `available_Start_Date`, `Experienced`, `resume`, `Cover_Letter`, `Salary`, `Schedule`, `no_of_openingjob`, `minsalary`, `maxsalary`, `benifit`, `description`, `availableresume`, `Posted_By`, `created_at`, `updated_at`) VALUES
(1, '45', 'Experience', 'option2', '2023-03-16', 'Yes', '1680086202.png', '1680086202.png', 45456, 'Evening', 'dfgfd', 4254, 4545, 'vfgxcf', 'bvccvbcv', 'Yes', NULL, '2023-03-29 17:33:54', '2023-03-29 17:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `_email_stores`
--

CREATE TABLE `_email_stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_qualifications`
--

CREATE TABLE `_qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `Stream` varchar(255) DEFAULT NULL,
  `University` varchar(255) DEFAULT NULL,
  `Exprienceoffline` varchar(255) DEFAULT NULL,
  `Exprienceonline` varchar(255) DEFAULT NULL,
  `Specialachievements` varchar(255) DEFAULT NULL,
  `Anyotherdetails` varchar(255) DEFAULT NULL,
  `AboutProject` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candiate_models`
--
ALTER TABLE `candiate_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbots`
--
ALTER TABLE `chatbots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationaldetailjobseeks`
--
ALTER TABLE `educationaldetailjobseeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_stores`
--
ALTER TABLE `email_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enewjobs`
--
ALTER TABLE `enewjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eposts`
--
ALTER TABLE `eposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eprofiles`
--
ALTER TABLE `eprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feel_frees`
--
ALTER TABLE `feel_frees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finels`
--
ALTER TABLE `finels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globleassignments`
--
ALTER TABLE `globleassignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `googlemaps`
--
ALTER TABLE `googlemaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobshikharprofiles`
--
ALTER TABLE `jobshikharprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkedstudents`
--
ALTER TABLE `linkedstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linked_tutors`
--
ALTER TABLE `linked_tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkings`
--
ALTER TABLE `linkings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managers_email_unique` (`email`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persanal_infos`
--
ALTER TABLE `persanal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinfos`
--
ALTER TABLE `personalinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilejobseekers`
--
ALTER TABLE `profilejobseekers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_pics`
--
ALTER TABLE `profile_pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentcheckeds`
--
ALTER TABLE `recentcheckeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recodes`
--
ALTER TABLE `recodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savejobs`
--
ALTER TABLE `savejobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savetutions`
--
ALTER TABLE `savetutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savetutors`
--
ALTER TABLE `savetutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_mails`
--
ALTER TABLE `send_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solve_questions`
--
ALTER TABLE `solve_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srequirements`
--
ALTER TABLE `srequirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_user_details`
--
ALTER TABLE `submit_user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_calculations`
--
ALTER TABLE `time_calculations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `user_otps`
--
ALTER TABLE `user_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visits_primary_key_secondary_key_unique` (`primary_key`,`secondary_key`);

--
-- Indexes for table `workingjobseekers`
--
ALTER TABLE `workingjobseekers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_email_stores`
--
ALTER TABLE `_email_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_qualifications`
--
ALTER TABLE `_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `candiate_models`
--
ALTER TABLE `candiate_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chatbots`
--
ALTER TABLE `chatbots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `educationaldetailjobseeks`
--
ALTER TABLE `educationaldetailjobseeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_stores`
--
ALTER TABLE `email_stores`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `enewjobs`
--
ALTER TABLE `enewjobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `eposts`
--
ALTER TABLE `eposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eprofiles`
--
ALTER TABLE `eprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feel_frees`
--
ALTER TABLE `feel_frees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `finels`
--
ALTER TABLE `finels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `globleassignments`
--
ALTER TABLE `globleassignments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `googlemaps`
--
ALTER TABLE `googlemaps`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobshikharprofiles`
--
ALTER TABLE `jobshikharprofiles`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `linkedstudents`
--
ALTER TABLE `linkedstudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linked_tutors`
--
ALTER TABLE `linked_tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `linkings`
--
ALTER TABLE `linkings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `persanal_infos`
--
ALTER TABLE `persanal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personalinfos`
--
ALTER TABLE `personalinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profilejobseekers`
--
ALTER TABLE `profilejobseekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `profile_pics`
--
ALTER TABLE `profile_pics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `recentcheckeds`
--
ALTER TABLE `recentcheckeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recodes`
--
ALTER TABLE `recodes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savejobs`
--
ALTER TABLE `savejobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `savetutions`
--
ALTER TABLE `savetutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `savetutors`
--
ALTER TABLE `savetutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_mails`
--
ALTER TABLE `send_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solve_questions`
--
ALTER TABLE `solve_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `srequirements`
--
ALTER TABLE `srequirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `submit_user_details`
--
ALTER TABLE `submit_user_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `time_calculations`
--
ALTER TABLE `time_calculations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `user_otps`
--
ALTER TABLE `user_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workingjobseekers`
--
ALTER TABLE `workingjobseekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `_email_stores`
--
ALTER TABLE `_email_stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_qualifications`
--
ALTER TABLE `_qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
