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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `confirmpassword` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `password`, `confirmpassword`, `Timestamp`) VALUES
('guju', '$2y$10$rVdXAxJEdenD72T6.IJHvOXVJHetvf9UcgWZp/4xzKD5DuZj6CdfG', '', '2023-04-24 15:20:37'),
('14004210067', '$2y$10$ZW3W4ninNUwVG0Tjs0l6BOXC6QEBmDFJWlkZ62pU4YJROgtaDnEGm', '', '2023-04-24 15:20:51'),
('', '$2y$10$.5056TpbeaN5w.ynmEdmvO4.MdgGLNSUcLG1piiK8d5SZ3D2h.kj6', '', '2023-04-24 15:20:53'),
('harshitguju20@gmail.com', '1234', '', '2023-04-24 15:28:18'),
('sample', '1234', '', '2023-04-24 15:32:39'),
('guju', '1234', '1234', '2023-04-24 15:54:08'),
('', '', '', '2023-04-24 16:21:25'),
('', '', '', '2023-04-24 16:22:20'),
('', '', '', '2023-04-24 16:22:25'),
('', '', '', '2023-04-24 16:22:25'),
('', '', '', '2023-04-24 16:23:40'),
('', '', '', '2023-04-24 16:23:43'),
('', '', '', '2023-04-24 16:23:46'),
('', '', '', '2023-04-24 16:25:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
