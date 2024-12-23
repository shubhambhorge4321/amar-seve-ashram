-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2024 at 06:06 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amar_seve_aashram`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `cont_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `cont_name`, `cont_email`, `cont_phone`, `cont_message`, `created_at`, `updated_at`) VALUES
(20, 'soham', 'soham@gmail.com', '98989898', 'i wood like to connet with organise with you', '2024-01-22 00:11:07', '2024-01-22 00:11:07'),
(22, 'hgkvjbkn', 'tygkuhkjl@gtyh', '5678', 'gkuhjklm', '2024-01-24 00:13:54', '2024-01-24 00:13:54'),
(23, 'lkjliohn', 'oihih@kbjn', '788787878', 'fghvjbn guyhjkn', '2024-01-25 01:04:57', '2024-01-25 01:04:57'),
(24, 'vishal', 'info@dreamwebies.com', '9595065126', 'deep nagar nanded', '2024-12-20 01:23:03', '2024-12-20 01:23:03'),
(25, 'sknskdn', 'info@gmail.com', '-10909090', 'jbjb uhbd aiuiuhsa', '2024-12-20 01:34:09', '2024-12-20 01:34:09'),
(26, 'sknskdn', 'admin@gmail.com', '-10909090909', 'hello world', '2024-12-20 01:43:05', '2024-12-20 01:43:05'),
(27, 'sknskdn', 'admin@gmail.com', '-10909090909', 'hello world', '2024-12-20 01:43:11', '2024-12-20 01:43:11'),
(28, 'sknskdn', 'admin@gmail.com', '-10909090909', 'hello world', '2024-12-20 01:43:19', '2024-12-20 01:43:19'),
(29, 'sknskdn', 'admin@gmail.com', '-10909090909', 'hello world', '2024-12-20 01:43:19', '2024-12-20 01:43:19'),
(30, 'sknskdn', 'info@dreamwebies.com', '98989898989', 'hello world', '2024-12-20 01:44:20', '2024-12-20 01:44:20'),
(31, 'sknskdn', 'admin@gmail.com', '90909009', 'jbjb jbjb', '2024-12-20 01:55:37', '2024-12-20 01:55:37'),
(32, 'sknskdn', 'akash@gmail.com', '09090990909', 'hello world', '2024-12-20 01:57:30', '2024-12-20 01:57:30'),
(33, 'vishal', 'info@dreamwebies.com', '-1090909', 'alnajk kjb', '2024-12-20 03:31:18', '2024-12-20 03:31:18'),
(34, 'vishal', 'info@dreamwebies.com', '898989898', 'hello this is trial purpose', '2024-12-20 03:35:03', '2024-12-20 03:35:03'),
(35, 'vishal', 'info@dreamwebies.com', '898989898', 'jvhgvchgchg', '2024-12-22 23:46:38', '2024-12-22 23:46:38'),
(36, 'vishal', 'akash@gmail.com', '8989898988', 'fsf dsf', '2024-12-22 23:48:15', '2024-12-22 23:48:15'),
(37, 'sknskdn', 'admin@gmail.com', '-3343434', 'dvdvdvgrgf gfc', '2024-12-22 23:48:29', '2024-12-22 23:48:29'),
(38, 'sknskdn', 'gmail@gmail.com', '989898989898', 'hgv ujvg mgjhvbn hjmgvm', '2024-12-22 23:52:50', '2024-12-22 23:52:50'),
(39, 'Poly 2024-2025', 'info@gmail.com', '9898989898', 'jhbhjv jhvhj iygyuhj ugv hgchgchg gvmjh ukygjh kuygjh juyhgv', '2024-12-22 23:53:13', '2024-12-22 23:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 'homepage', '1734330741.png', '2024-12-16 01:02:21', '2024-12-16 01:02:21'),
(3, 'homepage', '1734343749.jpg', '2024-12-16 04:09:16', '2024-12-16 04:39:09'),
(4, 'homepage', '1734343782.JPG', '2024-12-16 04:39:42', '2024-12-16 04:39:42'),
(5, 'homepage', '1734584266.jpg', '2024-12-18 23:27:46', '2024-12-18 23:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint UNSIGNED NOT NULL,
  `reg_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_message` text COLLATE utf8mb4_unicode_ci,
  `reg_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `reg_type`, `reg_name`, `reg_mobile`, `reg_email`, `reg_address`, `reg_message`, `reg_occupation`, `created_at`, `updated_at`) VALUES
(69, 'participant', 'm,klm;kjlm knj', '9898989898', 'hhjknm@hjnklm', NULL, NULL, NULL, '2024-01-25 00:22:43', '2024-01-25 00:22:43'),
(70, 'participant', 'ilhnjk', '90880989898', 'kubhjkn@bhnjk', NULL, NULL, NULL, '2024-01-25 00:23:26', '2024-01-25 00:23:26'),
(77, NULL, 'vishal', '9595065126', 'admin@gmail.com', 'deep nagar nanded', 'deep nagar nanded', 'Health Advisor', '2024-12-20 00:15:22', '2024-12-20 00:15:22'),
(78, NULL, 'vishal', '9595065126', 'info@dreamwebies.com', 'deep nagar nanded', 'sdjbdj jnasj', 'Supervisor', '2024-12-20 00:16:51', '2024-12-20 00:16:51'),
(79, NULL, 'sknskdn', '1212121', 'admin@gmail.com', 'deep nagar nanded', 'deep nagar nanded', 'Health Advisor', '2024-12-20 00:32:09', '2024-12-20 00:32:09'),
(80, NULL, 'sknskdn', '9595065126', 'student@dwnai.net', 'deep nagar nanded', 'deep nagar nanded', 'Health Advisor', '2024-12-20 00:35:01', '2024-12-20 00:35:01'),
(81, NULL, 'akash', '9595065126', 'student@dwnai.net', 'deep nagar nanded', 'deep nagar nanded', 'Health Advisor', '2024-12-20 00:35:58', '2024-12-20 00:35:58'),
(82, NULL, 'vishal', '9595065126', 'info@dreamwebies.com', 'deep nagar nanded', 'deep nagar nanded', 'Health Advisor', '2024-12-20 00:42:49', '2024-12-20 00:42:49'),
(84, NULL, 'vishal', '0900909', 'info@dreamwebies.com', 'deep nagar nanded', 'hello trial', 'Volunteer', '2024-12-20 02:12:29', '2024-12-20 02:12:29'),
(85, NULL, 'vishal', '988988898', 'info@dreamwebies.com', 'hbhjbhj', 'juhyvyhjv', 'Health Advisor', '2024-12-20 03:32:18', '2024-12-20 03:32:18'),
(86, NULL, 'vishal', '-20909090909', 'admin@gmail.com', 'hbhj khjb  kjhvhgv', 'jhv khjh jyhghj hvjhjv hv', 'Health Advisor', '2024-12-22 23:34:24', '2024-12-22 23:34:24'),
(87, NULL, 'vishal', '-1989898989', 'admin@gmail.com', 'hy hgv', 'ukjyfvchg juvhg jytjhgcghcg jyfcxgf', 'Health Advisor', '2024-12-23 00:23:28', '2024-12-23 00:23:28'),
(88, NULL, 'ujyftyu ytfv', '876786786786', 'utyfvhj@gmial.com', 'tvghvhgvc', 'hyjgchgc ythgv ughv', 'Volunteer', '2024-12-23 00:23:49', '2024-12-23 00:23:49'),
(89, NULL, 'vishal', '7678676786', 'student@dwnai.net', 'deep nagar nanded', 'hgv jythg yhcgfv', 'Health Advisor', '2024-12-23 00:29:16', '2024-12-23 00:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `sidegalleries`
--

CREATE TABLE `sidegalleries` (
  `id` bigint UNSIGNED NOT NULL,
  `gal_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gal_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gal_event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidegalleries`
--

INSERT INTO `sidegalleries` (`id`, `gal_title`, `gal_image`, `gal_event`, `created_at`, `updated_at`) VALUES
(13, '630px', '1734509223.png', '250px', '2024-12-18 02:37:03', '2024-12-18 02:37:03'),
(14, '630px', '1734509256.png', '250px', '2024-12-18 02:37:36', '2024-12-18 02:37:36'),
(15, '630px', '1734509330.jpg', '462px', '2024-12-18 02:38:50', '2024-12-18 02:38:50'),
(16, '630px', '1734509690.jpg', '502px', '2024-12-18 02:44:50', '2024-12-18 02:44:50'),
(17, '630px', '1734509711.jpg', '244px', '2024-12-18 02:45:11', '2024-12-18 02:45:11'),
(18, '630px', '1734509740.jpg', '312px', '2024-12-18 02:45:40', '2024-12-18 02:45:40'),
(19, '630px', '1734510024.jfif', '462px', '2024-12-18 02:50:24', '2024-12-18 02:50:24'),
(20, '630px', '1734510059.png', '244px', '2024-12-18 02:50:59', '2024-12-18 02:50:59'),
(21, '630px', '1734587711.jpg', '250px', '2024-12-19 00:25:11', '2024-12-19 00:25:11'),
(22, '630px', '1734587723.png', '312px', '2024-12-19 00:25:23', '2024-12-19 00:25:23'),
(23, '630px', '1734588570.jpg', NULL, '2024-12-19 00:39:30', '2024-12-19 00:39:30'),
(24, '630px', '1734588596.jpg', NULL, '2024-12-19 00:39:56', '2024-12-19 00:39:56'),
(25, '630px', '1734588617.jpg', NULL, '2024-12-19 00:40:17', '2024-12-19 00:40:17'),
(26, '300px', '1734588750.jpg', NULL, '2024-12-19 00:42:30', '2024-12-19 00:42:30'),
(27, '400px', '1734588780.jpg', NULL, '2024-12-19 00:43:00', '2024-12-19 00:43:00'),
(28, '500px', '1734588824.jpg', NULL, '2024-12-19 00:43:44', '2024-12-19 00:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `volunteer_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volunteer_designation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volunteer_fblink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volunteer_instlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `volunteer_image`, `volunteer_name`, `volunteer_designation`, `volunteer_fblink`, `volunteer_instlink`, `created_at`, `updated_at`) VALUES
(1, '1734351312.jpg', 'vishal', 'teacher', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', '2024-12-16 06:45:12', '2024-12-16 06:45:12'),
(2, '1734411966.jpg', 'jack maa', 'ceo', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', '2024-12-16 23:36:07', '2024-12-16 23:36:07'),
(3, '1734412364.jpg', 'sushant', 'volunteer', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', 'https://www.facebook.com/p/Amar-sewa-ashram-Trust-Nanded-100069984164768/', '2024-12-16 23:42:44', '2024-12-16 23:42:44'),
(4, '1734414334.jpg', 'nisha', 'software developer', NULL, NULL, '2024-12-17 00:15:34', '2024-12-17 00:15:34'),
(5, '1734417286.jpg', 'ms dhoni', 'batsman', NULL, NULL, '2024-12-17 01:04:46', '2024-12-17 01:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'krishna patil', 'krishna@gmail.com', NULL, '$2y$10$87SqZ27UmpB24neCK57rDuaBzQO318jK4Gy/gup7oQLGjlUdzPHgO', NULL, '2023-12-07 00:10:57', '2023-12-07 00:10:57'),
(3, 'akash kamble', 'akash@gmail.com', NULL, '$2y$10$riRfFK5kln..ZgA0NbCsZe.0BC.fLZ58vllc/oNWKkTN2eB.HxsFi', NULL, '2023-12-07 04:22:30', '2023-12-07 04:22:30'),
(4, 'aryan xyz', 'aryan@gmail.com', NULL, '$2y$10$N265c2/djZwp6aAeFw0iiuESTZvuIcgqH.G8jxq.GVpBivkwl1J5e', NULL, '2023-12-11 00:00:24', '2023-12-11 00:00:24'),
(5, 'avi boinwad', 'avi@gmail.com', NULL, '$2y$10$gnfJxPb2uZYRHgOM/HDMM.bv/aizDkhKsCu/W0R.N4aIoDI9Xq61W', NULL, '2023-12-12 02:28:08', '2023-12-12 02:28:08'),
(6, 'laxman patil', 'patil@gmail.com', NULL, '$2y$10$njKHgcUpK3r0JCqKGix4EuogehFi1fKrcVLqVjSmFu.kkQR7hwM1K', NULL, '2024-01-02 04:01:43', '2024-01-02 04:01:43'),
(7, 'sneha patil', 'sneha@gmail.com', NULL, '$2y$10$QrVNRwRkZG99n7/YWu52Yu.GD3vqK0lku.yOiWj71.QcWqbGBnFXK', NULL, '2024-01-29 23:49:59', '2024-01-29 23:49:59'),
(9, 'ruti patil', 'ruti123@gmail.com', NULL, '$2y$10$/nPMo062p.kZcGl1n1lE8OUhwQc0bn/9PHdD7obeEQQBiFHuzLj/S', NULL, '2024-01-29 23:53:43', '2024-01-29 23:53:43'),
(10, 'syed syedxyz', 'syed12345678@gmail.com', NULL, '$2y$10$7C.LTIQGkTQbVE.EYbzYseZkduP2bhBU/6GNAaImqZMwgMo.woe/.', NULL, '2024-01-30 00:24:22', '2024-01-30 00:24:22'),
(12, 'shruti shruti123', 'shruti1234567@gmail.com', NULL, '$2y$10$7Ntdf61mUbxQQU1W7QyBw.2I5XB1kO2AmpRvH.5pkHS7tzPJ/.YT6', NULL, '2024-01-30 00:52:09', '2024-01-30 00:52:09'),
(13, 'admin login', 'admin@gmail.com', NULL, '$2y$10$jxHvJ6hEMzluj7YIFDUvleYPrzNrX1rRmeBZX40l0Z2jyFm1A7iAG', NULL, '2024-01-30 01:02:17', '2024-01-30 01:02:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidegalleries`
--
ALTER TABLE `sidegalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `sidegalleries`
--
ALTER TABLE `sidegalleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
