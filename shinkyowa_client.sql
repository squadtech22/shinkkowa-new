-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shinkyowa_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `auction_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `car_bought` tinyint(1) NOT NULL DEFAULT 0,
  `inspection_cleared` tinyint(1) NOT NULL DEFAULT 0,
  `car_on_port` tinyint(1) NOT NULL DEFAULT 0,
  `car_shipped` tinyint(1) NOT NULL DEFAULT 0,
  `car_delivered` tinyint(1) NOT NULL DEFAULT 0,
  `payment_recieved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `order_no`, `vehicle_id`, `user_id`, `auction_name`, `port_name`, `price`, `advance`, `remaining`, `car_bought`, `inspection_cleared`, `car_on_port`, `car_shipped`, `car_delivered`, `payment_recieved`, `created_at`, `updated_at`) VALUES
(40, '516971', 49, 19, 'auction1', 'karachi', 800000, 100000, 700000, 1, 1, 0, 0, 0, 0, '2021-10-31 21:51:27', '2021-11-14 16:32:52');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `vehicle_id`, `images`, `created_at`, `updated_at`) VALUES
(17, 49, '3eeaf1898a09ce1f079782a6958cee1b.jpg', '2021-10-31 21:51:27', '2021-10-31 21:51:27'),
(18, 49, '6ae15b3e1eb91f082d44ed593c4fc294.jpg', '2021-10-31 21:51:27', '2021-10-31 21:51:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_29_102718_create_vehicles_table', 2),
(5, '2021_09_29_105443_create_images_table', 3),
(6, '2021_10_03_120925_create_permission_tables', 4),
(7, '2021_10_31_184830_create_auctions_table', 5),
(8, '2021_10_31_185810_create_statuses_table', 6),
(12, '2021_10_31_190326_change_vehicles_table', 7),
(13, '2021_11_14_201059_change_auctions_table', 8);

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
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 19),
(4, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 21);

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
(4, 'view vehicles', 'web', '2021-10-03 07:20:32', '2021-10-03 07:20:32'),
(5, 'add vehicles', 'web', '2021-10-03 07:20:32', '2021-10-03 07:20:32'),
(6, 'edit vehicles', 'web', '2021-10-03 07:20:32', '2021-10-03 07:20:32'),
(7, 'delete vehicles', 'web', '2021-10-03 07:20:33', '2021-10-03 07:20:33');

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
(3, 'admin', 'web', '2021-10-03 07:20:33', '2021-10-03 07:20:33'),
(4, 'client', 'web', '2021-10-03 07:20:33', '2021-10-03 07:20:33');

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
(4, 3),
(4, 4),
(5, 3),
(6, 3),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auction_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `location`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'usman abid', 'admin@admin.com', '2021-09-29 03:48:08', '$2y$10$eAclhna7/vf0Nfbov1yJqOR/0wlvmoV7bOCEAwoojar45/fNfvNNK', '+819023791301', 'Gunma ken Maebashi shi Komagata Machi 150-2', 'Caribbean, Russia, Europe, and Africa. When it comes to buying a vehicle for personal or professional use, Shinkyowa is the best choice for its affordable rates and excellent Services.', 'uRJmSZmZ8rPTNB2bk2thMjvHT7WkPnAwaDAO5P5iS1hbOQjwgpL52TFPxXpk', '2021-09-29 03:48:08', '2021-11-14 15:57:34'),
(19, 'user1', 'user1@gmail.com', NULL, '$2y$10$uEfdMEuu7kV9u9QqIVvwAOqDR5n.8b.6kcN7LuR8jtTGQfSnI7ZNO', '03312315610', 'Lahore', NULL, NULL, '2021-10-31 21:47:24', '2021-11-14 16:16:22'),
(20, 'user2', 'user2@gmail.com', NULL, '$2y$10$Anssv5/.XRj94MyctTWv3uaq4WYtlCJx8F0MwQcWEbVSj/xqJnZGi', '03318866114', 'Karachi', NULL, NULL, '2021-10-31 21:47:48', '2021-10-31 21:47:48'),
(21, 'user3', 'user3@gmail.com', NULL, '$2y$10$4NrrGsYbOyUZ/ZyzdK0rH.S9cK2Ndz.tLoLq.PgYFYU/VozeYDw7u', '03058866110', 'Islamabad', NULL, NULL, '2021-10-31 21:48:22', '2021-10-31 21:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chassis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_fob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive_train` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_power` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steering_side` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `central_locking` tinyint(1) NOT NULL DEFAULT 0,
  `power_windows` tinyint(1) NOT NULL DEFAULT 0,
  `power_side_mirrors` tinyint(1) NOT NULL DEFAULT 0,
  `retractable_side_mirrors` tinyint(1) NOT NULL DEFAULT 0,
  `power_front_doors` tinyint(1) NOT NULL DEFAULT 0,
  `power_back_doors` tinyint(1) NOT NULL DEFAULT 0,
  `airbags` tinyint(1) NOT NULL DEFAULT 0,
  `power_steering` tinyint(1) NOT NULL DEFAULT 0,
  `ABS` tinyint(1) NOT NULL DEFAULT 0,
  `VSA` tinyint(1) NOT NULL DEFAULT 0,
  `EBD` tinyint(1) NOT NULL DEFAULT 0,
  `diff_lock` tinyint(1) NOT NULL DEFAULT 0,
  `hill_assist` tinyint(1) NOT NULL DEFAULT 0,
  `cruise_control` tinyint(1) NOT NULL DEFAULT 0,
  `radar_system` tinyint(1) NOT NULL DEFAULT 0,
  `brake_assist` tinyint(1) NOT NULL DEFAULT 0,
  `lane_assist` tinyint(1) NOT NULL DEFAULT 0,
  `lane_keep` tinyint(1) NOT NULL DEFAULT 0,
  `front_cam` tinyint(1) NOT NULL DEFAULT 0,
  `reverse_cam` tinyint(1) NOT NULL DEFAULT 0,
  `parking_sensors` tinyint(1) NOT NULL DEFAULT 0,
  `sunroof` tinyint(1) NOT NULL DEFAULT 0,
  `tv_navigation` tinyint(1) NOT NULL DEFAULT 0,
  `cool_box` tinyint(1) NOT NULL DEFAULT 0,
  `leather_seats` tinyint(1) NOT NULL DEFAULT 0,
  `auto_wing` tinyint(1) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `chassis_no`, `make`, `model`, `year`, `mileage`, `color`, `country_stock`, `price_fob`, `drive_train`, `grade`, `engine_power`, `transmission`, `fuel_type`, `vehicle_category`, `steering_side`, `central_locking`, `power_windows`, `power_side_mirrors`, `retractable_side_mirrors`, `power_front_doors`, `power_back_doors`, `airbags`, `power_steering`, `ABS`, `VSA`, `EBD`, `diff_lock`, `hill_assist`, `cruise_control`, `radar_system`, `brake_assist`, `lane_assist`, `lane_keep`, `front_cam`, `reverse_cam`, `parking_sensors`, `sunroof`, `tv_navigation`, `cool_box`, `leather_seats`, `auto_wing`, `details`, `created_at`, `updated_at`) VALUES
(49, 'EA6F1BA', 'honda', 'city', '2020', '15000', '#ce0d0d', 'Pakistan', '800000', 'fwd', '4', '1500', 'manual', 'petrol', 'sedan', 'right', 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, '2021-10-31 21:51:27', '2021-10-31 21:51:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auctions_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `auctions_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_auction_id_foreign` (`auction_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
