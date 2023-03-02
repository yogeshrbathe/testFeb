-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 01:07 PM
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
  `birth_date` date DEFAULT NULL,
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

INSERT INTO `enquiry` (`id`, `name`, `gender`, `birth_date`, `email`, `phone`, `enquiry`, `source`, `updated_at`, `created_at`) VALUES
(1, 'Yogesh', 'Male', '2022-03-02', 'ybathe@gmail.com', '1087672960', 'dfdf', 'banner', '2023-03-01 11:56:35', '2023-03-01 11:56:35'),
(2, 'Surekha', 'Female', '2023-12-01', 'ybathe@gmail.com', '08087672960', 'test', 'banner', '2023-03-01 06:34:13', '2023-03-01 06:34:13'),
(3, 'Shravai', 'Female', '2021-01-01', 'shravani@gmail.com', '8668632960', 'dfd', 'News Paper,Internet', '2023-03-01 06:44:12', '2023-03-01 06:44:12'),
(4, 'Ananya', 'Female', '1995-01-01', 'ananya@gmail.com', '7788995566', 'dfdf', 'News Paper,Weekly News Paper,banner', '2023-03-01 07:32:03', '2023-03-01 07:32:03'),
(5, 'Jagjit', 'Male', '1980-01-01', 'jagjit@gmail.com', '9062504781', 'sf dfdf', 'banner,Internet', '2023-03-01 07:33:26', '2023-03-01 07:33:26'),
(8, 'Nandini', 'Female', '2018-08-09', 'nandini@gmail.com', '8811223344', 'For Test Enquiry', 'Friend,Internet', '2023-03-02 05:59:06', '2023-03-02 05:59:06');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
