-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 04:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `item`, `price`, `created_at`) VALUES
(1, 'gading', 'Margherita Pizza', 150000, '2024-12-05 04:32:05'),
(2, 'gading', 'Margherita Pizza', 150000, '2024-12-05 04:32:10'),
(3, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:33:34'),
(4, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:36:08'),
(5, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:36:14'),
(6, 'gading', 'Lasagna', 200000, '2024-12-05 04:36:15'),
(7, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:36:33'),
(8, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:36:34'),
(9, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:38:33'),
(10, 'gading', 'Caesar Salad', 130000, '2024-12-05 04:38:43'),
(11, 'gading', 'Margherita Pizza', 150000, '2024-12-05 04:38:45'),
(12, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:38:46'),
(13, 'gading', 'Grilled Steak', 270000, '2024-12-05 04:38:49'),
(14, 'gading', 'Lasagna', 200000, '2024-12-05 04:38:50'),
(15, 'gading', 'Grilled Steak', 270000, '2024-12-05 04:38:51'),
(16, 'gading', 'Lasagna', 200000, '2024-12-05 04:39:01'),
(17, 'gading', 'Grilled Steak', 270000, '2024-12-05 04:39:04'),
(18, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:04'),
(19, 'gading', 'Margherita Pizza', 150000, '2024-12-05 04:39:05'),
(20, 'gading', 'Caesar Salad', 130000, '2024-12-05 04:39:06'),
(21, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:06'),
(22, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:37'),
(23, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:57'),
(24, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:58'),
(25, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:58'),
(26, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:39:59'),
(27, 'gading', 'Pasta Carbonara', 180000, '2024-12-05 04:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'caca', '$2y$10$hPqGU1Q/MaP8pA/ASZS0uOdzpVE049LS9wiXG6J6gZKtDg2H.6WV.', '', 'user'),
(3, 'salsa', '$2y$10$Kp8jL3T3U3AGtKLS58G9IO.ehIhTxxw1YX90TD4kC0cm9Lff7l.g6', 'salsa122@gmail.com', 'user'),
(4, 'admin', '$2y$10$8xXeta.7mVJsfx61QSW4G.lv7bQPRKxOa8svGfQ7puDg05lPDVBsC', 'admin123@gmail.com', 'user'),
(6, 'sa', '$2y$10$.qcVpO9qPCc8SNTnQVthp.tmTipHqw2vNGCVWjQE/EentWaQkzzWK', 'slsanabila58@gmail.com', 'user'),
(7, 'ka', '$2y$10$6fVu5XM2bMqz5bwX5jCBxeTGCBLjwrN83BVnffnqiRSYvRt0vJBze', 'kimbek45@gmail.com', 'user'),
(8, 'lala', '$2y$10$K7qzi7JsC/0plCqf8jsco.D2Z2FSrTBYNSpthpY0bK7MZiZtXnC9K', 'laok11@gmail.com', 'user'),
(9, 'asu', '$2y$10$xX8l0ygpHin3.7r8JWa4P.ABNry94mIIbQ8YwKQpJ6xIYrt1bSLke', 'asulama@gmail.com', 'user'),
(10, 'nanii', '$2y$10$X2bgLnVn9yoFikizE/71seAU1b4p41cTtroMyE3ygF39JrIq0fbQi', 'nani05@gmail.com', 'user'),
(11, 'user', '$2y$10$GlZDEyJ/UOwkQROGyOb18OllcYMH7Wn6RwPFc9iopfC3kzbLczhAi', 'user12@gamil.com', 'user'),
(12, 'saa', '$2y$10$NjRz4QwQ1f7Fzup9DnJ29eQa0vlShEEUkEvy15kWjyY9Fgiiniyhu', 'kampret2@gmail.com', 'user'),
(16, 'raja', '$2y$10$LcPeCtsRMmqD09FYjepdaeEn8K3Ssw8CeHzY36hAXKL2wknXiktjG', 'raja@gmail.com', 'user'),
(17, 'kambing', '$2y$10$muI4bre9E2LiKAgC9nKjXe6hfXMH3oMwLWzIDR6SYN0l6DmkM8W8G', 'kambing@gmail.com', 'user'),
(18, 'gading', '$2y$10$J8/qGffoBSEkRp8DCOlALuxYtHgMs.p/.aZQQcXJqqiCa6X0QNnna', 'gading12@gmail.com', 'user'),
(23, 'kalau', '$2y$10$8QCBQT1XMXI9t4BWAiEbRO.w1NTogukbKdAxXPVYulYZLwSPxzMvC', 'kal@gmail.com', 'user'),
(24, 'mahrani', '$2y$10$UbCyBHgrfVU4w1hOJPBFVeZpvVlJHGhaAC68pNaCAqhsyGheS.5r.', 'mahrani@gmail.com', 'user'),
(25, 'yura', '$2y$10$tFegrObVCePfigR8h/LGRuGE3fEl7E/YX0BTMhD44NO4BlYXvpaCq', 'yur@gmail.com', 'user'),
(26, 'fajri', '$2y$10$g2vQHeuQXtzvunXIM78PSeLY7ryO72X3pYj.QURZEbPROzDBHCzsm', 'fajri12@gmail.com', 'user'),
(27, 'koko', '$2y$10$4HRKRcPWBSGsTnzJ8Wlu7ublDuve8ODikAOzQSg0OfTDjRbRk7ZpK', 'koko@gmail.com', 'user'),
(28, 'lobak', '$2y$10$KIJnAWqs6dbEr7PDerSw3ehcfFPPG5iWX/K.NdBY2F/0Qw3YM9ArK', 'lobak21@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
