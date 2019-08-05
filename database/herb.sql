-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 08:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `docter`
--

CREATE TABLE `docter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `worktime_start` time NOT NULL,
  `worktime_stop` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herbs`
--

CREATE TABLE `herbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `herbs`
--

INSERT INTO `herbs` (`id`, `name`, `detail`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ว่านหางจระเข้', 'ประโยชน์ภายนอก\r\n•รักษาแผลไฟไหม้และน้ำร้อนลวก \r\n•ป้องกันและบรรเทารอยไหม้จากการออกแดด\r\n•สมานแผลจากของมีคมและแผลถลอก\r\nประโยชน์ภายใน\r\n•บรรเทาอาการปวดข้อ \r\n•ป้องกันโรคเบาหวาน\r\n•แก้กระเพาะอักเสบและลำไส้อักเสบ\r\nประโยชน์ด้านความงาม\r\n•บำรุงเส้นผมให้เงางามและช่วยขจัดรังแค\r\n•รักษาสิวและรอยด่างดำ\r\n•บำรุงผิวกาย', 150, 20, 'storage/image/PatVphQZ7LSZxgZuJ1kdVyIkxIeKeVSkpzxGI6dJ.png', '2019-08-04 04:49:55', '2019-08-04 04:49:55'),
(2, 'ขมิ้นชัน', '•ช่วยกำจัดสารพิษออกจากร่างกาย\r\n•ช่วยบรรเทาอาการของโรคเบาหวาน\r\n•มีส่วนช่วยรักษาโรคความดันโลหิตสูง\r\n•ช่วยลดอาการของโรคเกาต์\r\n•ช่วยขับน้ำนมของมารดาหลังคลอดบุตร', 100, 50, 'storage/image/aS9zsaiq7Z1vL3LRKwr9LmQOiumveuqGpGGIHvOm.png', '2019-08-04 04:52:01', '2019-08-04 04:52:01'),
(3, 'ทองพันชั่ง', '•ช่วยกำจัดสารพิษออกจากร่างกาย\r\n•ช่วยบรรเทาอาการของโรคเบาหวาน\r\n•มีส่วนช่วยรักษาโรคความดันโลหิตสูง\r\n•ช่วยลดอาการของโรคเกาต์\r\n•ช่วยขับน้ำนมของมารดาหลังคลอดบุตร\r\n•ช่วยทำให้ระบบกระเพาะอาหารทำงานได้ดีมากขึ้น \r\n•ช่วยแก้อาการจุกเสียด \r\n•ช่วยแก้ไส้เลื่อน ไส้ลาม\r\n•ช่วยแก้อาการไอเป็นเลือด', 120, 30, 'storage/image/tRBbjviUJkSRSrvfWyEePMmokSck7Fhkrl5HIOlm.png', '2019-08-04 04:54:07', '2019-08-04 04:54:07'),
(4, 'กะเพรา', 'ช่วยบำรุงธาตุไฟ \r\n•ช่วยแก้อาการคลื่นเหียนอาเจียน \r\n•ช่วยแก้อาการปวดด้วยการใช้ใบกะเพรานำมาคั้นรับประทานสด 1 ถ้วยตะไล จะช่วยแก้อาการปวดมวนท้องได้เป็นอย่างดี \r\n•ช่วยขับลมแก้อาการปวดท้องอุจจาระ \r\n•ใบกะเพรามีสรรพคุณช่วยขับลมในกระเพาะ \r\n•ช่วยแก้อาการจุกเสียดแน่นท้อง', 50, 50, 'storage/image/0rfLY0CCnM4t3JtBi14me2iATVLyx9iXCz0cIzYV.png', '2019-08-04 04:55:13', '2019-08-04 04:55:13'),
(5, 'กระชายดำ', '•ช่วยบำรุงโลหิตของสตรี \r\n•ช่วยในระบบหมุนเวียนโลหิตของร่างกาย ทำให้โลหิตไหลเวียนได้ดีขึ้น \r\n•ช่วยทำให้เจริญอาหาร \r\n•ช่วยรักษาโรคความดันโลหิต รักษาสมดุลของความดันโลหิต \r\n•ช่วยรักษาโรคเบาหวาน ช่วยลดระดับน้ำตาลในเลือด \r\n•ช่วยรักษาโรคภูมิแพ้ \r\n•ช่วยแก้หอบหืด \r\n•ช่วยแก้อาการใจสั่นหวิว แก้ลมวิงเวียน', 120, 50, 'storage/image/VO6NfrGrMQhTK65yZpQOchu2QguaF1YVAi5kKntw.png', '2019-08-04 04:57:16', '2019-08-04 04:57:16');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_03_060104_create_docter_table', 1),
(36, '2019_08_03_060505_create_spa_table', 1),
(37, '2019_08_03_060523_create_herbs_table', 1),
(38, '2019_08_03_060721_create_order_table', 1),
(39, '2019_08_03_062821_create_payment_table', 1),
(40, '2019_08_03_215334_create_contact_table', 1),
(41, '2019_08_03_215811_create_about_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `spa_id` int(10) UNSIGNED DEFAULT NULL,
  `herb_id` int(10) UNSIGNED DEFAULT NULL,
  `docter_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `spa_id`, `herb_id`, `docter_id`, `payment_id`, `address`, `cart`, `phone`, `status`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, NULL, NULL, NULL, 3, 'sadfsdafsadf', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:200;s:4:\"item\";O:8:\"stdClass\":4:{s:2:\"id\";i:1;s:4:\"name\";s:39:\"ว่านหางจระเข้\";s:5:\"price\";i:200;s:5:\"image\";s:58:\"storage/image/PatVphQZ7LSZxgZuJ1kdVyIkxIeKeVSkpzxGI6dJ.png\";}}i:2;a:3:{s:3:\"qty\";i:2;s:5:\"price\";i:200;s:4:\"item\";O:8:\"stdClass\":4:{s:2:\"id\";i:2;s:4:\"name\";s:24:\"ขมิ้นชัน\";s:5:\"price\";i:100;s:5:\"image\";s:58:\"storage/image/aS9zsaiq7Z1vL3LRKwr9LmQOiumveuqGpGGIHvOm.png\";}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:400;}', '0805237262', 1, 'storage/image/7eSk8fXy0W5ycpvzjXVsmC7u2mYks8oRBv6MhRSg.jpeg', '2019-08-04 06:44:53', '2019-08-04 06:44:53');

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spa`
--

CREATE TABLE `spa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `worktime_start` time NOT NULL,
  `worktime_stop` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@test.com', NULL, '$2y$10$yVz5NoTLUg5vA.vCwyh2P.vjPK04FoDQO8uPhjs.xZNty64FoDOhS', 0, NULL, '2019-08-04 04:22:42', '2019-08-04 04:22:42'),
(2, 'admin', 'admin@test.com', NULL, '$2y$10$zxwNMbo63xIRnm2HZJZ5we0w0r9eZbEceElR5s.ciGSApijTY34EK', 1, NULL, '2019-08-04 04:23:00', '2019-08-04 04:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docter`
--
ALTER TABLE `docter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbs`
--
ALTER TABLE `herbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa`
--
ALTER TABLE `spa`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docter`
--
ALTER TABLE `docter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `herbs`
--
ALTER TABLE `herbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa`
--
ALTER TABLE `spa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
