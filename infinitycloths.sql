-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 07:57 AM
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
-- Database: `infinitycloths`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cId` int(11) NOT NULL,
  `uId` int(11) DEFAULT NULL,
  `pId` int(11) NOT NULL,
  `totalCount` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cId`, `uId`, `pId`, `totalCount`, `created`) VALUES
(1, 0, 1, 1, '2023-03-23 05:51:58'),
(2, 3, 2, 1, '2023-03-23 06:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oId` int(11) NOT NULL,
  `pId` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pId`)),
  `uId` int(11) NOT NULL,
  `totalPrice` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pId` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pDescription` text NOT NULL,
  `pImage` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pId`, `pName`, `pDescription`, `pImage`, `quantity`, `price`, `created`) VALUES
(1, 'Hemi', 'Walk with confidence (and style) knowing that these embossed mules look just as good as they are comfortable.', 'http://localhost/gurifinal/assets/images/herm.jpg', 12, 500, '2023-03-23 05:18:35'),
(2, 'Courtline', 'Featuring contrasting trim details, these versatile low tops are perfect to add to your rotation.\r\n', 'http://localhost/gurifinal/assets/images/shoe.jpg', 12, 100, '2023-03-23 05:19:53'),
(3, 'Sneakers', 'Sneakers', 'http://localhost/gurifinal/assets/images/category.png', 11, 250, '2023-03-23 06:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `uType` int(11) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `postalColde` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `fName`, `lName`, `uType`, `address`, `city`, `province`, `postalColde`, `email`, `password`, `created`) VALUES
(3, 'admin', 'admin', 1, NULL, NULL, NULL, NULL, 'admin@nomail.com', '123456', '2023-03-23 03:28:28'),
(4, 'Guri', '0', 2, NULL, NULL, NULL, NULL, 'user@nomail.com', '123456', '2023-03-23 03:57:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
