-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2020 at 06:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registeruser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `productname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

DROP TABLE IF EXISTS `deliveryboy`;
CREATE TABLE IF NOT EXISTS `deliveryboy` (
  `nic` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `orderdate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `orderName` varchar(255) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  PRIMARY KEY (`paymentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `actualprice` varchar(255) NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `actualprice`, `product_image`, `product_price`, `product_qty`) VALUES
(1, 'Samsung', '50000.00', 'Resourses/product/pr1.jpg', '45000.00', 1),
(2, 'Huawei', '34000.00', 'Resourses/product/pr2.jpg', '30000.00', 1),
(3, 'Oppo', '45000.00', 'Resourses/product/pr3.jpg', '40000.00', 1),
(4, 'Nokia', '24000.00', 'Resourses/product/pr4.jpg', '22000.00', 1),
(5, 'Phone Charger', '4000.00', 'Resourses/product/pr5.jpg', '3000.00', 1),
(6, 'Handfree', '600.00', 'Resourses/product/pr6.jpg', '550.00', 1),
(7, 'Wireless Charger', '1000.00', 'Resourses/product/pr7.jpg', '950.00', 1),
(8, 'AirPods', '4500.00', 'Resourses/product/pr8.jpg', '4000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Reg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`Reg_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Reg_ID`, `fname`, `lname`, `username`, `email`, `contactNo`, `address`, `user_type`, `password`) VALUES
(1, 'Hashitha', 'Niroshan', 'hash', 'hash@gmail.com', 718712004, 'Temple road,matara', 'user', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
