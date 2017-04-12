-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 12:22 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `name`, `description`, `image`, `created`, `modified`) VALUES
(1, 1, 'article-1', 'this is description of article-1', 'cardiovascular_technologist.png', '2017-03-16 00:00:00', '2017-03-16 00:00:00'),
(2, 1, 'article-2', 'this is description of article-2', 'cardiovascular_technologist.png', '2017-03-17 00:00:00', '2017-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'CATEGORY-1', 'this is description of category 1', '2017-03-18 00:00:00', '2017-03-16 11:11:22'),
(2, 'CATEGORY-2', 'this is description of category 2', '2017-03-24 00:00:00', '2017-03-16 11:12:43'),
(3, 'CATEGORY-3', 'this is description of category 3', '2017-03-16 06:26:19', '2017-03-16 11:14:07'),
(4, 'testtt', 'ttttttt', '2017-03-16 13:47:14', '2017-03-16 13:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Web Devloper', '2017-03-17 07:01:29', '2017-03-17 07:01:29'),
(2, 'Wordpress Devloper', '2017-03-17 07:02:00', '2017-03-17 07:02:00'),
(3, 'Android Devloper', '2017-03-17 07:02:23', '2017-03-17 07:02:23'),
(4, 'ISO Devloper', '2017-03-17 07:02:43', '2017-03-17 07:02:44'),
(6, 'Raahul Jadav', '2017-03-17 07:03:22', '2017-04-06 13:20:04'),
(7, 'Project Leader Akbar', '2017-03-20 10:33:24', '2017-04-06 11:31:52'),
(35, 'Neha patel', '2017-03-30 12:25:48', '2017-04-06 13:08:57'),
(36, 'Sunil Parmar', '2017-03-30 12:32:11', '2017-04-07 13:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Team Leader', '2017-03-17 07:04:16', '2017-03-17 07:04:16'),
(2, 'Seniar Employee', '2017-03-17 07:04:52', '2017-03-17 07:04:52'),
(3, 'EX Employee', '2017-03-17 07:05:14', '2017-03-17 07:05:14'),
(5, 'Freelance Employee', '2017-03-17 07:06:08', '2017-03-17 07:06:08'),
(7, 'Full Time', '2017-03-17 07:07:09', '2017-03-17 07:07:09'),
(8, 'test Des', '2017-03-22 10:12:35', '2017-03-22 10:12:35'),
(9, 'asif vora Zoya', '2017-04-03 13:03:16', '2017-04-09 08:16:39'),
(10, 'test', '2017-04-09 08:14:52', '2017-04-09 08:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birtdate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `designation_id`, `name`, `email`, `mobile`, `birtdate`, `gender`, `address`, `hobby`, `image`, `created`, `modified`) VALUES
(2, 1, 4, 'asif vora', 'asif.khan@multidots.com', '7600584687', '03/24/2017', 'Male', 'sokali viramgam', 'Criket,Travelling,Drawing,Singing', '16585348_1901048136793558_4807705804671025152_n_2017_03_25_07_45_31.jpg', '2017-03-25 07:41:55', '2017-03-25 07:45:31'),
(3, 3, 4, 'asif vora', 'aaa@mail.com', '8735012692', '03/23/2017', 'Male', 'sokali viramham', 'Travelling,Drawing', '16583867_219177868549413_9086597776816472064_n_2017_03_25_07_43_27.jpg', '2017-03-25 07:43:28', '2017-03-25 07:43:28'),
(5, 1, 4, 'CATEGORY-1', 'vehan@mail.com', '8735012692', '03/24/2017', 'Male', 'zSAsASasaSAs', 'Criket,Travelling,Drawing,Singing', '16788903_1118544698274871_965553062397607936_n_2017_03_25_09_08_15.jpg', '2017-03-25 07:59:46', '2017-03-25 09:08:15'),
(6, 7, 3, 'asif vora', 'tanu@mail.com', '8735012692', '03/21/2017', 'Male', 'asadadadadadasasadhasdsbhdbhbshbdbshbdhbsbdhbshabdhbhsabhdbhasbhdbjasbhbh zxn cn xznc hxhv hxvhdsbhfhbsdhfbhsdbh', 'Travelling,Drawing', 'nopic.jpg', '2017-03-27 06:30:24', '2017-04-09 10:46:29'),
(8, 1, 4, 'asif vora', 'asif.mnultidots@gmail.com', '7600584687', '03/24/2017', 'Male', 'sd\r\nds\r\nd\r\nas\r\nd\r\nas', 'Travelling,Drawing', 'WIN_20161119_18_05_23_Pro_2017_04_03_01_43_33.jpg', '2017-04-03 13:43:33', '2017-04-03 13:43:33'),
(9, 1, 1, 'asif vora Zoya', 'zoya@gmail.com', '7600584687', '13/10/1994', 'Male', 'at-soklali\r\nta-viramgam\r\ndist-ahemedabad 382150\r\nviramgam sokali yar bije kya avajo tare', 'Drawing,Singing', '16228549_698033097024638_114255063605575680_n_2017_04_09_10_36_37.jpg', '2017-04-09 10:16:32', '2017-04-09 10:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Admin','User') COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`, `created`, `modified`) VALUES
(2, 'ZSAS', 'zzzz@gmail.com', 'zzzz', '$2y$10$YJ1qrCmqHhJQ7b7fSYw7UeVLKh8j4g8pmXuo7uX0wtSX7gTtFVC.O', 'User', '2017-04-07 06:15:21', '2017-04-07 13:00:55'),
(3, 'asif vora Zoya', 'asif.multidots@gmail.com', 'asif007', '$2y$10$DVrjuzE7VUKacXLGU8jXru5ihtLSnutyvprzyNcsJZO17ZuFaJdUu', 'Admin', '2017-04-07 12:24:41', '2017-04-09 07:54:06'),
(5, 'zoya', 'zoya@gmail.com', 'zoya007', '$2y$10$mp0gmpPIxVXAY.5RzyVy5Otvq/Ro/HIwUtzuihtq1DdQq4Y4y5QWO', 'Admin', '2017-04-09 08:09:11', '2017-04-09 08:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `designation_id` (`designation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
