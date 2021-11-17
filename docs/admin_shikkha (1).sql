-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 12:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_shikkha`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `achievement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `student_id`, `achievement`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '2021-10-22 06:50:45', '2021-10-22 06:50:45'),
(2, 3, 'sdfgh', '2021-10-22 15:49:07', '2021-10-22 15:49:07'),
(3, 4, NULL, '2021-10-24 09:37:18', '2021-10-24 09:37:18'),
(5, 5, 'asdfghj', '2021-10-31 08:11:46', '2021-10-31 08:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addressable_id` bigint(20) NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_present` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressable_id`, `division`, `district`, `upazila`, `area`, `address_type`, `addressable_type`, `same_as_present`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dhaka', 'Dhaka', 'Keraniganj', 'dfghj', 'PRESENT', 'App\\Models\\Student', 1, 'ACTIVE', '2021-10-22 06:50:45', '2021-10-22 06:50:45'),
(2, 3, 'Chittagong', 'Chandpur', 'Haimchar', 'dfgh', 'PRESENT', 'App\\Models\\Student', 1, 'ACTIVE', '2021-10-22 15:49:07', '2021-10-22 15:49:07'),
(3, 4, 'Barisal', 'Patuakhali', 'Mirzaganj', 'dfgn', 'PRESENT', 'App\\Models\\Student', 1, 'ACTIVE', '2021-10-24 09:37:19', '2021-10-24 09:37:19'),
(4, 5, 'Chittagong', 'Chittagong', 'Rangunia', 'sdfgthyuj', 'PRESENT', 'App\\Models\\Student', 1, 'ACTIVE', '2021-10-31 08:11:25', '2021-10-31 08:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks_cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_gpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_gpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `student_id`, `level`, `class_degree`, `institution`, `position`, `marks_cgpa`, `semester`, `year`, `ssc_year`, `ssc_institution`, `ssc_gpa`, `hsc_year`, `hsc_institution`, `hsc_gpa`, `created_at`, `updated_at`) VALUES
(1, 2, 'School', 'Class-5', 'sdfgh', '1511', '5', '12', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-22 06:50:45', '2021-10-22 06:50:45'),
(2, 3, 'School', 'Class-5', 'sdfg', 'dfghj', '234', '3456', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-22 15:49:07', '2021-10-22 15:49:07'),
(3, 4, 'College', 'Class-11', 'NSU', '3456', '3', '34', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-24 09:37:19', '2021-10-24 09:37:19'),
(4, 5, 'School', 'Class-8', 'NSU', '2456', '3', '12', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-31 08:11:25', '2021-10-31 08:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `documentable_id` bigint(20) NOT NULL,
  `documentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `tenant_id`, `documentable_id`, `documentable_type`, `document_title`, `type`, `document_url`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'App\\Models\\Student', 'Welcome Scan', 'Birth Certificate/NID', '2_1634907085_Welcome Scan.jpg', '1', '2021-10-22 06:51:25', '2021-10-22 06:51:25'),
(2, NULL, 3, 'App\\Models\\Student', '4992462-1634080820 (1)', 'Birth Certificate/NID', '3_1634939391_4992462-1634080820 (1).jpg', '1', '2021-10-22 15:49:51', '2021-10-22 15:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_tenants_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_07_11_081334_create_permission_tables', 1),
(6, '2021_09_08_050705_create_students_table', 1),
(7, '2021_09_08_145015_create_degrees_table', 1),
(8, '2021_09_12_103912_create_addresses_table', 1),
(9, '2021_10_04_131940_create_achievements_table', 1),
(10, '2021_10_12_115848_create_documents_table', 1),
(11, '2021_10_20_112446_create_scholarships_table', 1),
(12, '2021_10_20_115521_create_scholarship_student_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(2, 'role-create', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(3, 'role-edit', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(4, 'role-delete', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(5, 'user-list', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(6, 'user-create', 'web', '2021-10-21 14:05:30', '2021-10-21 14:05:30'),
(7, 'user-edit', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(8, 'user-delete', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(9, 'admin-can', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(10, 'student-can', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(11, 'student-profile-show', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(12, 'student-profile-edit', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(13, 'manage-student-list', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(14, 'superadmin-can', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(15, 'tenant-can', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31'),
(16, 'apply-scholarship', 'web', '2021-10-21 14:05:31', '2021-10-21 14:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SUPER_ADMIN', 'web', '2021-10-21 14:05:59', '2021-10-21 14:05:59'),
(2, 'TENANT', 'web', '2021-10-21 16:10:35', '2021-10-21 16:10:35'),
(3, 'STUDENT', 'web', '2021-10-22 12:02:47', '2021-10-22 12:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 3),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 2),
(16, 1),
(16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `scholarship_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `tenant_id`, `scholarship_title`, `eligibility`, `amount`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'New Scholarship Announcement 01', 'SSC GPA: 5\r\nHSC GPA: 5', 20000, '2021-12-01 00:00:00', 'ACTIVE', '2021-10-22 11:59:52', '2021-10-22 12:22:54'),
(3, 1, 'New Scholarship announcement 02', 'HSC GPA: 5', 20000, '2021-11-11 00:00:00', 'ACTIVE', '2021-10-22 15:51:12', '2021-10-22 15:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_student`
--

CREATE TABLE `scholarship_student` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `scholarship_id` bigint(20) UNSIGNED NOT NULL,
  `is_approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_student`
--

INSERT INTO `scholarship_student` (`student_id`, `scholarship_id`, `is_approved`) VALUES
(2, 2, 0),
(3, 2, 0),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siblings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aim_in_life` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `same_as_parmanent` tinyint(1) NOT NULL DEFAULT 1,
  `reference_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_scholarship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `sid`, `name`, `email`, `phone`, `dob`, `father_name`, `father_profession`, `mother_name`, `mother_profession`, `siblings`, `aim_in_life`, `gender`, `same_as_parmanent`, `reference_name`, `reference_profession`, `reference_phone`, `family_income`, `income_source`, `other_scholarship`, `reason`, `created_at`, `updated_at`) VALUES
(2, 8, NULL, 'Student 2', 'student2@gmail.com', '01674084135', '2021-10-22 00:00:00', 'Father', 'profession', 'Mother', 'Profession', 'fghjk', '', 'Male', 1, 'wertyu', 'dfghj', '01674', '123456', 'sdfghjk', 'sdfghj', 'dfghjk', '2021-10-22 06:50:45', '2021-10-22 06:50:45'),
(3, 9, NULL, 'Student 3', 'student3@gmail.com', '01674084136', '2020-11-11 00:00:00', 'dfghj', 'dfghj', 'kdfgh', 'jcfg', 'hjdcv', '', 'Female', 1, 'sdfghjk', 'sdfgh', 'fghyuj', '345', '2345', '34567', '234567', '2021-10-22 15:49:07', '2021-10-22 15:49:07'),
(4, 10, '2110011', 'st1', 'st1@gmail.com', '01674084156', '2021-10-24 00:00:00', 'Father', 'Soluta laborum optio quia.', 'Mother', 'dfghjk', 'ghjk', '', 'Male', 1, 'Marguerite Hirthe', 'Quod autem nihil velit reiciendis similique consequatur autem.', '23456', '123456', 'sdfvgbn', 'vbn', NULL, '2021-10-24 09:37:18', '2021-10-24 09:37:18'),
(5, 7, '2110011', 'Student 1', 'student1@gmail.com', '01674084134', '1995-07-07 00:00:00', 'Father', 'Distinctio laudantium quibusdam voluptatibus omnis eveniet sint.', 'Mother', 'Allie', 'wdfghj', 'wertyu sdfghjdfgh', 'Male', 1, 'sdfghjk', 'dfghjk', '123456', '12345', 'dfgnm', 'dfghj', 'fvbnm', '2021-10-31 08:11:25', '2021-10-31 08:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hridoya Bangladesh', '2021-10-21 14:13:58', '2021-10-21 14:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tenant_id`, `name`, `email`, `phone`, `photo_url`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Super Admin', 'superadmin@gmail.com', '01700000000', NULL, NULL, '1234', NULL, '2021-10-21 14:05:59', '2021-10-21 14:05:59'),
(4, NULL, 'Md. Shazzad Hosain', 'mshb95@gmail.com', '01767511160', NULL, NULL, '1234', NULL, '2021-10-21 16:40:00', '2021-10-21 16:40:00'),
(5, NULL, 'Sadi', 'sadi@gmail.com', '01674084133', NULL, NULL, '1234', NULL, '2021-10-22 11:56:35', '2021-10-22 11:56:35'),
(6, 1, 'Hridoya Bangladesh Admin', 'hbadmin@gmail.com', '01710000001', NULL, NULL, '1234', NULL, '2021-10-22 11:58:17', '2021-10-22 11:58:31'),
(7, NULL, 'Student 1', 'student1@gmail.com', '01674084134', NULL, NULL, '1234', NULL, '2021-10-22 12:04:45', '2021-10-22 12:04:45'),
(8, NULL, 'Student 2', 'student2@gmail.com', '01674084135', NULL, NULL, '1234', NULL, '2021-10-22 12:24:13', '2021-10-22 12:24:13'),
(9, NULL, 'Student 3', 'student3@gmail.com', '01674084136', NULL, NULL, '1234', NULL, '2021-10-22 06:43:31', '2021-10-22 06:43:31'),
(10, NULL, 'st1', 'st1@gmail.com', '01674084156', NULL, NULL, '1234', NULL, '2021-10-24 09:36:18', '2021-10-24 09:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achievements_student_id_foreign` (`student_id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `degrees_student_id_foreign` (`student_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_tenant_id_foreign` (`tenant_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scholarships_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `scholarship_student`
--
ALTER TABLE `scholarship_student`
  ADD KEY `scholarship_student_student_id_foreign` (`student_id`),
  ADD KEY `scholarship_student_scholarship_id_foreign` (`scholarship_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_tenant_id_foreign` (`tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD CONSTRAINT `scholarships_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `scholarship_student`
--
ALTER TABLE `scholarship_student`
  ADD CONSTRAINT `scholarship_student_scholarship_id_foreign` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarships` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scholarship_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
