-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 09:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iess_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_recorded_lectures`
--

CREATE TABLE `campus_teacher_recorded_lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(255) DEFAULT NULL,
  `campus_id` int(255) DEFAULT NULL,
  `teacher_id` int(255) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
  `lecture_title` text DEFAULT NULL,
  `lecture_link` text DEFAULT NULL,
  `lecture_upld_dte` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_teacher_recorded_lectures`
--

INSERT INTO `campus_teacher_recorded_lectures` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `section_name`, `subject_name`, `lecture_title`, `lecture_link`, `lecture_upld_dte`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'One', 'B', 'Urdu', 'difference between bootstrap 4 and 5', 'https://www.youtube.com/watch?v=0-fgMPcbUUQ', '2023-07-06', '2023-07-06 04:54:32', '2023-07-06 04:54:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus_teacher_recorded_lectures`
--
ALTER TABLE `campus_teacher_recorded_lectures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus_teacher_recorded_lectures`
--
ALTER TABLE `campus_teacher_recorded_lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
