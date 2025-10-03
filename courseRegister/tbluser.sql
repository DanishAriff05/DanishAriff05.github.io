-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2025 at 10:56 AM
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
-- Database: `dfp50193`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `fullname`, `dob`, `isActive`, `created_at`) VALUES
(2, 'Danish', 'abc123', 'Danish Ariff', '2005-04-02', 1, '2025-10-02 02:08:04'),
(3, 'Danish', 'abc123', 'Danish Ariff', '2005-04-02', 1, '2025-10-02 02:34:29'),
(4, '', 'test1234', 'leman jamal', '2002-03-23', 1, '2025-10-03 07:15:06'),
(5, '', 'test1234', 'leman jamal', '2002-03-23', 1, '2025-10-03 07:15:53'),
(6, '', 'test123', 'halim ahmad', '2023-02-22', 1, '2025-10-03 07:16:59'),
(7, 'kassam', 'test123', 'kassam jawa', '2004-03-30', 1, '2025-10-03 07:19:41'),
(8, 'dadas', 'dsawd', 'da', '2025-10-15', 1, '2025-10-03 07:32:42'),
(9, 'asdaw', 'wdsawdsa', 'wdas', '2025-10-21', 1, '2025-10-03 07:33:58'),
(10, 'asdaw', 'wdsawdsa', 'wdas', '2025-10-21', 1, '2025-10-03 07:35:00'),
(11, 'asd', 'wasd', 'sadaw', '2025-10-06', 1, '2025-10-03 07:35:10'),
(12, 'asdaw', 'wads', 'gdfgwe', '2025-10-15', 1, '2025-10-03 07:35:53'),
(13, 'dasd', 'dw1e', 'sadwgas', '2025-10-05', 1, '2025-10-03 07:50:15'),
(14, 'dasd', 'dw1e', 'sadwgas', '2025-10-05', 1, '2025-10-03 07:50:22'),
(15, 'dasd', 'dw1e', 'sadwgas', '2025-10-05', 1, '2025-10-03 07:51:06'),
(16, 'sdawd', 'dawdasd', 'adwasd', '2025-10-07', 1, '2025-10-03 07:51:18'),
(17, 'awdasd', 'dawsd', 'wdasd', '2025-10-08', 1, '2025-10-03 07:52:02'),
(18, 'sda', 'wdasd', 'wdasda', '2025-10-07', 1, '2025-10-03 07:53:16'),
(19, 'dawsd', 'awdasda', 'wdasdawd', '2025-09-30', 1, '2025-10-03 07:53:44'),
(20, 'asdaw', 'wadsd', 'wadsda', '2025-09-29', 1, '2025-10-03 07:54:43'),
(21, 'dasd', 'wdasd', 'wdasa', '2025-10-07', 1, '2025-10-03 07:57:51'),
(22, '3', '3', '3', '2025-10-10', 1, '2025-10-03 07:59:30'),
(23, 'sss', 'ss', 'ss', '2025-10-15', 1, '2025-10-03 08:00:33'),
(24, 'dd', 'dd', 'dd', '2025-10-16', 1, '2025-10-03 08:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
