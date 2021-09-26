-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2019 at 06:15 AM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primeser_freight`
--

-- --------------------------------------------------------

--
-- Table structure for table `freights`
--

CREATE TABLE `freights` (
  `id` int(10) UNSIGNED NOT NULL,
  `tracking_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freights`
--

INSERT INTO `freights` (`id`, `tracking_number`, `final_destination`, `product_features`, `postal_product`, `sender`, `sender_address`, `receiver`, `receiver_address`, `created_at`, `updated_at`) VALUES
(9, '025187825', 'Madaba - Jordan', 'Alluvial Gold Bars', 'International Shipping', 'Benedicta Adamson', 'Plot 15 / Block G - South Patase', 'Rabah Khalil Daoud', 'P. O. Box 705, Madaba Jordan', '2018-12-27 11:20:31', '2018-12-27 09:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `freight_details`
--

CREATE TABLE `freight_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `freight_id` int(11) NOT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freight_details`
--

INSERT INTO `freight_details` (`id`, `freight_id`, `note`, `description`, `current_status`, `date`, `time`, `current_destination`, `created_at`, `updated_at`) VALUES
(18, 9, 'Inspection of shipping papers', 'one trunk box of 50 kgs alluvial gold bars', 'Picked Up', '2019-01-01', '4:35pm', 'Cargo Terminal, Kotoka Int. Airport - Accra', '2019-01-01 21:44:09', '2019-01-01 21:44:09'),
(19, 9, 'Shipment pending shipping papers renewal', 'one trunk box of 50 kgs alluvial gold bars', 'Picked Up', '2019-01-02', '6:01 am', 'Cargo Terminal, Kotoka Int. Airport - Accra', '2019-01-02 11:01:35', '2019-01-02 11:01:35'),
(16, 9, 'Customs inspecting package for clearance', 'one trunk box of 50 kgs alluvial gold bars', 'Picked Up', '2019-01-01', '1:20 pm', 'Cargo Terminal, Kotoka Int. Airport - Accra', '2019-01-01 21:38:58', '2019-01-01 21:38:58'),
(14, 9, 'Package Picked Up from warehouse for shipment', 'one trunk box of 50 kgs alluvial gold bars', 'Picked Up', '2018-12-29', '8:30 am', 'Accra - Ghana', '2018-12-29 14:23:31', '2018-12-29 14:23:31'),
(15, 9, 'Package Under Customs Inspection', 'one trunk box of 50 kgs alluvial gold bars', 'Picked Up', '2018-12-29', '9:15 am', 'Cargo Terminal, Kotoka Int. Airport - Accra', '2018-12-29 14:28:51', '2018-12-29 14:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_06_18_112254_create_freights_table', 1),
(2, '2018_06_19_091655_create_users_table', 1),
(3, '2018_06_20_091040_create_freight_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `remember_token`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'info@primeserviceltd.com', 'primeservices', 'NOsS91uNBtL9u4MUUxtQPqfwOKrWU2JMi8ylj8ElNXh3RV8WkerC8gc7MnTL', '$2y$10$UzUwcmVrNiWpp8BE7N8PuORn0fNUN.oSKXrC2bItJwAyiKsPlkQqu', '2018-06-22 04:00:00', '2018-12-04 22:32:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freights`
--
ALTER TABLE `freights`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `freights_tracking_number_unique` (`tracking_number`);

--
-- Indexes for table `freight_details`
--
ALTER TABLE `freight_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freights`
--
ALTER TABLE `freights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freight_details`
--
ALTER TABLE `freight_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
