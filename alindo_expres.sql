-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 05:53 PM
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
-- Database: `alindo_expres`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_rekap`
--

CREATE TABLE `laporan_rekap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rekap` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_rekap`
--

INSERT INTO `laporan_rekap` (`id`, `rekap`, `created_at`, `updated_at`) VALUES
(4, 'Jul-2023', '2023-07-12 14:44:57', '2023-07-12 14:44:57');

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
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(31, '2023_07_06_134506_create_paket', 1),
(32, '2023_07_07_194018_create_laporan_rekap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resi` text NOT NULL,
  `data_paket` text NOT NULL,
  `biaya_paket` text NOT NULL,
  `vendor_paket` text DEFAULT NULL,
  `history_paket` text NOT NULL,
  `status_paket` enum('proses','selesai','batal') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `resi`, `data_paket`, `biaya_paket`, `vendor_paket`, `history_paket`, `status_paket`, `created_at`, `updated_at`) VALUES
(1, '1207230000', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:7:\"Jakarta\";s:11:\"jumlah_koli\";s:1:\"1\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:2:\"50\";s:10:\"harga_kilo\";s:4:\"2000\";s:8:\"kategori\";s:4:\"alat\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:5:\"Daffa\";s:11:\"hp_pengirim\";s:12:\"082226223508\";s:13:\"nama_penerima\";s:4:\"Alif\";s:15:\"alamat_penerima\";s:13:\"jakarta pusat\";s:11:\"hp_penerima\";s:12:\"023094923949\";}', 'a:3:{s:11:\"biaya_kirim\";s:6:\"200000\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:6:\"200000\";}', NULL, 'a:5:{i:0;s:49:\"Create Invoice => nama admin [12:48, 12 Jul 2023]\";i:1;s:48:\"Update Vendor => nama admin [19:28, 12 Jul 2023]\";i:2;s:48:\"Delete Vendor => nama admin [20:22, 12 Jul 2023]\";i:3;s:48:\"Update Vendor => nama admin [20:25, 12 Jul 2023]\";i:4;s:48:\"Delete Vendor => nama admin [20:28, 12 Jul 2023]\";}', 'proses', '2023-07-12 05:48:19', '2023-07-12 13:28:07'),
(2, '1207230001', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:8:\"Magelang\";s:11:\"jumlah_koli\";s:1:\"1\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:2:\"50\";s:10:\"harga_kilo\";s:4:\"2000\";s:8:\"kategori\";s:4:\"alat\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:5:\"daffa\";s:11:\"hp_pengirim\";s:8:\"02310293\";s:13:\"nama_penerima\";s:4:\"alif\";s:15:\"alamat_penerima\";s:9:\"ajshdajsk\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:5:\"20000\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:5:\"20000\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:29, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:29:05', '2023-07-12 13:29:05'),
(3, '1207230002', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:6:\"asdasd\";s:11:\"jumlah_koli\";s:3:\"121\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:4:\"1232\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:30, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:30:59', '2023-07-12 13:30:59'),
(4, '1207230003', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:31, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:31:21', '2023-07-12 13:31:21'),
(5, '1207230004', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:4:\"3123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:1:\"1\";s:10:\"harga_kilo\";s:2:\"12\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:4:\"1213\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:4:\"1213\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:33, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:33:56', '2023-07-12 13:33:56'),
(6, '1207230005', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:4:\"3123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:1:\"1\";s:10:\"harga_kilo\";s:2:\"12\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:4:\"1213\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:4:\"1213\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:34, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:34:12', '2023-07-12 13:34:12'),
(7, '1207230006', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:6:\"123123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:5:\"12321\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:34, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:34:32', '2023-07-12 13:34:32'),
(8, '1207230007', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:6:\"123123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:5:\"12321\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:36, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:36:21', '2023-07-12 13:36:21'),
(9, '1207230008', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:6:\"123123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:5:\"12321\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:36, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:36:28', '2023-07-12 13:36:28'),
(10, '1207230009', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"asd\";s:11:\"jumlah_koli\";s:4:\"2134\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:4:\"2314\";s:10:\"harga_kilo\";s:3:\"234\";s:8:\"kategori\";s:3:\"234\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"234\";s:11:\"hp_pengirim\";s:3:\"234\";s:13:\"nama_penerima\";s:3:\"234\";s:15:\"alamat_penerima\";s:3:\"234\";s:11:\"hp_penerima\";s:3:\"234\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"234\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:4:\"2324\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:38, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:38:18', '2023-07-12 13:38:18'),
(11, '1207230010', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:4:\"1213\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:38, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:38:36', '2023-07-12 13:38:36'),
(12, '1207230011', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:4:\"1232\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:4:\"1213\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:4:\"1232\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:40, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:40:09', '2023-07-12 13:40:09'),
(13, '1207230012', 'a:13:{s:9:\"kota_asal\";s:10:\"Yogyakarta\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:7:\"2133123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:6:\"123123\";}', NULL, 'a:1:{i:0;s:49:\"Create Invoice => nama admin [20:40, 12 Jul 2023]\";}', 'proses', '2023-07-12 13:40:59', '2023-07-12 13:40:59'),
(14, '1207230013', 'a:13:{s:9:\"kota_asal\";s:7:\"lainnya\";s:11:\"kota_tujuan\";s:3:\"123\";s:11:\"jumlah_koli\";s:3:\"123\";s:5:\"berat\";i:20;s:12:\"berat_volume\";s:3:\"123\";s:10:\"harga_kilo\";s:3:\"123\";s:8:\"kategori\";s:3:\"123\";s:7:\"periksa\";s:12:\"Periksa-data\";s:13:\"nama_pengirim\";s:3:\"123\";s:11:\"hp_pengirim\";s:3:\"123\";s:13:\"nama_penerima\";s:3:\"123\";s:15:\"alamat_penerima\";s:3:\"123\";s:11:\"hp_penerima\";s:3:\"123\";}', 'a:3:{s:11:\"biaya_kirim\";s:3:\"123\";s:13:\"biaya_lainnya\";s:10:\"biaya-lain\";s:11:\"biaya_total\";s:3:\"123\";}', NULL, 'a:2:{i:0;s:49:\"Create Invoice => nama admin [20:41, 12 Jul 2023]\";i:1;s:77:\"Update Status => nama admin, Paket Status Set To selesai [22:31, 12 Jul 2023]\";}', 'selesai', '2023-07-12 13:41:14', '2023-07-12 13:41:14');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('kurir','staf','admin') NOT NULL DEFAULT 'staf',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nama admin', 'admin@gmail.com', NULL, '$2y$10$h45hDUpiJC/1q8ZDDpFN2.vsvJ80KqNhGBwHnnRPF8EVsv8SuU/na', 'admin', NULL, '2023-07-08 11:22:06', '2023-07-08 11:22:06'),
(2, 'nama staf', 'staf@gmail.com', NULL, '$2y$10$q5P/.mLJgGGv3fEDanxx.eODiuI4fNAMXmovzUhKd5lkLf0omq7b6', 'staf', NULL, '2023-07-08 11:22:06', '2023-07-08 11:22:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_rekap`
--
ALTER TABLE `laporan_rekap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pakets_resi_unique` (`resi`) USING HASH;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `laporan_rekap`
--
ALTER TABLE `laporan_rekap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
