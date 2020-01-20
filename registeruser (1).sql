-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2020 at 02:39 PM
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
(1, 'Samsung', '50000.00', 'Resourses/product/pr1.jpg', '45000.00', 10),
(2, 'Huawei', '34000.00', 'Resourses/product/pr2.jpg', '30000.00', 0),
(3, 'Oppo', '45000.00', 'Resourses/product/pr3.jpg', '40000.00', 0),
(4, 'Nokia', '24000.00', 'Resourses/product/pr4.jpg', '22000.00', 0),
(5, 'Phone Charger', '4000.00', 'Resourses/product/pr5.jpg', '3000.00', 0),
(6, 'Handfree', '600.00', 'Resourses/product/pr6.jpg', '550.00', 0),
(7, 'Wireless Charger', '1000.00', 'Resourses/product/pr7.jpg', '950.00', 0),
(8, 'AirPods', '4500.00', 'Resourses/product/pr8.jpg', '4000.00', 0);

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
(1, 'hashitha', 'niroshan', 'hash', 'hash2@gmail.com', 718712005, 'dangahmulana,kiyanduwa,akuressa', 'user', 'c4ca4238a0b923820dcc509a6f75849b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
