-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 06:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `attempt` int(11) DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `subject_id`, `date`, `time`, `attempt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Unit Test 1', 1, '2023-03-20', '10', 1, 0, '2023-03-20 02:03:48', '2023-03-20 02:03:48'),
(2, 'Unit Test 1', 2, '2023-03-20', '10', 1, 0, '2023-03-20 02:05:57', '2023-03-20 02:05:57'),
(3, 'Unit Test 1', 3, '2023-03-22', '20', 1, 0, '2023-03-20 02:06:29', '2023-03-20 22:45:50'),
(4, 'Unit Test 1', 4, '2023-03-21', '25', 2, 0, '2023-03-20 02:08:20', '2023-03-20 23:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `exam_assign`
--

CREATE TABLE `exam_assign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_assign`
--

INSERT INTO `exam_assign` (`id`, `exam_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(2, 1, 2, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(3, 1, 3, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(4, 1, 4, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(5, 1, 5, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(6, 1, 6, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(7, 1, 7, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(8, 1, 8, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(9, 1, 9, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(10, 1, 10, '2023-03-20 02:05:00', '2023-03-20 02:05:00'),
(11, 2, 16, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(12, 2, 17, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(13, 2, 18, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(14, 2, 19, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(15, 2, 20, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(16, 2, 21, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(17, 2, 22, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(18, 2, 23, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(19, 2, 24, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(20, 2, 26, '2023-03-20 02:06:55', '2023-03-20 02:06:55'),
(21, 3, 31, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(22, 3, 32, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(23, 3, 33, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(24, 3, 34, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(25, 3, 35, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(26, 3, 36, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(27, 3, 37, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(28, 3, 38, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(29, 3, 39, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(30, 3, 40, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(31, 3, 41, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(32, 3, 42, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(33, 3, 43, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(34, 3, 44, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(35, 3, 45, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(36, 3, 46, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(37, 3, 47, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(38, 3, 48, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(39, 3, 49, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(40, 3, 50, '2023-03-20 02:07:34', '2023-03-20 02:07:34'),
(41, 4, 51, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(42, 4, 52, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(43, 4, 53, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(44, 4, 54, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(45, 4, 55, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(46, 4, 56, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(47, 4, 57, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(48, 4, 58, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(49, 4, 59, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(50, 4, 60, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(51, 4, 61, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(52, 4, 62, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(53, 4, 63, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(54, 4, 64, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(55, 4, 65, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(56, 4, 66, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(57, 4, 67, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(58, 4, 68, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(59, 4, 69, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(60, 4, 70, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(61, 4, 71, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(62, 4, 72, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(63, 4, 73, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(64, 4, 74, '2023-03-20 02:08:36', '2023-03-20 02:08:36'),
(65, 4, 75, '2023-03-20 02:08:36', '2023-03-20 02:08:36');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_20_092314_create_subjects_table', 1),
(7, '2023_02_20_100411_create_exams_table', 1),
(8, '2023_02_20_124314_create_questions_table', 1),
(9, '2023_02_21_071533_create_exam_assign_table', 1),
(10, '2023_02_25_112934_create_results_table', 1),
(11, '2023_03_01_142244_create_subscribers_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `option_a` mediumtext NOT NULL,
  `option_b` mediumtext NOT NULL,
  `option_c` mediumtext NOT NULL,
  `option_d` mediumtext NOT NULL,
  `answer` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is the name of the system which deals with the running of the actual computer and not with the programming problems?', 'source program', 'object program', 'systems program', 'operating system', 3, 0, '2023-03-19 22:57:55', '2023-03-19 22:57:55'),
(2, 1, 'Memory management is', 'critical for even the simplest operating systems', 'not used on multiprogramming systems', 'replaced with virtual memory on current systems', 'not used in modern operating system', 3, 0, '2023-03-19 22:59:12', '2023-03-19 22:59:12'),
(3, 1, 'The process of transferring data intended for a peripheral device into a disk (or intermediate store) so that it can be transferred to peripheral, at a more convenient time or in bulk, is known as', 'virtual programming', 'caching', 'spooling', 'multiprogramming', 3, 0, '2023-03-19 23:00:03', '2023-03-19 23:00:03'),
(4, 1, 'Process is', 'a job in secondary memory', 'a program in execution', 'contents of main memory', 'program in High level language kept on disk', 2, 0, '2023-03-19 23:00:54', '2023-03-19 23:00:54'),
(5, 1, 'Round robin scheduling is essentially the preemptive version of', 'FILO', 'FCFS', 'FIFO', 'Longest time first', 3, 0, '2023-03-19 23:01:44', '2023-03-19 23:01:44'),
(6, 1, 'The operating system of a computer serves as a software interface between the user and', 'screen', 'memory', 'peripheral', 'hardware', 4, 0, '2023-03-19 23:02:57', '2023-03-19 23:02:57'),
(7, 1, 'The term operating system means', 'the way a floppy disk drive operates', 'conversion of high level language into machine code', 'the way a computer operator works', 'a set of programs which controls computer working', 4, 0, '2023-03-19 23:04:09', '2023-03-19 23:04:09'),
(8, 1, 'What is the name given to the organised collection of software that controls the overall operation of a computer?', 'operating system', 'controlling system', 'peripheral system', 'working system', 1, 0, '2023-03-19 23:04:59', '2023-03-19 23:04:59'),
(9, 1, 'Remote computing services involve the use of timesharing and', 'realtime processing', 'batch processing', 'interactive processing', 'multiprocessing', 2, 0, '2023-03-19 23:06:05', '2023-03-19 23:06:05'),
(10, 1, 'Daisy chain is a device for', 'interconnecting a number of devices to a number of controllers', 'connecting a number of devices to a controller', 'connecting a number of controllers to a device', 'all of these', 2, 0, '2023-03-19 23:07:43', '2023-03-19 23:07:43'),
(11, 1, 'Data encryption', 'is not necessary, since data cannot be interrupted', 'is mostly used by public networks', 'cannot be used by private installations', 'is mostly used by financial networks', 4, 0, '2023-03-19 23:09:16', '2023-03-19 23:09:16'),
(12, 1, 'Which of the following capabilities is required for a system program to execute more than one program at a time?', 'multitasking', 'virtual memory', 'compiling', 'word processing', 1, 0, '2023-03-19 23:10:52', '2023-03-19 23:10:52'),
(13, 1, 'Paging', 'is a method of memory allocation by which the program is subdivided into equal portions, or pages and core is subdivided into equal portions or blocks', 'allows multiple programs to reside in separate areas of core at the time', 'is a method of allocating processor time', 'consists of those addresses that may be generated by a processor during execution of a computation', 1, 0, '2023-03-19 23:11:45', '2023-03-19 23:11:45'),
(14, 1, 'Multiprogramming', 'is a method of allocating processor time', 'consists of those addresses that may be generated by a processor during execution of a computation', 'allows multiple programs to reside in separate areas of core at the time', 'is a method of memory allocation by which the programs is subdivided into equal portions, or pages and core is subdivided into equal portions or blocks', 3, 0, '2023-03-19 23:13:09', '2023-03-19 23:13:09'),
(15, 1, 'What is the name given to the process of initialising a microcomputer with its operating system?', 'boot recording', 'warm booting', 'booting', 'cold booting', 3, 0, '2023-03-19 23:15:00', '2023-03-19 23:15:00'),
(16, 2, 'Which of the following is the world’s first cellular system to specify digital modulation and network level architecture?', 'GSM', 'AMPS', 'CDMA', 'IS-54', 1, 0, '2023-03-19 23:17:49', '2023-03-19 23:17:49'),
(17, 2, 'Previously in 1980s, GSM stands for ____________', 'Global system for mobile', 'Groupe special mobile', 'Global special mobile', 'Groupe system mobile', 2, 0, '2023-03-19 23:22:33', '2023-03-19 23:22:33'),
(18, 2, 'Who sets the standards of GSM?', 'ITU', 'AT & T', 'ETSI', 'USDC', 3, 0, '2023-03-19 23:23:24', '2023-03-19 23:23:24'),
(19, 2, 'Which of the following does not come under the teleservices of GSM?', 'Standard mobile telephony', 'Mobile originated traffic', 'Base originated traffic', 'Packet switched traffic', 4, 0, '2023-03-19 23:24:24', '2023-03-19 23:24:24'),
(20, 2, 'Which of the following comes under supplementary ISDN services?', 'Emergency calling', 'Packet switched protocols', 'Call diversion', 'Standard mobile telephony', 3, 0, '2023-03-19 23:26:25', '2023-03-19 23:26:25'),
(21, 2, 'Which of the following memory device stores information such as subscriber’s identification number in GSM?', 'Register', 'Flip flop', 'SIM', 'SMS', 3, 0, '2023-03-19 23:27:08', '2023-03-19 23:27:08'),
(22, 2, 'Which of the following feature makes impossible to eavesdrop on GSM radio transmission?', 'SIM', 'On the air privacy', 'SMS', 'Packet switched traffic', 2, 0, '2023-03-19 23:30:30', '2023-03-19 23:30:30'),
(23, 2, 'Which of the following does not come under subsystem of GSM architecture?', 'BSS (Base Station Subsystem)', 'NSS  (Network and Switching Subsystem)', 'OSS (Operation Support Subsystem)', 'Channel', 4, 0, '2023-03-19 23:33:58', '2023-03-19 23:33:58'),
(24, 2, 'Which of the following multiple access techniques are used by second generation cellular systems?', 'FDMA/FDD and TDMA/FDD', 'TDMA/FDD and CDMA/FDD', 'FDMA/FDD and CDMA/FDD', 'FDMA/FDD only', 2, 0, '2023-03-19 23:35:24', '2023-03-19 23:35:24'),
(25, 2, 'Which of the following is not a characteristic of 3G network?', 'Communication over VoIP (Voice over internet Protocol )', 'Unparalleled network capacity', 'Multi-megabit Internet access', 'LTE (Long term Evolution)   based network', 4, 0, '2023-03-19 23:38:34', '2023-03-19 23:38:34'),
(26, 2, 'Wi-Fi stands for-', 'Wireless Fidelity', 'Wireless LAN', 'Wireless FLAN', 'None of the mentioned', 1, 0, '2023-03-19 23:40:28', '2023-03-19 23:40:28'),
(27, 2, 'What is the term used by ITU for a set of global standards of 3G systems?', 'IMT 2000', 'GSM', 'CDMA', 'EDGE', 1, 0, '2023-03-19 23:41:56', '2023-03-19 23:41:56'),
(28, 2, '___________ manages the switching function in GSM.', 'BSS', 'NSS', 'OSS', 'MSC', 2, 0, '2023-03-19 23:42:49', '2023-03-19 23:42:49'),
(29, 2, 'Which one is not a TDMA standard of second generation networks?', 'GSM (Global System Mobile)', 'IS-136  (Interim Standard 136)', 'AMPS', 'PDC (Pacific Digital Cellular)', 3, 0, '2023-03-19 23:45:52', '2023-03-19 23:45:52'),
(30, 2, 'Which type of cell provides the best level of service for average subscribers?', 'Acceptance cell', 'Barred cell', 'Reserved cell', 'Suitable cell', 4, 0, '2023-03-19 23:46:46', '2023-03-19 23:46:46'),
(31, 3, 'What are Requirements refined and analyzed to assess their clarity, completeness, and_____', 'Consistency', 'Correctness', 'Concurrency', 'None of these', 1, 0, '2023-03-19 23:49:44', '2023-03-19 23:49:44'),
(32, 3, 'A software project that meets all the given objectives is a success of _________.', 'Project fundamental purpose', 'Project quality', 'Project requirement', 'Project management myth', 4, 0, '2023-03-19 23:50:54', '2023-03-19 23:50:54'),
(33, 3, '___________ is not an effective software project management focus.', 'people', 'product', 'process', 'popularity', 4, 0, '2023-03-19 23:51:39', '2023-03-19 23:51:39'),
(34, 3, 'What is the abbreviation of PM-CMM…', 'product management capability maturity model', 'process management capability maturity model', 'people management capability maturity model', 'project management capability maturity model', 3, 0, '2023-03-19 23:52:26', '2023-03-19 23:52:26'),
(35, 3, '_________ is not a project manager’s activity.', 'project design', 'project management', 'project planning', 'project control', 1, 0, '2023-03-19 23:53:19', '2023-03-19 23:53:19'),
(36, 3, 'The __________ is not an approach to software cost estimation?', 'Analytical', 'Critical', 'Empirical', 'Heuristic', 2, 0, '2023-03-19 23:54:38', '2023-03-19 23:54:38'),
(37, 3, 'Which one of the following is not considered as a risk in project management?', 'Staff turnover', 'Testing', 'Product competition', 'Specification delays', 1, 0, '2023-03-19 23:55:26', '2023-03-19 23:55:26'),
(38, 3, 'What is the process each manager follows during the life of a project is known as', 'Project Management', 'Project Management Life Cycle', 'Manager life cycle', 'All of the mentioned', 2, 0, '2023-03-19 23:57:08', '2023-03-19 23:57:08'),
(39, 3, 'Quality planning is the process of developing a quality plan for_________.', 'customers', 'project manager', 'team', 'project', 4, 0, '2023-03-19 23:57:53', '2023-03-19 23:57:53'),
(40, 3, 'Which of the following is the sub-process of process improvement?', 'Process introduction', 'De-processification', 'Process analysis', 'Process distribution', 3, 0, '2023-03-19 23:58:39', '2023-03-19 23:58:39'),
(41, 3, 'Which one the following is an internal software quality from given below?', 'reusability', 'reliability', 'scalability', 'usability', 1, 0, '2023-03-19 23:59:24', '2023-03-19 23:59:24'),
(42, 3, 'What is the symbolic representation of RUP __________________', 'Rational Unified Process', 'Rational Unified Proces', 'Rational Unified Program', 'National Unified Process', 1, 0, '2023-03-20 00:01:40', '2023-03-20 00:01:40'),
(43, 3, 'What limits the options of the project team?', 'Constraints', 'Assumptions', 'Technology', 'Deliverables', 1, 0, '2023-03-20 00:02:58', '2023-03-20 00:02:58'),
(44, 3, 'The work breakdown that covers the acquisition of a specific defense material item and is related to contractual effort, is called______', 'Contract WBS', 'Contract Program WBS', 'Program WBS', 'None of these', 3, 0, '2023-03-20 00:03:40', '2023-03-20 00:03:40'),
(45, 3, 'Work Breakdown Structure how many types…', 'Three', 'Two', 'Four', 'None of these', 2, 0, '2023-03-20 00:04:23', '2023-03-20 00:04:23'),
(46, 3, 'Requirements Management is Important? because of the changes…', 'in technology', 'to the environment', 'in customer’s expectations', 'in all of the mentioned.', 2, 0, '2023-03-20 00:07:02', '2023-03-20 00:07:02'),
(47, 3, 'The following costs are not part of the total effort cost______', 'Costs of lunch time food', 'Costs of providing heating', 'Costs of networking', 'Costs of support', 1, 0, '2023-03-20 00:07:56', '2023-03-20 00:07:56'),
(48, 3, 'Which of the following is related to the overall functionality of the delivered software?', 'Product-related metrics', 'Function-related metrics', 'Size-related metrics', 'None of the mentioned', 2, 0, '2023-03-20 00:08:39', '2023-03-20 00:08:39'),
(49, 3, 'Whenever evaluating current problems and desired information the analyst begins to..', 'Model', 'Synthesize solutions', 'Specification', 'None of these', 2, 0, '2023-03-20 00:09:17', '2023-03-20 00:09:17'),
(50, 3, 'What type of reviews conducted at each of this phases_____', 'Analysis', 'Design', 'Coding', 'All of given', 4, 0, '2023-03-20 00:10:15', '2023-03-20 00:10:15'),
(51, 4, 'Which method returns the average value of a given key ?', 'average()', 'avg()', 'median()', 'avg_val()', 2, 0, '2023-03-20 00:42:59', '2023-03-20 00:42:59'),
(52, 4, 'Bootstrap directory in Laravel is used to', 'Initialize a Laraval application', 'Call laravel library functions', 'Load the configuration files', 'Load laravel classes and models', 1, 0, '2023-03-20 00:43:48', '2023-03-20 00:43:48'),
(53, 4, 'Which artisan command is used to remove the compiled class file.', 'clear-compiled', 'clear-compiled', 'compiled:clear', 'clear:all', 1, 0, '2023-03-20 00:44:33', '2023-03-20 00:44:33'),
(54, 4, 'Which method breaks the collection into multiple, smaller collections of a given size', 'split()', 'chunk()', 'explode()', 'break()', 1, 0, '2023-03-20 00:45:18', '2023-03-20 00:45:18'),
(55, 4, 'Artisan command to flush the application cache:', 'cache:flush', 'cache:clear', 'cache:forget', 'cache:remove', 2, 0, '2023-03-20 00:45:56', '2023-03-20 00:45:56'),
(56, 4, 'The vendor directory contains', 'Laravel Framework code', 'Assets', 'Third-party code', 'Configuration files', 3, 0, '2023-03-20 00:46:31', '2023-03-20 00:46:31'),
(57, 4, 'Where is the routing file located in Laravel ?', 'app/Http/', 'routes/', 'urls/', 'vendors/', 2, 0, '2023-03-20 01:36:30', '2023-03-20 01:36:30'),
(58, 4, 'View files in Laravel end in', '.blade.php', '.php', '.vue', '.blade', 1, 0, '2023-03-20 01:37:29', '2023-03-20 01:37:29'),
(59, 4, 'Which of following command is used to create a symbolic link from \"public/storage\" directory to \"storage/app/public\".', 'storage:link', 'link:public', 'link:storage', 'storage:link public/storage', 1, 0, '2023-03-20 01:38:31', '2023-03-20 01:38:31'),
(60, 4, 'Which of following methods are used in database migrations classes?', 'execute() and rollback()', 'up() and down()', 'run() and delete()', 'save() and update()', 2, 0, '2023-03-20 01:39:21', '2023-03-20 01:39:21'),
(61, 4, 'For what do the .env is used?', 'For setting environment variables', 'For running cron jobs', 'For tracking vendors', 'None of These', 1, 0, '2023-03-20 01:40:10', '2023-03-20 01:40:10'),
(62, 4, 'Which directory contain “robot.txt” file ?', 'app', 'public', 'config', 'storage', 2, 0, '2023-03-20 01:41:00', '2023-03-20 01:41:00'),
(63, 4, 'Interpolation of variable in laravel done using', 'compact', '{{}}', 'helpers', 'output', 2, 0, '2023-03-20 01:43:58', '2023-03-20 01:43:58'),
(64, 4, 'What is the HTTP Status Code for your website. When it is down for maintenance.', '501', '200', '400', '503', 4, 0, '2023-03-20 01:44:45', '2023-03-20 01:44:45'),
(65, 4, '__() in laravel used for', 'Printing value', 'For string translation', 'None of these', 'compact', 2, 0, '2023-03-20 01:48:39', '2023-03-20 01:48:39'),
(66, 4, 'Where do we need to set database connection in Laravel?', 'config.php', 'setting.php', 'In seed files', '.ENV file', 4, 0, '2023-03-20 01:49:20', '2023-03-20 01:49:20'),
(67, 4, 'What is the minimum PHP version required to install Laravel 5.3?', '7.1', '5.6.4', '5.3.2', '5.4.3', 2, 0, '2023-03-20 01:50:12', '2023-03-20 01:50:12'),
(68, 4, 'How to set a session data in Laravel?', '$request->db->session(\'key\', \'value\');', '$request->session()->set(\'key\', \'value\');', '$request->session()->put(\'key\', \'value\');', 'None of These', 3, 0, '2023-03-20 01:52:04', '2023-03-20 01:52:04'),
(69, 4, 'Who developed Laravel?', 'Rasmus Lerdorf', 'Taylor Otwell', 'James Gosling', 'Guido van Rossum', 2, 0, '2023-03-20 01:53:09', '2023-03-20 01:53:09'),
(70, 4, 'How to create a controller in laravel by cmd?', 'php artisan make: generate controller contoller_name', 'php artisan make:controller generate', 'php artisan make:controller --plain', 'php artisan make:request controller_name create', 3, 0, '2023-03-20 01:54:03', '2023-03-20 01:54:03'),
(71, 4, 'What is the purpose of the app/Providers directory in a Laravel project?', 'It stores views for the application', 'It stores controllers for the application', 'It stores routes for the application', 'It stores classes that provide various services to the rest of the application', 4, 0, '2023-03-20 01:55:14', '2023-03-20 01:55:14'),
(72, 4, 'What is the purpose of the .env file in a Laravel project?', 'It stores views for the application', 'It stores routes for the application', 'It stores environment-specific configuration for the application', 'None of the above', 3, 0, '2023-03-20 01:55:49', '2023-03-20 01:55:49'),
(73, 4, 'Which of the following is NOT a Laravel service container?', '$db', '$app', '$cache', '$request', 4, 0, '2023-03-20 01:56:26', '2023-03-20 01:56:26'),
(74, 4, 'How can you define a new route in a Laravel application?', 'By adding a new route to the routes/web.php file', 'By adding a new route to the app/Routes/web.php file', 'By adding a new route to the app/Routes/web.php file', 'By adding a new route to the app/Http/Controllers/Route.php file', 1, 0, '2023-03-20 01:57:44', '2023-03-20 01:57:44'),
(75, 4, 'How can you display a view in a Laravel application?', 'By using the view() helper function', 'By using the render() method of the View class', 'By using the display() method of the View class', 'Both A and B options are right', 4, 0, '2023-03-20 01:58:37', '2023-03-20 01:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `marks` varchar(255) NOT NULL DEFAULT 'null',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `exam_id`, `marks`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '9', 2, '2023-03-20 03:20:11', '2023-03-20 03:20:11'),
(2, 2, 4, '6', 2, '2023-03-20 23:20:48', '2023-03-20 23:20:48'),
(3, 2, 4, '1', 2, '2023-03-20 23:35:00', '2023-03-20 23:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Advance Operating System', 'CSUT121', 0, '2023-03-19 21:12:35', '2023-03-19 21:12:35'),
(2, 'Mobile Technologies', 'CSUT122', 0, '2023-03-19 21:14:50', '2023-03-19 21:14:50'),
(3, 'Software Project Management', 'CSUT123', 0, '2023-03-19 21:18:10', '2023-03-19 21:18:10'),
(4, 'Project  Related Assignment', 'CSDP124A', 0, '2023-03-19 21:24:26', '2023-03-19 21:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'cmdsofts@gmail.com', '2023-03-20 23:26:57', '2023-03-20 23:26:57'),
(2, 'ashutoshpuri2000@gmail.com', '2023-03-20 23:27:03', '2023-03-20 23:27:03'),
(3, 'servercmd2000@gmail.com', '2023-03-20 23:27:09', '2023-03-20 23:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-admin ,0-user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'cmdsofts@gmail.com', 1, '2023-03-19 10:09:51', '$2y$10$h0X38gabm03mGQWA8uenwOVXGiY6mLVum2vPuTN/riss5UfzQ1/gG', NULL, '2023-03-19 04:39:13', '2023-03-19 04:39:13'),
(2, 'Ashutosh', 'ashutoshpuri2000@gmail.com', 0, '2023-03-21 04:49:10', '$2y$10$PBa1uq9pPJjSJiJcP2DFJ.iujoPqLsT3t4yjsjP2l.GMSZ2n4q4cq', NULL, '2023-03-20 02:35:56', '2023-03-20 02:35:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `exam_assign`
--
ALTER TABLE `exam_assign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_assign_exam_id_foreign` (`exam_id`),
  ADD KEY `exam_assign_question_id_foreign` (`question_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam_assign`
--
ALTER TABLE `exam_assign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_assign`
--
ALTER TABLE `exam_assign`
  ADD CONSTRAINT `exam_assign_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_assign_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
