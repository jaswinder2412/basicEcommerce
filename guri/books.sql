-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(11) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `editor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `title`, `author`, `price`, `quantity`, `category`, `format`, `url`, `pages`, `editor`) VALUES
(1, 'jatt', 'Jinda', '322', NULL, 'ertertsdf', 'adsfasdf', 'zczxcxc', '12', ''),
(2, 'James', 'Michal', '322', NULL, 'ertertsdf', 'doc', 'zczxcxc', '12', ''),
(3, 'Test', 'K', '322', NULL, 'ertertsdf', 'pdf', 'adsfasdf', '12', ''),
(4, 'Test', 'D', '322', NULL, 'ertertsdf', 'pdf', 'adsfasdf', '12', ''),
(5, 'jkk', 'lpp', '322', '15', 'ertertsdf', '', '', '12', 'jatt'),
(6, 'ppl', 'Tum', '322', '15', 'ertertsdf', '', '', '12', 'Sham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
