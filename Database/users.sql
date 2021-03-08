-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 08, 2021 at 08:36 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(70) NOT NULL,
  `password` varchar(260) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(33) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `phone`, `created_on`, `updated_on`) VALUES
(129, 'admin', 'admin admin', '$2y$10$a2LJd.po6TLCEEEStfSkpOF0vagJ9mUyLskx21UIo7.j7YMnxLKEe', 'admin@hamk.fi', '+48 5879 6547', '2021-03-05 14:40:02', NULL),
(132, 'kocka', 'kocka lajos', '$2y$10$9FKGTvx0t4bGYVHACI6k1ufX56qr6pNKAEUcq0CtPqlmPkNuDC1bO', 'kocka@gmail.com', '+48 5799 8745', '2021-03-05 20:26:52', NULL),
(133, 'daniel', 'daniel kovacs', '$2y$10$FrTuvqVYeHPGu26QLcUsJetBM9IkNW4MDAj1A6sYWWAiHWUvmySRG', 'kova@gmail.com', '+4855556698', '2021-03-08 03:43:45', '2021-03-08 01:43:45'),
(165, 'test_user', 'test test', '$2y$10$kO7jbK.4dKyr/w.ZFEfUcOg8KknYSTvXtQYwrV8LecCJqgjD9E4Oq', 'dadas@dadd.hu', '+4856877896', '2021-03-07 20:24:29', NULL),
(166, 'lalika', 'lalika', '$2y$10$ch3m9ZJiYHF1ymQp3PMY0OLR8/kW32hn/aEMVAS/.SrL81DMEg0nO', 'dadas@dadddd.hu', '+4856877896', '2021-03-07 20:28:14', NULL),
(167, 'test_78', 'ticket_amnt', '$2y$10$UowO5IrrXdGTgqCAu.B.AOsjPugUPb7Zg.CY1RsWAczcK74u0XW7a', 'dadas@ffdadd.hu', '+4856877896', '2021-03-07 20:41:02', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
