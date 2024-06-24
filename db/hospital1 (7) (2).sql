-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 09:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `fees` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `timeSlots` varchar(255) DEFAULT NULL,
  `prescription` text DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `view` int(39) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paid` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `message`, `fees`, `status`, `user_id`, `timeSlots`, `prescription`, `signature`, `view`, `created_at`, `updated_at`, `paid`) VALUES
(48, 'Daief Sikder', 'daiefsikder425@gmail.com', '01924529986', '19', '2024-03-12', 'dfsfsf', 500, 'approved', '17', '12:00 AM - 02:00 AM', NULL, NULL, NULL, '2024-03-11 13:05:05', '2024-03-11 13:05:05', 'Paid'),
(49, 'Daief Sikder', 'daiefsikder425@gmail.com', '01924529986', '19', '2024-03-12', 'ddsgdsfgffd dfg', 300, 'approved', '17', '5:00 AM - 11:00 AM', NULL, NULL, NULL, '2024-03-11 13:12:11', '2024-03-11 13:12:11', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `fees` int(39) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timeSlots` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `speciality`, `room`, `fees`, `image`, `created_at`, `updated_at`, `timeSlots`) VALUES
(19, 'Sunny Khan', '01924529967', 'Neurologist', '345', 500, '1703445476.jpg', '2023-12-24 13:17:56', '2023-12-24 13:17:56', 'a:3:{i:0;a:2:{s:4:\"from\";s:8:\"12:00 AM\";s:2:\"to\";s:8:\"02:00 AM\";}i:1;a:2:{s:4:\"from\";s:7:\"5:00 AM\";s:2:\"to\";s:8:\"11:00 AM\";}i:2;a:2:{s:4:\"from\";s:7:\"1:00 PM\";s:2:\"to\";s:7:\"5:00 PM\";}}'),
(20, 'Daief Sikder', '01924529986', 'Dermatologist', '345', 500, '1703567380.jpg', '2023-12-25 23:09:40', '2023-12-25 23:09:40', 'a:4:{i:0;a:2:{s:4:\"from\";s:8:\"12:00 AM\";s:2:\"to\";s:8:\"01:00 AM\";}i:1;a:2:{s:4:\"from\";s:7:\"2:00 AM\";s:2:\"to\";s:7:\"4:00 AM\";}i:2;a:2:{s:4:\"from\";s:7:\"5:00 AM\";s:2:\"to\";s:7:\"6:00 AM\";}i:3;a:2:{s:4:\"from\";s:7:\"7:00 AM\";s:2:\"to\";s:7:\"9:00 AM\";}}'),
(21, 'Daief Sikder', '01924529986', 'Gastroenterologist', '345', 700, '1703616232.jpg', '2023-12-26 12:43:52', '2023-12-26 12:43:52', 'a:3:{i:0;a:2:{s:4:\"from\";s:8:\"12:00 AM\";s:2:\"to\";s:8:\"06:00 AM\";}i:1;a:2:{s:4:\"from\";s:7:\"2:00 PM\";s:2:\"to\";s:7:\"7:00 PM\";}i:2;a:2:{s:4:\"from\";s:7:\"3:00 PM\";s:2:\"to\";s:7:\"2:00 PM\";}}'),
(22, 'Lima Darling', '01924529990', 'Orthopedic Surgeon', '345', 700, '1703794448.jpg', '2023-12-28 14:14:08', '2023-12-28 14:14:08', 'a:1:{i:0;a:2:{s:4:\"from\";s:8:\"12:00 AM\";s:2:\"to\";s:8:\"10:00 AM\";}}');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_26_183123_create_sessions_table', 1),
(7, '2023_10_28_173051_create_doctors_table', 1),
(8, '2023_10_28_182247_create_appointments_table', 1),
(9, '2023_11_01_191352_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(99, '2342', 'avi@gmail.com', '01738528292', 500, 'Customer Address', 'Pending', '65925bc46b4c9', 'BDT'),
(100, '2342', 'avi@gmail.com', '01738528292', 700, 'Customer Address', 'Pending', '65925bfd209f8', 'BDT'),
(101, 'Daief', 'hr@gmail.com', '213', 700, 'Customer Address', 'Pending', '65925cbb394f1', 'BDT'),
(102, 'Daief', 'hr@gmail.com', '213', 700, 'Customer Address', 'Pending', '65925d445c804', 'BDT'),
(103, 'Daief', 'hr@gmail.com', '213', 500, 'Customer Address', 'Pending', '65926018c03bc', 'BDT'),
(104, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '659a8386062fc', 'BDT'),
(105, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '659a8460c6c1a', 'BDT'),
(106, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '659a849bbf4a2', 'BDT'),
(107, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '659a86213ffdc', 'BDT'),
(108, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '659a8e83bdb6d', 'BDT'),
(109, 'Daief', 'daiefsikder425@gmail.com', '1224325235', 500, 'Customer Address', 'Pending', '65ef5545d45fa', 'BDT'),
(110, 'Daief', 'daiefsikder425@gmail.com', '01924529986', 500, 'Customer Address', 'Pending', '65ef55e60ad42', 'BDT');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FDdBEzT5sFdGLXQm1sxRcApAqNz6u3IQpfX1vIz9', 17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'ZXlKcGRpSTZJa3g0TmxGT05qSjFURTlMTldZMVZWUkdabU5KTUZFOVBTSXNJblpoYkhWbElqb2lWV1kxTlN0RGJsQTNaV1V4Y1hwc09VNUVUak1yZFdWUFpFTXdWMUJTZGxGMVZIbGljbGQzTjNsNU0xWmhUbHBVY21VMlZWSXJZMUZ0TWpCR1lreE1USEpNTlhoSE5HZHRWbVJrV1VselFVODRZVWwzS3psUksyMVdZMDV6TW1oTFUxRlNlWEkyYlhkelJqbFpjbk4xYzNWMGIxcFZPRW93VldwWlluTnNSemxaUkZKbVFqUmhVMUJzVFd4VUsxVmtkMFp5VVZoek9YaFhNMjF6WnpZdmFWQTVSVEI0V2pRNGNqY3hhMGRxWjNaR1ZrSlJiMkpFWWxodVZpc3lPRVE0ZDNjMUszQnhRa2h5Ym1OcWFVUjBlbXBVYlU5M1ExbFhTMk5OYWsxa1NUQm5jM001VVVGdldrVjFkbHBQT1d4cWRYQTNLMWhFZVZodk5IbzBaVVpYTlZwWlZFbGhNblphYmxkd00yRTFWMDFuUjAxUlNsRjNRbXhaZFRGTlNteDZkMmxIVjFnclpFUlZjR1V3Ukc1a2JHTk9VRkl2V0hNMmN6UmxTMW9yV2tOVk4xWnFTVkpaSzBwaFJIRkhNbWszTUU5WE5IRkJQVDBpTENKdFlXTWlPaUpqWmpZeE5HUmpNRFU1TlRBd09USm1ZbVZtTmpFeU56WmxPVGt6WmpJeE5tVmtZMkUzTldJd01HVTFPVFkxT1RZd1lqWXpNV1prTlRZNU0yWTBNVGxsSWl3aWRHRm5Jam9pSW4wPQ==', 1710184702),
('fMeXXjXKe8RYWJz6gWQlImp24PXzrsuzGtgpiNzd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'ZXlKcGRpSTZJbHBrYVZGdldtNVFVbkIzV0M4MmVGcG5SVlV2Wm5jOVBTSXNJblpoYkhWbElqb2lUVU5CT0RoaWNHcHVXaTlRY0hsMGFWZDNjRGNyYzI5aVIyUTJUVTVtS3pkU2VVRkhjM3B0ZDJwM2JXdFFWREo0ZVU1S2NWSkNTV1JzUjB0b1dUVjVObVJLZFVFME9UVTVURFZOYVVOSVdtdFJlRnBpSzFSa01UUnNkR3QzVEVvMWNXdDJhRTR5V0VkU1pWVlNTV1kwTTJwUVFqTklSMXBFUjFGbGJIZHVZelpTYTFWMFlXUkpjVE5vZGt4bFFWQkVabFp0YlROcE9GTXpSMVZqYld3ek1HTkdaMHhoZGxOYWFtaEthbWc1TDBOVlpucHlNU3RYVnpabFRGTTFaa1JhVVhjMGIwVlpjbk5KWVZNMFNXNWlXRXhUSzFoM2JsRjBaV2t4VVdJdldEaFdSbEJrVlRKbVRYZFdXVEExV1dOQlZraEJTa0pIZVRaT1lsSndSR3BHUWlJc0ltMWhZeUk2SWpJNE1tRXpNRFkxWm1NNU1EZ3haRFV3TWpnd1pEZGxOVGt4WkRnMU5qSXdOV0V5TkRCa1lXTXdOelExWVdaa1pXWmxNV0poWVdVeFptTmxaalJoTWpnaUxDSjBZV2NpT2lJaWZRPT0=', 1711736454),
('LnNSzIDIOsNrd6iFoDh7ZKFLdo5vKiOzGjq7CvIX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbFpvY1RSV09EVTNkVFl5Wm05dmJuVklUalJxUVhjOVBTSXNJblpoYkhWbElqb2liWGswTVVsb01YSk1aMk5XUkZOQ1kzbDRVRGxzTTJWRlVsaHBNVmRtVjJORmNsUjBXVGREUVd4eFUxaHpjMUl3U2pSdk4wRklRVmxqZDFSeldGQmxZbGhSYTFZMFNqaFVLMUZqWTBoVVl6VlhUVzVVWjFkNlpsQkViV1ZSYUhremNuZEpOalpRTlRsd2JXVm5ZVnBEWlVkV2VtazBUV2d2UkZWVU0wSTFhREZyTUVkblJVdzJUVmxOV0hwUU1FeHZjbk5PZERjMGRYSndValI2U1RGbVpHOXZURms1VjJWM1ZrMTRTWGs0V1c5RE1sYzVRV1E0UlZoMVYxWkhVRzVyWkZVMlpIcG5kU3Q1Y1haVlMyOVBTMnRrWkdkMEwzTkZURGxOVlRGRk9EZEdXbmRtWXl0dVdtWTRPRlYyUmtZd1pubHBiRm8xWWxoVFoydHlWMGhTU1ZWelNUaFFaWGRDWlVKWFF6aExSR2RIZEROVVRrRTlQU0lzSW0xaFl5STZJbU5pTmpjMlpHWmtZbUZoTTJWalpURTROREV6WWpReU9EbGtZVEEzWVdRM00yWTRPREF3TjJNeE5HRXlNVEZqWldRNU5qQXdNRE16TVRNNE1EUTFNMk1pTENKMFlXY2lPaUlpZlE9PQ==', 1710273661),
('qe0PZ4p0sUJnQqXT0fhglNDWOoHXPpxr01CYSraH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'ZXlKcGRpSTZJa3RsUTNsVWVqSjRhQzgwYnpsR2VHMTNNRWhVTUVFOVBTSXNJblpoYkhWbElqb2lVRmRIYnpCTGVVTlpSMGRUWVZoNlNXVnJkMnN5TTAxVk5FOU5ZVEJwVWt0VFNGTk5OMFpOTVZaU1ExQXdSbnBJYlhsWlNVMVljVGxUVDNkblZGbE5ZakJKYWpVMFl6Vk9OWGh0YlhCNFNVeEViVXQyZFRsVVEzRnFiMk42YlhsUlFVOXpRbTE0TWpaM2FsWm1ZelJhVUdaMllVdEpSMFpEYmxFeUwxaDVibXA1UkdFdksxa3ZXbTlvT1ZwbEt6SnBVMVJVYzFaNGRYQlJXV3hUWXpCUWFraEhNRlZ5WmxoRFRsUTFaM1JVTVVoUk5HbG5RM28wTUd0eGVHeDNUVTlRU21wWlpqVk5PR0ZLYVZCV1prdENSMVZrVUhacVRFUTBiWFpITjFKM1VHaG9VVXBSUVVJdmJHaEdhVnB0UkhGd1drRjVSMFpMYTFCa05DdFhabWhQUzJaNU1uWklMMlZLY0RrNVdGQlFUVWxFYURGdGQyYzlQU0lzSW0xaFl5STZJams1TWpsaE9XUXhNakpsT0RVMllXTTVOVGxqWXpFd016ZzVPVEUxTldVNE5tTTRNemM0TldRME5EVTBZbVEyWkdRelkyWmhNelJrWW1WaE5XUmlObU1pTENKMFlXY2lPaUlpZlE9PQ==', 1711736629),
('Wa7zweHOOhIU4JUi2v6fM24LUlGrTouT7vdkdNQy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'ZXlKcGRpSTZJazlNT1hReVVWcEJiazl3VGxkdFNFaEpNV0l4UWxFOVBTSXNJblpoYkhWbElqb2lORzl4THpoWWRVMVhOazVSZDFBd1JsazVPSFYxV2taWlJtbzRNR2sxY1U1MGRIUmxaelpPTVc5aVIyNXVPVEZpT1M5dE1ucFRlRUo0WjNocFRtOXhSWFE1TVdWaVIzTnFRWEZyWTBoT2RXWm9PRFoxT0hWbk9VMW9VM1JzZVhob1dURnNPVkZ6TDFGeVRUZG9OVXhoZG1rMk1XaDJTR3N6ZVVGbVdrZFpTVlZLUzJ0RFRsaDZlV1ZxVm5wVWNrUm5aVWxEZFhCQmFtWjRWbmxDTm0xNGRXeGlOR3BEY0VwcmFteHpOa296V1dFMVRtdGpaVEpMYlhaUFJuTnVTbE55UjBaNk4yOVdPV1pSYWtob1dIaDBRMDVtTlU1aVIxUlFRbkJyTnpsQ2JGZFRXRmgwUVZodE0wNWFNMFJ2VkVOTlJrWmhWRVoxTkc1c1JreHNLekYzZUdweWRVczVTRmswY1haMVRuTXZjRnBWVlRodVpIYzlQU0lzSW0xaFl5STZJbVV4TmpVMU9ERXlZakpqWmpNMU5qSmpaVEk1Wm1NNFpqWXdaakJrWWpoaE9XVTBOemxsWkRZek56VmtabU16TW1NeE5EbGtOall4T0RobU1EbG1abVFpTENKMFlXY2lPaUlpZlE9PQ==', 1710273832);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'lyx', 'lyx@gmail.com', '01970217145', 'uttara', '1', '2023-12-05 06:04:23', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, 'KcWniXf2X6Eyi9L7HMvku9ghigNyGuLH3GyxCH15A09oTY63eRGdXu6V6QwN', NULL, NULL, '2023-12-09 23:30:44', '2023-12-09 23:30:44'),
(5, 'Lamisa', 'lamisatahsin020@gmail.com', '01970217197', 'Tongi', '0', '2023-12-13 22:33:52', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-13 22:31:30', '2023-12-13 22:33:52'),
(6, 'Admin', 'admin@gmail.com', '01970217197', 'uttara', '1', '2023-12-13 22:33:52', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, 'G6el1ddQycoTK98Ek4jL4G9e0lZtFv38cldtakfEQdo6MutuflRZgYK7iVO3', NULL, NULL, '2023-12-13 22:36:40', '2023-12-13 22:36:40'),
(16, 'Sunny Khan', 'sunny@gmail.com', '01924529967', 'Gazipur', '2', '2023-12-24 13:17:56', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, 'VM7rEm6zi1VuHLmv0avJDgMATnOhvbXtrbAXwmni4zRP6RafVaEdA6KHnvEY', NULL, NULL, '2023-12-24 13:17:56', '2023-12-24 13:17:56'),
(17, 'Daief Sikder', 'daiefsikder425@gmail.com', '01924529986', 'Gazipur', '0', '2023-12-25 23:09:41', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 23:09:41', '2023-12-25 23:09:41'),
(18, 'Daief Sikder', 'daiefsikder422@gmail.com', '01924529986', 'Gazipur', '2', '2023-12-26 12:43:52', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-26 12:43:52', '2023-12-26 12:43:52'),
(19, 'Lima Darling', 'lima@gmail.com', '01924529990', 'Gazipur', '2', '2023-12-28 14:14:08', '$2y$10$DczIZ.SphNBbE91TlNYDieKjHAcjA4mTWM/TJIOxVyQweKMQ5L1VG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 14:14:08', '2023-12-28 14:14:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
