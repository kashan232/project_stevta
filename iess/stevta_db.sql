-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 09:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stevta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_name` text DEFAULT NULL,
  `campus_username` text DEFAULT NULL,
  `campus_address` text DEFAULT NULL,
  `campus_phone` text DEFAULT NULL,
  `campus_website` text DEFAULT NULL,
  `campus_email` text DEFAULT NULL,
  `campus_password` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campuses`
--

INSERT INTO `campuses` (`id`, `institute_id`, `campus_name`, `campus_username`, `campus_address`, `campus_phone`, `campus_website`, `campus_email`, `campus_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'campus hyderabad', 'campus-hyderabad1', 'hyderabad', '03173859647', 'not given', 'campushyd12@gmail.com', '123', '2023-08-25 05:35:51', '2023-08-25 05:35:51', NULL),
(2, 1, 'GCT', 'gct2', 'Hyderabad', '03023055373', 'not given', 'gct@info.com', '12345', '2024-01-15 04:37:10', '2024-01-15 05:08:56', '2024-01-15 05:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `campus_batches`
--

CREATE TABLE `campus_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `batch` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_batches`
--

INSERT INTO `campus_batches` (`id`, `institute_id`, `campus_id`, `batch`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2024-01-01 to 2025-01-01', '2024-01-11 02:23:28', '2024-01-11 02:23:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_billings`
--

CREATE TABLE `campus_billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `purpose_name` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_classes`
--

CREATE TABLE `campus_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_classes`
--

INSERT INTO `campus_classes` (`id`, `institute_id`, `campus_id`, `batch`, `class_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2024-01-01 to 2025-01-01', 'Web Design', '2024-01-11 02:25:11', '2024-01-11 02:25:11', NULL),
(2, 1, 1, '2024-01-01 to 2025-01-01', 'Web Developement', '2024-01-11 02:26:25', '2024-01-11 02:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_class_teachers`
--

CREATE TABLE `campus_class_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` varchar(225) DEFAULT NULL,
  `campus_id` varchar(225) DEFAULT NULL,
  `teacher_name` varchar(225) DEFAULT NULL,
  `class_name` varchar(225) DEFAULT NULL,
  `section_name` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_class_teachers`
--

INSERT INTO `campus_class_teachers` (`id`, `institute_id`, `campus_id`, `teacher_name`, `class_name`, `section_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Ali', 'class A', 'A', '2023-10-24 16:13:30', '2023-10-24 16:13:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_departments`
--

CREATE TABLE `campus_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text NOT NULL,
  `campus_id` text NOT NULL,
  `dept_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_departments`
--

INSERT INTO `campus_departments` (`id`, `institute_id`, `campus_id`, `dept_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Academic Departments:', '2023-11-04 02:52:41', '2023-11-04 02:52:41', NULL),
(2, '1', '1', 'Admissions Office', '2023-11-04 02:54:33', '2023-11-04 02:54:33', NULL),
(3, '1', '1', 'Registrar\'s Office:', '2023-11-04 02:54:39', '2023-11-04 02:54:39', NULL),
(4, '1', '1', 'Student Affairs Office:', '2023-11-04 02:54:45', '2023-11-04 02:54:45', NULL),
(5, '1', '1', 'Financial Aid Office', '2023-11-04 02:54:54', '2023-11-04 02:54:54', NULL),
(6, '1', '1', 'Human Resources Department', '2023-11-04 02:55:01', '2023-11-04 02:55:01', NULL),
(7, '1', '1', 'Finance Office', '2023-11-04 02:55:08', '2023-11-04 02:55:08', NULL),
(8, '1', '1', 'IT Department', '2023-11-04 02:55:14', '2023-11-04 02:55:14', NULL),
(9, '1', '1', 'Facilities Management', '2023-11-04 02:55:19', '2023-11-04 02:55:19', NULL),
(10, '1', '1', 'Library Services', '2023-11-04 02:55:26', '2023-11-04 02:55:26', NULL),
(11, '1', '1', 'Public Relations/Communications:', '2023-11-04 02:55:33', '2023-11-04 02:55:33', NULL),
(12, '1', '1', 'Research Centers:', '2023-11-04 02:55:40', '2023-11-04 02:55:40', NULL),
(13, '1', '1', 'Legal Affairs Office:', '2023-11-04 02:55:46', '2023-11-04 02:55:46', NULL),
(14, '1', '1', 'Environmental Health and Safety:', '2023-11-04 02:56:02', '2023-11-04 02:56:02', NULL),
(15, '1', '1', 'International Programs Office', '2023-11-04 02:56:08', '2023-11-04 02:56:08', NULL),
(16, '1', '1', 'Teacher', '2023-11-04 02:56:17', '2023-11-04 02:56:17', NULL),
(17, '1', '1', 'Research Centers:', '2023-11-04 02:56:31', '2023-11-04 02:56:31', NULL),
(18, '1', '1', 'testing', '2024-01-10 22:13:48', '2024-01-10 22:13:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_employees`
--

CREATE TABLE `campus_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text NOT NULL,
  `campus_id` text NOT NULL,
  `title_designation` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `nic` text DEFAULT NULL,
  `hire_date` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `bps` text DEFAULT NULL,
  `medical_allowance` text DEFAULT NULL,
  `fuel_allowance` text DEFAULT NULL,
  `house_allowance` text DEFAULT NULL,
  `appointment_letter_no` text DEFAULT NULL,
  `no_of_leaves` text DEFAULT NULL,
  `emergency_contact_name` text DEFAULT NULL,
  `emergency_contact_relation` text DEFAULT NULL,
  `emergency_contact_phone` text DEFAULT NULL,
  `account_name` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `employee_pic` text DEFAULT NULL,
  `front_nic_pic` text DEFAULT NULL,
  `back_nic_pic` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_employees`
--

INSERT INTO `campus_employees` (`id`, `institute_id`, `campus_id`, `title_designation`, `first_name`, `last_name`, `nic`, `hire_date`, `phone`, `email`, `password`, `address`, `department`, `salary`, `bps`, `medical_allowance`, `fuel_allowance`, `house_allowance`, `appointment_letter_no`, `no_of_leaves`, `emergency_contact_name`, `emergency_contact_relation`, `emergency_contact_phone`, `account_name`, `account_number`, `employee_pic`, `front_nic_pic`, `back_nic_pic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Teacher', 'Ali', 'Khan', '4130236550551', '2023-10-25', '03173859647', 'ali12@gmail.com', '123', 'hyderabad', 'Teacher', '15000', '12', '0', '0', '0', 'ali1', '2', 'Kashan', 'Friend', '03112328922', 'Ali Khan', '11223344', '', '', '', '2023-10-24 16:10:15', '2023-11-04 02:49:35', NULL),
(2, '1', '1', 'Teacher', 'Teacher 2', 'test', '20', '1989-11-14', '43', 'teacher2@gmail.com', '123', 'Aspernatur cum est i', 'Teacher', '18', '31', '29', '16', '96', 'teacher-22', '96', 'Cecilia George', 'Molestiae reiciendis', '+1 (103) 468-9453', 'Jordan Klein', '203', '', '', '', '2023-10-24 16:11:41', '2023-11-04 02:49:38', NULL),
(3, '1', '1', 'Teacher', 'Teacher 3', 'tech', '19', '2009-06-18', '74', 'teacher3@gmail.com', '123', 'Dolore laborum Tene', 'Teacher', '94', '45', '84', '69', '52', 'teacher-33', '57', 'Alexa Little', 'Dolor cum sequi labo', '+1 (937) 175-7783', 'Elvis England', '914', '', '', '', '2023-10-24 16:12:27', '2023-11-04 02:49:40', NULL),
(4, '1', '1', 'IT Director', 'Kashan', 'Shaikh', '41303-8883883-0', '2017-01-01', '031738333333', 'shaikhkashan@gmail.com', NULL, 'hyderabad', 'Academic Departments:', '200000', '12000', NULL, NULL, NULL, '04444', NULL, 'M.Sohail', 'Father', '0312222222', 'Kashan', '1234566446776', '', '', '', '2023-11-04 03:24:12', '2023-11-04 03:24:55', NULL),
(5, '1', '1', 'Teacher', 'Anas', 'Bowers', '41302222222', '2005-04-15', '84', 'hymoje@mailinator.com', NULL, 'Culpa tempore et vo', 'Academic Departments:', '93', '12000', NULL, NULL, NULL, '34512', NULL, 'Rogan Dalton', 'Omnis praesentium ni', '+1 (452) 799-3431', 'Teagan Moses', '627', '', '', '', '2023-11-04 03:28:59', '2023-11-04 03:29:18', NULL),
(6, '1', '1', 'Cashier', 'Saqib', 'Andrews', '4130111111', '2010-05-11', '32', 'johevezuci@mailinator.com', NULL, 'Eligendi eveniet bl', 'Academic Departments:', '24', '81', NULL, NULL, NULL, '2356', NULL, 'Caldwell Drake', 'Laboriosam ut maior', '+1 (378) 697-7542', 'Aretha Herman', '446', '', '', '', '2023-11-04 03:31:21', '2023-11-04 03:31:37', NULL),
(7, '1', '1', 'Endowment Manager', 'Wajahat', 'Buchanan', '43055434234234', '2018-10-17', '83', 'jupadin@mailinator.com', NULL, 'Odio earum in ea rei', 'Academic Departments:', '99', '2000', NULL, NULL, NULL, '7896', NULL, 'Ainsley Camacho', 'Nesciunt esse lauda', '+1 (722) 623-3818', 'Tyrone Everett', '294', '', '', '', '2023-11-04 03:32:58', '2023-11-04 03:36:50', NULL),
(8, '1', '1', 'librarian', 'Unaib', 'Cantrell', '4130111111111', '2020-08-26', '2', 'hulyradupy@mailinator.com', NULL, 'Impedit reprehender', 'Academic Departments:', '23', '3000', NULL, NULL, NULL, '234325', NULL, 'Xander Jarvis', 'Voluptas iste volupt', '+1 (113) 153-5431', 'Jocelyn Wood', '392', '', '', '', '2023-11-04 03:34:49', '2023-11-04 03:37:06', NULL),
(9, '1', '1', 'Degree Auditor', 'Ali Raza', 'Morrison', '413031568976', '2020-06-29', '90', 'xiry@mailinator.com', NULL, 'Quis sequi duis elit', 'Academic Departments:', '98', '4000', NULL, NULL, NULL, '55345', NULL, 'Knox Peck', 'Et ipsum molestiae a', '+1 (573) 147-4795', 'Helen Fletcher', '830', '', '', '', '2023-11-04 03:36:23', '2023-11-04 03:37:20', NULL),
(10, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'tyle@mailinator.com', 'Doloremque et sed of', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2023-11-29 07:14:35', '2023-11-29 07:14:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_employee_attendances`
--

CREATE TABLE `campus_employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `emp_id` text DEFAULT NULL,
  `emp_name` text DEFAULT NULL,
  `employee_attendance_date` text DEFAULT NULL,
  `employee_attendance` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `job_designation` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_employee_attendances`
--

INSERT INTO `campus_employee_attendances` (`id`, `institute_id`, `campus_id`, `emp_id`, `emp_name`, `employee_attendance_date`, `employee_attendance`, `department`, `job_designation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'AliKhan', '2023-10-31', 'Present', 'Teacher', 'Teacher', '2023-10-31 05:09:46', '2023-10-31 05:09:46', NULL),
(2, '1', '1', '2', 'Teacher 2test', '2023-10-31', 'Present', 'Teacher', 'Teacher', '2023-10-31 05:09:46', '2023-10-31 05:09:46', NULL),
(3, '1', '1', '3', 'Teacher 3tech', '2023-10-31', 'Present', 'Teacher', 'Teacher', '2023-10-31 05:09:46', '2023-10-31 05:09:46', NULL),
(4, '1', '1', '1', 'AliKhan', '2023-10-05', 'Present', 'Teacher', 'Teacher', '2023-10-31 05:13:13', '2023-10-31 05:13:13', NULL),
(5, '1', '1', '2', 'Teacher 2test', '2023-10-05', 'Absent', 'Teacher', 'Teacher', '2023-10-31 05:13:13', '2023-10-31 05:13:13', NULL),
(6, '1', '1', '3', 'Teacher 3tech', '2023-10-05', 'Leave', 'Teacher', 'Teacher', '2023-10-31 05:13:13', '2023-10-31 05:13:13', NULL),
(7, '1', '1', '4', 'KashanShaikh', '2023-11-04', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(8, '1', '1', '5', 'AnasBowers', '2023-11-04', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(9, '1', '1', '6', 'SaqibAndrews', '2023-11-04', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(10, '1', '1', '7', 'WajahatBuchanan', '2023-11-04', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(11, '1', '1', '8', 'UnaibCantrell', '2023-11-04', 'Absent', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(12, '1', '1', '9', 'Ali RazaMorrison', '2023-11-04', 'Leave', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:02:59', '2023-11-04 04:02:59', NULL),
(13, '1', '1', '4', 'KashanShaikh', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(14, '1', '1', '5', 'AnasBowers', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(15, '1', '1', '6', 'SaqibAndrews', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(16, '1', '1', '7', 'WajahatBuchanan', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(17, '1', '1', '8', 'UnaibCantrell', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(18, '1', '1', '9', 'Ali RazaMorrison', '2023-11-01', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:17', '2023-11-04 04:07:17', NULL),
(19, '1', '1', '4', 'KashanShaikh', '2023-11-02', 'Leave', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(20, '1', '1', '5', 'AnasBowers', '2023-11-02', 'Absent', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(21, '1', '1', '6', 'SaqibAndrews', '2023-11-02', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(22, '1', '1', '7', 'WajahatBuchanan', '2023-11-02', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(23, '1', '1', '8', 'UnaibCantrell', '2023-11-02', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(24, '1', '1', '9', 'Ali RazaMorrison', '2023-11-02', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:36', '2023-11-04 04:07:36', NULL),
(25, '1', '1', '4', 'KashanShaikh', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(26, '1', '1', '5', 'AnasBowers', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(27, '1', '1', '6', 'SaqibAndrews', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(28, '1', '1', '7', 'WajahatBuchanan', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(29, '1', '1', '8', 'UnaibCantrell', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(30, '1', '1', '9', 'Ali RazaMorrison', '2023-11-03', 'Present', 'Academic Departments:', 'Degree Auditor', '2023-11-04 04:07:46', '2023-11-04 04:07:46', NULL),
(31, '1', '1', '1', 'AliKhan', '2024-01-10', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:07:59', '2024-01-11 05:07:59', NULL),
(32, '1', '1', '2', 'Teacher 2test', '2024-01-10', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:07:59', '2024-01-11 05:07:59', NULL),
(33, '1', '1', '3', 'Teacher 3tech', '2024-01-10', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:07:59', '2024-01-11 05:07:59', NULL),
(34, '1', '1', '1', 'AliKhan', '2024-01-09', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:35:21', '2024-01-11 05:35:21', NULL),
(35, '1', '1', '2', 'Teacher 2test', '2024-01-09', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:35:21', '2024-01-11 05:35:21', NULL),
(36, '1', '1', '3', 'Teacher 3tech', '2024-01-09', 'Present', 'Teacher', 'Teacher', '2024-01-11 05:35:21', '2024-01-11 05:35:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_employee_leaves`
--

CREATE TABLE `campus_employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `emp_id` text DEFAULT NULL,
  `emp_name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `end_date` text DEFAULT NULL,
  `current_month` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_employee_leaves`
--

INSERT INTO `campus_employee_leaves` (`id`, `institute_id`, `campus_id`, `emp_id`, `emp_name`, `title`, `start_date`, `end_date`, `current_month`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1', '4', 'Kashan', 'Fever', '2023-11-04', '2023-11-05', 'November', 'Fever', '2023-11-04 04:29:19', '2023-11-04 04:29:19', NULL),
(2, 1, '1', '5', 'Anas', 'Not available', '2023-11-05', '2023-11-07', 'November', 'He is Out of city', '2023-11-04 04:30:16', '2023-11-04 04:30:16', NULL),
(3, 1, '1', '7', 'Wajahat', 'Wedding', '2023-11-06', '2023-11-08', 'November', 'wedding', '2023-11-04 04:31:00', '2023-11-04 04:31:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_inventory_management`
--

CREATE TABLE `campus_inventory_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `stock` text DEFAULT NULL,
  `usage` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_inventory_management`
--

INSERT INTO `campus_inventory_management` (`id`, `institute_id`, `campus_id`, `item_name`, `stock`, `usage`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'chair', '80', '20', 'for college', '2023-11-06 06:38:39', '2023-11-06 06:40:06', NULL),
(2, '1', '1', 'Tables', '150', NULL, 'for college', '2023-11-06 06:38:55', '2023-11-06 06:38:55', NULL),
(3, '1', '1', 'dispenser', '50', NULL, 'for college', '2023-11-06 06:39:14', '2023-11-06 06:39:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_public_holidays`
--

CREATE TABLE `campus_public_holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `holiday_title` text DEFAULT NULL,
  `holiday_start_date` text DEFAULT NULL,
  `holiday_end_date` text DEFAULT NULL,
  `holiday_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_public_holidays`
--

INSERT INTO `campus_public_holidays` (`id`, `institute_id`, `campus_id`, `holiday_title`, `holiday_start_date`, `holiday_end_date`, `holiday_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Labour day', '2023-10-01', '2023-10-02', 'Labour day', '2023-10-28 04:24:20', '2023-10-28 04:24:20', NULL),
(2, '1', '1', 'Kashmir Solidarity Day', '2023-02-05', '2023-02-07', 'Kashmir Solidarity Day', '2023-11-04 04:40:51', '2023-11-04 04:40:51', NULL),
(3, '1', '1', 'Independence Day', '2023-08-14', '2023-08-15', 'Happy Independence Day Of PAkistan', '2023-11-04 04:41:50', '2023-11-04 04:41:50', NULL),
(4, '1', '1', 'Quaid-e-Azam Birthday', '2023-12-25', '2023-12-26', 'Quaid-e-Azam Birthday', '2023-11-04 04:42:22', '2023-11-04 04:42:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_student_store_assignments`
--

CREATE TABLE `campus_student_store_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `student_id` text DEFAULT NULL,
  `student_gr` text DEFAULT NULL,
  `student_name` text DEFAULT NULL,
  `assignment_file` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_student_teacher_chats`
--

CREATE TABLE `campus_student_teacher_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `student_gr` text DEFAULT NULL,
  `student_name` text DEFAULT NULL,
  `student_class` text DEFAULT NULL,
  `student_section` text DEFAULT NULL,
  `teacher_name` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `message_sent_time` text DEFAULT NULL,
  `message_sent_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_subjects`
--

CREATE TABLE `campus_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_subjects`
--

INSERT INTO `campus_subjects` (`id`, `institute_id`, `campus_id`, `class_name`, `section_name`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'class A', NULL, 'English', '2023-10-24 15:51:58', '2023-10-24 15:51:58', NULL),
(2, '1', '1', 'class A', NULL, 'Urdu', '2023-10-24 15:52:05', '2023-10-24 15:52:05', NULL),
(3, '1', '1', 'class B', NULL, 'Maths', '2023-10-24 15:52:13', '2023-10-24 15:52:13', NULL),
(4, '1', '1', 'class B', NULL, 'Science', '2023-10-24 15:52:21', '2023-10-24 15:52:21', NULL),
(5, '1', '1', 'Web Design', NULL, 'Html', '2024-01-11 02:31:11', '2024-01-11 02:31:11', NULL),
(6, '1', '1', 'Web Design', NULL, 'CSS', '2024-01-11 02:31:21', '2024-01-11 02:31:21', NULL),
(7, '1', '1', 'Web Design', NULL, 'Javascript', '2024-01-11 02:31:36', '2024-01-11 02:31:36', NULL),
(8, '1', '1', 'Web Developement', NULL, 'php', '2024-01-11 02:31:46', '2024-01-11 02:31:46', NULL),
(9, '1', '1', NULL, NULL, 'Laravel', '2024-01-11 02:32:02', '2024-01-11 02:32:02', NULL),
(10, '1', '1', 'Web Developement', NULL, 'Node Js', '2024-01-11 02:32:24', '2024-01-11 02:32:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_subjects_teachers`
--

CREATE TABLE `campus_subjects_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` varchar(225) DEFAULT NULL,
  `campus_id` varchar(255) DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `section_name` varchar(225) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_subjects_teachers`
--

INSERT INTO `campus_subjects_teachers` (`id`, `institute_id`, `campus_id`, `class_name`, `section_name`, `teacher_name`, `subjects`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'class A', NULL, 'Ali', 'English, Urdu', '2023-10-24 16:15:24', '2023-10-24 16:15:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_syllabus`
--

CREATE TABLE `campus_syllabus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
  `author_name` text DEFAULT NULL,
  `book_name` text DEFAULT NULL,
  `no_of_chapters` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_syllabus`
--

INSERT INTO `campus_syllabus` (`id`, `institute_id`, `campus_id`, `class_name`, `section_name`, `subject_name`, `author_name`, `book_name`, `no_of_chapters`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'class A', NULL, 'Urdu', 'Kashan Shaikh', 'English', '12', '2023-10-24 15:56:54', '2023-10-24 15:56:54', NULL),
(2, '1', '1', 'class B', NULL, 'Maths', 'Zain', 'Maths book', '20', '2023-10-24 15:59:16', '2023-10-24 15:59:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_course_materials`
--

CREATE TABLE `campus_teacher_course_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `teacher_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
  `course_title` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
  `uploaded_document` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_teacher_course_materials`
--

INSERT INTO `campus_teacher_course_materials` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `section_name`, `subject_name`, `course_title`, `upload_date`, `uploaded_document`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'class A', NULL, 'English', 'Testing Course Material', '2023-10-25', '1780675411090649.txt', '2023-10-24 16:53:25', '2023-10-24 16:53:25', NULL),
(2, '1', '1', '1', 'class A', NULL, 'Urdu', '1 to 10 lectures', '2023-11-02', '1781364627557067.pdf', '2023-11-01 07:28:13', '2023-11-01 07:28:13', NULL),
(3, '1', '1', '1', 'class A', NULL, 'Urdu', '11 to 20 lectures', '2023-11-08', '1781364659321105.pdf', '2023-11-01 07:28:43', '2023-11-01 07:28:43', NULL),
(4, '1', '1', '1', 'class A', NULL, 'English', '1 to 5 lectures', '2023-11-01', '1781364689693831.pdf', '2023-11-01 07:29:12', '2023-11-01 07:29:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_diary_assignments`
--

CREATE TABLE `campus_teacher_diary_assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `teacher_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `diary_note` text DEFAULT NULL,
  `uploaded_document` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `due_date` text DEFAULT NULL,
  `assignmnet_total_marks` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_teacher_diary_assignments`
--

INSERT INTO `campus_teacher_diary_assignments` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `section_name`, `subject_name`, `title`, `diary_note`, `uploaded_document`, `start_date`, `due_date`, `assignmnet_total_marks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'class A', NULL, 'English', 'Homework', 'Plz do this homework', '1780675270966276.txt', '2023-10-25', '2023-10-25', '15', '2023-10-24 16:51:11', '2023-10-24 16:51:11', NULL),
(2, '1', '1', '1', 'class A', NULL, 'Urdu', 'Assignmnet', 'Do this Assignmnet', '1781364186481229.pdf', '2023-11-01', '2023-11-05', '20', '2023-11-01 07:21:12', '2023-11-01 07:21:12', NULL),
(3, '1', '1', '1', 'class A', NULL, 'English', 'Assignment', 'Best of luck Students', '1781364249470821.pdf', '2023-11-08', '2023-11-12', '15', '2023-11-01 07:22:12', '2023-11-01 07:22:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_recorded_lectures`
--

CREATE TABLE `campus_teacher_recorded_lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
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
(1, 1, 1, 1, 'class A', NULL, 'English', 'Lectures One English', 'google.com', '2023-10-25', '2023-10-24 16:46:58', '2023-10-24 16:46:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_student_attendances`
--

CREATE TABLE `campus_teacher_student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `admission_no` text DEFAULT NULL,
  `student_roll_number` text DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student_name` text DEFAULT NULL,
  `student_attendance_date` text DEFAULT NULL,
  `student_attendance` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_teacher_student_attendances`
--

INSERT INTO `campus_teacher_student_attendances` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `section_name`, `admission_no`, `student_roll_number`, `student_id`, `student_name`, `student_attendance_date`, `student_attendance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-08-30', 'Present', '2023-08-31 07:23:24', '2023-08-31 07:23:40', NULL),
(2, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-08-30', 'Leave', '2023-08-31 07:23:24', '2023-08-31 07:23:40', NULL),
(3, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-08-31', 'Present', '2023-08-31 07:24:46', '2023-08-31 07:24:46', NULL),
(4, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-08-31', 'Present', '2023-08-31 07:24:46', '2023-08-31 07:24:46', NULL),
(5, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-01', 'Present', '2023-09-01 03:07:33', '2023-09-01 03:17:21', NULL),
(6, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-09-01', 'Leave', '2023-09-01 03:07:33', '2023-09-01 03:17:21', NULL),
(7, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-12', 'Present', '2023-09-02 03:37:02', '2023-09-02 03:37:02', NULL),
(8, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-09-12', 'Present', '2023-09-02 03:37:02', '2023-09-02 03:37:02', NULL),
(9, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-02', 'Leave', '2023-09-02 03:38:11', '2023-09-02 04:45:17', NULL),
(10, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-09-02', 'Present', '2023-09-02 03:38:11', '2023-09-02 04:45:17', NULL),
(11, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-05', 'Present', '2023-09-05 05:38:37', '2023-09-05 05:38:37', NULL),
(12, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-09-05', 'Present', '2023-09-05 05:38:37', '2023-09-05 05:38:37', NULL),
(13, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-06', 'Present', '2023-09-06 02:47:54', '2023-09-06 02:49:10', NULL),
(14, 1, 1, 1, 'class 1', 'B', '7', 'CONNORCLASS-1B7', 7, 'ConnorAyala', '2023-09-06', 'Present', '2023-09-06 02:47:54', '2023-09-06 02:49:10', NULL),
(15, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-04', 'Present', '2023-09-18 03:23:55', '2023-09-18 03:23:55', NULL),
(16, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-07', 'Present', '2023-09-18 03:24:11', '2023-09-18 03:24:11', NULL),
(17, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-08', 'Absent', '2023-09-18 03:24:30', '2023-09-18 03:24:30', NULL),
(18, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-09', 'Leave', '2023-09-18 03:24:46', '2023-09-18 03:24:46', NULL),
(19, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-10', 'Present', '2023-09-18 03:25:00', '2023-09-18 03:25:00', NULL),
(20, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-11', 'Present', '2023-09-18 03:25:12', '2023-09-18 03:25:12', NULL),
(21, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-13', 'Absent', '2023-09-18 03:25:35', '2023-09-18 03:25:35', NULL),
(22, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-14', 'Leave', '2023-09-18 03:26:12', '2023-09-18 03:26:12', NULL),
(23, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-15', 'Present', '2023-09-18 03:26:23', '2023-09-18 03:26:23', NULL),
(24, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-16', 'Present', '2023-09-18 03:26:34', '2023-09-18 03:26:34', NULL),
(25, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-09-18', 'Present', '2023-09-18 03:26:56', '2023-09-18 03:26:56', NULL),
(26, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-10-01', 'Present', '2023-10-01 12:28:19', '2023-10-01 12:28:19', NULL),
(27, 1, 1, 1, 'class 1', 'B', '6', 'AVRAMCLASS-1B6', 6, 'AvramHerring', '2023-10-02', 'Present', '2023-10-02 00:37:46', '2023-10-02 00:37:46', NULL),
(28, 1, 1, 1, 'class 1', 'A', '1', NULL, 1, 'AimanTalib', '2023-10-14', 'Present', '2023-10-14 02:37:33', '2023-10-14 02:37:33', NULL),
(29, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-24', 'Present', '2023-10-24 16:35:43', '2023-10-24 16:35:43', NULL),
(30, 1, 1, 1, 'class A', 'B', '2', 'HASSANCLASS-AB2', 2, 'HassanAli', '2023-10-24', 'Present', '2023-10-24 16:35:56', '2023-10-24 16:35:56', NULL),
(31, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-25', 'Present', '2023-10-25 07:06:55', '2023-10-25 07:06:55', NULL),
(32, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-25', 'Present', '2023-10-25 07:06:55', '2023-10-25 07:06:55', NULL),
(33, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-01', 'Leave', '2023-11-01 12:11:35', '2023-11-01 12:27:27', NULL),
(34, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-01', 'Leave', '2023-11-01 12:11:35', '2023-11-01 12:27:27', NULL),
(35, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-02', 'Present', '2023-11-01 12:11:59', '2023-11-01 12:11:59', NULL),
(36, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-02', 'Present', '2023-11-01 12:11:59', '2023-11-01 12:11:59', NULL),
(37, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-03', 'Present', '2023-11-01 12:12:43', '2023-11-01 12:12:43', NULL),
(38, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-03', 'Present', '2023-11-01 12:12:43', '2023-11-01 12:12:43', NULL),
(39, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-04', 'Present', '2023-11-01 12:12:58', '2023-11-01 12:12:58', NULL),
(40, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-04', 'Present', '2023-11-01 12:12:58', '2023-11-01 12:12:58', NULL),
(41, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-05', 'Present', '2023-11-01 12:13:39', '2023-11-01 12:13:39', NULL),
(42, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-05', 'Present', '2023-11-01 12:13:39', '2023-11-01 12:13:39', NULL),
(43, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-06', 'Present', '2023-11-01 12:13:54', '2023-11-01 12:13:54', NULL),
(44, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-06', 'Present', '2023-11-01 12:13:54', '2023-11-01 12:13:54', NULL),
(45, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-07', 'Present', '2023-11-01 12:14:08', '2023-11-01 12:14:08', NULL),
(46, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-07', 'Present', '2023-11-01 12:14:08', '2023-11-01 12:14:08', NULL),
(47, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-09', 'Present', '2023-11-01 12:22:38', '2023-11-01 12:22:38', NULL),
(48, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-09', 'Present', '2023-11-01 12:22:38', '2023-11-01 12:22:38', NULL),
(49, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-10', 'Absent', '2023-11-01 12:23:07', '2023-11-01 12:23:07', NULL),
(50, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-10', 'Absent', '2023-11-01 12:23:07', '2023-11-01 12:23:07', NULL),
(51, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-11', 'Absent', '2023-11-01 12:23:40', '2023-11-01 12:23:40', NULL),
(52, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-11', 'Absent', '2023-11-01 12:23:40', '2023-11-01 12:23:40', NULL),
(53, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-12', 'Present', '2023-11-01 12:23:55', '2023-11-01 12:23:55', NULL),
(54, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-12', 'Present', '2023-11-01 12:23:55', '2023-11-01 12:23:55', NULL),
(55, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-13', 'Present', '2023-11-01 12:24:08', '2023-11-01 12:24:08', NULL),
(56, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-13', 'Present', '2023-11-01 12:24:08', '2023-11-01 12:24:08', NULL),
(57, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-15', 'Leave', '2023-11-01 12:24:37', '2023-11-01 12:26:53', NULL),
(58, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-15', 'Leave', '2023-11-01 12:24:37', '2023-11-01 12:26:53', NULL),
(59, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-16', 'Present', '2023-11-01 12:24:52', '2023-11-01 12:24:52', NULL),
(60, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-16', 'Present', '2023-11-01 12:24:52', '2023-11-01 12:24:52', NULL),
(61, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-17', 'Present', '2023-11-01 12:25:09', '2023-11-01 12:25:09', NULL),
(62, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-17', 'Present', '2023-11-01 12:25:09', '2023-11-01 12:25:09', NULL),
(63, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2023-10-08', 'Leave', '2023-11-01 12:27:10', '2023-11-01 12:27:10', NULL),
(64, 1, 1, 1, 'class A', 'A', '3', 'ZELDACLASS-AA3', 3, 'ZeldaBoone', '2023-10-08', 'Leave', '2023-11-01 12:27:10', '2023-11-01 12:27:10', NULL),
(65, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2024-01-10', 'Absent', '2024-01-10 14:13:12', '2024-01-10 14:13:59', NULL),
(66, 1, 1, 1, 'class A', 'A', '6', 'NOMLANGACLASS-AA6', 6, 'NomlangaGreen', '2024-01-10', 'Present', '2024-01-10 14:13:12', '2024-01-10 14:13:59', NULL),
(67, 1, 1, 1, 'class A', 'A', '1', 'ZAINCLASS-A1', 1, 'ZainShaikh', '2024-01-11', 'Present', '2024-01-10 21:08:00', '2024-01-10 21:08:00', NULL),
(68, 1, 1, 1, 'class A', 'A', '6', 'NOMLANGACLASS-AA6', 6, 'NomlangaGreen', '2024-01-11', 'Present', '2024-01-10 21:08:00', '2024-01-10 21:08:00', NULL),
(69, 1, 1, 1, 'Web Design', 'Web - 01', '2', 'ROSEWEB-DESIGNWEB-012', 2, 'RoseFitzgerald', '2024-01-10', 'Present', '2024-01-11 03:08:08', '2024-01-11 03:08:08', NULL),
(70, 1, 1, 1, 'Web Design', 'Web - 01', '4', 'INEZWEB-DESIGNWEB-014', 4, 'InezOneill', '2024-01-10', 'Present', '2024-01-11 03:08:08', '2024-01-11 03:08:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_student_chats`
--

CREATE TABLE `campus_teacher_student_chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `teacher_id` text DEFAULT NULL,
  `teacher_name` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `student_name` text DEFAULT NULL,
  `student_gr_number` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `message_sent_time` text DEFAULT NULL,
  `message_sent_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_student_leave_approvals`
--

CREATE TABLE `campus_teacher_student_leave_approvals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `teacher_id` text DEFAULT NULL,
  `teacher_name` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `student_name` text DEFAULT NULL,
  `apply_date` text DEFAULT NULL,
  `from_date` text DEFAULT NULL,
  `to_date` text DEFAULT NULL,
  `leave_reason` text DEFAULT NULL,
  `leave_status` text DEFAULT NULL,
  `confirmation_by` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_teacher_student_leave_approvals`
--

INSERT INTO `campus_teacher_student_leave_approvals` (`id`, `institute_id`, `campus_id`, `teacher_id`, `teacher_name`, `class_name`, `section_name`, `student_name`, `apply_date`, `from_date`, `to_date`, `leave_reason`, `leave_status`, `confirmation_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'Ali', 'class A', 'B', 'Hassan', '2023-11-01', '2023-11-02', '2023-11-03', 'Fever', 'Approve', 'Ali', '2023-11-01 12:50:40', '2023-11-01 12:50:40', NULL),
(2, '1', '1', '1', 'Ali', 'class A', 'A', 'Zain', '2023-10-25', '2023-11-29', '2023-11-30', 'Out Of City', 'Approve', 'Ali', '2023-11-01 12:51:50', '2023-11-01 12:51:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_timetables`
--

CREATE TABLE `campus_timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
  `day` text DEFAULT NULL,
  `start_time` text DEFAULT NULL,
  `end_time` text NOT NULL,
  `teacher` text NOT NULL,
  `timetable_created_on` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_timetables`
--

INSERT INTO `campus_timetables` (`id`, `institute_id`, `campus_id`, `class_name`, `section_name`, `subject_name`, `day`, `start_time`, `end_time`, `teacher`, `timetable_created_on`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'class A', NULL, 'English', 'Monday', '12:10 PM', '12:11 PM', 'Ali', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL),
(2, '1', '1', 'class A', NULL, 'English', 'Tuesday', '--', '--', '--', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL),
(3, '1', '1', 'class A', NULL, 'English', 'Wednesday', '--', '--', '--', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL),
(4, '1', '1', 'class A', NULL, 'English', 'Thursday', '--', '--', '--', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL),
(5, '1', '1', 'class A', NULL, 'English', 'Friday', '--', '--', '--', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL),
(6, '1', '1', 'class A', NULL, 'English', 'Saturday', '--', '--', '--', '2023-10-31', '2023-10-31 02:10:30', '2023-10-31 02:10:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hyderabad', '2023-08-25 05:33:24', '2023-08-25 05:33:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class__sections`
--

CREATE TABLE `class__sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class__sections`
--

INSERT INTO `class__sections` (`id`, `institute_id`, `campus_id`, `class_name`, `section_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'class A', 'A', '2023-10-24 13:32:09', '2023-10-24 13:32:09', NULL),
(2, 1, 1, 'class A', 'B', '2023-10-24 13:32:35', '2023-10-24 13:32:35', NULL),
(3, 1, 1, 'class B', 'A', '2023-10-24 13:33:10', '2023-10-24 13:33:10', NULL),
(4, 1, 1, 'class B', 'B', '2023-10-24 13:33:18', '2023-10-24 13:33:18', NULL),
(5, 1, 1, 'class B', 'C', '2023-10-24 16:00:34', '2023-10-24 16:00:34', NULL),
(6, 1, 1, 'Web Design', 'Web - 01', '2024-01-11 02:28:25', '2024-01-11 02:28:25', NULL),
(7, 1, 1, 'Web Design', 'Web - 02', '2024-01-11 02:29:13', '2024-01-11 02:29:13', NULL),
(8, 1, 1, 'Web Developement', 'WD - 01', '2024-01-11 02:29:29', '2024-01-11 02:29:29', NULL),
(9, 1, 1, 'Web Developement', 'WD - 02', '2024-01-11 02:30:24', '2024-01-11 02:30:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `current_sessions`
--

CREATE TABLE `current_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` varchar(225) DEFAULT NULL,
  `session_years` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extra_fees`
--

CREATE TABLE `extra_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `extra_fee` text DEFAULT NULL,
  `extra_amount` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `institute_name` text DEFAULT NULL,
  `Institute_username` text DEFAULT NULL,
  `Institute_address` text DEFAULT NULL,
  `institute_password` text DEFAULT NULL,
  `institute_city` text DEFAULT NULL,
  `institute_email` text DEFAULT NULL,
  `institute_contact` text DEFAULT NULL,
  `institute_ptcl` text DEFAULT NULL,
  `lock_status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute_name`, `Institute_username`, `Institute_address`, `institute_password`, `institute_city`, `institute_email`, `institute_contact`, `institute_ptcl`, `lock_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Stevta', 'stevta1', 'hyd', '123', 'Hyderabad', 'stevta12@gmail.com', '22222222', '02222222222', '0', '2023-08-25 05:34:01', '2023-08-25 05:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `library_books`
--

CREATE TABLE `library_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `book_title` text DEFAULT NULL,
  `book_number` text DEFAULT NULL,
  `publisher` text DEFAULT NULL,
  `author` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `book_price` text DEFAULT NULL,
  `post_date` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_super_admins`
--

CREATE TABLE `main_super_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` text DEFAULT NULL,
  `admin_username` text DEFAULT NULL,
  `admin_password` text DEFAULT NULL,
  `admin_number` text DEFAULT NULL,
  `admin_email` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_super_admins`
--

INSERT INTO `main_super_admins` (`id`, `admin_name`, `admin_username`, `admin_password`, `admin_number`, `admin_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kashan232', 'admin', '1234', '03173859647', 'shaikhkashan670@gmail.com', '2023-05-16 07:09:26', '2023-05-24 04:31:49', NULL);

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
(5, '2023_05_10_120835_create_institutes_table', 1),
(6, '2023_05_16_070525_create_main_super_admins_table', 2),
(7, '2023_05_18_072236_create_campuses_table', 3),
(8, '2023_05_20_115943_create_campus_classes_table', 4),
(9, '2023_05_22_100058_create_class__sections_table', 5),
(10, '2023_05_22_185629_create_addmissions_table', 6),
(11, '2023_05_27_081941_create_student_addmissions_table', 7),
(12, '2023_05_29_102228_create_campus_subjects_table', 8),
(14, '2023_05_31_090808_create_campus_syllabi_table', 10),
(15, '2023_06_14_105625_create_campus_timetables_table', 11),
(16, '2023_06_16_072450_create_campus_syllabus_table', 12),
(17, '2023_06_21_123258_create_cities_table', 13),
(18, '2023_06_24_073720_create_campus_departments_table', 14),
(19, '2023_06_24_073750_create_campus_public_holidays_table', 14),
(20, '2023_06_24_073952_create_campus_employees_table', 14),
(21, '2023_06_24_074148_create_campus_employee_attendances_table', 14),
(22, '2023_06_24_074219_create_campus_employee_leaves_table', 14),
(23, '2023_06_24_083853_create_campus_inventory_management_table', 15),
(24, '2023_06_24_083915_create_campus_billings_table', 16),
(25, '2023_06_27_074653_create_student_fees_table', 17),
(26, '2023_06_27_080132_create_extra_fees_table', 17),
(27, '2023_07_05_070540_create_campus_teacher_recorded_lectures_table', 18),
(28, '2023_07_06_082421_create_campus_teacher_diary_assignments_table', 19),
(29, '2023_07_08_105127_create_campus_teacher_course_materials_table', 20),
(30, '2023_07_10_054749_create_campus_teacher_student_attendances_table', 21),
(31, '2023_07_11_062820_create_campus_teacher_student_leave_approvals_table', 21),
(32, '2023_07_10_115436_create_teacher_notice_boards_table', 22),
(33, '2023_07_13_102040_create_campus_teacher_student_chats_table', 23),
(34, '2023_07_17_093309_create_campus_student_teacher_chats_table', 24),
(35, '2023_07_22_105806_create_campus_student_store_assignments_table', 24),
(36, '2023_08_12_101817_create_current_sessions_table', 25),
(37, '2023_08_16_112728_create_campus_class_teachers_table', 26),
(38, '2023_08_19_092826_create_campus_subjects_teachers_table', 27),
(39, '2023_08_26_105201_create_campus_batches_table', 28),
(40, '2023_09_01_112125_create_teacher_available_times_table', 29),
(41, '2023_10_20_071102_create_library_books_table', 29),
(42, '2023_11_29_113921_create_online_registrations_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `online_registrations`
--

CREATE TABLE `online_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `cnic` text DEFAULT NULL,
  `retype_cnic` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `email_verification_code` text DEFAULT NULL,
  `mobile_number` text DEFAULT NULL,
  `father_name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `domicile_province` text DEFAULT NULL,
  `domicile_district` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `retype_password` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_registrations`
--

INSERT INTO `online_registrations` (`id`, `institute_id`, `campus_id`, `cnic`, `retype_cnic`, `email`, `email_verification_code`, `mobile_number`, `father_name`, `surname`, `gender`, `country`, `domicile_province`, `domicile_district`, `password`, `retype_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', '83', 'wuzidydem@mailinator.com', '9', '89', 'Wayne Santana', 'Moss', 'Female', 'Odio placeat optio', 'Richard', 'Ab in consectetur ip', 'Nam dolore iste prae', 'Nam dolore iste prae', '2023-11-29 07:25:11', '2023-11-29 07:25:11', NULL);

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
-- Table structure for table `student_addmissions`
--

CREATE TABLE `student_addmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `campus_id` int(11) DEFAULT NULL,
  `batch` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `surname` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_certificate_img` text DEFAULT NULL,
  `father_name` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `gr` text DEFAULT NULL,
  `scholarship_percentage` text DEFAULT NULL,
  `student_img` text DEFAULT NULL,
  `covid_certificate_img` text DEFAULT NULL,
  `last_school` text DEFAULT NULL,
  `leaving_certificate_img` text DEFAULT NULL,
  `student_email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `result_status` text DEFAULT NULL,
  `next_session_status` text DEFAULT NULL,
  `account_name` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_addmissions`
--

INSERT INTO `student_addmissions` (`id`, `institute_id`, `campus_id`, `batch`, `first_name`, `last_name`, `surname`, `gender`, `religion`, `birth_date`, `birth_certificate_img`, `father_name`, `contact`, `Address`, `enrollment_date`, `class_name`, `section_name`, `gr`, `scholarship_percentage`, `student_img`, `covid_certificate_img`, `last_school`, `leaving_certificate_img`, `student_email`, `password`, `result_status`, `next_session_status`, `account_name`, `account_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2024-01-01 to 2025-01-01', 'Serina', 'Bowman', 'Mcclain', 'Female', 'Pariatur Labore ex', '2001-03-29', '', 'Venus Castaneda', 'Animi dolorem sed m', 'Aliqua Ullamco non', '2024-01-10', 'Web Developement', 'WD - 01', 'SERINAWEB-DEVELOPEMENTWD-011', 'Sit tenetur dolore', '', '', 'Sed quod earum unde', '', 'camimopysa@mailinator.com', 'Pa$$w0rd!', NULL, NULL, 'Louis Ellison', '777', '2024-01-11 03:01:06', '2024-01-11 03:01:07', NULL),
(2, 1, 1, '2024-01-01 to 2025-01-01', 'Rose', 'Fitzgerald', 'Phillips', 'Custom', 'Iste inventore amet', '1994-02-18', '', 'Gillian Rosario', 'Cupiditate perferend', 'Autem voluptas vitae', '2024-01-10', 'Web Design', 'Web - 01', 'ROSEWEB-DESIGNWEB-012', 'Culpa dolorem laboru', '', '', 'Veniam harum enim d', '', 'hyluhafy@mailinator.com', 'Pa$$w0rd!', NULL, NULL, 'Carly Frank', '570', '2024-01-11 03:01:19', '2024-01-11 03:01:19', NULL),
(3, 1, 1, '2024-01-01 to 2025-01-01', 'Noble', 'Dotson', 'Rowe', 'Male', 'Officia dolor nesciu', '2016-08-05', '', 'Gareth Salas', 'Aliquid sed repudian', 'Non expedita ipsum', '2024-01-10', 'Web Developement', 'WD - 01', 'NOBLEWEB-DEVELOPEMENTWD-013', 'Voluptas non nulla n', '', '', 'Enim qui corrupti e', '', 'fejise@mailinator.com', 'Pa$$w0rd!', NULL, NULL, 'Silas Joseph', '986', '2024-01-11 03:01:28', '2024-01-11 03:01:28', NULL),
(4, 1, 1, '2024-01-01 to 2025-01-01', 'Inez', 'Oneill', 'Ray', 'Male', 'Quia dolor rerum ear', '2012-02-05', '', 'Yoko Gates', 'Asperiores corporis', 'Iure excepturi nisi', '2024-01-10', 'Web Design', 'Web - 01', 'INEZWEB-DESIGNWEB-014', 'Velit eos quod sint', '', '', 'Rerum voluptatem Do', '', 'viqivudik@mailinator.com', 'Pa$$w0rd!', NULL, NULL, 'Diana Daniel', '596', '2024-01-11 03:02:01', '2024-01-11 03:02:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `Fee_type` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_available_times`
--

CREATE TABLE `teacher_available_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(11) NOT NULL,
  `campus_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `subject_name` text NOT NULL,
  `lecture_date` text NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `lecture_day` text NOT NULL,
  `availability` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_available_times`
--

INSERT INTO `teacher_available_times` (`id`, `institute_id`, `campus_id`, `teacher_id`, `course_name`, `subject_name`, `lecture_date`, `start_time`, `end_time`, `lecture_day`, `availability`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'class A', 'English', '2023-10-31', '12:04', '12:04', 'Tuesday', 'available', '2023-10-31 02:04:28', '2023-10-31 02:04:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notice_boards`
--

CREATE TABLE `teacher_notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `teacher_id` text DEFAULT NULL,
  `teacher_name` text DEFAULT NULL,
  `Notice_title` text DEFAULT NULL,
  `Notice_Link` text DEFAULT NULL,
  `Notice_class` text DEFAULT NULL,
  `Notice_section` text DEFAULT NULL,
  `Notice_Publish_date` text DEFAULT NULL,
  `Notice_Description` text DEFAULT NULL,
  `active_status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_notice_boards`
--

INSERT INTO `teacher_notice_boards` (`id`, `institute_id`, `campus_id`, `teacher_id`, `teacher_name`, `Notice_title`, `Notice_Link`, `Notice_class`, `Notice_section`, `Notice_Publish_date`, `Notice_Description`, `active_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'Ali', 'testing notice', 'google.com', 'class A', 'Urdu', '2023-10-25', 'this is just testing message', '1', '2023-10-24 16:55:18', '2023-10-24 16:55:18', NULL),
(2, '1', '1', '1', 'Ali', 'test', 'google.com', 'class A', 'Urdu', '2023-10-25', 'testing message', '1', '2023-10-24 16:58:15', '2023-10-24 16:58:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Institute_address` text DEFAULT NULL,
  `institute_city` text DEFAULT NULL,
  `institute_contact` varchar(255) DEFAULT NULL,
  `institute_ptcl` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp(),
  `username` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `who_is_login` text DEFAULT NULL,
  `active_status` int(11) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Institute_address`, `institute_city`, `institute_contact`, `institute_ptcl`, `name`, `email`, `email_verified_at`, `username`, `password`, `who_is_login`, `active_status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hyd', 'Hyderabad', '22222222', '02222222222', 'Stevta', 'stevta12@gmail.com', '2023-08-25 10:34:01', 'stevta1', '123', 'Institute', 0, NULL, '2023-08-25 05:34:01', '2023-08-25 05:34:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_batches`
--
ALTER TABLE `campus_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_billings`
--
ALTER TABLE `campus_billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_classes`
--
ALTER TABLE `campus_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_class_teachers`
--
ALTER TABLE `campus_class_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_departments`
--
ALTER TABLE `campus_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_employees`
--
ALTER TABLE `campus_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_employee_attendances`
--
ALTER TABLE `campus_employee_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_employee_leaves`
--
ALTER TABLE `campus_employee_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_inventory_management`
--
ALTER TABLE `campus_inventory_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_public_holidays`
--
ALTER TABLE `campus_public_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_student_store_assignments`
--
ALTER TABLE `campus_student_store_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_student_teacher_chats`
--
ALTER TABLE `campus_student_teacher_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_subjects`
--
ALTER TABLE `campus_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_subjects_teachers`
--
ALTER TABLE `campus_subjects_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_syllabus`
--
ALTER TABLE `campus_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_course_materials`
--
ALTER TABLE `campus_teacher_course_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_diary_assignments`
--
ALTER TABLE `campus_teacher_diary_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_recorded_lectures`
--
ALTER TABLE `campus_teacher_recorded_lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_student_attendances`
--
ALTER TABLE `campus_teacher_student_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_student_chats`
--
ALTER TABLE `campus_teacher_student_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_teacher_student_leave_approvals`
--
ALTER TABLE `campus_teacher_student_leave_approvals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_timetables`
--
ALTER TABLE `campus_timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class__sections`
--
ALTER TABLE `class__sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_sessions`
--
ALTER TABLE `current_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_fees`
--
ALTER TABLE `extra_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_books`
--
ALTER TABLE `library_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_super_admins`
--
ALTER TABLE `main_super_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_registrations`
--
ALTER TABLE `online_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_addmissions`
--
ALTER TABLE `student_addmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_available_times`
--
ALTER TABLE `teacher_available_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_notice_boards`
--
ALTER TABLE `teacher_notice_boards`
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
-- AUTO_INCREMENT for table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_batches`
--
ALTER TABLE `campus_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_billings`
--
ALTER TABLE `campus_billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_classes`
--
ALTER TABLE `campus_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_class_teachers`
--
ALTER TABLE `campus_class_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_departments`
--
ALTER TABLE `campus_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `campus_employees`
--
ALTER TABLE `campus_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campus_employee_attendances`
--
ALTER TABLE `campus_employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `campus_employee_leaves`
--
ALTER TABLE `campus_employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_inventory_management`
--
ALTER TABLE `campus_inventory_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_public_holidays`
--
ALTER TABLE `campus_public_holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campus_student_store_assignments`
--
ALTER TABLE `campus_student_store_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_student_teacher_chats`
--
ALTER TABLE `campus_student_teacher_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_subjects`
--
ALTER TABLE `campus_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campus_subjects_teachers`
--
ALTER TABLE `campus_subjects_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_syllabus`
--
ALTER TABLE `campus_syllabus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_teacher_course_materials`
--
ALTER TABLE `campus_teacher_course_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campus_teacher_diary_assignments`
--
ALTER TABLE `campus_teacher_diary_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_teacher_recorded_lectures`
--
ALTER TABLE `campus_teacher_recorded_lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_teacher_student_attendances`
--
ALTER TABLE `campus_teacher_student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `campus_teacher_student_chats`
--
ALTER TABLE `campus_teacher_student_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_teacher_student_leave_approvals`
--
ALTER TABLE `campus_teacher_student_leave_approvals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_timetables`
--
ALTER TABLE `campus_timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class__sections`
--
ALTER TABLE `class__sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `current_sessions`
--
ALTER TABLE `current_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_fees`
--
ALTER TABLE `extra_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `library_books`
--
ALTER TABLE `library_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_super_admins`
--
ALTER TABLE `main_super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `online_registrations`
--
ALTER TABLE `online_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_addmissions`
--
ALTER TABLE `student_addmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_available_times`
--
ALTER TABLE `teacher_available_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_notice_boards`
--
ALTER TABLE `teacher_notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
