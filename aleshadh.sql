-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 03:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aleshadh`
--

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
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jns_hwn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nm_hewan`, `jns_hwn`, `berat`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Domba Jantan Type A', 'Domba', '25 Kg', 7, 2500000, '2023-06-12 18:29:43', '2023-06-12 18:30:18'),
(2, 'Domba Jantan Type B', 'Domba', '30 Kg', 5, 3000000, '2023-06-12 18:30:11', '2023-06-12 18:31:11'),
(3, 'Domba Jantan Type C', 'Domba', '35 Kg', 5, 3450000, '2023-06-12 18:30:53', '2023-06-12 18:30:53'),
(4, 'Domba Jantan Type D', 'Domba', '40 Kg', 5, 3800000, '2023-06-12 18:31:49', '2023-06-12 18:31:49'),
(5, 'Domba Betina Type A', 'Domba', '25 Kg', 5, 2000000, '2023-06-12 18:32:09', '2023-06-12 18:32:09'),
(6, 'Domba Betina Type B', 'Domba', '30 Kg', 5, 2350000, '2023-06-12 18:32:37', '2023-06-12 18:32:37'),
(7, 'Sapi Bali Type A', 'Sapi', '250 Kg', 5, 18000000, '2023-06-12 18:33:02', '2023-06-12 18:33:02'),
(8, 'Sapi Bali Type B', 'Sapi', '300 Kg', 5, 22000000, '2023-06-12 18:33:23', '2023-06-12 18:33:23'),
(9, 'Sapi Bali Type C', 'Sapi', '350 Kg', 5, 26000000, '2023-06-12 18:33:44', '2023-06-12 18:33:44'),
(10, 'Sapi Bali Type D', 'Sapi', '400 Kg', 5, 31000000, '2023-06-12 18:34:09', '2023-06-12 18:34:09'),
(11, 'Sapi Limousin Type A', 'Sapi', '300 Kg', 5, 22000000, '2023-06-12 18:34:31', '2023-06-12 18:34:31'),
(12, 'Sapi Limousin Type B', 'Sapi', '400 Kg', 5, 29000000, '2023-06-12 18:34:53', '2023-06-12 18:34:53');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_10_023612_create_hewan_table', 1),
(6, '2023_06_10_025836_create_pembeli_table', 1),
(7, '2023_06_10_032148_create_transaksi_table', 1),
(8, '2023_06_10_211222_create_pembayaran_table', 1);

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl_harga` int(11) NOT NULL,
  `hrg_pemeliharaan` int(11) NOT NULL,
  `hrg_pengiriman` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `dp` int(11) NOT NULL,
  `sisa_pembayaran` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_transaksi`, `nm_pembeli`, `ttl_harga`, `hrg_pemeliharaan`, `hrg_pengiriman`, `total`, `dp`, `sisa_pembayaran`, `status`, `bukti`, `created_at`, `updated_at`) VALUES
(3, '2', 'nadila', 3000000, 0, 15000, 3015000, 2500000, 515000, 'Belum Lunas', '/private/var/folders/q8/z5yxdcjs5xzg0lb32dzxq_t40000gn/T/phpcXmzKe', '2023-06-12 19:58:28', '2023-06-12 19:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nm_pembeli`, `no_telp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Junjun', '081829372910', 'junjun@gmail.com', 'Jl. Raya Simpang Pahlawan No. 33', '2023-06-12 18:36:29', '2023-06-12 18:36:29'),
(3, 'Ranita', '087616271892', 'ranita@gmail.com', 'Jl. Sukaluyu No. 66 Bandung', '2023-06-12 18:36:41', '2023-06-12 18:36:41'),
(4, 'nadila', '0897281638291', 'nadila@gmail.com', 'Jl. Pahlawan No 37', '2023-06-12 18:52:00', '2023-06-12 18:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_kirim` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pembeli`, `id_hewan`, `quantity`, `tgl_order`, `tgl_kirim`, `alamat`, `status`, `harga`, `total_harga`, `created_at`, `updated_at`) VALUES
(2, '4', '2', 1, '2023-06-13', '2023-06-13', '4', 'Dikirim', 3000000, 3000000, '2023-06-12 18:52:25', '2023-06-12 18:52:25');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Putri Shafa', 'putrisha@gmail.com', NULL, '$2y$10$WQJJgplt1v6kFOxrRcVrdefBrTrWIpwZy7hqEc.OKV3n2MaUcCaLC', NULL, '2023-06-12 11:03:56', '2023-06-12 11:03:56'),
(2, 'Shafa', 'shafa@gmail.com', NULL, '$2y$10$bJmpiL9a286n9FzV74kdlurIVsjm0js5VbUPHBuapOy2YCRhwy7Oy', NULL, '2023-06-12 18:44:19', '2023-06-12 18:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pembayaran_id_transaksi_unique` (`id_transaksi`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksi_id_pembeli_unique` (`id_pembeli`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
