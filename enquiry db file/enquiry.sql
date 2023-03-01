-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 02:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `enquiry` text DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `gender`, `email`, `phone`, `enquiry`, `source`, `updated_at`, `created_at`) VALUES
(1, 'Yogesh', 'Male', 'ybathe@gmail.com', '1087672960', 'dfdf', 'banner', '2023-03-01 11:56:35', '2023-03-01 11:56:35'),
(2, 'yog', 'Female', 'ybathe@gmail.com', '08087672960', 'test', 'banner', '2023-03-01 06:34:13', '2023-03-01 06:34:13'),
(3, 'Yogesh', 'Female', 'ybathe@gmail.com', '8668632960', 'dfd', 'News Paper,Internet', '2023-03-01 06:44:12', '2023-03-01 06:44:12'),
(4, 'Yogesh', 'Female', 'ybathe@gmail.com', '8668632960', 'dfdf', 'News Paper,Weekly News Paper,banner', '2023-03-01 07:32:03', '2023-03-01 07:32:03'),
(5, 'test', 'Female', 'ybathe@gmail.com', '08087672960', 'sf dfdf', 'banner,Internet', '2023-03-01 07:33:26', '2023-03-01 07:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
