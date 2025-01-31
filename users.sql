-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayhill`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `added_by` varchar(20) NOT NULL,
  `unique_code` varchar(255) NOT NULL,
  `user_type` tinyint(1) DEFAULT NULL COMMENT '1=>Student\r\n2=>Trainer',
  `salutation` varchar(255) NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(100) NOT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `phone_2` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` text NOT NULL,
  `timeZone` text NOT NULL,
  `about` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `coverImage` text DEFAULT NULL,
  `degree` text NOT NULL,
  `languages` text NOT NULL,
  `certificates` text NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `email_verify_status` enum('0','1') DEFAULT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `added_by`, `unique_code`, `user_type`, `salutation`, `first_name`, `last_name`, `username`, `dob`, `gender`, `email`, `phone`, `phone_2`, `password`, `address`, `country`, `state`, `city`, `zipcode`, `latitude`, `longitude`, `timeZone`, `about`, `image`, `coverImage`, `degree`, `languages`, `certificates`, `status`, `email_verify_status`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'admin', '813394', 2, 'Mr.', 'Demo', 'Trainer', NULL, '1996-01-02', 'Male', 'demo.trainer@gmail.com', '9874563211', '', '25d55ad283aa400af464c76d713c07ad', '793 Center St, Lewiston, NY 14092, United States', 'India', 'WB', 'Kolkata', '700091', '', '', 'America/New_York', NULL, '', '2618_gfx100s_sample_04_thum-1.jpg', 'Demo Degree', 'EN, ES', 'Demo Certificate', '1', NULL, NULL, '2025-01-29 08:16:15', '2025-01-29 14:31:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
