-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 05:27 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `csection` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ctime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cid`, `cname`, `csection`, `ctime`, `created_at`, `updated_at`) VALUES
(1, 'D001', 'Advanced Programming in Web Technologies', 'A', '8-11', NULL, NULL),
(2, 'D002', 'Data Communication', 'B', '11-2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(16, '2020_05_03_082922_create_user_profiles', 2),
(17, '2020_05_11_222304_create_students_table', 3),
(18, '2020_05_12_113504_create_courses_table', 3),
(19, '2020_05_12_153759_create_notes_table', 3),
(20, '2020_05_12_172443_create_notices_table', 3),
(21, '2020_05_13_174848_update__notes_table', 3),
(22, '2020_05_13_220923_update_notices_table', 3),
(23, '2020_05_13_223335_update_students_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ntitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cid` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `ntitle`, `nname`, `created_at`, `updated_at`, `cid`) VALUES
(1, 'Note 1', 'Lecture Details', NULL, NULL, '1'),
(2, 'note 2', 'Advanced Topics', NULL, NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noticename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cid` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `noticename`, `created_at`, `updated_at`, `cid`) VALUES
(1, 'Next Class', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdepartment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scgpa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ssection` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credetcomplete` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semail_verified_at` timestamp NULL DEFAULT NULL,
  `cid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sid`, `sname`, `sdepartment`, `scgpa`, `ssection`, `credetcomplete`, `semail`, `semail_verified_at`, `cid`, `marks`, `grade`) VALUES
(1, 'S34048', 'Ifti Nur', 'CSE', '3.5', 'A', '101', 'ifti@gmail.com', NULL, '1', '85', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Full_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Full_Name`, `user_id`, `user_id_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Minhajul Islam', 'A34048', NULL, '123456', 'admin', NULL, '2020-05-03 07:56:56', '2020-05-03 07:56:56'),
(2, 'Tahmid Mahtab', 'S33980', NULL, '111222', 'student', NULL, '2020-05-03 07:56:56', '2020-05-03 07:56:56'),
(3, 'Habibul Amin', 'T34044', NULL, '1572', 'teacher', NULL, '2020-05-03 07:56:56', '2020-05-03 07:56:56'),
(22, 'Asibul Islam Asib', 'S1732323', NULL, '123123', 'student', NULL, '2020-05-03 12:47:21', '2020-05-03 12:47:21'),
(24, 'Polok', 'S34012', NULL, '123234', 'student', NULL, '2020-05-17 23:47:40', '2020-05-17 23:47:40'),
(26, 'Hasib', 'A24048', NULL, '654321', 'teacher', NULL, '2020-05-17 23:52:54', '2020-05-17 23:52:54'),
(27, 'Maidul Islam', 'A14048', NULL, '123456', 'admin', NULL, '2020-05-17 23:53:35', '2020-05-18 00:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cgpa` double(4,2) DEFAULT NULL,
  `passing_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eduction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `email`, `phone`, `address`, `department`, `cgpa`, `passing_year`, `eduction`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'minhajislam_95@gmail.com', 2147483647, '385/A ,Nababimoor,Khilgaon', NULL, NULL, NULL, 'CSE', 1, '2020-05-03 10:33:47', '2020-05-03 10:33:47'),
(2, 'tahmid@gmail.com', 123421221, 'Mirpur,Dhaka', 'C.S.E', NULL, NULL, NULL, 2, '2020-05-03 10:33:48', '2020-05-03 10:33:48'),
(3, 'habib@gmail.com', 14243242, 'houseno', 'CSE', NULL, NULL, NULL, 3, '2020-05-03 10:33:48', '2020-05-03 10:33:48'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '2020-05-03 12:47:22', '2020-05-03 12:47:22'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2020-05-17 23:47:40', '2020-05-17 23:47:40'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2020-05-17 23:52:54', '2020-05-17 23:52:54'),
(7, 'maidulislam@gmail.com', 2147483647, 'Malibagh', NULL, NULL, NULL, 'CSE', 27, '2020-05-17 23:53:35', '2020-05-17 23:53:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_cid_unique` (`cid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_sid_unique` (`sid`),
  ADD UNIQUE KEY `students_semail_unique` (`semail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
