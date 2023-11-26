-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 08:30 AM
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
-- Database: `onic-pkl`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_27_030506_m_user', 1),
(3, '2023_07_27_030542_t_membership', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'admin', '$2y$10$yHBWy5R0GBcqOJ0H5C1jGeBR8/v.yCaLtPF61Vz3WEQ4k/Ai08a3G', 'admin', NULL, '2023-08-15 22:04:26', '2023-08-15 22:04:26', NULL, NULL),
(7, 'deden22', '$2y$10$zyOrW2lwncgOXGpiEIXpne0ph1MdKANHTdjRFFmnOEVoFqQENmsgu', 'member', NULL, '2023-10-21 02:51:58', '2023-10-21 02:51:58', NULL, NULL),
(8, 'aziz99', '$2y$10$vm1DgmrDapf4a4AMYLokK.nyeQsXAHRaDvyxHjXat7tqpVW8BK0km', 'member', NULL, '2023-10-22 11:06:36', '2023-10-22 11:06:36', NULL, NULL),
(9, 'jhon00', '$2y$10$c4rtYZ45n7CtcfT12.mQgOKkmeOcgg84yfoY3VbDb/eziHMwQ9gWu', 'member', NULL, '2023-10-22 11:08:02', '2023-10-22 11:08:02', NULL, NULL),
(10, 'ani_hijrah', '$2y$10$wfxLuu2hrG0Tdfio5iIJA.4BuZQ9Icl8243CjzODiTw82qw8OH6vm', 'member', NULL, '2023-10-22 11:08:50', '2023-10-22 11:08:50', NULL, NULL),
(11, 'jejen-doank', '$2y$10$ffUXDfRzeElBPLeQSa2JQ.UfwNucNKxj8j5ylG7JfvQylrSXZoEWO', 'member', NULL, '2023-10-22 11:10:01', '2023-10-22 11:10:01', NULL, NULL),
(12, 'dandi', '$2y$10$mrZTOhoiuf8z0d9elPKuCOz5uG8dJoJZEFmI1JUkTAvGq.z/30r42', 'member', NULL, '2023-10-25 11:34:06', '2023-10-25 11:34:06', NULL, NULL),
(13, 'udil10', '$2y$10$TILbbcAFEPQwKqlmmRfGVuRn0E1rjgW/GCUwsKmXEt7u5eRh/aS12', 'member', NULL, '2023-10-25 11:35:23', '2023-10-25 11:35:23', NULL, NULL),
(14, 'player8', '$2y$10$ITplGoQBlhGeyavIAZkbqerXm9KenSS2chh7OqmBWE4xSPVxmk05O', 'member', NULL, '2023-10-25 11:36:26', '2023-10-25 11:36:26', NULL, NULL),
(15, 'kiki', '$2y$10$OKCdY.eE.Zv2aIpsTt91ueX4xUxYygnryKKXruwej5h40.PXyEeZO', 'member', NULL, '2023-10-25 11:37:07', '2023-10-25 11:37:07', NULL, NULL),
(16, 'player10', '$2y$10$YWiMriO2.GPl0zFD2EGTUuZUJHD6gIw.g27URYBSxOy3Ws3lHtfjy', 'member', NULL, '2023-10-25 11:46:30', '2023-10-25 11:46:30', NULL, NULL),
(17, 'andri', '$2y$10$FEqIrfpqYNGqZxyNPliRr.PPjMnHHS6elCAqhiNw1gv1unvUKPt0a', 'member', NULL, '2023-10-25 22:01:42', '2023-10-25 22:01:42', NULL, NULL),
(18, 'moonton', '$2y$10$ZXW9R7a9GHSrv17pPHcljuLVmvpB/M2D.CwVwM9eJsM9dZmEo2F9e', 'member', NULL, '2023-10-25 22:02:28', '2023-10-25 22:02:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_turnament` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `id_turnament`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 2, 7, '2023-10-22 01:32:30', '2023-10-22 01:32:30'),
(3, 3, 7, '2023-10-22 01:37:57', '2023-10-22 01:37:57'),
(4, 4, 7, '2023-10-22 01:38:22', '2023-10-22 01:38:22'),
(9, 2, 8, '2023-10-25 00:24:29', '2023-10-25 00:24:29'),
(10, 2, 9, '2023-10-25 00:25:06', '2023-10-25 00:25:06'),
(11, 2, 10, '2023-10-25 00:25:39', '2023-10-25 00:25:39'),
(12, 2, 11, '2023-10-25 00:26:10', '2023-10-25 00:26:10'),
(13, 2, 12, '2023-10-25 12:03:59', '2023-10-25 12:03:59'),
(14, 2, 13, '2023-10-25 12:04:29', '2023-10-25 12:04:29'),
(15, 2, 14, '2023-10-25 12:08:46', '2023-10-25 12:08:46'),
(16, 2, 15, '2023-10-25 12:09:30', '2023-10-25 12:09:30'),
(17, 2, 16, '2023-10-25 12:55:44', '2023-10-25 12:55:44'),
(18, 3, 8, '2023-10-25 22:09:50', '2023-10-25 22:09:50'),
(19, 3, 13, '2023-10-25 22:11:05', '2023-10-25 22:11:05'),
(20, 3, 14, '2023-10-25 22:11:38', '2023-10-25 22:11:38'),
(21, 3, 15, '2023-10-25 22:12:31', '2023-10-25 22:12:31'),
(22, 3, 17, '2023-10-25 22:12:57', '2023-10-25 22:12:57');

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
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `id_turnament` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `id_pendaftar1` int(11) NOT NULL,
  `id_pendaftar2` int(11) NOT NULL,
  `id_pendaftar3` int(11) NOT NULL,
  `id_pendaftar4` int(11) NOT NULL,
  `id_pendaftar5` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `id_turnament`, `nama_team`, `id_pendaftar1`, `id_pendaftar2`, `id_pendaftar3`, `id_pendaftar4`, `id_pendaftar5`, `created_at`, `updated_at`) VALUES
(7, 2, 'bakwan-esport', 7, 12, 16, 11, 13, '2023-10-25 12:56:26', '2023-10-25 12:56:26'),
(8, 3, 'evos', 14, 8, 15, 17, 13, '2023-10-25 22:13:54', '2023-10-25 22:13:54'),
(10, 2, 'kurama', 10, 15, 8, 14, 9, '2023-10-25 23:20:04', '2023-10-25 23:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `turnament`
--

CREATE TABLE `turnament` (
  `id_turnament` int(11) NOT NULL,
  `nama_turnament` varchar(50) NOT NULL,
  `slot` int(11) NOT NULL,
  `prize` int(11) NOT NULL,
  `mulai` datetime DEFAULT NULL,
  `batas_dftr` datetime DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turnament`
--

INSERT INTO `turnament` (`id_turnament`, `nama_turnament`, `slot`, `prize`, `mulai`, `batas_dftr`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'turnament 2', 36, 870, '2023-10-22 02:35:00', '2023-10-22 02:35:00', 'storage/images/claude.jpg', '2023-10-21 10:11:36', '2023-10-21 12:35:22'),
(3, 'turnament 3', 72, 1800, '2023-10-22 02:35:00', '2023-10-22 02:35:00', 'storage/images/granger.jpg', '2023-10-21 10:12:00', '2023-10-21 12:35:39'),
(4, 'turnament 4', 36, 530, '2023-10-22 02:36:00', '2023-10-22 02:36:00', 'storage/images/fredrin.jpg', '2023-10-21 10:12:19', '2023-10-21 12:36:23'),
(6, 'turnament 6', 128, 1200, '2023-10-22 02:38:00', '2023-10-22 02:38:00', 'storage/images/super-bruno.jpg', '2023-10-21 10:12:58', '2023-10-21 12:38:37'),
(7, 'turnament 6', 48, 480, '2023-10-31 23:35:00', '2023-10-16 15:34:00', 'storage/images/bruno.jpg', '2023-10-21 12:33:37', '2023-10-21 12:33:37');

--
-- Triggers `turnament`
--
DELIMITER $$
CREATE TRIGGER `turnamentSelesai` AFTER DELETE ON `turnament` FOR EACH ROW BEGIN
 
    DELETE FROM team WHERE id_turnament = OLD.id_turnament;


    DELETE FROM pendaftar WHERE id_turnament = OLD.id_turnament;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_membership`
--

CREATE TABLE `t_membership` (
  `id_member` bigint(20) UNSIGNED NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  `nama_depan` varchar(150) NOT NULL,
  `nama_belakang` varchar(150) NOT NULL,
  `nickname` varchar(150) NOT NULL,
  `kelamin` tinyint(4) NOT NULL DEFAULT 0,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `id_discord` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_membership`
--

INSERT INTO `t_membership` (`id_member`, `kode_member`, `nama_depan`, `nama_belakang`, `nickname`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `email`, `no_hp`, `id_discord`, `created_at`, `updated_at`) VALUES
(1, 'SONIC_001_arab00', 'agus', 'salim', 'arab00', 1, 'bandung', '0220-09-01', 'ri@gmail.com', '0897763421', '77854312', '2023-08-20 21:14:46', '2023-08-20 21:14:46'),
(2, 'SONIC_002_fahri', 'fahri', 'jabrik', 'fahri', 1, 'jakarta', '2023-10-03', 'fahri@gmai.com', '086543152261', '8875342', '2023-10-16 21:59:21', '2023-10-16 21:59:21'),
(3, 'SONIC_003_miaw', 'nana', 'ahmad', 'miaw', 1, 'kediri', '2023-10-02', 'ri@gmail.com', '0897763421', '77854312', '2023-10-19 00:26:55', '2023-10-19 00:26:55'),
(4, 'SONIC_004_ddsa', 'rizal', 'arab', 'ddsa', 1, 'jakarta', '2023-10-10', 'vg@gmail.com', '086543152261', '77854312', '2023-10-19 02:15:17', '2023-10-19 02:15:17'),
(5, 'SONIC_005_anarki', 'ajeng', 'agustina', 'anarki', 2, 'jawa', '2023-10-12', 'ri@gmail.com', '087448', '77854312', '2023-10-21 02:42:08', '2023-10-21 02:42:08'),
(6, 'SONIC_006_deden22', 'reza', 'firdaus', 'deden22', 1, 'manado', '2023-10-16', 'vg@gmail.com', '087448', '8875342', '2023-10-21 02:51:58', '2023-10-21 02:51:58'),
(7, 'SONIC_007_aziz99', 'aziz', 'gagap', 'aziz99', 1, 'solo', '2023-10-10', 'aziz@gmail.com', '087448', '8875123', '2023-10-22 11:06:36', '2023-10-22 11:06:36'),
(8, 'SONIC_008_jhon00', 'krisna', 'taj', 'jhon00', 1, 'ngawi', '2023-10-10', 'jhon@gmail.com', '880091162', '3109725', '2023-10-22 11:08:02', '2023-10-22 11:08:02'),
(9, 'SONIC_009_ani_hijrah', 'ani', 'suri', 'ani_hijrah', 1, 'manado', '2023-10-12', 'ani@gmail.com', '087611425617', '314562219', '2023-10-22 11:08:49', '2023-10-22 11:08:49'),
(10, 'SONIC_010_jejen-doank', 'jeni', 'jejen', 'jejen-doank', 1, 'jakarta', '2023-10-11', 'jejen@gmail.com', '087448', '8875342', '2023-10-22 11:10:01', '2023-10-22 11:10:01'),
(11, 'SONIC_011_dandi', 'dandi', 'jete', 'dandi', 1, 'maluku', '2023-10-10', 'arema@gmail.com', '08873461284', '33413624', '2023-10-25 11:34:06', '2023-10-25 11:34:06'),
(12, 'SONIC_012_udil10', 'udil', 'rock', 'udil10', 1, 'jakarta', '2023-10-02', 'udil@gmail.com', '0899965436', '11874215', '2023-10-25 11:35:23', '2023-10-25 11:35:23'),
(13, 'SONIC_013_player8', 'neni', 'nur', 'player8', 1, 'kediri', '2023-10-18', 'neni@gmail.com', '553235', '5645211', '2023-10-25 11:36:26', '2023-10-25 11:36:26'),
(14, 'SONIC_014_kiki', 'kiko', 'kiki', 'kiki', 2, 'bogor', '2023-10-10', 'kiki@gmail.com', '088913527', '8875123', '2023-10-25 11:37:07', '2023-10-25 11:37:07'),
(15, 'SONIC_015_player10', 'jambi', 'slank', 'player10', 1, 'bali', '2023-10-02', 'bali@gmail.com', '087448', '93849', '2023-10-25 11:46:30', '2023-10-25 11:46:30'),
(16, 'SONIC_016_andri', 'andri', 'ex', 'andri', 1, 'sorong', '2023-10-09', 'andri@gmail.com', '33230093', '3450928934', '2023-10-25 22:01:42', '2023-10-25 22:01:42'),
(17, 'SONIC_017_moonton', 'reza', 'rahadian', 'moonton', 1, 'aceh', '2023-10-08', 'moonton@gmail.com', '09848749', '23122344', '2023-10-25 22:02:28', '2023-10-25 22:02:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `m_user_created_by_foreign` (`created_by`),
  ADD KEY `m_user_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `turnament`
--
ALTER TABLE `turnament`
  ADD PRIMARY KEY (`id_turnament`);

--
-- Indexes for table `t_membership`
--
ALTER TABLE `t_membership`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `turnament`
--
ALTER TABLE `turnament`
  MODIFY `id_turnament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_membership`
--
ALTER TABLE `t_membership`
  MODIFY `id_member` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL,
  ADD CONSTRAINT `m_user_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
