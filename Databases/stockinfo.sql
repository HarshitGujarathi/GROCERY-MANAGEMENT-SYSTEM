-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 04:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stockinfo`
--

CREATE TABLE `stockinfo` (
  `pid` int(11) NOT NULL,
  `list` text NOT NULL,
  `num_sell` int(11) NOT NULL,
  `num_order` int(11) NOT NULL,
  `num_needed` int(11) NOT NULL,
  `total_prod` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stockinfo`
--

INSERT INTO `stockinfo` (`pid`, `list`, `num_sell`, `num_order`, `num_needed`, `total_prod`, `Timestamp`) VALUES
(1, 'Product', 0, 0, 0, 0, '2023-04-24 16:53:23'),
(2, 'list', 121, 23, 123, 1231, '2023-04-24 16:54:14'),
(3, 'list', 121, 23, 123, 1231, '2023-04-24 16:57:02'),
(4, 'list', 121, 23, 123, 1231, '2023-04-24 17:02:26'),
(5, 'list', 121, 23, 123, 1231, '2023-04-24 17:05:44'),
(6, 'santor', 12, 2, 3, 1, '2023-04-24 17:07:24'),
(7, '', 0, 0, 0, 0, '2023-04-24 17:29:08'),
(8, '', 0, 0, 0, 0, '2023-04-24 17:29:26'),
(9, '', 0, 0, 0, 0, '2023-04-24 17:29:29'),
(10, '', 0, 0, 0, 0, '2023-04-24 17:30:10'),
(11, '', 0, 0, 0, 0, '2023-04-24 17:30:14'),
(12, '', 0, 0, 0, 0, '2023-04-24 17:35:33'),
(13, '', 0, 0, 0, 0, '2023-04-24 17:35:36'),
(14, '', 0, 0, 0, 0, '2023-04-24 17:36:05'),
(15, '', 0, 0, 0, 0, '2023-04-24 17:36:08'),
(16, '', 0, 0, 0, 0, '2023-04-24 17:36:29'),
(17, '', 0, 0, 0, 0, '2023-04-24 17:44:45'),
(18, '', 0, 0, 0, 0, '2023-04-24 18:36:11'),
(19, '', 0, 0, 0, 0, '2023-04-24 19:30:41'),
(20, '', 0, 0, 0, 0, '2023-04-24 19:33:14'),
(21, '', 0, 0, 0, 0, '2023-04-24 20:11:45'),
(22, '', 0, 0, 0, 0, '2023-04-24 20:13:00'),
(23, '', 0, 0, 0, 0, '2023-04-24 20:13:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stockinfo`
--
ALTER TABLE `stockinfo`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockinfo`
--
ALTER TABLE `stockinfo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
