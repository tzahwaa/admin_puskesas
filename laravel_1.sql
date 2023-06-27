-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 09:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `employes_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` double(8,2) NOT NULL,
  `panjang_badan` double(8,2) NOT NULL,
  `detak_jantung` int(11) DEFAULT 0,
  `sistolik` int(11) DEFAULT 0,
  `diastolik` int(11) DEFAULT 0,
  `zscore_berat_badan` double(8,2) NOT NULL,
  `zscore_panjang_badan` double(8,2) NOT NULL,
  `klasifikasi_berat_badan` varchar(255) NOT NULL,
  `klasifikasi_panjang_badan` varchar(255) NOT NULL,
  `klasifikasi_detak_jantung` varchar(255) NOT NULL DEFAULT '-',
  `posyandu_id` bigint(20) UNSIGNED NOT NULL,
  `puskesmas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`id`, `nama_ibu`, `nama_anak`, `alamat`, `jenis_kelamin`, `umur`, `berat_badan`, `panjang_badan`, `detak_jantung`, `sistolik`, `diastolik`, `zscore_berat_badan`, `zscore_panjang_badan`, `klasifikasi_berat_badan`, `klasifikasi_panjang_badan`, `klasifikasi_detak_jantung`, `posyandu_id`, `puskesmas_id`, `created_at`, `updated_at`) VALUES
(1, 'ibu post 4', 'balita 1', 'alamat ini', 'laki-laki', 3, 4.00, 4.00, 4, 0, 0, 4.20, 4.10, 'normal', 'stunting', 'takikardia', 1, 1, '2023-06-23 06:14:27', '2023-06-23 06:14:27');

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
(74, '2014_10_12_000000_create_users_table', 1),
(75, '2014_10_12_100000_create_password_resets_table', 1),
(76, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(77, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(78, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(79, '2016_06_01_000004_create_oauth_clients_table', 1),
(80, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(81, '2019_08_19_000000_create_failed_jobs_table', 1),
(82, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(83, '2023_05_29_172120_create_puskesmas_table', 1),
(84, '2023_05_29_172347_create_posyandu_table', 1),
(85, '2023_05_29_172618_create_balita_table', 1),
(86, '2022_09_13_072712_create_permissions_table', 2),
(87, '2022_09_13_072740_create_attendance_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('00b512392f28361bc2d2a51cf54a731e78dedb5b91711925863bd385dcf8622ee15cbd680ff19304', 5, 1, 'API Token', '[]', 0, '2023-06-23 04:16:42', '2023-06-23 04:16:42', '2024-06-23 11:16:42'),
('0cf4d92b6b90d4ec89a6a202b7bb629f6dd74375cf6550cb1d81b6711d0fe6dd33243eb23d0003bf', 5, 1, 'API Token', '[]', 0, '2023-06-23 04:34:00', '2023-06-23 04:34:00', '2024-06-23 11:34:00'),
('116fe2c9e734923d00e7a3aac8102b7d5bd9ee783d9f862b269a48615a973933ccbd8cfe66b8418a', 2, 1, 'API Token', '[]', 0, '2023-06-23 03:27:22', '2023-06-23 03:27:22', '2024-06-23 10:27:22'),
('14718e33f1567414f08b42dc4f3cf5a3b72661895418b94241525fc802460aaf9f6bd2bc313d7380', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:45:54', '2023-06-23 03:45:54', '2024-06-23 10:45:54'),
('293a27b94c520346e3121414a6554be545ff992d8065e933f6047abe3b9033191086588cce810959', 5, 1, 'API Token', '[]', 0, '2023-06-23 04:46:24', '2023-06-23 04:46:24', '2024-06-23 11:46:24'),
('29d75e6a9cc17e5fa5f7d7637328018dcdf28485a9c14bc9857dc0502104432f447b659b948b9426', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:44:30', '2023-06-23 03:44:30', '2024-06-23 10:44:30'),
('2b143f23dd29ba35b400f718e4643acef349d2948dc88ad42821645b75cc643184cf01fc70fdf139', 6, 1, 'API Token', '[]', 0, '2023-06-23 05:24:37', '2023-06-23 05:24:37', '2024-06-23 12:24:37'),
('2ba98af5d96385a81367a8c2615b438d60f05cb8c26e9f98ac99a7839415b570cd2df987b834c1e5', 6, 1, 'API Token', '[]', 0, '2023-06-23 05:00:31', '2023-06-23 05:00:31', '2024-06-23 12:00:31'),
('343cf4eaa74a81e9713c3c025ec2fa321ebf05477be501bda36a1cd96c1f87c9b0afb53a8e3ac47f', 1, 1, 'authToken', '[]', 0, '2023-06-23 03:16:30', '2023-06-23 03:16:30', '2024-06-23 10:16:30'),
('4fcbb61f040a17c032deb3f5ab7cb8e52ebef83baad32b9395132b104956e78576cb3df0a727027b', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:46:13', '2023-06-23 03:46:13', '2024-06-23 10:46:13'),
('50fc14a3a8523168b5cf45e5d6b89dccb299ac692737f4681a75ec14470bcf6d462fccbc231bb689', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:45:37', '2023-06-23 03:45:37', '2024-06-23 10:45:37'),
('8b1538cf733ef91d8bcdc874064d291785ca0f65f7625fcc6cded90cce32cd0cb75748f01a444f90', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:44:35', '2023-06-23 03:44:35', '2024-06-23 10:44:35'),
('9b988ff5150ec91eaf6751606046c6b0e05f784f4d116296984eaed4828f4218762f3fb6aefd6a17', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:44:16', '2023-06-23 03:44:16', '2024-06-23 10:44:16'),
('ae493156bcf91e33eba3a523aa14c1b8a986b96c152a2edea6870d1fdbefd1864b72771453bb815b', 5, 1, 'API Token', '[]', 1, '2023-06-23 04:07:21', '2023-06-23 04:07:21', '2024-06-23 11:07:21'),
('b6132b3e9a0e8f8a1e47256a6498247830703246b3bd1e10fd149a84247364dd3d13d7495f333bc9', 4, 1, 'API Token', '[]', 1, '2023-06-23 03:37:11', '2023-06-23 03:37:11', '2024-06-23 10:37:11'),
('b984ab1944dd5f7f8f5403776ae2f23af35002793630d952b49165f623262c8db9132a8455b02ff9', 5, 1, 'API Token', '[]', 0, '2023-06-23 04:46:19', '2023-06-23 04:46:19', '2024-06-23 11:46:19'),
('dabac3311dc2ae6583d07b3e79a674e53d536d26086f4b6f1d31927a1dc76b60b4dcdd93088741f8', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:44:32', '2023-06-23 03:44:32', '2024-06-23 10:44:32'),
('ddfa94c7ba726f4e0e8bb177641ac1e82f00435c91bd9e157502e6d4e10ee4e6be80b492ff5f21d2', 3, 1, 'API Token', '[]', 0, '2023-06-23 03:30:09', '2023-06-23 03:30:09', '2024-06-23 10:30:09'),
('e13924012a14717110629bf84f463f836d54d874c7255cc25d5b830b34dd4e64899393a6f8d55db2', 4, 1, 'API Token', '[]', 0, '2023-06-23 03:44:25', '2023-06-23 03:44:25', '2024-06-23 10:44:25'),
('fa97103c770d74c845e469d0b0510bed796d03beb88706063a48cbfb2438714145961793485fc3f3', 7, 1, 'API Token', '[]', 0, '2023-06-25 00:47:00', '2023-06-25 00:47:00', '2024-06-25 07:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '5vM6n4Qb5oTxEXCqdsjTgAWUiK8jDCmsns8W55Y4', NULL, 'http://localhost', 1, 0, 0, '2023-06-23 03:14:46', '2023-06-23 03:14:46'),
(2, NULL, 'Laravel Password Grant Client', 'WIb3V7FOAR6rF8xI2NoCrEX3FWhuLN8Hp5ixTr4h', 'users', 'http://localhost', 0, 1, 0, '2023-06-23 03:14:46', '2023-06-23 03:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-06-23 03:14:46', '2023-06-23 03:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `posyandu`
--

CREATE TABLE `posyandu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_posyandu` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `puskesmas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posyandu`
--

INSERT INTO `posyandu` (`id`, `nama_posyandu`, `alamat`, `kelurahan`, `kecamatan`, `puskesmas_id`, `created_at`, `updated_at`) VALUES
(1, 'posyandu ', '1', '2', '3', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `sms_wa` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama_puskesmas`, `alamat`, `telepon`, `sms_wa`, `created_at`, `updated_at`) VALUES
(1, 'puskesmas 1', '1', '2', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'wahyu pas', 'wahyuadhiprabo@gmail.com', '$2y$10$rUbIBvxfX0l.hRSscQDGbO22CHpH7pV5B.YkXpFwvAH4efSrcfwSC', 'user', '2023-06-23 03:16:30', '2023-06-23 03:16:30'),
(2, 'wahyu', 'wahyuadhiprabow100@gmail.com', '$2y$10$rQV4Ix4mGJtk7vMhwaJuSO0T7Ki.P09l.b27VV7IZRK/8/Y0s8eJK', 'user', '2023-06-23 03:27:22', '2023-06-23 03:27:22'),
(3, 'wahyu', 'wahyuadhiprabo1@gmail.com', '$2y$10$piuatjdYWSSWrW9JHTnLC.2DKHcsqwkkJwyD5vNlzL81BtEjhX.Sa', 'user', '2023-06-23 03:30:08', '2023-06-23 03:30:08'),
(4, 'wahyu', 'wahyuadhiprab@gmail.com', '$2y$10$pgCWTf75UIJtgy/WXaivMuw29avDD.jwYDg9gBR1eszh8x0n.H1NW', 'admin', '2023-06-23 03:37:11', '2023-06-23 03:37:11'),
(5, 'wahyu adhi prabowo', 'wahyu@gmail.com', '$2y$10$CW7wux4EN3fVqvFxxHsMZ.urRiXS2T46UlBzuNWae3UFnhx3vh0u6', 'user', '2023-06-23 04:07:21', '2023-06-23 04:07:21'),
(6, 'lol', 'bowo@gmail.com', '$2y$10$fN.kNJutxjpVuNKEly1M5.3EaIX7v9qwG.0bh.9Dso1Z5PkBk0zkm', 'user', '2023-06-23 05:00:31', '2023-06-23 05:54:42'),
(7, 'wahyuu adhi', 'wahyuadhiprabowoo1@gmail.com', '$2y$10$UJSGEmoLyq1muzCsss5veeUZUMGt.IpLZKEdwJQMa9N1BbM8Aykwi', 'user', '2023-06-25 00:47:00', '2023-06-25 00:47:00'),
(8, 'Tasya zahwa', 'tzhw12@gmail.com', '1234567', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `balita_posyandu_id_foreign` (`posyandu_id`),
  ADD KEY `balita_puskesmas_id_foreign` (`puskesmas_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posyandu_puskesmas_id_foreign` (`puskesmas_id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
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
-- Constraints for table `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `balita_posyandu_id_foreign` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `balita_puskesmas_id_foreign` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD CONSTRAINT `posyandu_puskesmas_id_foreign` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
