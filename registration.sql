-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 ديسمبر 2021 الساعة 12:56
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- بنية الجدول `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `guestName` varchar(50) NOT NULL,
  `brand` enum('Prada','Burberry','Dior','LouisVuitton','Gucci') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `registration`
--

INSERT INTO `registration` (`id`, `guestName`, `brand`, `email`) VALUES
(1, 'ho', 'Burberry', 'a@u.edu.sa'),
(7, 'aaja', 'Dior', '1479@qu.u.sa'),
(8, 'aaaa', 'Burberry', 'a@qu.edu.sa'),
(9, 'aaaa', 'Burberry', 'a@qu.edu.sa'),
(10, 'aaaa', 'Burberry', 'a@qu.edu.sa'),
(11, 'aaaa', 'Burberry', 'a@qu.edu.sa'),
(12, 'lana', 'LouisVuitton', '11a@qu.edu.sa'),
(13, '55', 'Burberry', 'a@qu.sa'),
(14, '55', 'Burberry', 'a@qu.sa'),
(15, '55', 'Burberry', 'a@qu.sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
