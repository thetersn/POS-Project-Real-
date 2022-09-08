-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 10:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `urole`, `created_at`) VALUES
(1, 'BNB', 'BNB', 'user07@user.com', '$2y$10$UDzp2gUMdO7wxCUpUxtZDea4apY6XVGnuUKFufQy6fUzg9Xt5Atv2', 'user', '2022-07-14 09:35:49'),
(2, 'Uttawoot', 'Settasuwarragoon', 'thetersn@hotmail.com', '$2y$10$lq1EUGVk4cfTbnvvz79Lau4E9YqXuq6bEgtW4lwQ2eHKSw5iR2Kja', 'user', '2022-07-14 09:38:47'),
(3, 'AAA', 'AAA', 'user@user.com', '$2y$10$088uIDXL7KQAA9gkTzmSjOTwwti0rSTQz8Hlt2CVtz/mLpNAGCBKK', 'user', '2022-07-14 10:07:25'),
(4, 'Uttawoot', 'Settasuwarragoon', 'stu6439010019@lannapoly.ac.th', '$2y$10$17VNzzCv8hNqk2x0bpobIu4NCIsVISJ3P31X8QlbmTC9u0eoxNiyS', 'user', '2022-07-16 10:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
