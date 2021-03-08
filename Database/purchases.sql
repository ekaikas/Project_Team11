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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `event_name` varchar(60) NOT NULL,
  `bottle_service` varchar(60) NOT NULL,
  `ticket_amnt` int(11) NOT NULL,
  `date_of_purchase` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `user_id`, `customer`, `email`, `event_name`, `bottle_service`, `ticket_amnt`, `date_of_purchase`) VALUES
(4001, 0, 'dan', 'test@test.com', 'Full Moon Party', 'Girls Night Out', 1, '2021-03-07 10:09:13'),
(4002, 0, 'daniel', 'test@test.com', 'Full Moon Party', 'The Baller', 1, '2021-03-07 10:18:54'),
(4003, 0, 'daniel', 'ko@da.hu', 'Full Moon Party', 'The Baller', 1, '2021-03-07 10:29:40'),
(4004, 0, 'dan', 'test@test.com', 'The Summer Party', 'Friday Feature', 4, '2021-03-07 10:39:49'),
(4005, 0, 'dan', 'test@test.com', 'The Summer Party', 'Friday Feature', 4, '2021-03-07 10:42:04'),
(4006, 0, 'dan', 'test@test.com', 'The Summer Party', 'Friday Feature', 4, '2021-03-07 10:51:04'),
(4007, 0, 'daniel', 'ko@da.hu', 'Full Moon Party', 'Rockstars', 1, '2021-03-07 10:52:18'),
(4008, 0, 'dan', 'ko@da.hu', 'Full Moon Party', 'Girls Night Out', 1, '2021-03-07 10:54:37'),
(4009, 0, 'daniel', 'del@del.com', 'Full Moon Party', '--none--', 2, '2021-03-07 19:41:19'),
(4010, NULL, 'Daniel Ko', 'ko@da.hu', 'Pool Party', 'Rockstars', 1, '2021-03-07 20:57:10'),
(4011, NULL, 'Daniel Ko', 'ko@da.hu', 'Full Moon Party', 'Friday Feature', 2, '2021-03-07 20:57:59'),
(4012, NULL, 'Daniel Ko', 'dadas@dadd.hu', 'The Summer Party', 'Rockstars', 4, '2021-03-07 21:00:58'),
(4013, 133, 'Daniel Ko', 'ko@da.hu', 'The Summer Party', 'Rockstars', 22, '2021-03-07 21:03:10'),
(4014, NULL, 'deni', 'dadas@dadd.hu', 'Full Moon', 'Girls Night Out', 3, '2021-03-08 00:43:39'),
(4015, NULL, 'deni', 'ko@da.hu', 'Pool', 'Rockstars', 20, '2021-03-08 00:44:53'),
(4016, NULL, 'Daniel Ko', 'ko@da.hu', 'Pool', 'Friday Feature', 20, '2021-03-08 00:46:25'),
(4017, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon', 'The Baller', 1, '2021-03-08 00:47:06'),
(4018, NULL, 'Daniel Ko', 'ko@da.hu', 'Full Moon', 'Girls Night Out', 23, '2021-03-08 00:47:59'),
(4019, NULL, 'Daniel Ko', 'dadas@dadd.hu', 'Full Moon', '--none--', 2, '2021-03-08 00:49:36'),
(4020, NULL, 'Daniel Ko', 'dadas@dadd.hu', 'Full Moon', '--none--', 2, '2021-03-08 00:50:13'),
(4021, NULL, 'Daniel Ko', 'ko@da.hu', 'Full Moon Pa', 'Girls Night Out', 2, '2021-03-08 00:51:51'),
(4022, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon Pa', 'Rockstars', 2, '2021-03-08 00:54:58'),
(4023, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon Pa', 'Rockstars', 2, '2021-03-08 00:55:02'),
(4024, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon Part', 'The Baller', 1, '2021-03-08 00:56:09'),
(4025, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon Party', 'The Baller', 3, '2021-03-08 01:04:47'),
(4026, NULL, 'Daniel Ko', 'del@del.com', 'Full Moon Party', 'The Baller', 10, '2021-03-08 01:20:25'),
(4027, NULL, 'deni', 'dadas@dadd.hu', 'Full Moon Party', 'Friday Feature', 21, '2021-03-08 01:42:03'),
(4028, 133, 'daniel kovacs', 'kova@gmail.com', 'The Summer Party', 'Rockstars', 12, '2021-03-08 02:12:24'),
(4029, NULL, 'daniel', 'kod@gol.hu', 'Pool Party', 'Girls Night Out', 5, '2021-03-08 06:14:00'),
(4030, NULL, 'daniel', 'kod@gol.hu', 'Pool Party', 'Friday Feature', 1, '2021-03-08 06:14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4031;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
