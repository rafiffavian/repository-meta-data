-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 12:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `database`
--

CREATE TABLE `database` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sim` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `id_table` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isi_table`
--

CREATE TABLE `isi_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `null?` longtext COLLATE utf8mb4_unicode_ci,
  `type` longtext COLLATE utf8mb4_unicode_ci,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `sampel_data` longtext COLLATE utf8mb4_unicode_ci,
  `relasi` longtext COLLATE utf8mb4_unicode_ci,
  `id_table` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_13_064659_create_role_table', 1),
(5, '2020_01_13_065736_create_user_table', 2),
(6, '2020_01_13_071000_create_sim_table', 3),
(7, '2020_01_13_071228_update_user_table', 4),
(8, '2020_01_13_071243_update_role_table', 5),
(9, '2020_01_13_071907_create_database_table', 6),
(10, '2020_01_13_072240_create_isi_table', 7),
(11, '2020_01_13_074338_create_table_table', 8),
(12, '2020_01_13_075056_create_download_table', 9),
(13, '2020_01_14_020359_update_user1_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 'super admin', '2020-01-13 20:21:24', '2020-01-13 20:21:24', NULL),
(2, 'admin', '2020-01-13 20:25:37', '2020-01-13 20:25:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sim`
--

CREATE TABLE `sim` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sim`
--

INSERT INTO `sim` (`id`, `name`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'SIM A', 5, '2020-01-14 00:54:28', '2020-01-14 00:54:28'),
(2, 'SIM B', 5, '2020-01-14 00:54:41', '2020-01-14 00:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_database` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `id_role`, `created_at`, `updated_at`, `id_user`, `email`, `password`, `remember_token`) VALUES
(4, 'eka', 1, '2020-01-13 21:36:03', '2020-01-13 21:36:03', 1, 'eka@yahoo.com', '$2y$10$CXJfAHpllqS33Vq49cPF7.v33OpqCLyF9xXaEK3kzw5M0whNJVbW2', '73a4davzasFsLZ80i44hZscejhVU8VQQv56Ugbq29tMQIIwtppaJpnsmWhtn'),
(5, 'era', 1, '2020-01-13 23:36:41', '2020-01-13 23:36:41', 4, 'era@gmail.com', '$2y$10$Pak0lu2mPiE7aLFv2MZ6ceqJ3UqVl5GCezUd4suzHO0xOBHNNBBFK', 'nUUMJ7W0WTsxS9SzJcXFC0eE9T6ULhWDPX1OorcPanr9yOera1KuWylzhwu1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `database`
--
ALTER TABLE `database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_table`
--
ALTER TABLE `isi_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sim`
--
ALTER TABLE `sim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `database`
--
ALTER TABLE `database`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isi_table`
--
ALTER TABLE `isi_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sim`
--
ALTER TABLE `sim`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
