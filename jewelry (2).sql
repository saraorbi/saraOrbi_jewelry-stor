-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:12 PM
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
-- Database: `jewelry`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'swarovski', 'swarovski cat', 'swarovski.jpg', '2019-12-05 13:22:52', '2019-12-05 13:22:52'),
(2, 'pandora', 'pandora cat', 'pandora2.jpg', '2019-12-05 13:23:34', '2019-12-05 13:23:34'),
(3, 'magnolia', 'magnolia cat', 'magnolia.jpg', '2019-12-05 13:24:03', '2019-12-05 13:24:03'),
(4, 'dddd', 'sssssss', 'default.jpg', '2020-04-12 12:28:40', '2020-04-12 12:28:40'),
(11, 'test', 'test', 'default.jpg', '2020-04-20 09:49:16', '2020-04-20 09:49:16'),
(12, 'ffff', 'ffffff', 'default.jpg', '2020-04-30 10:49:09', '2020-04-30 10:49:09'),
(13, 'sara', 'sar', 'default.jpg', '2020-04-30 14:12:30', '2020-04-30 14:12:30'),
(14, 'ccccc', 'ccccc', 'default.jpg', '2020-04-30 14:20:03', '2020-04-30 14:20:03'),
(15, 'saras', 'test', 'default.jpg', '2020-05-03 11:54:03', '2020-05-03 11:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `content`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"1\":{\"id\":1,\"name\":\"earing\",\"price\":350,\"quantity\":4,\"attributes\":[],\"conditions\":[]},\"3\":{\"id\":3,\"name\":\"earing3\",\"price\":450,\"quantity\":5,\"attributes\":[],\"conditions\":[]},\"2\":{\"id\":2,\"name\":\"earing2\",\"price\":650,\"quantity\":5,\"attributes\":[],\"conditions\":[]}}', '6900', '2020-04-26 18:56:15', '2020-04-26 18:56:15'),
(2, 1, '{\"2\":{\"id\":2,\"name\":\"earing2\",\"price\":650,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"3\":{\"id\":3,\"name\":\"earing3\",\"price\":450,\"quantity\":1,\"attributes\":[],\"conditions\":[]},\"1\":{\"id\":1,\"name\":\"earing\",\"price\":350,\"quantity\":2,\"attributes\":[],\"conditions\":[]}}', '1800', '2020-04-30 10:48:19', '2020-04-30 10:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'earing', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'se1.jpg', 350, '2019-12-15 19:13:28', '2019-12-15 19:13:28'),
(2, 1, 'earing2', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'se2.jpg', 650, '2019-12-15 19:13:28', '2019-12-15 19:13:28'),
(3, 1, 'earing3', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', 'se3.jpg', 450, '2019-12-15 19:14:16', '2019-12-15 19:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'sara orbi', 'sara@gmail.com', '$2y$10$frBwRkqXLDZB7cpWEpPqS.yp610/W/hgJPbQx.BlsBJR4vjiZIl0W', 7, '2019-12-16 19:10:48', '2019-12-16 19:10:48'),
(2, 'sssss', 'sara@gmail.com', '$2y$10$frBwRkqXLDZB7cpWEpPqS.yp610/W/hgJPbQx.BlsBJR4vjiZIl0W', 7, '2019-12-16 19:10:48', '2019-12-16 19:10:48'),
(3, 'dddd', 'dddddd@ddd', '$2y$10$3JkiSqLYhgDABeJtp/zyk.V2f/1.ykC6Zn6QOU5FpfSp5ZP7pWos2', 5, '2020-02-17 09:39:04', '2020-02-17 09:39:04'),
(4, 'daniel', 'daniel@gmail.com', '$2y$10$uVDy3MgW1AG4uRoyT2j7c.fpPqQtg2LQTfVDCCfpeQjYl.gmfI4My', 5, '2020-02-17 09:39:39', '2020-02-17 09:39:39'),
(5, 'sara', 'jjj@jjj', '$2y$10$xcUVMo3EmDStN4.kH38VuuLkIcvm5LoUczEzDPzj23xNmlwHyFLzK', 5, '2020-02-17 09:42:23', '2020-02-17 09:42:23'),
(6, 'sara', 'saradavidov97@gmail.com', '$2y$10$bphsC22KargJbRKpXDFx0e3WTajtyhGA.Shq4Vt/UhZpYmwV4wszu', 5, '2020-02-17 09:43:57', '2020-02-17 09:43:57'),
(7, 'dddd', 'dddd@ff', '$2y$10$o9XIMYvrgLa5KHlyaJ9QCOcpRoVq/WYj4JOVIm0JvfG4cymfCFBE.', 5, '2020-02-17 09:45:16', '2020-02-17 09:45:16'),
(8, 'sara', 'sss@gmail.com', '$2y$10$KskMnLhtHam5xyWVIibgk.nA2rh9o5OHgAkEh4L0F50W1RWYUwsrq', 5, '2020-02-17 11:17:47', '2020-02-17 11:17:47'),
(9, 'orbi', 'orbi@gmail.com', '$2y$10$qBxtGIaY0NszcbSQ3GzW2epn2l0E45HJApbMaV3II4/f36r23KeJm', 5, '2020-03-22 11:22:45', '2020-03-22 11:22:45'),
(10, 'dddd', 'ddd@ccg', '$2y$10$j2heUuxaCoVT3Qpg2zCa4.8up46UEZtiLvpwVrSPQX2UngoRuCio.', 5, '2020-03-22 12:43:30', '2020-03-22 12:43:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
