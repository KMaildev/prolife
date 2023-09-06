-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2023 at 05:28 AM
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
-- Database: `phyusan_udate`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `categorie_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `images`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Class Room Activities', 'https://www.website.phyusan.com/admin/uploads/files/9ytc6v5x0l8gkbs.jpg,https://www.website.phyusan.com/admin/uploads/files/5pqs4y3djhk6_0v.jpg,https://www.website.phyusan.com/admin/uploads/files/4frd9neyq8p673b.jpg,https://www.website.phyusan.com/admin/uploads/files/nr6vil9weqa37h1.jpg,https://www.website.phyusan.com/admin/uploads/files/6setfq30zdw5xi2.jpg,https://www.website.phyusan.com/admin/uploads/files/edvyofu8nm6stwq.jpg,https://www.website.phyusan.com/admin/uploads/files/s6pt30hcuifxk8q.jpg,https://www.website.phyusan.com/admin/uploads/files/y93rsjdpgbi47ax.jpg,https://www.website.phyusan.com/admin/uploads/files/h1o0dsity6ar4qj.jpg,https://www.website.phyusan.com/admin/uploads/files/gcmx8pzfej4v0wn.jpg,https://www.website.phyusan.com/admin/uploads/files/m647fq5c8xj9ytg.jpg,https://www.website.phyusan.com/admin/uploads/files/8p_67thr5faocsv.jpg,https://www.website.phyusan.com/admin/uploads/files/comie8wr532apdu.jpg,https://www.website.phyusan.com/admin/uploads/files/lotgepzs6fj34u_.jpg,https://www.website.phyusan.com/admin/uploads/files/mqe4kdf_8aswoty.jpg,https://www.website.phyusan.com/admin/uploads/files/gv1c0wypmlxsbe5.jpg,https://www.website.phyusan.com/admin/uploads/files/t61o40sguejh28z.jpg,https://www.website.phyusan.com/admin/uploads/files/8fhdgj9czmabnwv.jpg,https://www.website.phyusan.com/admin/uploads/files/gk3ylnqx8aoif5p.jpg,https://www.website.phyusan.com/admin/uploads/files/2jznreiglbk0t1_.jpg,https://www.website.phyusan.com/admin/uploads/files/pvfzuejoln4tb1q.jpg', '1', NULL, NULL),
(2, 'Interview Activities', 'https://www.website.phyusan.com/admin/uploads/files/z_g7lardbwvqx25.jpg,https://www.website.phyusan.com/admin/uploads/files/hjsib768pofa1v_.jpg,https://www.website.phyusan.com/admin/uploads/files/8rjnzet_bwhoc1u.jpg,https://www.website.phyusan.com/admin/uploads/files/re29yh5c0nd6g8v.jpg,https://www.website.phyusan.com/admin/uploads/files/34aes8xfntvurz5.jpg,https://www.website.phyusan.com/admin/uploads/files/1p0nrlaifydz8ub.jpg,https://www.website.phyusan.com/admin/uploads/files/jytip9hsa5zeckn.jpg,https://www.website.phyusan.com/admin/uploads/files/dnfp314otegq9ua.jpg,https://www.website.phyusan.com/admin/uploads/files/ul1gcte2p7hvznd.jpg,https://www.website.phyusan.com/admin/uploads/files/uvawy80pg6e79qo.jpg,https://www.website.phyusan.com/admin/uploads/files/3vrjs5wefp98uc4.jpg,https://www.website.phyusan.com/admin/uploads/files/2mch4ozlgir51ye.jpg,https://www.website.phyusan.com/admin/uploads/files/oqitcmdwyp4h5nk.jpg,https://www.website.phyusan.com/admin/uploads/files/zb87alkxwmrugyq.jpg', '1', NULL, NULL),
(3, 'Departure Activities', 'https://www.website.phyusan.com/admin/uploads/files/n0di93szvhmp85u.jpg,https://www.website.phyusan.com/admin/uploads/files/v8ng43h2s9qbfix.jpg,https://www.website.phyusan.com/admin/uploads/files/slm7zw05ckfervy.jpg,https://www.website.phyusan.com/admin/uploads/files/39i6xhrg2k_uq1n.jpg,https://www.website.phyusan.com/admin/uploads/files/69ci2vutyl7nk1j.jpg,https://www.website.phyusan.com/admin/uploads/files/3un5dt604mc7ihq.jpg,https://www.website.phyusan.com/admin/uploads/files/l0ut6vyk1x2n5mw.jpg,https://www.website.phyusan.com/admin/uploads/files/wvk8lhzqxfpu1eg.jpg,https://www.website.phyusan.com/admin/uploads/files/nxhl5f04cpmd6vu.jpg,https://www.website.phyusan.com/admin/uploads/files/xcrz490qu3nmpa_.jpg,https://www.website.phyusan.com/admin/uploads/files/o82tamg5ijxvbc3.jpg', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submit_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `additional_note` varchar(255) DEFAULT NULL,
  `attachment_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text DEFAULT NULL,
  `type_of_company` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `job_category` text DEFAULT NULL,
  `age_limit` text DEFAULT NULL,
  `educational_requirement` text DEFAULT NULL,
  `working_experience_requirement` text DEFAULT NULL,
  `other_additional_requirement` text DEFAULT NULL,
  `estimate_salary_offer` text DEFAULT NULL,
  `other_allowance` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `interview_type` text DEFAULT NULL,
  `apply_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `countrie_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_02_055435_create_contacts_table', 1),
(6, '2023_07_03_031006_create_categories_table', 2),
(7, '2023_07_03_031341_create_activities_table', 3),
(8, '2023_07_03_045415_create_cvs_table', 4),
(9, '2023_07_03_051745_create_employers_table', 5),
(10, '2023_07_03_070032_create_countries_table', 6),
(11, '2023_07_03_070257_create_jobs_table', 7),
(12, '2023_07_03_143404_create_teams_table', 8);

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_session_key` text DEFAULT NULL,
  `email_status` text DEFAULT NULL,
  `password_reset_key` text DEFAULT NULL,
  `password_expire_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `login_session_key`, `email_status`, `password_reset_key`, `password_expire_date`) VALUES
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$o4Sc8fXCq6fTb3V0tu2SSOfLDwdHgQ6MSzk/qOwWuEqh8oQqJEe8O', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
