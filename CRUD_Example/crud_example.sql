-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 10, 2021 at 09:54 AM
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
-- Database: `crud_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentsinfo`
--

CREATE TABLE `studentsinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(33) NOT NULL,
  `lname` varchar(33) NOT NULL,
  `city` varchar(33) NOT NULL,
  `groupid` varchar(33) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentsinfo`
--

INSERT INTO `studentsinfo` (`id`, `fname`, `lname`, `city`, `groupid`, `timestamp`) VALUES
(1, 'Albert', 'Heijn', 'Roosendaal', 'BBCAP20', '2021-02-09 17:04:29'),
(2, 'George', 'Bush', 'Washington', 'BBCAP19', '2021-02-09 17:06:12'),
(3, 'Eagle', 'Eye', 'Sparta', 'BBCAP19', '2021-02-09 17:29:39'),
(25, 'Prince', 'Henry', 'London', 'BBCAP19', '2021-02-10 09:44:12'),
(26, 'Harrison', 'Ford', 'Washington', 'BBCAP19', '2021-02-10 09:45:01'),
(27, 'Batu', 'Khan', 'Khaganate', 'BBCAP19', '2021-02-10 09:47:03'),
(28, 'George', 'Orwell', 'London', 'BBCAP19', '2021-02-10 09:48:49'),
(29, 'Grigori', 'Rasputin', 'Moscow', 'BBCAP19', '2021-02-10 09:49:21'),
(30, 'Mona', 'Lisa', 'Paris', 'BBCAP20', '2021-02-10 09:51:08'),
(31, 'Lev Davidovics', 'Trockij', 'Moscow', 'BBCAP20', '2021-02-10 09:51:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentsinfo`
--
ALTER TABLE `studentsinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentsinfo`
--
ALTER TABLE `studentsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
