-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 11:00 AM
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
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(225) DEFAULT NULL,
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
(1, 1, 'Marie', 'marie1', 'Hyderabad old campus', '03150038468', 'marie23.com', 'marie12@gmail.com', 'marie', '2023-08-07 16:35:22', '2023-08-07 16:35:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_batches`
--

CREATE TABLE `campus_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` varchar(225) DEFAULT NULL,
  `campus_id` varchar(255) DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_batches`
--

INSERT INTO `campus_batches` (`id`, `institute_id`, `campus_id`, `batch`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '2023 to 2024', '2023-08-28 14:33:22', '2023-08-28 14:33:22', NULL);

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

--
-- Dumping data for table `campus_billings`
--

INSERT INTO `campus_billings` (`id`, `institute_id`, `campus_id`, `purpose_name`, `amount`, `date`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'function', '10000', '2023-08-25', 'hello world', '2023-08-25 15:22:34', '2023-08-25 15:22:38', '2023-08-25 15:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `campus_classes`
--

CREATE TABLE `campus_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(225) DEFAULT NULL,
  `campus_id` int(225) DEFAULT NULL,
  `batch` varchar(225) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_classes`
--

INSERT INTO `campus_classes` (`id`, `institute_id`, `campus_id`, `batch`, `class_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, '1', '2023-08-07 16:36:40', '2023-08-07 16:36:40', NULL),
(2, 1, 1, NULL, '2', '2023-08-07 16:36:44', '2023-08-07 16:36:44', NULL),
(3, 1, 1, NULL, '3', '2023-08-07 16:36:49', '2023-08-07 16:36:49', NULL),
(4, 1, 1, NULL, '4', '2023-08-24 00:33:35', '2023-08-24 00:33:35', NULL),
(5, NULL, 1, NULL, '8', '2023-08-25 17:41:17', '2023-08-25 17:41:17', NULL),
(6, 1, 1, NULL, '9', '2023-08-25 18:05:37', '2023-08-25 18:05:37', NULL),
(7, NULL, 1, NULL, '10', '2023-08-28 14:18:13', '2023-08-28 14:18:13', NULL),
(8, 1, 1, NULL, 'cit', '2023-08-28 14:56:32', '2023-08-28 14:56:32', NULL),
(9, 1, 1, NULL, 'Graphic Designing', '2023-08-28 17:17:20', '2023-08-28 17:17:20', NULL),
(10, 1, 1, '2023 to 2024', 'Painting', '2023-08-28 17:18:17', '2023-08-28 17:18:17', NULL),
(11, 1, 1, '2023 to 2024', 'Knitting', '2023-09-04 18:40:35', '2023-09-04 18:40:35', NULL);

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
(1, '1', '1', 'Simba', '1', 'A', '2023-08-16 18:39:20', '2023-08-16 18:39:20', NULL),
(2, '1', '1', 'Josephine', '1', 'B', '2023-08-19 15:23:10', '2023-08-19 15:23:10', NULL),
(3, '1', '1', 'Josephine', '1', 'A', '2023-08-19 15:46:24', '2023-08-19 15:46:24', NULL),
(4, '1', '1', 'Simba', '1', 'A', '2023-08-30 17:11:15', '2023-08-30 17:11:15', NULL),
(5, '1', '1', 'Demetrius', '1', 'A', '2023-08-30 17:19:16', '2023-08-30 17:19:16', NULL);

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
(1, '1', '1', 'Teacher', '2023-08-07 16:48:17', '2023-08-07 16:48:17', NULL);

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
  `account_name` varchar(225) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `emergency_contact_name` text DEFAULT NULL,
  `emergency_contact_relation` text DEFAULT NULL,
  `emergency_contact_phone` text DEFAULT NULL,
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

INSERT INTO `campus_employees` (`id`, `institute_id`, `campus_id`, `title_designation`, `first_name`, `last_name`, `nic`, `hire_date`, `phone`, `email`, `password`, `address`, `department`, `salary`, `bps`, `medical_allowance`, `fuel_allowance`, `house_allowance`, `appointment_letter_no`, `no_of_leaves`, `account_name`, `account_number`, `emergency_contact_name`, `emergency_contact_relation`, `emergency_contact_phone`, `employee_pic`, `front_nic_pic`, `back_nic_pic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'Senior', 'Simba', 'Khan', '837', '2023-08-07', '03116736322', 'simbakhan22@gmail.com', 'simba', 'Hyderabad Latifabad', 'Teacher', '50000', '16', '40', '30', '20', 'simba1', '2', NULL, NULL, 'Mariakhan', 'Owner', '2863866', '', '', '', '2023-08-07 16:50:33', '2023-08-25 15:24:43', NULL),
(2, '1', '1', 'Commodi ut repellend', 'Josephine', 'Abbott', '1', '1990-03-23', '35', 'wideju@mailinator.com', 'Pa$$w0rd!', 'Qui sit inventore of', 'Teacher', '14', '65', '8', '41', '22', 'josephine2', '44', NULL, NULL, 'Judah Koch', 'Nesciunt soluta vol', '+1 (915) 677-9187', '', '', '', '2023-08-07 16:50:48', '2023-08-07 16:50:48', NULL),
(3, '1', '1', 'lapi', 'Demetrius', 'Colon', '68', '2011-02-03', '22', 'lohul@mailinator.com', NULL, 'Ad culpa eum veniam', 'Teacher', '57', '92', NULL, NULL, NULL, 'demetrius3', NULL, NULL, NULL, 'Lacota Vazquez', 'Consequatur reprehe', '+1 (119) 472-1059', '', '', '', '2023-08-07 16:50:54', '2023-08-25 15:24:28', NULL),
(4, '1', '1', 'Facere eiusmod est N', 'Ulla', 'Hester', '31', '1977-09-10', '100', 'cygyf@mailinator.com', 'Pa$$w0rd!', 'Est culpa occaecat i', 'Teacher', '60', '75', '3', '63', '38', 'ulla4', '63', NULL, NULL, 'Igor Roberson', 'Obcaecati amet reru', '+1 (867) 926-6101', '', '', '', '2023-08-25 15:23:41', '2023-08-25 15:23:41', NULL),
(5, '1', '1', 'Senior', 'silvester', 'Khan', '63692398', '28983', '03191443056', 'simba23@gmail.com', 'simba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '1', '1', 'Accusamus dolor aspe', 'Kyra', 'Hudson', '62', '2010-05-11', '18', 'vijeveke@mailinator.com', 'Pa$$w0rd!', 'Architecto dolores r', 'Teacher', '73', '20', '2', '94', '11', 'kyra6', '56', 'Gillian Ramsey', '636', 'Aladdin Lindsey', 'Et ducimus perspici', '+1 (905) 829-6268', '', '', '', '2023-08-29 13:48:46', '2023-08-29 13:48:46', NULL),
(7, '1', '1', 'Quibusdam vitae dele', 'alaina', 'khan', '76', '2011-05-27', '22', 'alaina22@gmail.com', 'alaina', 'Soluta sapiente occa', 'Teacher', '12', '45', '27', '4', '41', 'alaina7', '73', 'Wanda Lynch', '567', 'Dieter Zimmerman', 'In voluptates est d', '+1 (515) 846-5392', '', '', '', '2023-08-31 18:38:50', '2023-08-31 18:38:50', NULL),
(8, '1', '1', 'Laborum quae quasi d', 'kiyan', 'khan', '44', '1983-04-20', '7', 'kiyan22@gmail.com', 'kiyan', 'Ut dolores natus mol', 'Teacher', '89', '76', '51', '45', '80', 'kiyan8', '34', 'Harriet Hubbard', '52', 'August Herman', 'Temporibus iusto atq', '+1 (196) 711-5558', '', '', '', '2023-08-31 18:39:48', '2023-08-31 18:39:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_employee_attendances`
--

CREATE TABLE `campus_employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `emp_id` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `usage` text DEFAULT '0',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_inventory_management`
--

INSERT INTO `campus_inventory_management` (`id`, `institute_id`, `campus_id`, `item_name`, `stock`, `usage`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'pepsi', '50', '50', 'usgae today 5 bootles', '2023-08-25 14:48:28', '2023-08-25 14:52:42', '2023-08-25 14:52:42');

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
(1, '1', '1', 'Independence Day', '2023-08-15', '2023-08-15', 'Holiday for Celebration', '2023-08-15 15:47:00', '2023-08-15 15:47:40', '2023-08-15 15:47:40'),
(2, '1', '1', 'Independence Day Celebration', '2023-08-13', '2023-08-14', 'Off for Independence Day Celebration', '2023-08-15 15:48:16', '2023-08-15 15:48:16', NULL);

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

--
-- Dumping data for table `campus_student_store_assignments`
--

INSERT INTO `campus_student_store_assignments` (`id`, `institute_id`, `campus_id`, `student_id`, `student_gr`, `student_name`, `assignment_file`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', NULL, 'ggg', '2023-07-22 06:26:00', '2023-07-22 06:26:00', NULL),
(2, '4', '9', '1', 'AZALIACLASS-3A1', 'Azalia', '1772290112815115.docx', 'fdvsv', '2023-07-24 02:33:11', '2023-07-24 03:32:41', NULL),
(3, '4', '9', '1', 'AZALIACLASS-3A1', 'Azalia', '1772287086447849.docx', 'for class', '2023-07-24 02:44:35', '2023-07-24 02:44:35', NULL),
(4, '4', '9', '1', 'AZALIACLASS-3A1', 'Azalia', '1772287755962958.docx', 'dfgfg', '2023-07-24 02:55:14', '2023-07-24 02:55:14', NULL),
(5, '4', '9', '1', 'AZALIACLASS-3A1', 'Azalia', '1772290616077454.csv', 'for class', '2023-07-24 03:40:41', '2023-07-24 03:40:41', NULL),
(6, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772466816077590.docx', 'for class', '2023-07-26 02:21:19', '2023-07-26 02:21:19', NULL),
(7, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772467991135665.docx', 'for class', '2023-07-26 02:39:59', '2023-07-26 02:39:59', NULL),
(8, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772469144387119.docx', 'eyuiwtuiww', '2023-07-26 02:58:19', '2023-07-26 02:58:19', NULL),
(9, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772470557263697.docx', 'hellon', '2023-07-26 03:20:47', '2023-07-26 03:20:47', NULL),
(10, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772470774583753.docx', 'yryriy', '2023-07-26 03:24:14', '2023-07-26 03:24:14', NULL),
(11, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772470862777705.docx', 'iyoiy', '2023-07-26 03:25:38', '2023-07-26 03:25:38', NULL),
(12, '4', '9', '3', 'KEITHCLASS-1B3', 'Keith', '1772471088181042.docx', '896896', '2023-07-26 03:29:13', '2023-07-26 03:29:13', NULL),
(13, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773571240565698.pdf', 'yup', '2023-08-07 18:55:40', '2023-08-07 18:55:40', NULL),
(14, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773571275055584.pdf', 'yup', '2023-08-07 18:56:13', '2023-08-07 18:56:13', NULL),
(15, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773571353436152.pdf', 'yup', '2023-08-07 18:57:28', '2023-08-07 18:57:28', NULL),
(16, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773571367151532.pdf', 'yupsss', '2023-08-07 18:57:41', '2023-08-07 18:57:41', NULL),
(17, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773572530770247.pdf', 'yups', '2023-08-07 19:16:10', '2023-08-07 19:16:10', NULL),
(18, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773572995891588.pdf', 'hello', '2023-08-07 19:23:34', '2023-08-07 19:23:34', NULL),
(19, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773574030990073.pdf', 'yyyy', '2023-08-07 19:40:01', '2023-08-07 19:40:01', NULL),
(20, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773574328453860.pdf', 'abc', '2023-08-07 19:44:45', '2023-08-07 19:44:45', NULL),
(21, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773574580789188.pdf', '60000', '2023-08-07 19:48:45', '2023-08-07 19:48:45', NULL),
(22, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773574706031866.pdf', 'yup', '2023-08-07 19:50:45', '2023-08-07 19:50:45', NULL),
(23, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773574881646207.pdf', '8tytyy', '2023-08-07 19:53:32', '2023-08-07 19:53:32', NULL),
(24, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773575018279208.pdf', '121221', '2023-08-07 19:55:43', '2023-08-07 19:55:43', NULL),
(25, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773575128252593.pdf', '63743w', '2023-08-07 19:57:28', '2023-08-07 19:57:28', NULL),
(26, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773575876391274.pdf', 'abc', '2023-08-07 20:09:21', '2023-08-07 20:09:21', NULL),
(27, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773576110356005.pdf', '72773', '2023-08-07 20:13:04', '2023-08-07 20:13:04', NULL),
(28, '1', '1', '1', 'TASHA1A1', 'Tasha', '1773576232135085.pdf', '823223', '2023-08-07 20:15:00', '2023-08-07 20:15:00', NULL);

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

--
-- Dumping data for table `campus_student_teacher_chats`
--

INSERT INTO `campus_student_teacher_chats` (`id`, `institute_id`, `campus_id`, `student_gr`, `student_name`, `student_class`, `student_section`, `teacher_name`, `message`, `message_sent_time`, `message_sent_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'hello sir simba', '3:09 AM', '2023-08-15', '2023-08-15 17:09:41', '2023-08-15 17:09:41', NULL),
(2, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'yup', '3:18 AM', '2023-08-15', '2023-08-15 17:18:42', '2023-08-15 17:18:42', NULL),
(3, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'hii', '3:22 AM', '2023-08-15', '2023-08-15 17:22:44', '2023-08-15 17:22:44', NULL),
(4, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'hi simba sir', '3:27 AM', '2023-08-15', '2023-08-15 17:27:57', '2023-08-15 17:27:57', NULL),
(5, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'hi sir ap aj ayee hains school', '3:55 AM', '2023-08-15', '2023-08-15 17:55:00', '2023-08-15 17:55:00', NULL),
(6, '1', '1', 'IQRA1A2', 'Iqra', '1', 'A', 'Simba', 'Hi sir SImba SOry im not coming today', '4:28 AM', '2023-08-15', '2023-08-15 18:28:17', '2023-08-15 18:28:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_subjects`
--

CREATE TABLE `campus_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` varchar(225) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_subjects`
--

INSERT INTO `campus_subjects` (`id`, `institute_id`, `campus_id`, `class_name`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'zoology 33', '2023-08-07 16:37:58', '2023-08-24 02:18:09', NULL),
(2, '1', '1', '1', 'English literature', '2023-08-07 16:38:06', '2023-08-10 16:55:48', NULL),
(3, '1', '1', '1', 'Maths', '2023-08-07 16:38:13', '2023-08-07 16:38:13', NULL),
(4, '1', '1', '1', 'physics', '2023-08-10 16:01:23', '2023-08-10 16:01:23', NULL),
(5, '1', '1', '2', 'brain', '2023-08-24 02:01:16', '2023-08-24 02:01:16', NULL),
(6, '1', '1', 'cit', 'web enginering', '2023-08-28 16:08:55', '2023-08-28 16:08:55', NULL),
(7, '1', '1', 'cit', 'WEb', '2023-08-28 16:34:54', '2023-08-28 16:34:54', NULL),
(8, '1', '1', 'cit', 'Data Science', '2023-08-28 16:57:35', '2023-08-28 16:59:34', NULL),
(9, '1', '1', 'Knitting', 'Stitching', '2023-09-04 18:41:11', '2023-09-04 18:41:11', NULL),
(10, '1', '1', 'Knitting', 'Hand embroidery', '2023-09-04 18:41:22', '2023-09-04 18:41:22', NULL);

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
(1, '1', '1', '1', 'A', 'Simba', 'zoology 33, English literature', '2023-08-19 17:05:29', '2023-08-19 17:05:29', NULL),
(2, '1', '1', '1', 'A', 'Josephine', 'zoology, English literature, physics', '2023-08-19 17:43:51', '2023-08-19 17:43:51', NULL),
(4, '1', '1', 'cit', 'B', 'Simba', 'web enginering', '2023-08-30 17:44:11', '2023-08-30 17:44:11', NULL),
(5, '1', '1', 'cit', 'B', 'Ulla', 'WEb, Data Science', '2023-08-30 18:20:34', '2023-08-30 18:20:34', NULL),
(6, '1', '1', 'cit', NULL, 'kiyan', 'web enginering, Data Science', '2023-08-31 19:38:45', '2023-08-31 19:38:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_syllabus`
--

CREATE TABLE `campus_syllabus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
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

INSERT INTO `campus_syllabus` (`id`, `institute_id`, `campus_id`, `class_name`, `subject_name`, `author_name`, `book_name`, `no_of_chapters`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'physics', 'Maryah', 'karwan e urdu', '5', '2023-08-07 16:39:32', '2023-08-23 23:41:54', NULL),
(2, '1', '1', '1', 'Maths', 'silvester cat', 'abc', '5', '2023-08-07 16:40:43', '2023-08-24 17:39:27', NULL),
(3, '1', '1', '1', 'Maths', 'IQRA', 'Analysis of maths', '5', '2023-08-07 16:41:24', '2023-08-24 17:38:43', '2023-08-24 10:38:43'),
(4, '1', '1', '1', 'Maths', 'mariya khan', 'english vinglish', '20', '2023-08-23 23:29:33', '2023-08-23 23:37:34', '2023-08-23 16:37:34'),
(5, '1', '1', '1', 'Maths', 'iqra', 'cartoons', '30', '2023-08-24 17:38:28', '2023-08-24 17:38:59', '2023-08-24 10:38:59'),
(6, '1', '1', '1', 'physics', 'marie simba', 'english', '1000', '2023-08-25 15:12:03', '2023-08-25 15:12:03', NULL),
(7, '1', '1', 'cit', NULL, 'aiman talib', 'parrots', '5', '2023-08-28 18:31:41', '2023-08-28 18:31:41', NULL),
(8, '1', '1', 'cit', 'web enginering', 'Aiman Talibbb', 'Cats', '6', '2023-08-28 18:31:58', '2023-08-28 18:31:58', NULL),
(9, '1', '1', '1', 'zoology 33', 'anas', '265', '161', '2023-08-28 18:42:15', '2023-08-28 18:42:15', NULL);

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

INSERT INTO `campus_teacher_course_materials` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `subject_name`, `course_title`, `upload_date`, `uploaded_document`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', '1', 'zoology 33', 'Tempora et temporibu', '1980-09-15', '1775552321243262.jpg', '2023-08-29 15:44:06', '2023-08-29 15:44:06', NULL),
(2, '1', '1', '1', '1', 'English literature', 'english lectures', '2023-08-31', '1775731885567878.jpg', '2023-08-31 15:18:12', '2023-08-31 15:18:12', NULL);

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

INSERT INTO `campus_teacher_diary_assignments` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `subject_name`, `title`, `diary_note`, `uploaded_document`, `start_date`, `due_date`, `assignmnet_total_marks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', '1', 'Urdu', 'Urdu assignment', 'please submtted the assignment on time', '1773569765940721.pdf', '2023-08-07', '2023-08-08', '50', '2023-08-07 18:32:14', '2023-08-07 18:32:14', NULL),
(2, '1', '1', '1', '1', 'zoology 33', 'weiuywuyoweyw', 'complete on time', '1775551006327264.jpg', '2023-08-29', '2023-08-30', '400', '2023-08-29 15:23:12', '2023-08-29 15:23:12', NULL),
(3, '1', '1', '1', '1', 'zoology 33', '18-Oct-1992', 'Minus omnis necessit', '1775551211143931.jpg', '2005-03-30', '1994-08-24', '44', '2023-08-29 15:26:27', '2023-08-29 15:26:27', NULL),
(4, '1', '1', '1', 'cit', 'WEb', 'coplete on time please', 'must submitted', '1775731621322284.txt', '2023-08-31', '2023-09-02', '90', '2023-08-31 15:14:00', '2023-08-31 15:14:00', NULL);

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

INSERT INTO `campus_teacher_recorded_lectures` (`id`, `institute_id`, `campus_id`, `teacher_id`, `class_name`, `subject_name`, `lecture_title`, `lecture_link`, `lecture_upld_dte`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '1', 'zoology 33', 'eng lecture part 1', 'https://youtube.com/shorts/p9c6k4PE6so?feature=share', '2023-08-10', '2023-08-10 18:30:12', '2023-08-29 15:05:36', NULL),
(2, 1, 1, 1, 'cit', 'web enginering', 'Web tutorial', 'https://www.w3schools.com/js/default.asp', '2023-08-29', '2023-08-29 14:06:05', '2023-08-29 14:06:05', NULL),
(3, 1, 1, 1, 'cit', 'WEb', 'eng lecture part 1', 'https://youtube.com/shorts/p9c6k4PE6so?feature=share', '2023-08-30', '2023-08-30 15:23:06', '2023-08-30 15:23:06', NULL),
(4, 1, 1, 1, '1', 'zoology', 'hello its me', 'www.youtube.com', '2023-08-31', '2023-08-31 15:06:24', '2023-08-31 15:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_teacher_student_attendances`
--

CREATE TABLE `campus_teacher_student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(255) DEFAULT NULL,
  `campus_id` int(255) DEFAULT NULL,
  `teacher_id` int(255) DEFAULT NULL,
  `class_name` text DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `admission_no` text DEFAULT NULL,
  `student_roll_number` text DEFAULT NULL,
  `student_id` int(255) DEFAULT NULL,
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
(1, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-09', 'Absent', '2023-08-09 15:37:28', '2023-08-09 15:37:55', NULL),
(2, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-09', 'Leave', '2023-08-09 15:37:28', '2023-08-09 15:37:55', NULL),
(3, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-09', 'Present', '2023-08-09 15:37:28', '2023-08-09 15:37:55', NULL),
(4, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-09', 'Present', '2023-08-09 15:37:28', '2023-08-09 15:37:55', NULL),
(5, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-01', 'Present', '2023-08-09 15:39:08', '2023-08-09 15:39:08', NULL),
(6, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-01', 'Present', '2023-08-09 15:39:08', '2023-08-09 15:39:08', NULL),
(7, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-01', 'Present', '2023-08-09 15:39:08', '2023-08-09 15:39:08', NULL),
(8, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-01', 'Present', '2023-08-09 15:39:08', '2023-08-09 15:39:08', NULL),
(9, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-02', 'Present', '2023-08-09 15:39:50', '2023-08-09 15:39:50', NULL),
(10, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-02', 'Leave', '2023-08-09 15:39:50', '2023-08-09 15:39:50', NULL),
(11, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-02', 'Present', '2023-08-09 15:39:50', '2023-08-09 15:39:50', NULL),
(12, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-02', 'Present', '2023-08-09 15:39:50', '2023-08-09 15:39:50', NULL),
(13, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-03', 'Present', '2023-08-09 15:40:23', '2023-08-09 15:40:23', NULL),
(14, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-03', 'Present', '2023-08-09 15:40:23', '2023-08-09 15:40:23', NULL),
(15, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-03', 'Present', '2023-08-09 15:40:23', '2023-08-09 15:40:23', NULL),
(16, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-03', 'Present', '2023-08-09 15:40:23', '2023-08-09 15:40:23', NULL),
(17, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-04', 'Absent', '2023-08-09 19:03:00', '2023-08-09 19:03:00', NULL),
(18, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-04', 'Absent', '2023-08-09 19:03:00', '2023-08-09 19:03:00', NULL),
(19, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-04', 'Present', '2023-08-09 19:03:00', '2023-08-09 19:03:00', NULL),
(20, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-04', 'Present', '2023-08-09 19:03:00', '2023-08-09 19:03:00', NULL),
(21, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-05', 'Present', '2023-08-09 19:03:56', '2023-08-09 19:03:56', NULL),
(22, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-05', 'Leave', '2023-08-09 19:03:56', '2023-08-09 19:03:56', NULL),
(23, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-05', 'Absent', '2023-08-09 19:03:56', '2023-08-09 19:03:56', NULL),
(24, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-05', 'Present', '2023-08-09 19:03:56', '2023-08-09 19:03:56', NULL),
(25, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-07', 'Present', '2023-08-09 19:04:23', '2023-08-09 19:04:23', NULL),
(26, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-07', 'Present', '2023-08-09 19:04:23', '2023-08-09 19:04:23', NULL),
(27, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-07', 'Present', '2023-08-09 19:04:23', '2023-08-09 19:04:23', NULL),
(28, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-07', 'Present', '2023-08-09 19:04:23', '2023-08-09 19:04:23', NULL),
(29, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-08', 'Absent', '2023-08-09 19:04:45', '2023-08-09 19:04:45', NULL),
(30, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-08', 'Absent', '2023-08-09 19:04:45', '2023-08-09 19:04:45', NULL),
(31, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-08', 'Leave', '2023-08-09 19:04:45', '2023-08-09 19:04:45', NULL),
(32, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-08', 'Present', '2023-08-09 19:04:45', '2023-08-09 19:04:45', NULL),
(33, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-10', 'Present', '2023-08-09 19:05:16', '2023-08-09 19:05:16', NULL),
(34, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-10', 'Present', '2023-08-09 19:05:16', '2023-08-09 19:05:16', NULL),
(35, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-10', 'Present', '2023-08-09 19:05:16', '2023-08-09 19:05:16', NULL),
(36, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-10', 'Present', '2023-08-09 19:05:16', '2023-08-09 19:05:16', NULL),
(37, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-11', 'Absent', '2023-08-09 19:05:32', '2023-08-09 19:05:32', NULL),
(38, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-11', 'Present', '2023-08-09 19:05:32', '2023-08-09 19:05:32', NULL),
(39, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-11', 'Leave', '2023-08-09 19:05:32', '2023-08-09 19:05:32', NULL),
(40, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-11', 'Present', '2023-08-09 19:05:32', '2023-08-09 19:05:32', NULL),
(41, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-12', 'Present', '2023-08-09 19:06:13', '2023-08-09 19:06:13', NULL),
(42, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-12', 'Present', '2023-08-09 19:06:13', '2023-08-09 19:06:13', NULL),
(43, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-12', 'Present', '2023-08-09 19:06:13', '2023-08-09 19:06:13', NULL),
(44, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-12', 'Present', '2023-08-09 19:06:13', '2023-08-09 19:06:13', NULL),
(45, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-14', 'Absent', '2023-08-09 19:06:44', '2023-08-09 19:06:44', NULL),
(46, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-14', 'Present', '2023-08-09 19:06:44', '2023-08-09 19:06:44', NULL),
(47, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-14', 'Present', '2023-08-09 19:06:44', '2023-08-09 19:06:44', NULL),
(48, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-14', 'Present', '2023-08-09 19:06:44', '2023-08-09 19:06:44', NULL),
(49, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-15', 'Present', '2023-08-09 19:07:16', '2023-08-09 19:07:16', NULL),
(50, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-15', 'Present', '2023-08-09 19:07:16', '2023-08-09 19:07:16', NULL),
(51, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-15', 'Present', '2023-08-09 19:07:16', '2023-08-09 19:07:16', NULL),
(52, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-15', 'Present', '2023-08-09 19:07:16', '2023-08-09 19:07:16', NULL),
(53, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-16', 'Present', '2023-08-09 19:07:34', '2023-08-09 19:07:34', NULL),
(54, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-16', 'Leave', '2023-08-09 19:07:34', '2023-08-09 19:07:34', NULL),
(55, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-16', 'Absent', '2023-08-09 19:07:34', '2023-08-09 19:07:34', NULL),
(56, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-16', 'Present', '2023-08-09 19:07:34', '2023-08-09 19:07:34', NULL),
(57, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-17', 'Present', '2023-08-09 19:07:49', '2023-08-09 19:07:49', NULL),
(58, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-17', 'Present', '2023-08-09 19:07:49', '2023-08-09 19:07:49', NULL),
(59, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-17', 'Present', '2023-08-09 19:07:49', '2023-08-09 19:07:49', NULL),
(60, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-17', 'Present', '2023-08-09 19:07:49', '2023-08-09 19:07:49', NULL),
(61, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-18', 'Present', '2023-08-09 19:08:03', '2023-08-09 19:08:03', NULL),
(62, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-18', 'Present', '2023-08-09 19:08:03', '2023-08-09 19:08:03', NULL),
(63, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-18', 'Present', '2023-08-09 19:08:03', '2023-08-09 19:08:03', NULL),
(64, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-18', 'Present', '2023-08-09 19:08:03', '2023-08-09 19:08:03', NULL),
(65, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-19', 'Present', '2023-08-09 19:08:31', '2023-08-09 19:08:31', NULL),
(66, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-19', 'Absent', '2023-08-09 19:08:31', '2023-08-09 19:08:31', NULL),
(67, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-19', 'Present', '2023-08-09 19:08:31', '2023-08-09 19:08:31', NULL),
(68, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-19', 'Absent', '2023-08-09 19:08:31', '2023-08-09 19:08:31', NULL),
(69, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-21', 'Present', '2023-08-09 19:09:19', '2023-08-09 19:09:19', NULL),
(70, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-21', 'Present', '2023-08-09 19:09:19', '2023-08-09 19:09:19', NULL),
(71, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-21', 'Present', '2023-08-09 19:09:19', '2023-08-09 19:09:19', NULL),
(72, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-21', 'Present', '2023-08-09 19:09:19', '2023-08-09 19:09:19', NULL),
(73, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-22', 'Present', '2023-08-09 19:09:32', '2023-08-09 19:09:32', NULL),
(74, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-22', 'Present', '2023-08-09 19:09:32', '2023-08-09 19:09:32', NULL),
(75, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-22', 'Present', '2023-08-09 19:09:32', '2023-08-09 19:09:32', NULL),
(76, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-22', 'Present', '2023-08-09 19:09:32', '2023-08-09 19:09:32', NULL),
(77, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-23', 'Present', '2023-08-09 19:09:46', '2023-08-09 19:09:46', NULL),
(78, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-23', 'Present', '2023-08-09 19:09:46', '2023-08-09 19:09:46', NULL),
(79, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-23', 'Present', '2023-08-09 19:09:46', '2023-08-09 19:09:46', NULL),
(80, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-23', 'Present', '2023-08-09 19:09:46', '2023-08-09 19:09:46', NULL),
(81, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-24', 'Present', '2023-08-09 19:10:01', '2023-08-09 19:10:01', NULL),
(82, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-24', 'Present', '2023-08-09 19:10:01', '2023-08-09 19:10:01', NULL),
(83, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-24', 'Present', '2023-08-09 19:10:01', '2023-08-09 19:10:01', NULL),
(84, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-24', 'Present', '2023-08-09 19:10:01', '2023-08-09 19:10:01', NULL),
(85, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-25', 'Leave', '2023-08-09 19:10:17', '2023-08-09 19:10:17', NULL),
(86, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-25', 'Present', '2023-08-09 19:10:17', '2023-08-09 19:10:17', NULL),
(87, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-25', 'Absent', '2023-08-09 19:10:17', '2023-08-09 19:10:17', NULL),
(88, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-25', 'Leave', '2023-08-09 19:10:17', '2023-08-09 19:10:17', NULL),
(89, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-26', 'Present', '2023-08-09 19:10:42', '2023-08-09 19:10:42', NULL),
(90, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-26', 'Present', '2023-08-09 19:10:42', '2023-08-09 19:10:42', NULL),
(91, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-26', 'Present', '2023-08-09 19:10:42', '2023-08-09 19:10:42', NULL),
(92, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-26', 'Present', '2023-08-09 19:10:42', '2023-08-09 19:10:42', NULL),
(93, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-28', 'Present', '2023-08-09 19:11:08', '2023-08-09 19:11:20', NULL),
(94, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-28', 'Present', '2023-08-09 19:11:08', '2023-08-09 19:11:20', NULL),
(95, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-28', 'Present', '2023-08-09 19:11:08', '2023-08-09 19:11:20', NULL),
(96, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-28', 'Present', '2023-08-09 19:11:08', '2023-08-09 19:11:20', NULL),
(97, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-29', 'Present', '2023-08-09 19:11:47', '2023-08-09 19:11:47', NULL),
(98, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-29', 'Present', '2023-08-09 19:11:47', '2023-08-09 19:11:47', NULL),
(99, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-29', 'Present', '2023-08-09 19:11:47', '2023-08-09 19:11:47', NULL),
(100, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-29', 'Present', '2023-08-09 19:11:47', '2023-08-09 19:11:47', NULL),
(101, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-30', 'Present', '2023-08-09 19:12:02', '2023-08-09 19:12:02', NULL),
(102, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-30', 'Present', '2023-08-09 19:12:02', '2023-08-09 19:12:02', NULL),
(103, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-30', 'Present', '2023-08-09 19:12:02', '2023-08-09 19:12:02', NULL),
(104, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-30', 'Present', '2023-08-09 19:12:02', '2023-08-09 19:12:02', NULL),
(105, 1, 1, 1, '1', 'A', '1', 'TASHA1A1', 1, 'TashaHicks', '2023-08-31', 'Present', '2023-08-09 19:12:17', '2023-08-09 19:12:17', NULL),
(106, 1, 1, 1, '1', 'A', '2', 'IQRA1A2', 2, 'Iqrashaikh', '2023-08-31', 'Present', '2023-08-09 19:12:17', '2023-08-09 19:12:17', NULL),
(107, 1, 1, 1, '1', 'A', '3', 'KERMIT33', 3, 'KermitRogers', '2023-08-31', 'Present', '2023-08-09 19:12:17', '2023-08-09 19:12:17', NULL),
(108, 1, 1, 1, '1', 'A', '4', 'CLAYTON1A4', 4, 'ClaytonBuckley', '2023-08-31', 'Present', '2023-08-09 19:12:17', '2023-08-09 19:12:17', NULL);

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

--
-- Dumping data for table `campus_teacher_student_chats`
--

INSERT INTO `campus_teacher_student_chats` (`id`, `institute_id`, `campus_id`, `teacher_id`, `teacher_name`, `class_name`, `section_name`, `student_name`, `student_gr_number`, `message`, `message_sent_time`, `message_sent_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'simba', '1', 'A', 'iqra', 'IQRA1A2', 'hello II', '1:13 AM', '2023-08-15', '2023-08-15 08:12:27', '2023-08-15 08:12:27', NULL),
(2, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'ywyeuu', '02:46 AM', '2023-08-15', '2023-08-15 16:46:08', '2023-08-15 16:46:08', NULL),
(3, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'hi', '02:48 AM', '2023-08-15', '2023-08-15 16:48:19', '2023-08-15 16:48:19', NULL),
(4, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'hello iqra', '02:48 AM', '2023-08-15', '2023-08-15 16:48:36', '2023-08-15 16:48:36', NULL),
(5, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'heelo iqra', '02:49 AM', '2023-08-15', '2023-08-15 16:49:45', '2023-08-15 16:49:45', NULL),
(6, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'kia kar rhi h', '02:50 AM', '2023-08-15', '2023-08-15 16:50:42', '2023-08-15 16:50:42', NULL),
(7, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'hhhkhkh hohohoho', '02:51 AM', '2023-08-15', '2023-08-15 16:51:21', '2023-08-15 16:51:21', NULL),
(8, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'hi how are you', '02:59 AM', '2023-08-15', '2023-08-15 16:59:23', '2023-08-15 16:59:23', NULL),
(9, '1', '1', '1', 'Simba', '1', 'A', 'Iqra', 'IQRA1A2', 'hiiiii', '03:00 AM', '2023-08-15', '2023-08-15 17:00:36', '2023-08-15 17:00:36', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `campus_timetables`
--

CREATE TABLE `campus_timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` text DEFAULT NULL,
  `campus_id` text DEFAULT NULL,
  `class_name` text DEFAULT NULL,
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

INSERT INTO `campus_timetables` (`id`, `institute_id`, `campus_id`, `class_name`, `subject_name`, `day`, `start_time`, `end_time`, `teacher`, `timetable_created_on`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '2', NULL, 'Monday', '07:35 AM', '05:19 PM', 'Simba', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(2, '1', '1', '2', NULL, 'Tuesday', '06:28 AM', '05:23 PM', 'Demetrius', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(3, '1', '1', '2', NULL, 'Wednesday', '01:01 AM', '06:46 PM', 'Josephine', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(4, '1', '1', '2', NULL, 'Thursday', '05:20 AM', '05:12 PM', '--', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(5, '1', '1', '2', NULL, 'Friday', '05:21 PM', '05:26 AM', '--', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(6, '1', '1', '2', NULL, 'Saturday', '05:29 AM', '05:26 PM', '--', '2023-08-18', '2023-08-18 17:26:06', '2023-08-18 17:26:06', NULL),
(7, '1', '1', '1', NULL, 'Monday', '04:48 PM', '11:20 PM', 'Demetrius', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(8, '1', '1', '1', NULL, 'Tuesday', '06:44 AM', '01:23 PM', 'Josephine', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(9, '1', '1', '1', NULL, 'Wednesday', '03:01 PM', '05:02 PM', '--', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(10, '1', '1', '1', NULL, 'Thursday', '01:06 AM', '04:07 AM', 'Demetrius', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(11, '1', '1', '1', NULL, 'Friday', '08:07 AM', '09:54 AM', 'Simba', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(12, '1', '1', '1', NULL, 'Saturday', '11:09 AM', '01:30 AM', '--', '2023-08-24', '2023-08-24 17:31:30', '2023-08-24 17:31:30', NULL),
(13, '1', '1', '1', NULL, 'Monday', '10:51 PM', '02:24 PM', 'Simba', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(14, '1', '1', '1', NULL, 'Tuesday', '10:41 AM', '11:48 PM', 'Demetrius', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(15, '1', '1', '1', NULL, 'Wednesday', '02:25 PM', '03:32 PM', 'Demetrius', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(16, '1', '1', '1', NULL, 'Thursday', '01:12 AM', '03:40 AM', 'Demetrius', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(17, '1', '1', '1', NULL, 'Friday', '06:27 AM', '05:10 PM', 'Demetrius', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(18, '1', '1', '1', NULL, 'Saturday', '11:57 PM', '03:07 PM', 'Josephine', '2023-08-24', '2023-08-24 17:36:04', '2023-08-24 17:36:04', NULL),
(19, '1', '1', '1', NULL, 'Monday', '09:46 PM', '08:14 PM', '--', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(20, '1', '1', '1', NULL, 'Tuesday', '04:20 PM', '02:21 AM', 'Josephine', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(21, '1', '1', '1', NULL, 'Wednesday', '08:28 PM', '11:02 PM', 'Josephine', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(22, '1', '1', '1', NULL, 'Thursday', '02:38 AM', '06:07 AM', 'Josephine', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(23, '1', '1', '1', NULL, 'Friday', '10:54 AM', '03:52 PM', '--', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(24, '1', '1', '1', NULL, 'Saturday', '04:06 AM', '08:20 AM', 'Josephine', '2023-09-05', '2023-09-05 19:22:56', '2023-09-05 19:22:56', NULL),
(25, '1', '1', '1', NULL, 'Monday', '08:04 PM', '11:15 PM', '--', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(26, '1', '1', '1', NULL, 'Tuesday', '12:47 PM', '02:34 AM', '--', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(27, '1', '1', '1', NULL, 'Wednesday', '04:44 PM', '01:56 AM', 'Simba', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(28, '1', '1', '1', NULL, 'Thursday', '10:51 AM', '02:41 AM', 'Josephine', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(29, '1', '1', '1', NULL, 'Friday', '07:19 PM', '03:31 AM', 'Josephine', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(30, '1', '1', '1', NULL, 'Saturday', '07:01 AM', '09:11 PM', '--', '2023-09-05', '2023-09-05 19:27:54', '2023-09-05 19:27:54', NULL),
(31, '1', '1', 'cit', NULL, 'Monday', '05:24 AM', '05:01 AM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(32, '1', '1', 'cit', NULL, 'Tuesday', '08:26 AM', '12:11 PM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(33, '1', '1', 'cit', NULL, 'Wednesday', '07:13 AM', '07:49 PM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(34, '1', '1', 'cit', NULL, 'Thursday', '06:11 AM', '10:49 AM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(35, '1', '1', 'cit', NULL, 'Friday', '09:31 AM', '03:05 AM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(36, '1', '1', 'cit', NULL, 'Saturday', '05:10 AM', '07:16 PM', 'kiyan', '2023-09-05', '2023-09-05 19:28:41', '2023-09-05 19:28:41', NULL),
(37, '1', '1', 'cit', 'Data Science', 'Monday', '05:36 PM', '02:28 AM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL),
(38, '1', '1', 'cit', 'Data Science', 'Tuesday', '10:19 PM', '11:08 PM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL),
(39, '1', '1', 'cit', 'Data Science', 'Wednesday', '01:51 PM', '03:19 AM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL),
(40, '1', '1', 'cit', 'Data Science', 'Thursday', '09:05 AM', '06:02 AM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL),
(41, '1', '1', 'cit', 'Data Science', 'Friday', '06:37 PM', '05:10 AM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL),
(42, '1', '1', 'cit', 'Data Science', 'Saturday', '09:11 AM', '05:03 AM', 'Ulla', '2023-09-05', '2023-09-05 19:35:41', '2023-09-05 19:35:41', NULL);

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
(1, 'Hyderabad', '2023-06-21 07:40:03', '2023-06-21 07:41:07', NULL),
(2, 'Karachi', '2023-06-21 07:48:14', '2023-06-21 07:48:14', NULL),
(3, 'Lahore', '2023-06-22 02:51:02', '2023-06-22 02:51:02', NULL),
(4, 'Latifabad', '2023-06-22 02:51:09', '2023-06-22 02:51:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class__sections`
--

CREATE TABLE `class__sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` int(225) DEFAULT NULL,
  `campus_id` int(225) DEFAULT NULL,
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
(1, 1, 1, '1', 'A', '2023-08-07 16:37:00', '2023-08-07 16:37:00', NULL),
(2, 1, 1, '1', 'B', '2023-08-07 16:37:09', '2023-08-07 16:37:09', NULL),
(3, 1, 1, '1', 'C', '2023-08-07 16:37:17', '2023-08-07 16:37:17', NULL),
(4, 1, 1, '2', 'A', '2023-08-08 14:53:52', '2023-08-08 14:53:52', NULL),
(5, 1, 1, '2', 'B', '2023-08-08 14:53:59', '2023-08-08 14:53:59', NULL),
(6, 1, 1, '2', 'C', '2023-08-08 14:54:06', '2023-08-08 14:54:06', NULL),
(7, 1, 1, '4', 'A', '2023-08-24 00:34:16', '2023-08-24 00:34:16', NULL),
(8, 1, 1, '9', 'A', '2023-08-25 18:10:41', '2023-08-25 18:10:41', NULL),
(9, 1, 1, '9', 'B', '2023-08-25 18:10:48', '2023-08-25 18:10:48', NULL),
(10, 1, 1, '9', 'C', '2023-08-25 18:10:54', '2023-08-25 18:10:54', NULL),
(11, 1, 1, 'cit', 'A', '2023-08-31 16:29:03', '2023-08-31 16:29:03', NULL),
(12, 1, 1, 'cit', 'B', '2023-08-31 16:29:10', '2023-08-31 16:29:10', NULL),
(13, 1, 1, 'cit', 'C', '2023-08-31 16:29:16', '2023-08-31 16:29:16', NULL);

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

--
-- Dumping data for table `current_sessions`
--

INSERT INTO `current_sessions` (`id`, `institute_id`, `session_years`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2023 to 2024', '2023-08-16 16:11:48', '2023-08-16 16:11:48', NULL),
(2, '1', '2024 to 2025', '2023-08-16 16:59:35', '2023-08-16 16:59:35', NULL);

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
  `id` int(20) UNSIGNED NOT NULL,
  `institute_name` text DEFAULT NULL,
  `Institute_username` text DEFAULT NULL,
  `Institute_address` text DEFAULT NULL,
  `institute_password` text DEFAULT NULL,
  `institute_city` text DEFAULT NULL,
  `institute_email` text DEFAULT NULL,
  `institute_contact` text DEFAULT NULL,
  `institute_ptcl` text DEFAULT NULL,
  `lock_status` text DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute_name`, `Institute_username`, `Institute_address`, `institute_password`, `institute_city`, `institute_email`, `institute_contact`, `institute_ptcl`, `lock_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'city', 'city1', 'Hyderabad', 'city123', 'Hyderabad', 'city123@gmail.com', '03191443056', '6366363629', '0', '2023-08-07 16:32:15', '2023-08-16 19:13:00', NULL),
(2, 'Kashan', 'kashan2', 'hyderabad', 'kashan12345', 'Hyderabad', 'shaikhkashan670@gmail.com', '03173859647', '223344', '0', '2023-08-11 14:57:22', '2023-08-11 14:57:23', NULL),
(3, 'Maries', 'maries3', 'hyderbad', 'maries', 'Hyderabad', 'mariakhan22944@gmail.com', '03191443056', '02237177377', '0', '2023-08-16 19:13:49', '2023-08-16 19:13:49', NULL);

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
(40, '2023_09_01_112125_create_teacher_available_times_table', 29);

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
  `batch` varchar(400) DEFAULT NULL,
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
  `account_name` varchar(225) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `student_email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `result_status` text DEFAULT NULL,
  `next_session_status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_addmissions`
--

INSERT INTO `student_addmissions` (`id`, `institute_id`, `campus_id`, `batch`, `first_name`, `last_name`, `surname`, `gender`, `religion`, `birth_date`, `birth_certificate_img`, `father_name`, `contact`, `Address`, `enrollment_date`, `class_name`, `section_name`, `gr`, `scholarship_percentage`, `student_img`, `covid_certificate_img`, `last_school`, `leaving_certificate_img`, `account_name`, `account_number`, `student_email`, `password`, `result_status`, `next_session_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 'Tasha', 'Hicks', 'Velasquez', 'Female', 'islam', '2000-05-31', '', 'Hooks', '032737686292', 'Hyderabad Qasimabad', '2023-07-08', '2', 'B', 'TASHA1A1', '60%', '', '', 'AL Hira', '', NULL, NULL, 'tasha21@gmail.com', 'tasha', 'Pass', 'Continue', '2023-08-07 16:45:03', '2023-08-18 15:17:30', NULL),
(2, 1, 1, NULL, 'Iqra', 'shaikh', 'Shaikh', 'Female', 'Islam', '2000-02-02', '', 'Waheed', '001830371881', 'Latifabad', '2023-08-08', '2', 'B', 'IQRA1A2', '30%', '', '', 'hani', '', NULL, NULL, 'Iqrashaikh22@gmail.com', 'iqra', 'Pass', 'Leave', '2023-08-08 14:56:54', '2023-08-18 15:17:30', NULL),
(4, 1, 1, NULL, 'Clayton', 'Buckley', 'Hernandez', 'Female', 'Explicabo Consectet', '2019-11-06', '', 'Alden Mack', 'Maiores delectus mi', 'Harum similique temp', '1989-01-15', '2', 'B', 'CLAYTON1A4', 'Et est nostrum ea u', '', '', 'Non consequatur solu', '', NULL, NULL, 'Clayton@gmail.com', 'Clayton', 'Pass', 'Continue', '2023-08-08 14:58:16', '2023-08-18 15:17:30', NULL),
(5, 1, 1, NULL, 'Emi', 'Washington', 'Doyle', 'Male', 'Obcaecati sunt magna', '2014-06-08', '', 'Emi Franks', 'Elit in corporis qu', 'Sit laborum In omn', '1976-03-25', '2', 'A', 'EMI2A5', 'Debitis possimus di', '', '', 'Officia dolores dele', '', NULL, NULL, 'rovywu@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-16 16:15:56', '2023-08-16 16:15:56', NULL),
(7, 1, 1, NULL, 'Kristen', 'Gilmore', 'Mckenzie', 'Male', 'Vel incididunt dolor', '1991-03-26', '', 'Illiana Booth', 'Mollitia quia incidu', 'Soluta sint autem qu', '1992-11-04', '2', 'B', 'KRISTEN1A7', 'Ipsa saepe lorem di', '', '', 'Vero quis voluptatem', '', NULL, NULL, 'mekeqal@mailinator.com', 'Pa$$w0rd!', 'Pass', 'Continue', '2023-08-16 16:18:52', '2023-08-18 15:17:30', NULL),
(8, 1, 1, NULL, 'Cassandra', 'Sanders', 'Lopez', 'Female', 'Eligendi officia rep', '2001-09-23', '', 'Sydney Nixon', 'Nesciunt deleniti o', 'Adipisicing tempora', '2003-04-24', '2', 'A', 'CASSANDRA2A8', 'Ipsam mollit rerum l', '', '', 'Amet vitae ad nihil', '', NULL, NULL, 'ruhanutev@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-16 16:19:14', '2023-08-16 16:19:14', NULL),
(10, 1, 1, NULL, 'Clinton', 'Montoya', 'Oneil', 'Female', 'Veniam aut in rerum', '1973-06-08', '', 'Joshua Davidson', 'Est sed nisi sit ip', 'Dignissimos elit la', '2011-10-13', '2', 'A', 'CLINTON2A10', 'Quos harum sequi est', '', '', 'Harum repudiandae pe', '', NULL, NULL, 'pivi@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-16 16:23:06', '2023-08-16 16:23:06', NULL),
(12, 1, 1, '2024 to 2025', 'Gwendolyn', 'Harrell', 'Sutton', 'Male', 'Velit tempor amet a', '1982-09-24', 'C:\\xampp\\tmp\\phpF425.tmp', 'Quynn Wheeler', 'Est quia vitae volup', 'Aut numquam lorem ip', '1996-11-28', '2', 'A', 'GWENDOLYN2A12', 'Voluptatibus pariatu', NULL, NULL, 'Officia sed eaque ma', NULL, NULL, NULL, 'pybohat@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-16 16:28:29', '2023-08-18 15:08:36', NULL),
(13, 1, 1, '2023 to 2024', 'Ashton marley', 'Stephens', 'Cortez', 'Male', 'Quos sit cum sed off', '2015-07-16', NULL, 'Georgia Calderon', 'Ut pariatur Eveniet', 'Repellendus Ducimus', '2020-12-30', NULL, NULL, 'ASHTON2A13', 'Odio qui voluptatem', NULL, NULL, 'Eaque aspernatur ull', NULL, NULL, NULL, 'bidocojiwu@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-18 17:45:30', '2023-08-23 19:37:44', NULL),
(14, 1, 1, '2024 to 2025', 'Stewartabc', 'York', 'Cook', 'Male', 'Excepteur quia facil', '1990-02-03', NULL, 'Alexandra Petersen', 'Labore dolore molest', 'Dignissimos id volup', '2004-03-30', NULL, NULL, 'STEWART2A14', 'Dolor non sit volup', NULL, NULL, 'Voluptas quia ipsa', NULL, NULL, NULL, 'dybese@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-18 17:45:49', '2023-08-23 19:35:22', NULL),
(15, 1, 1, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '15', NULL, '', '', NULL, '', NULL, NULL, 'admin@penless.com', 'dev123$%^', NULL, NULL, '2023-08-23 18:49:22', '2023-08-24 13:47:23', NULL),
(16, 1, 1, '2023 to 2024', 'Myles', 'Perkins', 'Kinney', 'Custom', 'Eligendi quia rerum', '2007-11-15', '', 'Yoko Page', 'Distinctio Qui aute', 'Earum in distinctio', '1994-07-22', '1', 'A', 'MYLES116', 'Facere dolores debit', '', '', 'Cillum in aliquip pa', '', NULL, NULL, 'hurorowev@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-23 18:54:01', '2023-08-28 15:53:31', NULL),
(17, 1, 1, '2023 to 2024', 'Kathleen', 'Carey', 'Calhoun', 'Custom', 'At maiores dolorum s', '1982-02-14', '', 'Addison Baird', 'Est temporibus ea ni', 'Hic suscipit dolores', '2015-05-18', '2', NULL, 'KATHLEEN217', 'Quo voluptatem minim', '', '', 'Eu qui aspernatur au', '', NULL, NULL, 'xexerafuq@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-23 19:00:46', '2023-08-25 15:21:02', NULL),
(18, 1, 1, '2023 to 2024', 'afifa', 'York', 'Acosta', 'Female', 'Nesciunt sit molli', '2003-01-17', '', 'Camilla Alvarado', 'Iusto error quasi is', 'Vel eligendi consequ', '1981-05-08', '4', NULL, 'AFIFA418', 'Accusamus voluptatem', '', '', 'Ea pariatur Pariatu', '', NULL, NULL, 'kecupuw@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-24 15:01:00', '2023-08-24 15:01:00', NULL),
(19, 1, 1, '2024 to 2025', 'Cameran', 'Mathis', 'Atkinson', 'Custom', 'Quidem sed voluptas', '1974-02-23', '', 'Macaulay Strong', 'Commodi rerum laboru', 'Aut voluptas et exer', '2018-11-09', '4', NULL, 'CAMERAN419', 'Incidunt asperiores', '', '', 'Et assumenda qui bea', '', NULL, NULL, 'lavo@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-24 16:44:14', '2023-08-24 16:44:14', NULL),
(20, 1, 1, '2024 to 2025', 'Tatiana', 'Mejia', 'Sharpe', 'Custom', 'Aliquam a et quo nis', '1980-03-21', '', 'Constance Whitehead', 'Rerum architecto qua', 'Autem veniam sed qu', '2015-01-21', '3', NULL, 'TATIANA320', 'Lorem dolor quis in', '', '', 'Voluptatibus molliti', '', NULL, NULL, 'rypyw@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-24 16:44:32', '2023-08-24 16:44:32', NULL),
(21, 1, 1, '2024 to 2025', 'Kitra', 'Hess', 'Leblanc', 'Female', 'Sunt nobis quidem ob', '1981-10-19', '', 'Cameron Hickman', 'Doloribus ut do ulla', 'Eligendi perferendis', '2018-06-12', '2', 'A', 'KITRA2A21', 'Quo perspiciatis si', '', '', 'Voluptas rerum et do', '', NULL, NULL, 'pyhy@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-25 15:10:42', '2023-08-25 15:10:42', NULL),
(23, 1, 1, '2023 to 2024', 'Gemma', 'Holcomb', 'Mcdowell', 'Male', 'Consequuntur sapient', '2009-06-27', '', 'Tanek English', 'Deserunt labore sed', 'Alias dolores vel qu', '2003-06-30', '3', NULL, 'GEMMA323', 'Saepe enim sed nulla', '', '', 'At animi perspiciat', '', NULL, NULL, 'suduzu@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:25:17', '2023-08-28 15:25:17', NULL),
(24, 1, 1, NULL, 'Daniel', 'Randall', 'Bishop', 'Custom', 'Aliquid asperiores q', '2018-06-13', '', 'Alec Cochran', 'Assumenda aliquip qu', 'Cum quo eligendi omn', '1986-07-22', '1', 'A', 'DANIEL1A24', 'In pariatur In erro', '', '', 'Et illo sit voluptat', '', NULL, NULL, 'zyquramewo@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:28:32', '2023-08-28 15:28:32', NULL),
(25, 1, 1, NULL, 'Melanie', 'Lowery', 'Medina', 'Male', 'Nemo soluta officiis', '1997-09-15', '', 'Connor Shepherd', 'Facere fugit delect', 'Fugiat deleniti magn', '1974-09-14', '9', 'A', 'MELANIE9A25', 'At autem placeat co', '', '', 'Pariatur Ipsa eos', '', NULL, NULL, 'dajob@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:32:58', '2023-08-28 15:32:58', NULL),
(26, 1, 1, NULL, 'Tad', 'Santana', 'Kirby', 'Custom', 'Dolorem laborum Rep', '1995-05-31', '', 'Alika Mcdowell', 'Rem dolorem in exped', 'Non incidunt nostru', '2022-04-07', '4', 'A', 'TAD4A26', 'Fugiat omnis nisi no', '', '', 'Est omnis quod obcae', '', NULL, NULL, 'lola@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:33:23', '2023-08-28 15:33:23', NULL),
(27, 1, 1, '2023 to 2024', 'Harper', 'Ayala', 'Hendrix', 'Custom', 'Sapiente et cupidita', '2010-10-19', '', 'Rylee Higgins', 'Mollit totam laborum', 'Harum vel reprehende', '1997-01-18', '4', 'A', 'HARPER4A27', 'Et expedita lorem au', '', '', 'Molestiae debitis se', '', NULL, NULL, 'zyzan@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:36:00', '2023-08-28 15:36:00', NULL),
(28, 1, 1, '2023 to 2024', 'Zooma', 'Harmon', 'Gaines', 'Female', 'Dolor sapiente est m', '2018-02-25', '', 'Kirsten Mckinney', 'Accusantium et est', 'Vel facere nisi non', '2009-01-17', 'cit', NULL, 'ZOOMACIT28', 'Cupiditate et distin', '', '', 'Eum ducimus qui lau', '', NULL, NULL, 'vyby@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:36:43', '2023-08-28 15:36:43', NULL),
(29, 1, 1, '2023 to 2024', 'Paloma', 'Pierce', 'Riggs', 'Female', 'Quas et atque aperia', '1986-12-23', '', 'Shannon Finley', 'Consequatur quibusda', 'Est laudantium volu', '2015-12-21', 'cit', NULL, 'PALOMACIT29', 'Sint alias similique', '', '', 'Proident qui except', '', NULL, NULL, 'xexi@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-28 15:39:52', '2023-08-28 15:39:52', NULL),
(30, 1, 1, '2023 to 2024', 'Galvin', 'Kerr', 'Delgado', 'Custom', 'Est nobis aute fugit', '1982-03-27', '', 'Beau Newton', 'Explicabo Aliqua C', 'At sed in iste proid', '1990-01-14', 'cit', 'A', 'GALVINCITA30', 'Et enim vel aute rep', '', '', 'Quibusdam numquam it', '', 'Jenna Peterson', '472', 'piho@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-08-31 16:35:53', '2023-08-31 16:35:53', NULL),
(31, 1, 1, '2023 to 2024', 'Cairo', 'Pierce', 'Taylor', 'Male', 'Recusandae Lorem ac', '1985-03-08', '', 'Tiger Bowman', 'Ullam nisi non expli', 'Nulla illum quasi l', '1985-11-28', '1', 'A', 'CAIRO1A31', 'Praesentium velit c', '', '', 'Corporis exercitatio', '', 'Cairo Gallagher', '678', 'kizenyceb@mailinator.com', 'Pa$$w0rd!', NULL, NULL, '2023-09-08 17:28:17', '2023-09-08 17:28:18', NULL);

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

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`id`, `institute_id`, `campus_id`, `class_name`, `Fee_type`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'independence celebration', '500', '2023-08-10 18:17:12', '2023-08-10 18:17:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_available_times`
--

CREATE TABLE `teacher_available_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` varchar(225) DEFAULT NULL,
  `campus_id` varchar(225) DEFAULT NULL,
  `teacher_id` varchar(225) DEFAULT NULL,
  `course_name` varchar(225) DEFAULT NULL,
  `subject_name` varchar(225) DEFAULT NULL,
  `lecture_date` varchar(225) DEFAULT NULL,
  `start_time` varchar(225) DEFAULT NULL,
  `end_time` varchar(225) DEFAULT NULL,
  `lecture_day` varchar(225) DEFAULT NULL,
  `availability` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_available_times`
--

INSERT INTO `teacher_available_times` (`id`, `institute_id`, `campus_id`, `teacher_id`, `course_name`, `subject_name`, `lecture_date`, `start_time`, `end_time`, `lecture_day`, `availability`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', '1', 'English literature', '2023-09-04', '08:00', '09:00', 'Monday', 'available', '2023-09-01 19:08:53', '2023-09-01 19:08:53', NULL);

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
  `class_name` text DEFAULT NULL,
  `subject_name` text DEFAULT NULL,
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

INSERT INTO `teacher_notice_boards` (`id`, `institute_id`, `campus_id`, `teacher_id`, `teacher_name`, `Notice_title`, `Notice_Link`, `class_name`, `subject_name`, `Notice_Publish_date`, `Notice_Description`, `active_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '1', 'Simba', 'independence day drama participation', 'https://youtu.be/Y2aTF5MMAHA', '1', 'A', '2023-08-10', 'Please check the link', '1', '2023-08-11 13:55:34', '2023-08-11 13:55:34', NULL),
(2, '1', '1', '1', 'Simba', 'Fancy dress compitation', 'https://www.google.com/search?sca_esv=558091660&rlz=1C1VDKB_enPK1069PK1069&sxsrf=AB5stBhtQLUg2dbPty75ghOtdVg2RNlArQ:1692356664633&q=motivational+quotes+for+programmers+wallpapers&tbm=isch&source=lnms&sa=X&ved=2ahUKEwicldDuh-aAAxW9TqQEHVFOARsQ0pQJegQIDBAB&biw=1600&bih=783&dpr=1#imgrc=weWftli8jJyLcM', '2', 'B', '2023-08-18', 'Must participate', '1', '2023-08-18 18:34:23', '2023-08-18 18:34:23', NULL),
(3, '1', '1', '1', 'Simba', 'In minim omnis ut no', 'Est duis ut dolorem', '1', 'zoology', '2023-08-31', 'Cupidatat mollit cup', '1', '2023-08-31 15:34:18', '2023-08-31 15:34:18', NULL);

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
  `active_status` int(225) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Institute_address`, `institute_city`, `institute_contact`, `institute_ptcl`, `name`, `email`, `email_verified_at`, `username`, `password`, `who_is_login`, `active_status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hyderabad', 'Hyderabad', '03191443056', '6366363629', 'city', 'city123@gmail.com', '2023-08-07 09:32:15', 'city1', 'city123', 'Institute', 0, NULL, '2023-08-07 16:32:15', '2023-08-07 16:32:15', NULL),
(2, 'hyderabad', 'Hyderabad', '03173859647', '223344', 'Kashan', 'shaikhkashan670@gmail.com', '2023-08-11 07:57:23', 'kashan2', 'kashan12345', 'Institute', 0, NULL, '2023-08-11 14:57:23', '2023-08-11 14:57:23', NULL),
(3, 'hyderbad', 'Hyderabad', '03191443056', '02237177377', 'Maries', 'mariakhan22944@gmail.com', '2023-08-16 12:13:49', 'maries3', 'maries', 'Institute', 0, NULL, '2023-08-16 19:13:49', '2023-08-16 19:13:49', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_batches`
--
ALTER TABLE `campus_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_billings`
--
ALTER TABLE `campus_billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_classes`
--
ALTER TABLE `campus_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `campus_class_teachers`
--
ALTER TABLE `campus_class_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `campus_departments`
--
ALTER TABLE `campus_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_employees`
--
ALTER TABLE `campus_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campus_employee_attendances`
--
ALTER TABLE `campus_employee_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_employee_leaves`
--
ALTER TABLE `campus_employee_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_inventory_management`
--
ALTER TABLE `campus_inventory_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_public_holidays`
--
ALTER TABLE `campus_public_holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_student_store_assignments`
--
ALTER TABLE `campus_student_store_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `campus_student_teacher_chats`
--
ALTER TABLE `campus_student_teacher_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campus_subjects`
--
ALTER TABLE `campus_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campus_subjects_teachers`
--
ALTER TABLE `campus_subjects_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campus_syllabus`
--
ALTER TABLE `campus_syllabus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `campus_teacher_course_materials`
--
ALTER TABLE `campus_teacher_course_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campus_teacher_diary_assignments`
--
ALTER TABLE `campus_teacher_diary_assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campus_teacher_recorded_lectures`
--
ALTER TABLE `campus_teacher_recorded_lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campus_teacher_student_attendances`
--
ALTER TABLE `campus_teacher_student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `campus_teacher_student_chats`
--
ALTER TABLE `campus_teacher_student_chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `campus_teacher_student_leave_approvals`
--
ALTER TABLE `campus_teacher_student_leave_approvals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_timetables`
--
ALTER TABLE `campus_timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class__sections`
--
ALTER TABLE `class__sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `current_sessions`
--
ALTER TABLE `current_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_super_admins`
--
ALTER TABLE `main_super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_addmissions`
--
ALTER TABLE `student_addmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_available_times`
--
ALTER TABLE `teacher_available_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_notice_boards`
--
ALTER TABLE `teacher_notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
