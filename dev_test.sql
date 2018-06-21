-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 02:21 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rand_value` double(50,2) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `description`, `asset_model`, `rand_value`, `company_id`, `created_at`, `updated_at`) VALUES
(5, 'Building', 'Office space', 5000000.00, 87, '2018-06-19 09:47:41', '2018-06-19 09:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(84, 'Paucek, Gutkowski and Pollich', 'jromaguera@example.com', 'd4c2737bb4a13b7bf8ae4e3b9dfff7af.jpg', 'http://pouros.net/', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(85, 'Hayes LLC', 'bode.ena@example.com', '1aa114e231a919200b53aa406c7a3910.jpg', 'http://www.bailey.com/quod-neque-dignissimos-quis-qui-sint-exercitationem-optio', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(86, 'Senger, Parisian and Wunsch', 'judge.hoppe@example.net', '2a32306d229d976020f2d53fde6b48ef.jpg', 'http://www.nienow.com/dicta-nostrum-et-enim-odio-adipisci-quas-rem-delectus', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(87, 'Anderson-Ritchies', 'jimmie67@example.net', 'd777b5299e2c0bfdcba12c231f860413.jpg', 'http://breitenberg.biz/', '2018-06-19 09:25:34', '2018-06-19 09:49:52'),
(88, 'Metz-Wunsch', 'jaquan.watsica@example.net', 'c2a5a611b1d3b1fa10490a09c7fa215a.jpg', 'http://www.lockman.com/mollitia-qui-veniam-aspernatur-illum-et-pariatur-incidunt-dolores.html', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(89, 'Corkery-Mayert', 'lreilly@example.org', '39ed869f475ba04c1468369dee90f2d3.jpg', 'http://www.rodriguez.info/', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(90, 'Hyatt Inc', 'agerhold@example.net', '03cf46a176f23caf619e1c622ff7eebd.jpg', 'http://gorczany.biz/doloremque-quo-voluptatem-quas-omnis-sint-rem', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(91, 'Crist, Reinger and Schroeder', 'kris.vida@example.net', '38bc14fe0169ea2c8e6fedc36975b2ea.jpg', 'https://www.corkery.biz/nihil-pariatur-quia-officia-tempore-quibusdam-id', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(92, 'Hegmann PLC', 'rylee94@example.com', '82af480efe967685ef4337b42f91c229.jpg', 'https://doyle.com/sit-qui-et-debitis-ut-numquam-aut-cupiditate.html', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(93, 'Brown-Considine', 'kassulke.stuart@example.net', 'b3ec6613f991769b4c07c5a463f4b873.jpg', 'http://www.dickinson.com/nulla-officiis-eos-dignissimos-magnam-aut.html', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(94, 'Boehm PLC', 'millie.hyatt@example.net', '4bba83124e6772163883d5e910e61cb8.jpg', 'https://www.koelpin.biz/et-aut-eligendi-maiores-quas-corrupti-velit-sit-voluptate', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(95, 'Quigley LLC', 'nelda87@example.com', '134f21dc212a47b4344ee6ebab2e9bc2.jpg', 'http://walter.info/ea-aspernatur-et-perspiciatis', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(96, 'Fisher Ltd', 'zwehner@example.com', '944a73354a13265fb0f00e91389426d7.jpg', 'https://carroll.com/quasi-voluptatum-hic-sed-deleniti-qui-natus-totam.html', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(97, 'Ullrich-Davis', 'ikutch@example.com', '2fdf45a219323a412cb3007f40db138d.jpg', 'http://www.emmerich.net/consequatur-optio-ad-ducimus-aut-qui-non-alias', '2018-06-19 09:25:34', '2018-06-19 09:25:34'),
(98, 'Bins LLC', 'elenor12@example.org', '7e4d03f35f790855f8a0a02d4ab071b2.jpg', 'http://www.hansen.com/consequatur-id-enim-quia.html', '2018-06-19 09:25:35', '2018-06-19 09:25:35'),
(99, 'Kreiger-Effertz', 'carolina76@example.org', 'b92f9c07fa8d22fffb1189244bd3887a.jpg', 'http://ebert.com/iusto-expedita-quia-est-maxime-enim-vitae.html', '2018-06-19 09:25:35', '2018-06-19 09:25:35'),
(100, 'Paucek-Waters', 'buckridge.herta@example.org', 'ecdbc454eb0f17587fd2e59e8a7fb6bb.jpg', 'http://effertz.com/nobis-illum-magni-recusandae-necessitatibus-quam-dolor-sed', '2018-06-19 09:25:35', '2018-06-19 09:25:35'),
(101, 'Flatley-Bergstrom', 'pstrosin@example.com', 'ebd299ed6f7f29d054ec95eeaa9b729e.jpg', 'http://abshire.com/', '2018-06-19 09:25:35', '2018-06-19 09:25:35'),
(102, 'Howell-Bernier', 'lacey31@example.org', '489682a359c586a91ce9df75d826d837.jpg', 'http://lockman.net/tenetur-explicabo-nihil-quis-assumenda-dolor-aut-ut', '2018-06-19 09:25:35', '2018-06-19 09:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_06_16_225627_create_companies_table', 1),
(40, '2018_06_16_231553_create_assets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prishen', 'pg@test.com', '$2y$10$B91XD6Dsa7doWGBfC1aO9et/Ex4xnuWDVpOe4kI3MTYV2UyQDD6aS', 'n7Gl3uvLKVpES4KOFnRs59p8qLCVXUFRys0PgYfXSusog2IDrXRBewbowdsz', '2018-06-18 14:50:57', '2018-06-18 14:50:57'),
(79, 'Mr. Presley Witting', 'pdurgan@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'RJLfAkh8YY', '2018-06-19 09:18:12', '2018-06-19 09:18:12'),
(80, 'Laney Boyer', 'dibbert.kelton@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '4J1N8SFQCW', '2018-06-19 09:18:12', '2018-06-19 09:18:12'),
(81, 'Bradford Yundt', 'amari35@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '46rhQJg4PZ', '2018-06-19 09:18:13', '2018-06-19 09:18:13'),
(82, 'Mrs. Macy Schmidt Jr.', 'bschiller@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'nQKpU39Ir7', '2018-06-19 09:21:31', '2018-06-19 09:21:31'),
(83, 'Lawson Stamm V', 'rnienow@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'o3MI35KAAd', '2018-06-19 09:21:31', '2018-06-19 09:21:31'),
(84, 'Dr. Cristina Rutherford', 'braulio.west@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'wJIeecxCBV', '2018-06-19 09:21:32', '2018-06-19 09:21:32'),
(85, 'Hilbert Tromp', 'hilll.laverne@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'hU6ojligZe', '2018-06-19 09:25:04', '2018-06-19 09:25:04'),
(86, 'Cyrus Crooks', 'rberge@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'i4x8DVyLEq', '2018-06-19 09:25:04', '2018-06-19 09:25:04'),
(87, 'Mrs. Samara Littel', 'pinkie07@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xPq7U7bBVO', '2018-06-19 09:25:04', '2018-06-19 09:25:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
