-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 09:11 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `name`, `category`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'nesciunt', 'Travel', 'Eveniet occaecati adipisci aut at. Saepe harum velit totam reprehenderit distinctio.', 'img_1.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(2, 2, 'ipsa', 'Travel', 'Qui tenetur quasi sed. Velit qui odio voluptatem cumque odio. Sit quisquam officiis et expedita labore eius.', 'img_2.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(3, 8, 'corporis', 'Lifestyle', 'Quidem praesentium ex fugit nihil molestias dolore.', 'img_3.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(4, 3, 'deleniti', 'Lifestyle', 'Sint sequi quo omnis rerum eum. Dolorem et exercitationem ratione. Quidem nihil ut sequi magnam commodi hic laudantium et. Voluptatem molestiae autem et officia animi vel. Eveniet maxime dolorem corrupti qui voluptatem et molestiae soluta. Libero ut nesciunt eum provident. Ut nam quia aut nisi et rerum soluta. Rerum qui qui totam. Delectus vel voluptatibus ut mollitia consequatur. Adipisci quidem praesentium voluptatum non. Dolor laborum et beatae dolorem fugiat. Fugit consequatur illum qui quasi eligendi delectus.', 'img_4.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(5, 9, 'dolor', 'Business', 'Veniam id nemo quaerat aut rerum. Velit modi iusto expedita temporibus. Facere velit temporibus ducimus nulla doloribus et soluta provident. In totam enim animi praesentium qui.', 'img_5.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(6, 3, 'eum', 'Lifestyle', 'Quo earum voluptatem voluptatum officia. Nostrum debitis sed ut quis pariatur est. Aut ea beatae qui iure ut. Velit debitis dignissimos numquam cupiditate saepe vitae illo. Illum quia id quo doloremque inventore ducimus voluptas. Minus et nam vel deleniti numquam tenetur. Quia nam eligendi laudantium sit eum.', 'img_6.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(7, 3, 'in', 'Food', 'Ratione aut fugit voluptatem dolores reprehenderit aut voluptatem. Et praesentium sunt et voluptatum harum repudiandae sed. Harum illum illum doloribus facilis cupiditate sit qui fuga.', 'img_7.jpg', '2019-05-18 03:53:25', '2019-05-18 03:53:25'),
(8, 9, 'deleniti', 'Lifestyle', 'Quis ratione tempore consequuntur quia consequatur omnis. Quia tempore molestiae quis voluptates magnam. Dolor ab perferendis corporis consectetur harum et rerum non. Dicta odio expedita in mollitia possimus.', 'img_8.jpg', '2019-05-18 03:53:26', '2019-05-18 03:53:26'),
(9, 9, 'est', 'Business', 'Voluptates quaerat non maiores earum saepe fugiat. Deserunt provident quasi illo autem aut. Esse corrupti quas nesciunt in. Dolores sint maiores veritatis aut et. Veritatis quidem tempore adipisci modi sit tenetur aut. Enim inventore vitae aspernatur voluptatem libero nisi. Et labore est consequatur aut quos. Voluptas incidunt ut itaque sit dolor.', 'img_9.jpg', '2019-05-18 03:53:26', '2019-05-18 03:53:26'),
(32, 2, 'Game of thrones food session', 'Food', 'The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.', '1558189421.jpg', '2019-05-18 13:23:41', '2019-05-18 13:23:41'),
(33, 2, 'Code Food', 'Food', '<p><strong>The Last Code Bedner</strong></p>\r\n\r\n<p>This is the last code bender</p>', '1558335554.jpg', '2019-05-20 05:59:14', '2019-05-20 05:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `description`, `created_at`, `updated_at`) VALUES
(2, 9, '32', 'Velit debitis quod praesentium dolore. Voluptates quis nulla provident dolorem atque culpa. Mollitia nulla consequatur necessitatibus deserunt harum rerum.', '2019-05-18 09:32:48', '2019-05-18 09:32:48'),
(3, 3, '32', 'Debitis sapiente eligendi voluptatem quia at voluptatibus.', '2019-05-18 09:49:33', '2019-05-18 09:49:33'),
(6, 2, '5', 'Hello', '2019-05-19 10:27:13', '2019-05-19 10:27:13'),
(7, 2, '5', 'Nice Post', '2019-05-19 10:31:10', '2019-05-19 10:31:10'),
(11, 2, '9', 'Nice Post', '2019-05-19 12:45:27', '2019-05-19 12:45:27'),
(12, 2, '9', 'Good blog', '2019-05-19 12:49:38', '2019-05-19 12:49:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_18_035653_create_blogs_table', 1),
(4, '2019_05_18_101713_create_comments_table', 2),
(5, '2019_05_19_182045_usertrack', 3);

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
(1, 'Louie Nader', 'freeda.leannon@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 's3O5bxfFJu', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(2, 'Keagan Bernier MD', 'schinner.clement@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'K9ANoRXDzR0KkMDKBBAnRoAx5wEL2u7bvExr1rIjlQUALDp4eGFPa7Gi6jmb', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(3, 'Ms. Sydni Balistreri PhD', 'murazik.king@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'GmS6b4jUNb', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(4, 'Retha Steuber', 'ivory.ernser@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xYGaMm0HN8', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(5, 'Bryce Von', 'karelle93@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ud1ae3qWfW', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(6, 'Miss Elouise Treutel', 'mason.kreiger@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'j7mYd9gS67', '2019-05-18 03:47:34', '2019-05-18 03:47:34'),
(7, 'Wendell Schoen', 'stracke.nelson@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'GccSAyiiHb', '2019-05-18 03:47:35', '2019-05-18 03:47:35'),
(8, 'Dorian Nikolaus III', 'lubowitz.kelvin@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'wJIuy2MHCa', '2019-05-18 03:47:35', '2019-05-18 03:47:35'),
(9, 'Dr. Joshua Abbott Sr.', 'jlittel@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'El59h9TVad', '2019-05-18 03:47:35', '2019-05-18 03:47:35'),
(10, 'Betty Rodriguez II', 'trevion41@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Gq3eehdGcL', '2019-05-18 03:47:35', '2019-05-18 03:47:35'),
(11, 'Golden', 'suleimamman@gmail.com', '$2y$10$6yEDk.RdpXzhN7GBqUmbRO5/o.igtknwmw7RB8157usPm0924GSaG', 'rLeisWWhs9dnCnsigeBUZg3QoPmVE7cu2YGzomnKl4Djq7RzbES0zPeaUvgT', '2019-05-19 09:43:23', '2019-05-19 09:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `usertracks`
--

CREATE TABLE `usertracks` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertracks`
--

INSERT INTO `usertracks` (`id`, `ip_address`, `user_info`, `browser_name`, `created_at`, `updated_at`) VALUES
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', 'Firefox 60', '2019-05-19 17:41:28', '2019-05-19 17:41:28'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'Chrome 74.0.3729', '2019-05-19 17:41:39', '2019-05-19 17:41:39'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0', 'Firefox 60', '2019-05-19 18:40:39', '2019-05-19 18:40:39'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'Chrome 74.0.3729', '2019-05-20 04:39:31', '2019-05-20 04:39:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usertracks`
--
ALTER TABLE `usertracks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usertracks`
--
ALTER TABLE `usertracks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
