-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 07:42 PM
-- Server version: 5.7.11-log
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `car_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, '2019-08-03 21:00:00', '2019-08-03 21:00:00'),
(2, 2, 5, '2019-08-03 21:00:00', '2019-08-03 21:00:00'),
(3, 2, 12, '2019-08-03 21:00:00', '2019-08-03 21:00:00'),
(4, 1, 6, '2019-08-03 21:00:00', '2019-08-03 21:00:00'),
(5, 6, 24, '2019-08-04 09:00:44', '2019-08-04 09:35:28'),
(6, 7, 20, '2019-08-04 09:10:01', '2019-08-04 09:40:06'),
(7, 8, 9, '2019-08-04 09:14:15', '2019-08-04 09:18:19'),
(8, 9, 12, '2019-08-04 09:23:10', '2019-08-04 09:23:10'),
(9, 10, 18, '2019-08-05 04:40:15', '2019-08-05 04:40:15'),
(10, 2, 18, '2019-08-05 05:10:50', '2019-08-05 05:10:50'),
(11, 2, 18, '2019-08-08 04:03:34', '2019-08-08 04:03:34'),
(12, 2, 18, '2019-08-08 04:08:19', '2019-08-08 04:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Make` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Registration` date NOT NULL,
  `Engine Size` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` double(8,2) NOT NULL,
  `Color` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dors` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `Make`, `Model`, `Registration`, `Engine Size`, `Active`, `Price`, `Color`, `Dors`, `created_at`, `updated_at`) VALUES
(1, 'BMW', 'X7', '2019-07-30', '2.0 Diesel', 'Active', 12000.00, '#8000ff', '3', '2019-07-30 08:04:32', '2019-08-10 13:29:44'),
(2, 'BMW', 'X500', '2019-07-30', '2.0 Diesel', 'Active', 10000.00, '#ffffff', '4', '2019-07-30 08:05:02', '2019-08-10 13:30:00'),
(3, 'BMW', 'X5', '2019-07-30', '2.0 Diesel', 'Active', 12000.00, '#008040', '5', '2019-07-30 08:05:21', '2019-08-10 13:30:10'),
(5, 'Audi', 'Q7', '2019-07-30', '2.0 Diesel', 'Active', 10000.00, '#804000', '5', '2019-07-30 08:06:13', '2019-08-10 13:30:21'),
(11, 'Reno', 'Megane', '2019-07-30', '2.0 Diesel', 'Active', 10000.00, '#ffffff', '4', '2019-07-30 08:10:13', '2019-08-01 11:00:59'),
(13, 'BMW', 'X5', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#00ff80', '2', '2019-08-01 06:00:19', '2019-08-03 09:59:58'),
(14, 'Audi', 'X3', '2019-08-01', '2.0 Diesel', 'Inactive', 12000.00, '#400040', '5', '2019-08-01 06:00:34', '2019-08-03 09:47:16'),
(15, 'Toyota', 'SQ7', '2019-08-01', '1600 cc', 'Active', 12000.00, '#c0c0c0', '4', '2019-08-01 06:00:56', '2019-08-01 09:31:33'),
(16, 'BMW', 'X300', '2019-08-01', '2.0 Diesel', 'Inactive', 10000.00, '#008040', '4', '2019-08-01 06:01:50', '2019-08-03 10:03:19'),
(17, 'NISSAN', 'X3000', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#ffffff', '5', '2019-08-01 06:02:07', '2019-08-04 02:30:46'),
(18, 'BMW', 'X5', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#ffffff', '4', '2019-08-01 06:02:26', '2019-08-03 10:05:02'),
(19, 'BMW', 'X1', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#ffffff', '5', '2019-08-01 07:37:51', '2019-08-03 10:13:01'),
(20, 'BMW', 'X2', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#ffffff', '5', '2019-08-01 07:38:34', '2019-08-03 10:05:07'),
(21, 'Reno', 'Megane', '2019-07-30', '3.0 Diesel', 'Active', 10000.00, '#ffffff', '4', '2019-08-01 07:51:19', '2019-08-01 11:01:53'),
(22, 'Reno', 'Megane', '2019-07-30', '3.0 Diesel', 'Active', 10000.00, '#ff8040', '4', '2019-08-01 07:51:45', '2019-08-01 11:02:18'),
(24, 'Audi', 'X3', '2019-08-01', '4.0 Diesel', 'Inactive', 12000.00, '#ffffff', '5', '2019-08-01 08:43:50', '2019-08-03 09:41:45'),
(25, 'Audi', 'X3', '2019-08-01', '5.0 Diesel', 'Inactive', 12000.00, '#ffffff', '5', '2019-08-01 08:44:58', '2019-08-03 09:49:49'),
(26, 'VW', 'Tiguan', '2019-08-01', '3.0 Diesel', 'Active', 10000.00, '#ff8000', '4', '2019-08-01 09:19:42', '2019-08-01 09:19:42'),
(27, 'VW', 'Golf', '2019-08-01', '1600 cc', 'Inactive', 10000.00, '#ff0080', '5', '2019-08-01 09:22:21', '2019-08-01 09:22:21'),
(29, 'VW', 'Passat', '2019-08-01', '2.0 Diesel', 'Inactive', 10000.00, '#8080c0', '5', '2019-08-01 09:25:58', '2019-08-01 09:25:58'),
(30, 'VW', 'Golf', '2019-08-01', '1600 cc', 'Active', 10000.00, '#808080', '4', '2019-08-01 09:34:01', '2019-08-01 09:34:01'),
(31, 'Chevrolet', 'Cruze', '2019-08-01', '2.0 Diesel', 'Inactive', 10000.00, '#008080', '5', '2019-08-01 09:37:19', '2019-08-03 10:27:06'),
(32, 'Honda', 'Civic', '2019-08-03', '2.0 Diesel', 'Inactive', 10000.00, '#ff0080', '5', '2019-08-03 07:05:49', '2019-08-03 10:34:42'),
(33, 'Honda', 'Civic', '2019-08-03', '2.0 Diesel', 'Inactive', 10000.00, '#ff0080', '5', '2019-08-03 07:06:43', '2019-08-04 02:30:25'),
(34, 'Honda', 'CX7', '2019-08-03', '3.0 Diesel', 'Inactive', 20000.00, '#004000', '5', '2019-08-03 07:07:20', '2019-08-03 10:27:14'),
(35, 'BMW', 'X5', '2019-08-04', '1600 cc', 'Inactive', 10000.00, '#004040', '5', '2019-08-04 02:31:31', '2019-08-10 08:43:45');

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
(5, '2019_07_28_112959_test', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2019_07_28_114149_cars', 2),
(11, '2019_08_04_060539_basket', 3),
(12, '2019_08_04_064852_baskets', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account Type` enum('Admin','User','Temporarily') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Account Type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Veli Rexhepi', 'Admin', 'veli.rexhepi@sallyportglobal.com', NULL, '$2y$10$RnUxMS3hSSTycUYDzsWk.OB9lu01aCYrF3A5Ur9Z0A7QzZBEuizvu', NULL, '2019-07-29 05:05:37', '2019-07-29 05:05:37'),
(2, 'Veli Rexhepi 2', 'User', 'veli.rexhepi2@sallyportglobal.com', NULL, '$2y$10$VsX12OGCK1XWqFmsf0RlcO7fY.OwlNPtjnIb7/m.8IdlRW8PSSS5y', NULL, '2019-07-30 08:24:08', '2019-07-30 08:24:08'),
(6, 'Arsim', 'User', 'veli.rexhepi3@sallyportglobal.com', NULL, '$2y$10$VsX12OGCK1XWqFmsf0RlcO7fY.OwlNPtjnIb7/m.8IdlRW8PSSS5y', NULL, '2019-08-04 08:58:52', '2019-08-04 08:58:52'),
(7, 'Tito', 'User', 'tito@sallyportglobal.com', NULL, '$2y$10$VsX12OGCK1XWqFmsf0RlcO7fY.OwlNPtjnIb7/m.8IdlRW8PSSS5y', NULL, '2019-08-04 09:07:55', '2019-08-04 09:07:55'),
(8, 'Tito2', 'User', 'tito2@sallyportglobal.com', NULL, '$2y$10$VsX12OGCK1XWqFmsf0RlcO7fY.OwlNPtjnIb7/m.8IdlRW8PSSS5y', NULL, '2019-08-04 09:12:36', '2019-08-04 09:12:36'),
(9, 'Tito3', 'User', 'tito3@sallyportglobal.com', NULL, '$2y$10$VsX12OGCK1XWqFmsf0RlcO7fY.Ow3lNPtjnIb7/m.8IdlRW8PSSS5y', NULL, '2019-08-04 09:22:02', '2019-08-04 09:22:02'),
(10, 'testUser', 'User', 'test@email.com', NULL, '$2y$10$RnUxMS3hSSTycUYDzsWk.OB9lu01aCYrF3A5Ur9Z0A7QzZBEuizvu', NULL, '2019-08-05 04:39:01', '2019-08-05 04:39:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
