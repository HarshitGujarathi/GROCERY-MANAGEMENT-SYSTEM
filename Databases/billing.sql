-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 04:28 AM
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
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `customername` text NOT NULL,
  `customerno` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`customername`, `customerno`, `Total`, `TIMESTAMP`) VALUES
('', 0, 0, '2023-04-24 18:36:16'),
('Binod', 1234567812, 0, '2023-04-24 18:37:20'),
('customername', 0, 182, '2023-04-24 18:38:19'),
('Binod', 2147483647, 182, '2023-04-24 18:40:17'),
('binod', 1231312312, 0, '2023-04-24 18:43:48'),
('binod', 1231312312, 0, '2023-04-24 18:44:06'),
('binod', 1231312312, 0, '2023-04-24 18:44:44'),
('binod', 123123, 182, '2023-04-24 18:46:40'),
('', 0, 0, '2023-04-24 18:49:59'),
('', 0, 0, '2023-04-24 18:52:54'),
('', 0, 0, '2023-04-24 18:53:26'),
('', 0, 0, '2023-04-24 18:54:32'),
('', 0, 0, '2023-04-24 18:55:14'),
('customername', 0, 0, '2023-04-24 19:12:56'),
('customername', 0, 0, '2023-04-24 19:12:56'),
('customername', 0, 0, '2023-04-24 19:12:56'),
('customername', 0, 0, '2023-04-24 19:12:56'),
('customername', 0, 0, '2023-04-24 19:12:56'),
('customername', 0, 0, '2023-04-24 19:13:07'),
('customername', 0, 0, '2023-04-24 19:13:07'),
('customername', 0, 0, '2023-04-24 19:13:07'),
('customername', 0, 0, '2023-04-24 19:13:07'),
('customername', 0, 0, '2023-04-24 19:13:07'),
('customername', 0, 0, '2023-04-24 19:14:16'),
('customername', 0, 0, '2023-04-24 19:14:18'),
(' binod', 0, 0, '2023-04-24 19:14:32'),
('customername', 0, 0, '2023-04-24 19:38:28'),
('customername', 0, 0, '2023-04-24 19:38:58'),
('customername', 0, 0, '2023-04-24 19:39:18'),
('customername', 0, 0, '2023-04-24 19:39:23'),
('customername', 0, 0, '2023-04-24 19:39:24'),
('customername', 0, 0, '2023-04-24 19:39:24'),
('customername', 0, 0, '2023-04-24 19:39:34'),
('customername', 0, 0, '2023-04-24 19:39:51'),
('customername', 0, 5, '2023-04-24 19:40:04'),
('customername', 0, 5, '2023-04-24 19:40:05'),
('customername', 0, 5, '2023-04-24 19:41:28'),
('customername', 0, 5, '2023-04-24 19:42:12'),
('customername', 0, 5, '2023-04-24 19:42:49'),
('customername', 0, 0, '2023-04-24 19:56:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
