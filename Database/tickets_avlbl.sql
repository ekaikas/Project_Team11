-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 08, 2021 at 08:35 AM
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
-- Table structure for table `tickets_avlbl`
--

CREATE TABLE `tickets_avlbl` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(60) NOT NULL,
  `event_date` date NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `price_in_usd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets_avlbl`
--

INSERT INTO `tickets_avlbl` (`event_id`, `event_name`, `event_date`, `available_quantity`, `price_in_usd`) VALUES
(3008005, 'Full Moon Party', '2021-08-25', 1166, 98),
(3008006, 'The Summer Party', '2021-08-29', 733, 88),
(3008007, 'Pool Party', '2021-09-14', 893, 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets_avlbl`
--
ALTER TABLE `tickets_avlbl`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets_avlbl`
--
ALTER TABLE `tickets_avlbl`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3008008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
